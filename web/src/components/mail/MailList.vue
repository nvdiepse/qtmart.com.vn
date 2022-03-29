<template>
  <div class="container--fluid">
    <v-row class="mt-6">
      <v-col cols="12">
        <h2 class="mb-4 grey--text f-25">デザイン</h2>
        <div class="d-flex align-center">
          <h3 class="sb-grey mr-5">メールテンプレート一覧</h3>
          <v-btn
            color="success"
            rounded
            class="light-green accent-4 px-4 pr-6 justify-center align-center font-weight-bold"
            dark
            @click="selectTemplateDialog = !selectTemplateDialog"
          >
            <v-icon right dark class="mr-0"> mdi-plus </v-icon>作成
          </v-btn>
        </div>
        <v-data-table
          :headers="headers"
          :items="mailTemplateList"
          :items-per-page="10"
          :server-items-length="totalTemplate"
          class="elevation-1 mt-6 text-pre-wrap"
          :loading="loading"
          :options.sync="options"
          :footer-props="{
            'show-first-last-page': true,
            'items-per-page-options': [5, 10, 15, 20],
            'items-per-page-text': '表示件数',
          }"
        >
          <template v-slot:no-data>
            <span>データなし</span>
          </template>
          <template v-slot:footer.page-text="{pageStart, pageStop, itemsLength}" >
            <span> {{itemsLength}}件中 {{pageStart}}～{{pageStop}}件</span>
          </template>
          <template #item.created_at="{ item }">
            <span>{{item.created_at}}<br>{{item.created_by}}</span>
          </template>
          <template #item.updated_at="{ item }">
            <span>{{item.updated_at}}<br>{{item.updated_by}}</span>
          </template>
          <template #item.action="{ item }">
            <v-menu bottom left>
              <template v-slot:activator="{ on, attrs }">
                <v-btn dark icon v-bind="attrs" v-on="on">
                  <v-icon>mdi-dots-vertical</v-icon>
                </v-btn>
              </template>
              <v-list>
                <v-list-item dense link @click="updateMailTemplate(item)">
                  <v-list-item-title>編集</v-list-item-title>
                </v-list-item>
                <v-list-item dense link @click="copyMailTemplate(item)">
                  <v-list-item-title>コピーして新規作成</v-list-item-title>
                </v-list-item>
                <v-list-item dense link @click="showDeletePopup(item)">
                  <v-list-item-title>削除</v-list-item-title>
                </v-list-item>
              </v-list>
            </v-menu>
          </template>
        </v-data-table></v-col
      >
    </v-row>

    <v-dialog v-model="selectTemplateDialog" width="600px" @click:outside="closeSelectType" content-class="overflow-visible">
      <v-form ref="formType">
        <v-card>
          <v-card-title>
            <h5 class="sb-title mt-5 sb-grey ml-3">シナリオタイプ</h5>
          </v-card-title>
          <v-card-text>
            <v-container>
              <v-row>
                <v-col cols="12" sm="12">
                  <v-select
                      :items="senarioTypeList"
                      item-text="name"
                      item-value="id"
                      label="シナリオタイプ(*)"
                      required
                      outlined
                      dense
                      attach
                      v-model="templateData.senario_template_id"
                      :menu-props="{ contentClass: 'sb-menu-active' }"
                      :rules="templateRules"
                  ></v-select>
                </v-col>
              </v-row>
            </v-container>
          </v-card-text>
          <v-card-actions class="justify-center align-center pb-6">
            <v-btn
                color="grey lighten-3"
                class="mr-2 justify-center align-center font-weight-bold"
                width="120px"
                depressed
                rounded
                @click="closeSelectType"
            >
              キャンセル
            </v-btn>
            <v-btn
                color="success"
                class="light-green accent-4 justify-center align-center font-weight-bold"
                width="120px"
                rounded
                :disabled="templateData.senario_template_id === null"
                @click="openEdiDialog"
            >
              選択
            </v-btn>
          </v-card-actions>
        </v-card>
      </v-form>
    </v-dialog>

    <v-dialog v-if="editMailTemplateDialog" v-model="editMailTemplateDialog" width="unset" @click:outside="closeEditTemplate" keep-content-alive="false">
      <v-form ref="formTemplate" v-model="validForm">
        <v-card>
          <v-card-title>
            <h5 class="sb-title mt-5 sb-grey ml-3">{{ titleForm || 'テンプレート新規作成' }}</h5>
          </v-card-title>
          <v-card-text>
            <v-container>
              <v-row >
                <v-col class="col-12">
                  <p class="f-16 sb-dark-grey mb-2">シナリオタイプ</p>
                  <h3 class="f-20 black--text mb-3">{{ getTypeName }}</h3>
                </v-col>
              </v-row>
              <v-row>
                <v-col class="col-6 pb-0 pt-0">
                  <v-text-field v-model="templateData.name" :rules="nameRules"
                                label="テンプレート名(*)" required outlined dense></v-text-field>
                </v-col>
              </v-row>
              <v-row>
                <v-col class="col-6 pb-0 pt-0">
                  <v-select :items="mailFromList"
                            item-text="email"
                            item-value="email"
                            v-model="templateData.from"
                            @change="selectMailFrom"
                            clearable
                            label="From(送信元)" required outlined dense attach
                            :menu-props="{ contentClass: 'sb-menu-active' }"
                  >
                  </v-select>
                </v-col>
              </v-row>

              <v-divider class="mb-6 mt-3"></v-divider>
              <v-row>
                <v-col class="col-6 pb-0">
                  <v-select :items="mailToList"
                            item-value="value"
                            item-text="name"
                            label="To(送信先)"
                            v-model="templateData.to"
                            clearable
                            required outlined dense attach
                            :menu-props="{ contentClass: 'sb-menu-active' }"
                  >
                  </v-select>
                </v-col>
              </v-row>
              <v-row>
                <v-col class="col-6 pb-0 pt-0">
                  <v-alert text dense color="blue" border="left" class="mb-0">
                    ※開封判定を行うためCCとBCCの利用はできません。
                    社内への写しを送信する場合は当アクションの前に社内向けの送信アクションを設定してください。
                  </v-alert>
                </v-col>
              </v-row>
              <v-row class="align-center">
                <v-col class="col-6 pb-0 pt-0">
                  <v-text-field v-model="templateData.title" label="件名" ref="title"
                                @focus="focusEl='title'" :rules="titleRules"
                                required outlined dense class="mt-6">
                  </v-text-field>
                </v-col>
                <v-col class="col-6 text-right">
                  <v-menu v-model="showReplace" :close-on-content-click="false" :nudge-width="150" offset-y right transition="slide-y-transition">
                    <template v-slot:activator="{ on, attrs }">
                      <v-btn color="success" outlined v-bind="attrs" v-on="on"
                      ><v-icon>mdi-format-list-bulleted-square</v-icon>
                        置き換え文字リスト
                      </v-btn>
                    </template>

                    <v-card>
                      <div class="pa-3">
                        <v-text-field
                            v-model="searchReplace"
                            label="サーチ"
                            single-line
                            outlined
                            dense
                            clearable
                            hide-details="auto"
                        ></v-text-field>
                      </div>
                      <v-list dense style="max-height: 200px; margin-top: 0" class="overflow-y-auto">
                        <v-list-item-group color="light-green accent-4" v-model="replaceText">
                          <v-list-item v-for="(item, i) in filterListReplaceText" :key="i" :value="item.replace_text"
                                       @click="insertText(item.replace_text)">
                            <v-row>
                              <v-col class="6">{{ item.text }}</v-col>
                              <!--                            <v-col class="6">{{ item.replace_text }}</v-col>-->
                            </v-row>
                          </v-list-item>
                        </v-list-item-group>
                      </v-list>
                    </v-card>
                  </v-menu>
                </v-col>
              </v-row>
              <v-row>
                <v-col cols="12 pt-0">
                  <p>本文</p>
                  <vue-editor @focus="focusEl='content'" ref="content" v-model="templateData.content"
                              :editor-toolbar="customToolbar"></vue-editor>
                </v-col>
              </v-row>
              <v-row class="align-center mt-4">
                <v-col class="col-6 offset-6 text-right pb-0 pt-0">
                  <v-btn color="success" outlined @click="openPreview"> プレビュー </v-btn>
                </v-col>
              </v-row>
            </v-container>
          </v-card-text>
          <v-card-actions class="justify-center align-center pb-6">
            <v-btn
                color="grey lighten-3"
                class="accent-4 justify-center align-center font-weight-bold"
                width="120px"
                depressed
                rounded
                @click="closeEditTemplate"
            >
              キャンセル
            </v-btn>
            <v-btn
                color="success"
                class="light-green accent-4 justify-center align-center font-weight-bold"
                width="120px"
                rounded
                :disabled="!validForm"
                @click="saveTemplate"
            >
              完了
            </v-btn>
          </v-card-actions>
        </v-card>
      </v-form>
    </v-dialog>

    <v-dialog v-model="PreviewMailDialog" width="1097px" height="742px" color="grey" class="previewDialog">
      <v-card>
        <v-card-title>
          <h2 class="f-25 mt-5 mb-5 sb-grey ml-3">メールプレビュー</h2>
        </v-card-title>
        <v-card-text>
          <v-container>
            <v-row>
              <v-col class="col-12 pb-0 pt-0">
                <v-alert text dense color="light-blue lighten-1" class="mb-0">
                  置き換え文字を実際のデータで置き換えて、最大10件をプレビューします。
                </v-alert>
              </v-col>
            </v-row>
            <v-row class="align-center">
              <v-col class="col-12 pb-0 pt-0">
                <v-text-field :disabled="true" :value="templateDataPreview.title" label="件名" required outlined dense
                              class="mt-6 pr-title"></v-text-field>
              </v-col>
            </v-row>
            <v-row>
              <v-col cols="col-12 pb-0 pt-0">
                <p>本文</p>
                <v-alert outlined class="ql-editor pr-content">
                  <div v-html="templateDataPreview.content" class="border border-dark"></div>
                </v-alert>
              </v-col>
            </v-row>
            <v-row>
              <v-col cols="col-12 pb-0 pt-0">
                <div class="d-flex justify-center">
                  <v-pagination v-model="prevPage"
                                :length="sampleDataList.length"
                                :total-visible="0"
                                class="previewPagination"
                                @input="getPreviewSample"
                  ></v-pagination>
                </div>
                <div class="d-flex justify-center mt-3">{{ prevPage }}/10</div>
                <div class="d-flex justify-end">
                  <v-btn color="success" outlined
                         @click="showSendDemoMail"
                  >
                    このメールを自分宛てにテスト送信する
                  </v-btn>
                </div>
              </v-col>
              <div>
                <v-divider class="mt-4"></v-divider>
              </div>
            </v-row>
          </v-container>
        </v-card-text>
        <v-card-actions class="justify-center align-center pb-6">
          <v-btn
              color="success"
              class="light-green accent-4 justify-center align-center font-weight-bold"
              width="120px" rounded
              @click="PreviewMailDialog = false"
          >
            閉じる
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>

    <v-dialog v-model="TestTransmissionDialog" max-width="500px" @click:outside="TestTransmissionDialog = false">
      <v-card>
        <v-card-title class="justify-center align-center">
          <span class="text-h5 mt-5 font-weight-bold">テスト送信</span>
        </v-card-title>
        <v-card-text class="text-center">
          <p>「{{$store.state.Auth.user.email}}」宛にメール送信します。</p>
        </v-card-text>
        <v-card-actions class="justify-center align-center pb-6">
          <v-btn
              color="grey lighten-3"
              class="justify-center align-center font-weight-bold mr-2"
              width="120px"
              depressed
              rounded
              @click="TestTransmissionDialog = false"
          >
            キャンセル
          </v-btn>
          <v-btn
              color="success"
              class="light-green accent-4 justify-center align-center font-weight-bold"
              width="120px"
              rounded
              @click="sendDemoMail"
          >
            送信
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
    <v-dialog v-model="showDeleteTemplate" max-width="500px" @click:outside="showDeleteTemplate = false">
      <v-card>
        <v-card-title class="justify-center align-center">
          <v-icon x-large color="orange" class="mt-5">mdi-alert</v-icon>
          <span class="text-h5 mt-5 ml-3">削除確認</span>
        </v-card-title>
        <v-card-text class="text-center">
          <p>「{{itemToDelete.name}}」を削除します。よろしいでしょうか？</p>
        </v-card-text>
        <v-card-actions class="justify-center align-center pb-6">
          <v-btn color="grey lighten-3" class="mr-2 justify-center align-center font-weight-bold"
                 width="120px" depressed rounded
                 @click="showDeleteTemplate = false">
            キャンセル
          </v-btn>
          <v-btn color="success" class="red accent-2 justify-center align-center font-weight-bold"
                 width="120px" rounded
                 @click="deleteMailTemplate(itemToDelete.id)">
            削除
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
    <v-dialog v-model="showSelectFromMail" max-width="500px" @click:outside="showSelectFromMail = false">
      <v-card>
        <v-card-title class="justify-center align-center">
          <v-icon x-large color="blue" class="mt-5">mdi-information</v-icon>
          <span class="text-h5 mt-5 ml-3 font-weight-bold">通知</span>
        </v-card-title>
        <v-card-text class="text-center">
          <p>メールテスト送信のため、From(送信元)を選択してください。</p>
        </v-card-text>
        <v-card-actions class="justify-center align-center pb-6">
          <v-btn color="success" class="light-green accent-4 px-4 pr-6" width="120px" rounded
                 @click="showSelectFromMail = false">
            閉じる
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </div>
</template>

