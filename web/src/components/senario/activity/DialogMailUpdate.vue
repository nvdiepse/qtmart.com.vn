<template>
  <!-- Dialog mail1 -->
  <div>
    <!-- showMailDialog -->
    <v-dialog persistent :value="showMailDialog" width="1097px" color="grey">
      <v-form ref="form" v-model="valid">
        <v-card>
          <v-card-title>
            <span class="text-h5">メール送信</span>
          </v-card-title>
          <v-card-text>
            <v-row>
              <v-col class="col-6 pb-0 pt-0">
                <v-select
                  :items="mailTemplates"
                  item-text="name"
                  item-value="id"
                  label="テンプレート呼び出し(*)"
                  required
                  outlined
                  dense
                  v-model="mailData.mail_template_id"
                  @change="selectMailTemplate"
                ></v-select>
              </v-col>
            </v-row>
            <v-row>
              <v-col class="col-6 pb-0 pt-0">
                <v-select
                  label="From(送信元)(*)"
                  :items="mailFrom"
                  item-text="email"
                  item-value="email"
                  required
                  outlined
                  dense
                  v-model="mailData.from"
                  persistent-hint
                  single-line
                  :rules="fromSelectBoxRules"
                ></v-select>
              </v-col>
            </v-row>
            <v-row>
              <v-col class="col-6 pb-0">
                <v-select
                  :items="mailTo"
                  label="To(送信先)(*)"
                  item-text="name"
                  item-value="value"
                  required
                  outlined
                  dense
                  v-model="mailData.to"
                  persistent-hint
                  return-object
                  single-line
                  :rules="toSelectBoxRules"
                  @change="selectMailTo"
                ></v-select>
              </v-col>
            </v-row>
            <v-row>
              <v-col class="col-6 pb-0 pt-0">
                <v-alert
                  text
                  dense
                  color="light-blue lighten-1"
                  icon="mdi-clock-fast"
                  border="left"
                  class="mb-0"
                >
                  ※開封判定を行うためCCとBCCの利用はできません。
                  社内への写しを送信する場合は当アクションの前に社内向けの送信アクションを設定してください。
                </v-alert>
              </v-col>
            </v-row>
            <v-row class="align-center">
              <v-col class="col-6 pb-0 pt-0">
                <v-text-field
                  label="件名(*)"
                  required
                  outlined
                  dense
                  ref="title"
                  @focus="focusEl = 'title'"
                  class="mt-6"
                  :rules="titleInputRules"
                  v-model="mailData.title"
                ></v-text-field>
              </v-col>
              <v-col class="col-6 text-right">
                <v-menu
                  v-model="menu"
                  :close-on-content-click="false"
                  :nudge-width="150"
                  offset-y
                  right
                  transition="slide-y-transition"
                >
                  <template v-slot:activator="{ on, attrs }">
                    <v-btn color="success" outlined v-bind="attrs" v-on="on">
                      <v-icon>mdi-format-list-bulleted-square</v-icon>
                      置き換え文字リスト
                    </v-btn>
                  </template>
                  <v-card>
                    <div class="pa-3">
                      <v-text-field
                        v-model="searchReplace"
                        label="Search"
                        single-line
                        outlined
                        dense
                        clearable
                        hide-details="auto"
                      ></v-text-field>
                    </div>
                    <v-list
                      dense
                      style="max-height: 200px; margin-top: 0"
                      class="overflow-y-auto"
                    >
                      <v-list-item-group
                        color="light-green accent-4"
                        v-model="replaceText"
                      >
                        <v-list-item
                          v-for="(item, i) in filterListReplaceText"
                          :key="i"
                          :value="item.replace_text"
                          @click="insertText(item.replace_text)"
                        >
                          <v-row>
                            <v-col class="6">{{ item.text }}</v-col>
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
                <h3>本文</h3>
                <vue-editor
                  :class="nullContent ? 'error-content': ''"
                  v-model="mailData.content"
                  @text-change="contentChange"
                  ref="content"
                  @focus="focusEl = 'content'"
                ></vue-editor>
                <v-textarea
                    class="d-none"
                    :rules="contentInputRules"
                    v-model="mailData.content"
                ></v-textarea>
              </v-col>
            </v-row>
            <v-row>
              <v-col class="text-right">
                <v-btn
                  color="success"
                  outlined
                  class="mr-3"
                  @click="openPreview"
                  :disabled="mailData.senario_template_id === ''"
                >
                  プレビュー
                </v-btn>
                <v-btn
                  color="success"
                  outlined
                  @click="showFormAddMailTemplateName()"
                >
                  この内容をテンプレートとして保存
                </v-btn>
              </v-col>
            </v-row>
            <v-row>
              <v-col>
                <v-divider></v-divider>
              </v-col>
            </v-row>
            <v-row>
              <v-col>
                <h3>次導線への移動・確定日時(*)</h3>
              </v-col>
            </v-row>
            <v-row class="d-flex align-center">
              <v-col cols="2">
                <v-select
                  :items="expiredConditionDate"
                  select
                  outlined
                  dense
                  :rules="daytimeSelectBoxRules"
                  v-model="mailData.expired_condition_date"
                ></v-select>
              </v-col>
              <v-col cols="1" class="mb-5">
                <span>日後</span>
              </v-col>
              <v-col cols="2">
                <v-select
                  :items="expiredConditionTime"
                  required
                  outlined
                  dense
                  :rules="daytimeSelectBoxRules"
                  v-model="mailData.expired_condition_time"
                ></v-select>
              </v-col>f
              <v-col cols="1" class="mb-5">
                <span>時</span>
              </v-col>
            </v-row>
          </v-card-text>
          <v-card-actions class="justify-center align-center pb-6">
            <v-btn
              color="grey lighten-3"
              class="justify-center align-center font-weight-bold mr-2"
              width="120px"
              depressed
              rounded
              @click="closeDialog('showMailDialog')"
            >
              キャンセル
            </v-btn>
            <v-btn
              color="success"
              class="light-green accent-4 justify-center align-center font-weight-bold"
              width="120px"
              rounded
              @click="submitFormMail"
            >
              完了
            </v-btn>
          </v-card-actions>
        </v-card>
      </v-form>
    </v-dialog>
    <!-- End showMailDialog -->

    <!-- PreviewMailDialog -->
    <v-dialog
      persistent
      v-model="PreviewMailDialog"
      width="1097px"
      height="742px"
      color="grey"
    >
      <v-card>
        <v-card-title>
          <span class="text-h5">メールプレビュー</span>
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
                <v-text-field
                  label="件名"
                  required
                  outlined
                  dense
                  class="mt-6"
                  :disabled="true"
                  :value="templateDataPreview.title"
                ></v-text-field>
              </v-col>
            </v-row>
            <v-row>
              <v-col cols="col-12 pb-0 pt-0">
                <p>本文</p>
                <v-alert outlined color="grey" class="ql-editor">
                  <div
                    v-html="templateDataPreview.content"
                    class="border border-dark"
                  ></div>
                </v-alert>
              </v-col>
            </v-row>
            <v-row>
              <v-col cols="col-12 pb-0 pt-0">
                <div class="d-flex justify-center">
                  <v-pagination
                    v-model="prevPage"
                    :length="sampleDataList.length"
                    :total-visible="0"
                    class="previewPagination"
                    @input="getPreviewSample"
                  ></v-pagination>
                </div>
                <div class="d-flex justify-end">
                  <v-btn color="success" outlined @click="confirmSendMail()">
                    メール送信
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
            width="120px"
            rounded
            @click="PreviewMailDialog = false"
          >
            閉じる
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
    <!-- End PreviewMailDialog -->

    <!-- AddNameTemplateModal -->
    <v-dialog
        persistent
        v-model="AddNameTemplateModal"
        width="500px"
        color="grey"
    >
      <v-card>
        <v-form
            ref="formMailTemplate" lazy-validation v-model="validFormMailTemplate"
        >
          <v-card-title>
            <h3 class="text-h5">テンプレート名入力</h3>
          </v-card-title>
          <v-card-text>
            <MessageErrorBackend :message="mailTemplateErrors" />
            <v-container>
              <v-row class="align-center">
                <v-text-field
                    label="テンプレート名"
                    required
                    outlined
                    dense
                    class="mt-6"
                    :rules="nameRules"
                    v-model="mailData.name"
                ></v-text-field>
              </v-row>
            </v-container>
          </v-card-text>
          <v-card-actions class="justify-center align-center pb-6">
            <v-btn
                color="grey lighten-3"
                class="mr-2 justify-center align-center font-weight-bold"
                rounded
                depressed
                style="width: 120px;"
                @click="cancelAddName()"
            >
              キャンセル
            </v-btn>
            <v-btn
                color="success"
                class="light-green accent-4 justify-center align-center font-weight-bold"
                rounded
                style="width: 120px;"
                @click="saveMailTemplate()"
            >
              完了
            </v-btn>
          </v-card-actions>
        </v-form>
      </v-card>
    </v-dialog>
    <!-- End AddNameTemplateModal -->

    <!-- TestTransmissionDialog -->
    <v-dialog
        persistent
        v-model="TestTransmissionDialog"
        width="500px"
    >
      <v-card>
        <v-card-title class="justify-center">
          <span class="text-h5 justify-center">テスト送信</span>
        </v-card-title>
        <v-card-text class="justify-center align-center">
          <h3 class="text-center">「{{ getMailUser() }}」宛にメール送信します。</h3>
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
            @click="sendMail"
          >
            送信
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
    <!-- End TestTransmissionDialog -->

    <!-- showDeleteMail -->
    <v-dialog persistent v-model="showDeleteMail" width="1097px">
      <v-card>
        <v-card-title>
          <span class="text-h5">削除</span>
        </v-card-title>
        <v-card-text>
          <p>「開封：未クリック」を削除してよろしいでしょうか？</p>
        </v-card-text>
        <v-card-actions class="justify-center align-center pb-6">
          <v-btn
            color="grey lighten-3"
            class="justify-center align-center font-weight-bold mr-2"
            width="120px"
            depressed
            rounded
            @click="closeDialog('showDeleteMail')"
          >
            キャンセル
          </v-btn>
          <v-btn
            color="error"
            class="accent-4 justify-center align-center font-weight-bold"
            width="120px"
            rounded
            @click="deleteMailSubmit"
          >
            削除
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
    <!-- End showDeleteMail -->

    <!-- showActionDialog -->
    <v-dialog
      persistent
      v-model="showActionDialog"
      width="1097px"
      class="ActionDialog"
    >
      <v-card>
        <v-card-title class="text-h5">
          <span>導線の追加</span>
        </v-card-title>
        <v-card-text>
          <v-container>
            <v-row class="grey lighten-5 rounded pa-6">
              <v-col cols="12" md="4" class="mb-0">
                <button
                  class="action mb-5"
                  @click="
                    submitFormAction(
                      1,
                      '開封：クリック',
                      'mdi-email-open-outline'
                    )
                  "
                  :class="{ disabled: actionTypeEqualOneDisable }"
                  :disabled="actionTypeEqualOneDisable"
                >
                  <v-icon class="icon-email" color="#eeb73f"
                    >mdi-email-open-outline
                  </v-icon>
                  開封：クリック
                </button>
                <span class="span"
                  >メール開封、且つ本文内のリンクをクリックした場合</span
                >
              </v-col>
              <v-col cols="12" md="4" class="mb-0">
                <button
                  class="action mb-5"
                  @click="
                    submitFormAction(2, '開封：未クリック', 'mdi-email-open')
                  "
                  :class="{ disabled: actionTypeEqualTwoDisable }"
                  :disabled="actionTypeEqualTwoDisable"
                >
                  <v-icon class="icon-email" color="#eeb73f"
                    >mdi-email-open
                  </v-icon>
                  開封：未クリック
                </button>
                <span
                  >メールは開封したが、本文内のURLをクリックしていない場合</span
                >
              </v-col>
              <v-col cols="12" md="4" class="mb-0">
                <button
                  class="action mb-5"
                  :class="{ disabled: actionTypeEqualThreeDisable }"
                  @click="submitFormAction(3, '未開封', 'mdi-email')"
                  :disabled="actionTypeEqualThreeDisable"
                >
                  <v-icon class="icon-email" color="#eeb73f">mdi-email </v-icon>
                  未開封
                </button>
                <span class="span">メール未開封の場合</span>
              </v-col>
            </v-row>
          </v-container>
        </v-card-text>
        <v-card-actions class="justify-center align-center pb-6">
          <v-btn
            color="grey lighten-3"
            class="justify-center align-center font-weight-bold mr-2"
            width="120px"
            depressed
            rounded
            @click="closeAction"
          >
            キャンセル
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
    <!-- End showActionDialog -->
    <!--  showDialogRequireMailFrom  -->
    <v-dialog v-model="showDialogRequireMailFrom" max-width="500px">
      <v-card>
        <v-card-title class="justify-center align-center">
          <v-icon x-large color="blue" class="mt-5">mdi-information</v-icon>
          <span class="text-h5 mt-5 ml-3">Notice</span>
        </v-card-title>
        <v-card-text class="text-center">
          <p>メールテスト送信のため、From(送信元)を選択してください。</p>
        </v-card-text>
        <v-card-actions class="justify-center align-center pb-6">
          <v-btn color="success" class="light-green accent-4 px-4 pr-6" width="120px" rounded
                 @click="showDialogRequireMailFrom = false">
            削除
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
    <!-- End showDialogRequireMailFrom  -->
  </div>
