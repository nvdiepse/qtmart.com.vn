<template>
  <div class="container--fluid">
    <v-row class="mt-4">
      <v-col cols="12">
        <h3 class="mb-4 grey--text">シナリオテンプレート</h3>
        <v-row>
          <v-col cols="6" v-for="item in typeList" :key="item.id">
            <v-card class="mx-auto" elevation="4">
              <v-list-item three-line>
                <v-list-item-content>
                  <v-list-item-title class="text-h5 font-weight-bold mt-3">
                    {{ item.name }}
                  </v-list-item-title>
                  <v-list-item-subtitle class="template-desc">
                    <div class="mt-2 ">対象件数 <strong>{{ Number(item.item_count).toLocaleString() }}</strong>
                     <span class="f-14"> 件</span>
                    </div>
                    <div class="mt-2 mb-3 sb-grey">
                      {{ item.note }}
                    </div>
                  </v-list-item-subtitle>
                </v-list-item-content>
                <v-card-actions class="light-green lighten-5 v-card-custome">
                  <v-btn
                    rounded
                    small
                    fab
                    color="light-green accent-4"
                    dark
                    @click="openDialogCreate(item.id)"
                  >
                    <v-icon dark right> mdi-arrow-right </v-icon>
                  </v-btn>
                </v-card-actions>
              </v-list-item>
            </v-card>
          </v-col>
        </v-row>
      </v-col>
    </v-row>

    <v-dialog v-model="dialog" width="600px" @click:outside="closeDialogCreate" v-on:keydown.esc="closeDialogCreate"
              content-class="overflow-visible">
      <v-form ref="form" v-model="valid">
        <v-card>
          <v-card-title>
            <div class="text">
              <div class="grey--text">
                <h3 class="sb-grey mb-4">シナリオ作成</h3>
                <small class="sb-light-grey font-weight-bold">シナリオタイプ</small>
              </div>
              <b class="black--text">{{ currentTemplate.name }}</b>
              <small class="sb-grey font-weight-bold">（対象件数
                <span class="black--text font-weight-bold">{{ Number(currentTemplate.item_count).toLocaleString() }}</span> 件）</small>
            </div>
          </v-card-title>

          <v-card-text>
            <v-row>
              <v-col cols="12" sm="12">
                <v-text-field label="シナリオ名(*)" required outlined dense v-model="senarioName" :rules="nameRules">
                </v-text-field>
                <v-select
                    :items="selectTargetList"
                    item-text="name"
                    v-model="selectType"
                    label="ターゲット"
                    outlined
                    dense
                    attach
                    clearable
                    :return-object="true"
                    class="mt-2"
                    @change="selectTarget"
                    :menu-props="{ contentClass: 'sb-menu-active' }"
                >
                </v-select>
                <v-alert v-if="selectType" dense text color="light-green accent-4" class="senario-input" outlined>
                  <v-row>
                    <v-col>
                      <div class="sb-light-grey">ターゲット対象件数</div>
                      <div class="black--text">
                        <b class="f-20">{{ Number(selectType.item_count).toLocaleString() }}</b>
                        <span class="f-14"> 件</span>
                      </div>
                    </v-col>
                  </v-row>
                </v-alert>

                <v-select
                    :rules="segmentRule"
                    :items="segmentList"
                    item-text="name"
                    item-value="id"
                    label="セグメント(*)"
                    v-model="selectSegment"
                    required
                    outlined
                    dense
                    attach
                    @change="getSegmentDetail(selectSegment)"
                    class="mt-2"
                    :menu-props="{ contentClass: 'sb-menu-active' }"
                >
                  <template slot="no-data">
                    <div tabindex="-1" class="v-list-item theme--light"><div class="v-list-item__content"><div class="v-list-item__title">データがありません</div></div></div>
                  </template>
                </v-select>

                <v-alert
                    v-if="selectSegment && segmentDetailList"
                    text
                    color="yellow accent-4"
                    outlined
                    class="senario-input"
                >
                  <v-row>
                    <v-col class="segment d-flex">
                      <div
                          class="items black--text"
                          v-for="(segment, i) in segmentDetailList['segment_objects']"
                          :key="i"
                      >
                        <div class="sb-light-grey">{{ segment.name }}</div>
                        <b class="f-20">{{ Number(segment.item_count).toLocaleString() }}</b>
                        <small class="f-14"> 件</small>
                      </div>
                    </v-col>
                  </v-row>
                </v-alert>
              </v-col>
            </v-row>
          </v-card-text>
          <v-card-actions class="justify-center align-center pb-6">
            <v-btn
                color="grey lighten-3"
                class="mr-2 justify-center align-center font-weight-bold"
                width="120px"
                depressed
                rounded
                @click="closeDialogCreate"
            >
              キャンセル
            </v-btn>
            <v-btn
                color="success"
                class="light-green accent-4 justify-center align-center font-weight-bold"
                width="120px"
                rounded
                :disabled="!valid"
                @click="createSenario"
            >
              完了
            </v-btn>
          </v-card-actions>
        </v-card>
      </v-form>
    </v-dialog>
  </div>