<script>
import { VueEditor } from "vue2-editor";
import { MAIL_HEADER } from "@/constants/header-constants.js";
import MailService from "@/services/MailService";
import SenarioService from "@/services/SenarioService";
import _ from "lodash";

export default {
  name: "MailList",

  data: () => ({
    titleForm: null,
    validForm: false,
    mailTemplateList: [],
    sampleDataList: [],
    headers: MAIL_HEADER,
    selectTemplateDialog: false,
    editMailTemplateDialog: false,
    PreviewMailDialog: false,
    TestTransmissionDialog: false,
    loading: false,
    options: {},
    totalTemplate: 0,
    senarioTypeList: [],
    mailFromList: [],
    mailToList: [],
    templateData: {
      id: null,
      name: '',
      senario_template_id: null,
      from: null,
      to: null,
      title: '',
      content: ''
    },
    listReplaceText: [],
    filterListReplaceText: [],
    searchReplace: null,
    showReplace: false,
    replaceText: null,
    focusEl: null,
    prevPage: 1,
    mailConfigId: null,
    templateDataPreview: {
      title: null,
      content: null
    },
    itemToDelete: {},
    isInsertForm: true,
    showDeleteTemplate: false,
    showSelectFromMail: false,
    customToolbar: [
      [{ header: [false, 1, 2, 3, 4, 5, 6] }],
      ["bold", "italic", "underline", "strike"], // toggled buttons
      [
        { align: "" },
        { align: "center" },
        { align: "right" },
        { align: "justify" }
      ],
      [{ list: "ordered" }, { list: "bullet" }, { list: "check" }],
      [{ indent: "-1" }, { indent: "+1" }], // outdent/indent
      [{ color: [] }], // dropdown with defaults from theme
      ["clean"] // remove formatting button
    ],
    nameRules: [
      v => !!v.trim() || 'テンプレート名は必須項目です',
      v => (v && v.trim().length <= 255) || '1~255桁以内で入力してください',
    ],
    titleRules: [
      v => (!v || v.length <= 255 ) || '1~255桁以内で入力してください',
    ],
    templateRules: [
      v => !!v || 'シナリオタイプは必須項目です',
    ]
  }),
  components: {
    VueEditor
  },
  created() {
    //this.getMailTemplateList();
    this.getListSenarioType();
    this.getMailFromList();
  },
  mounted() {
  },
  methods: {
    selectMailFrom(email) {
      if (email) {
        this.mailConfigId = _.find(this.mailFromList, ['email', email]).id;
      } else {
        this.mailConfigId = null;
      }
    },
    showSendDemoMail() {
      if (this.templateData.from) {
        this.TestTransmissionDialog = true;
      } else {
        this.showSelectFromMail = true;
      }
    },
    showDeletePopup(item) {
      this.itemToDelete = item;
      this.showDeleteTemplate = true;
    },
    deleteMailTemplate(id) {
      this.showDeleteTemplate = false;
      MailService.deleteMailTemplate(id).then(() => {
        if (this.mailTemplateList.length === 1 && this.options.page > 1) {
          this.options.page -= 1;
        }
        this.getMailTemplateList();
        this.$root.SnackBar.show({
          message: this.$i18n.t("success-message.delete-mail-template"),
          color: "light-green accent-4",
        });
      }).catch(() => {
        this.$root.SnackBar.show({
          message: this.$i18n.t("error-message.delete-mail-template"),
          color: "red accent-4",
          icon: "mdi-alert"
        });
      });
    },
    closeSelectType() {
      this.selectTemplateDialog = false;
      this.templateData.senario_template_id = null;
      this.$refs.formType.resetValidation();
    },
    openEdiDialog() {
      this.editMailTemplateDialog = true;
      this.selectTemplateDialog = false;
    },
    closeEditTemplate() {
      this.editMailTemplateDialog = false;
      this.closeSelectType();
      this.$refs.formTemplate.resetValidation();
      this.templateData = {
        name: '',
        senario_template_id: null,
        from: null,
        to: null,
        title: '',
        content: ''
      };
      this.titleForm = null;
    },
    openPreview() {
      this.PreviewMailDialog = true;
      this.getPreviewSample();
    },
    getPreviewSample() {
      let regex = /{{([^}]*)}}/g;
      let currentSelectedProfile = this.sampleDataList[this.prevPage - 1];
      let title = this.templateData.title || '';
      let content = this.templateData.content || '';
      for (const match of title.matchAll(regex)) {
        let replaceField = match[1].split('.')[1];
        title = title.replace(match[0], currentSelectedProfile[replaceField]);
      }
      for (const match of content.matchAll(regex)) {
        let replaceField = match[1].split('.')[1];
        content = content.replace(match[0], currentSelectedProfile[replaceField]);
      }
      this.templateDataPreview.title = title;
      this.templateDataPreview.content = content;
    },
    getMailTemplateList(senario_template_id = null) {
      this.loading = true;
      const { page, itemsPerPage } = this.options
      let query = {
        senario_template_id: senario_template_id,
        page: page,
        per_page: itemsPerPage,
      };
      MailService.getListMailTemplate(query).then((response) => {
        this.mailTemplateList = response.data.data.items;
        this.totalTemplate = response.data.data.total;
        this.loading = false;
      }).catch((e) => {
        this.loading = false;
        console.log(e);
      })
    },
    getListSenarioType() {
      SenarioService.getAllType().then((response) => {
        this.senarioTypeList = response.data.data;
      }).catch(() => {
        //TODO
      })
    },
    getMailFromList() {
      MailService.getMailFromList().then((response) => {
        this.mailFromList = response.data.data;
      }).catch(()=> {
        // TODO
      });
    },
    getMailToList() {
      MailService.getMailToList(this.templateData.senario_template_id).then((response) => {
        this.mailToList = response.data.data;
      }).catch(()=> {
        // TODO
      })
    },
    getListReplaceText() {
      MailService.getReplaceText(this.templateData.senario_template_id).then((response) => {
        this.listReplaceText = response.data.data.items;
        this.filterListReplaceText = response.data.data.items;
        this.sampleDataList = response.data.data.previewDataList;
      }).catch(()=> {
        // TODO
      });
    },
    insertText(text) {
      if (!text.length) return;

      if (this.focusEl === 'title') {
        const title = this.$refs.title.$refs.input;
        const sentence = title.value;
        const len = sentence.length;
        let pos = title.selectionStart;
        if (pos === undefined) { pos = 0; }

        const before = sentence.substr(0, pos);
        const after = sentence.substr(pos, len);

        this.templateData.title = before + '{{' + text + '}}' + after;
        this.$nextTick().then(() => {
          title.selectionStart = pos + text.length;
        });
      } else {
        let postContent = this.$refs.content.quill.selection.savedRange.index;

        this.$refs.content.$refs.quillContainer.__quill.insertText(postContent, '{{' + text + '}}');
      }

      this.$nextTick().then(() => {
        this.showReplace = false;
        this.replaceText = null;
      });
    },
    saveTemplate() {
      let templateData = new FormData();
      templateData.append('id', this.templateData.id || '');
      templateData.append('name', this.templateData.name || '');
      templateData.append('from', this.templateData.from || '');
      templateData.append('to', this.templateData.to || '');
      templateData.append('title', this.templateData.title);
      templateData.append('content', this.templateData.content);
      templateData.append('senario_template_id', this.templateData.senario_template_id);

      let successMsg = (this.isInsertForm)
          ? "success-message.create-mail-template"
          : "success-message.update-mail-template";
      let errorMsg = (this.isInsertForm)
          ? "error-message.create-mail-template"
          : "error-message.update-mail-template";

      MailService.saveMailTemplate(templateData).then(() => {
        this.$root.SnackBar.show({
          message: this.$i18n.t(successMsg),
          color: "light-green accent-4",
        });
        this.getMailTemplateList();
      }).catch(() => {
        this.$root.SnackBar.show({
          message: this.$i18n.t(errorMsg),
          color: "red accent-4",
          icon: "mdi-alert"
        });
      }).finally(() => {
        this.closeEditTemplate();
      });
    },
    sendDemoMail() {
      let demoData = new FormData();
      demoData.append('title', this.templateDataPreview.title);
      demoData.append('content', this.templateDataPreview.content);
      demoData.append('mail_config_id', this.mailConfigId);

      MailService.sendDemoEmail(demoData).then(()=> {
        this.$root.SnackBar.show({
          message: this.$i18n.t("success-message.send-demo-mail"),
          color: "light-green accent-4",
        });
      }).catch(()=> {
        this.$root.SnackBar.show({
          message: this.$i18n.t("error-message.send-demo-mail"),
          color: "red accent-4",
          icon: "mdi-alert"
        });
      }).finally(() => {
        this.TestTransmissionDialog = false;
      });
    },
    updateMailTemplate(item) {
      this.isInsertForm = false;
      this.titleForm = 'メールテンプレート編集';
      this.templateData = _.pick(item, ['id', 'name', 'title', 'from', 'to', 'content', 'senario_template_id']);
      this.editMailTemplateDialog = true;
    },
    copyMailTemplate(item) {
      this.titleForm = 'メールテンプレートコピーして新規作成';
      this.templateData = _.pick(item, ['name', 'title', 'from', 'to', 'content', 'senario_template_id']);
      this.editMailTemplateDialog = true;
    }
  },
  watch: {
    options: {
      handler () {
        this.getMailTemplateList();
      },
      deep: true,
    },
    editMailTemplateDialog: {
      handler (val) {
        if (val) {
          this.getMailToList();
          this.getListReplaceText();
        }
      },
      deep: true
    },
    searchReplace(val) {
      this.filterListReplaceText = _.orderBy(this.listReplaceText.filter(item => {
        if(!val) return this.listReplaceText;
        return (item.text.toLowerCase().includes(this.searchReplace.toLowerCase()));
      }), 'text');
    }
  },
  computed: {
    getTypeName() {
      if (this.templateData.senario_template_id) {
        return _.find(this.senarioTypeList, ['id', this.templateData.senario_template_id]).name ?? "";
      } else {
        return "";
      }
    }
  }
};
</script>
<style>
.pre-formatted {
  white-space: pre;
}
.theme--light.v-data-table
  > .v-data-table__wrapper
  > table
  > tbody
  > tr:hover:not(.v-data-table__expanded__content):not(.v-data-table__empty-wrapper) {
  background: #f7ffef;
}
.theme--light.v-data-table
  > .v-data-table__wrapper
  > table
  > tbody
  > tr:hover:not(.v-data-table__expanded__content):not(.v-data-table__empty-wrapper)
  .v-btn.v-btn--icon {
  color: #333;
}
.ql-editor {
  height: auto !important;
}
.previewPagination .v-pagination__navigation{
  margin: 0 5px;
  width: auto;
  height: 36px;
  border: thin solid #6dd400;
  padding: 0 16px;
  outline: 0;
}
.previewPagination .v-pagination__navigation i {
  color: #8bc34a !important;
}
.previewPagination .v-pagination__navigation:hover, .previewPagination .v-pagination__navigation:focus {
  background: #f1f9f1;
}
.pr-title input[type=text] {
  color: rgba(0, 0, 0, 0.87) !important;
}
.pr-content {
  border: 1px solid #bdbdbd !important;
}
.v-application button.success--text {
  color: #6dd400 !important;
  caret-color: #6dd400 !important;
}
</style>