</template>

<script>
import { VueEditor } from "vue2-editor";
import { mapActions, mapGetters } from "vuex";
import ActivityService from "../../../services/ActivityService";
import _ from "lodash";
import {
  EXPIRED_CONDITION_DATE,
  EXPIRED_CONDITION_TIME,
} from "../../../constants/common";
import MailService from "../../../services/MailService";
import MessageErrorBackend from "../../commons/MessageErrorBackend";

export default {
  name: "DialogMailUpdate",
  data: () => ({
    expiredConditionDate: EXPIRED_CONDITION_DATE,
    expiredConditionTime: EXPIRED_CONDITION_TIME,
    mailTemplates: [],
    mailTo: [],
    mailFrom: [],
    listReplaceText: [],
    filterListReplaceText: [],
    replaceText: null,
    TestTransmissionDialog: false,
    PreviewMailDialog: false,
    AddNameTemplateModal: false,
    menu: "",
    content: "",
    replaceTextSelected: "",
    node_id: "",
    valid: false,
    validName: false,
    validFormMailTemplate: false,
    selectedTemplate: "",
    searchReplace: null,
    focusEl: null,
    sampleDataList: [],
    prevPage: 1,
    mailTemplateErrors: [],
    btnAddMailTemplate: true,
    titleInputRules: [(v) => !!v || "件名は必須項目です"],
    nameRules: [(v) => !!v || "テンプレート名は必須項目です"],
    contentInputRules: [(v) => !!v || "本文は必須項目です"],
    fromSelectBoxRules: [(v) => !!v || "From(送信元)は必須項目です"],
    toSelectBoxRules: [(v) => !!v || "To(送信先)は必須項目です"],
    daytimeSelectBoxRules: [(v) => v === 0 || !!v || "この項目は必須です"],
    templateDataPreview: {
      title: null,
      content: null,
    },
    showSelectFromMail: false,
    showDialogRequireMailFrom: false,
    nullContent: false,
  }),

  watch: {
    searchReplace(val) {
      this.filterListReplaceText = _.orderBy(
        this.listReplaceText.filter((item) => {
          if (!val) return this.listReplaceText;
          return item.text
            .toLowerCase()
            .includes(this.searchReplace.toLowerCase());
        }),
        "text"
      );
    },
  },
  components: {
    VueEditor,
    MessageErrorBackend,
  },

  props: [
    "node",
    "showMailDialog",
    "showDeleteMail",
    "showActionDialog",
    "mailData",
    "actionTypeEqualOneDisable",
    "actionTypeEqualTwoDisable",
    "actionTypeEqualThreeDisable",
  ],

  created() {
    this.getMailTemplates();
    this.getMailFrom();
    this.getMailTo();
    this.getReplaceText();
  },
  methods: {
    ...mapGetters(["getSenarioTemplateId", "getEmail"]),
    ...mapActions(["addCounter"]),
    contentChange() {
      this.nullContent = !this.mailData.content;
    },
    closeDialog: function(dialogName) {
      this[dialogName] = false;
      if (dialogName == "showMailDialog") {
        this.$refs.form.resetValidation();
        this.clearDataMailTemplate();
        this.nullContent = false;
        this.$emit("closeMail");
      }
      if (dialogName == "showActionDialog") {
        this.$emit("closeAction");
      }
    },
    submitFormMail() {
      if (!this.$refs.form.validate()) return;
      let json = {
        parentId: this.node,
        content: this.mailData.content,
        mail_template_id: this.mailData.mail_template_id,
        from: this.mailData.from,
        to: this.mailData.to,
        to_name: this.mailData.to_name,
        title: this.mailData.title,
        expired_condition_time: this.mailData.expired_condition_time,
        expired_condition_date: this.mailData.expired_condition_date,
      };
      if (this.mailData.id) {
        json.id = this.mailData.id;
        json.mail_id = this.mailData.mail_id;
        this.$emit("updateMail", json);
      } else {
        json.id = this.getNumberUnique();
        (json.mail_id = ""), (json.children = []);
        this.$emit("addMail", json);
      }
      this.closeDialog("showMailDialog");
    },
    submitFormAction(actionType, name, icon) {
      let json = {
        id: this.getNumberUnique(),
        action_id: "",
        name: name,
        parentId: this.node,
        action_type: actionType,
        actionType: true,
        showbutton: false,
        icon: icon,
        children: [],
      };
      this.$emit("addAction", json);
      this.$emit("closeAction");
    },
    clearDataMailTemplate() {
      this.mailData.id = "";
      this.mailData.name = "";
      this.mailData.name = "";
      this.mailData.mail_template_id = "";
      this.mailData.from = "";
      this.mailData.to = "";
      this.mailData.title = "";
      this.mailData.content = "";
      this.mailData.expired_condition_time = "";
      this.mailData.expired_condition_date = "";
    },
    getNumberUnique() {
      return Date.now();
    },
    deleteMailSubmit() {
      this.$emit("submit", "ok");
      this.closeDialog("showDeleteMail");
    },
    getMailIdByEmail(email) {
      return _.find(this.mailFrom, ["email", email]).id;
    },
    async sendMail() {
      try {
        if (!this.mailData.from) {
          this.showDialogRequireMailFrom = true;
          return;
        }
        let data = {
          title: this.templateDataPreview.title,
          content: this.templateDataPreview.content,
          mail_config_id: this.getMailIdByEmail(this.mailData.from),
        };
        let res = await MailService.sendDemoEmail(data);
        let stt = res.data.response_code;
        if (stt == 200) {
          this.$root.SnackBar.show({
            message: this.$i18n.t("success-message.send-demo-mail"),
            color: "light-green accent-4",
          });
        } else {
          this.$root.SnackBar.show({
            message: this.$i18n.t("error-message.send-demo-mail"),
            color: "red accent-4",
            icon: "mdi-alert",
          });
        }
      } catch (e) {
        console.log("Internal server error");
      }
    },
    async getMailTemplates() {
      let templateId = this.getSenarioTemplateId();
      let mailTemplates = await ActivityService.getMailTemplates(templateId);
      this.mailTemplates = mailTemplates.data.data;
    },
    selectMailTemplate(id) {
      this.mailData.mail_template_id = id;
      let mailTemplate = _.find(this.mailTemplates, function(o) {
        return o.id === id;
      });
      if (mailTemplate) {
        this.mailData.mail_template_id = mailTemplate.mail_template_id;
        this.mailData.title = mailTemplate.title;
        this.mailData.from = mailTemplate.from;
        this.mailData.to = mailTemplate.to;
        this.mailData.to_name = this.getNameMailTo(mailTemplate.to);
        this.mailData.content = mailTemplate.content ? mailTemplate.content : "";
      }
    },
    getNameMailTo(value) {
      if (_.isEmpty(value)) return "";
      let mailTo = _.find(this.mailTo, function(o) {
        return o.value === value;
      });
      return mailTo.name;
    },
    async getMailTo() {
      let templateId = this.getSenarioTemplateId();
      let mailTo = await ActivityService.getMailTo(templateId);
      this.mailTo = mailTo.data.data;
    },
    async getMailFrom() {
      let mailFrom = await ActivityService.getMailFrom();
      this.mailFrom = mailFrom.data.data;
    },
    async getReplaceText() {
      try {
        let templateId = this.getSenarioTemplateId();
        let replaceTexts = await ActivityService.getReplaceTexts(templateId);
        this.listReplaceText = replaceTexts.data.data.items;
        this.filterListReplaceText = replaceTexts.data.data.items;
        this.sampleDataList = replaceTexts.data.data.previewDataList;
      } catch (e) {
        console.log("Internal server error");
      }
    },
    openPreview() {
      this.PreviewMailDialog = true;
      this.getPreviewSample();
    },
    getPreviewSample() {
      let regex = /{{([^}]*)}}/g;
      let currentSelectedProfile = this.sampleDataList[this.prevPage - 1];
      let title = this.mailData.title || "";
      let content = this.mailData.content || "";
      for (const match of title.matchAll(regex)) {
        let replaceField = match[1].split(".")[1];
        title = title.replace(match[0], currentSelectedProfile[replaceField]);
      }
      for (const match of content.matchAll(regex)) {
        let replaceField = match[1].split(".")[1];
        content = content.replace(
          match[0],
          currentSelectedProfile[replaceField]
        );
      }
      this.templateDataPreview.title = title;
      this.templateDataPreview.content = content;
    },
    insertText(text) {
      if (!text.length) return;

      if (this.focusEl === "title") {
        const title = this.$refs.title.$refs.input;
        const sentence = title.value;
        const len = sentence.length;
        let pos = title.selectionStart;
        if (pos === undefined) {
          pos = 0;
        }

        const before = sentence.substr(0, pos);
        const after = sentence.substr(pos, len);

        this.mailData.title = before + "{{" + text + "}}" + after;
        this.$nextTick().then(() => {
          title.selectionStart = pos + text.length;
        });
      } else {
        let postContent = this.$refs.content.quill.selection.savedRange.index;

        this.$refs.content.$refs.quillContainer.__quill.insertText(
          postContent,
          "{{" + text + "}}"
        );
      }

      this.$nextTick().then(() => {
        this.showReplace = false;
        this.replaceText = null;
      });
    },
    showFormAddMailTemplateName() {
      this.AddNameTemplateModal = true;
    },
    async saveMailTemplate() {
      try {
        if (!this.$refs.formMailTemplate.validate()) return;
        let mail = {
          name: this.mailData.name,
          title: this.mailData.title,
          content: this.mailData.content,
          from: this.mailData.from,
          to: this.mailData.to,
          senario_template_id: this.getSenarioTemplateId(),
        };
        const res = await MailService.saveMailTemplate(mail);
        const stt = res.data.response_code;
        if (stt == 500)
          return (this.mailTemplateErrors = [res.data.response_message]);
        if (stt == 400)
          return (this.mailTemplateErrors = res.data.response_message);
        this.AddNameTemplateModal = false;
        // clear mail name
        this.mailData.name = "";
        await this.getMailTemplates();
        this.$root.SnackBar.show({
          message: this.$i18n.t("success-message.success"),
          color: "light-green accent-4",
        });
      } catch (e) {
        this.mailTemplateErrors = ["Internal server error"];
        console.log("Internal server error");
      }
    },
    closeAction() {
      this.closeDialog("showActionDialog");
    },
    cancelAddName() {
      this.mailData.name = "";
      this.AddNameTemplateModal = false;
    },
    confirmSendMail() {
      this.TestTransmissionDialog = true;
    },
    selectMailTo(value) {
      this.mailData.to_name = value.name;
      this.mailData.to = value.value;
    },
    getMailUser() {
      let user = JSON.parse(localStorage.getItem('USER'));
      return user.email;
    }
  },
};
</script>

<style>
.ActionDialog {
  position: absolute;
  width: 827px;
  height: 581px;
  left: 747px;
  top: 1101px;
}

.action {
  width: 100%;
  margin: auto;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 54px;
  background: white;
  border-radius: 10px;
  color: black;
  border: 2px solid #eeb73f;
}
button.action.mb-5.disabled {
  border: 2px solid gray;
  background: lightslategrey;
  color: white;
  cursor: pointer;
}
</style>