</template>

<script>
import SenarioService from "@/services/SenarioService";

export default {
  name: "SenarioTemplate",
  data: () => ({
    valid: false,
    dialog: false,
    selectType: null,
    selectSegment: undefined,
    typeList: [],
    targetList: [],
    selectTargetList: [],
    segmentList: [],
    currentTemplate: [],
    segmentDetailList: [],
    senarioName: '',
    nameRules: [
      v => !!v.trim() || 'シナリオ名は必須項目です',
      v => (v.trim().length <= 255 && v.trim().length >= 1) || '1~255桁以内で入力してください',
    ],
    segmentRule: [
        v => !!v || 'セグメントは必須項目です'
    ]
  }),
  created() {
    this.getAllType();
  },
  methods: {
    selectTarget() {
      if (this.selectSegment) {
        this.getSegmentDetail(this.selectSegment);
      }
    },
    createSenario() {
      let self = this;
      let createData = new FormData();
      createData.append("name", self.senarioName);
      createData.append("senario_template_id", self.currentTemplate.id);
      if (self.selectType) {
        createData.append("target_id", self.selectType.id);
      }
      createData.append("segment_id", self.selectSegment);
      SenarioService.createSenario(createData).then((response) => {
            self.$router.push('/senario/detail/' + response.data.data.id);
          }).catch(() => {
            this.$root.SnackBar.show({
              message: this.$i18n.t("error-message.create-senario"),
              color: "red accent-4",
              icon: "mdi-alert"
            });
            self.closeDialogCreate();
          });
    },
    getAllType() {
      SenarioService.getAllType()
          .then((response) => {
            this.typeList = response.data.data;
          })
          .catch(() => {
          });
    },
    closeDialogCreate() {
      this.dialog = false;
      this.selectType = null;
      this.selectSegment = undefined;
      this.targetList = [];
      this.segmentList = [];
      this.currentTemplate = [];
      this.segmentDetailList = [];
      this.senarioName = '';
      this.$refs.form.resetValidation();
    },
    getSegmentDetail(id) {
      let self = this;
      let query = {
        'target': this.selectType ? this.selectType.order : ''
      };
      SenarioService.getSegmentDetail(id, query)
          .then((response) => {
            self.segmentDetailList = response.data.data;
          })
          .catch(() => {
          });
    },
    openDialogCreate(templateId) {
      let self = this;
      Promise.all([
        SenarioService.getTemplateTarget(templateId),
        SenarioService.getTemplateSegment(templateId)
      ]).then((response) => {
        self.selectTargetList = response[0].data.data;
        self.targetList = response[0].data.data;

        self.segmentList = response[1].data.data;

        if (self.segmentList) {
          self.currentTemplate = self.typeList.filter((item) => { return item.id === templateId})[0];
          self.dialog = true;
        }
      }).catch(()=> {
      });
    }
  },
};
</script>

<style>
.v-alert__wrapper {
  display: block !important;
}
.c-1 {
  width: 120px !important;
}
.v-card-custome {
  height: 100px;
  margin-right: -5px;
  border-radius: 5px;
}

.segment {
  overflow-x: auto;
  white-space: nowrap;
}
.segment .items {
  text-align: center;
  text-decoration: none;
  padding: 0 20px;
}
.template-desc div:nth-child(1) {
  color: #666666;
}
.template-desc div:nth-child(2), .template-desc div:nth-child(1) strong {
  color: #000000;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
}
.senario-input {
  margin-top: -15px !important;
  margin-bottom: 20px !important;
}
</style>
