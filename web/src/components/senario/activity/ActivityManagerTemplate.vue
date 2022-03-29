<template>
  <div class="container--fluid">
    <v-row class="mt-6">
      <v-col cols="12">
        <div class="d-flex justify-space-between title-box">
          <h2 class="mb-4 grey--text col">{{ data_senario.name}}</h2>
          <a class="" @click="dialog = !dialog">セグメントのすべて表示する</a>
        </div>

        <v-row>
          <v-col cols="6">
            <v-alert dense text color="light-green accent-4" outlined>
              <div class="d-flex flex-row target_box">
                <v-col cols="10">
                  <div>
                    <p class="sb-light-grey mb-2">ターゲット</p>
                    <b class="sb-dark-grey f-20">{{ data_senario.target_name || 'すべて' }}</b>
                  </div>
                </v-col>
                <v-divider
                  vertical
                  inset
                  class="light-green accent-4"
                ></v-divider>

                <v-col cols="2">
                  <div class="black--text">
                    <p class="sb-light-grey mb-2">対象件数</p>
                    <b class="sb-dark-grey f-20">{{ Number(data_senario.target_count).toLocaleString() }}</b>
                    <small class="sb-light-grey f-14"> 件</small>
                  </div>
                </v-col>
              </div>
            </v-alert>
          </v-col>

          <v-col cols="6">
            <v-alert dense text color="yellow accent-4" outlined>
              <div class="d-flex flex-row target_box">
                <v-col cols="2">
                  <div>
                    <p class="sb-light-grey mb-2">セグメント</p>
                    <p class="sb-dark-grey f-20 v-list-item__title font-weight-bold">
                      <v-tooltip top>
                        <template v-slot:activator="{ on, attrs }">
                                <span
                                    v-bind="attrs"
                                    v-on="on"
                                >{{ data_senario.segment_name }}</span>
                        </template>
                        <span>{{ data_senario.segment_name }}</span>
                      </v-tooltip>
                    </p>
                  </div>
                </v-col>
                <v-divider vertical inset class="yellow accent-4"></v-divider>
                <v-col cols="10" class="segment d-flex flex-row">
                  <div
                    v-for="(sub, i) in data_senario['sub_segment']"
                    :key="i"
                    class="items black--text"
                  >
                    <p class="sb-light-grey mb-2">{{ sub.name }}</p>
                    <b class="sb-dark-grey f-20">{{ Number(sub.item_count).toLocaleString() }}</b>
                    <small class="sb-light-grey f-14"> 件</small>
                  </div>
                </v-col>
              </div>
            </v-alert>
          </v-col>
        </v-row>

        <div>
          <div class="d-flex justify-space-between">
            <h3 class="sb-grey">全<span class="black--text">{{data_stage.length}}</span>ステージ</h3>
            <!-- <div>
              <v-icon @click="model--" color="light-green accent-4">
                mdi-arrow-left-drop-circle
              </v-icon>
              <v-icon @click="model++" color="light-green accent-4">
                mdi-arrow-right-drop-circle
              </v-icon>
            </div> -->
          </div>
          <!-- <v-carousel
            v-model="model"
            height="150"
            :show-arrows="false"
            :cycle="cycle"
            show-arrows-on-hover
            progress-color="grey"
            hide-delimiters
          >
            <v-carousel-item v-for="i in 30" :key="i">
              <v-row>
                <v-col v-for="i in 4" :key="i">
                  <v-sheet outlined color="light-green accent-4" rounded type="light-green accent-4">
                    <v-card class="mx-auto" outlined elevation="0">
                      <v-list-item three-line>
                        <v-list-item-content>
                          <v-list-item-title
                            class="text-h5 font-weight-bold mt-3"
                          >
                            ステージ１
                          </v-list-item-title>
                          <v-list-item-subtitle>
                            <div class="mt-2">対象 <b>584</b></div>
                            <div class="mt-2 mb-3">
                              登録アクティビティ <b>4</b> 件
                            </div>
                          </v-list-item-subtitle>
                        </v-list-item-content>
                      </v-list-item>
                    </v-card>
                  </v-sheet>
                </v-col>
              </v-row>
            </v-carousel-item>
          </v-carousel> -->

          <template class="slide">
            <v-sheet class="mx-auto">
              <v-slide-group mandatory v-model="currentStage" show-arrows>
                <v-slide-item v-for="(stage, k) in data_stage" :key="k" v-slot="{active, toggle }">
                  <div class="card d-flex">
                    <v-card class="mx-auto" hover @click="toggle" width="250px" outlined rounded>
                      <v-list-item three-line @click="getStageActivity(stage.id, data_senario.id)">
                        <v-list-item-content>
                          <v-list-item-title
                            class="text-h5 font-weight-bold mt-3"
                          >
                            <v-tooltip top>
                              <template v-slot:activator="{ on, attrs }">
                                <span
                                    v-bind="attrs"
                                    v-on="on"
                                >{{ stage.name }}</span>
                              </template>
                              <span>{{stage.name}}</span>
                            </v-tooltip>
                          </v-list-item-title>
                          <v-list-item-subtitle>
                            <div class="mt-2 sb-grey f-16">対象
                              <b class="black--text">{{ Number(stage.profile_count).toLocaleString() }}</b> 件</div>
                            <div class="mt-2 mb-3 f-16 sb-grey">
                              登録アクティビティ<b class="black--text">{{ Number(stage.activity_count).toLocaleString() }}</b> 件
                            </div>
                          </v-list-item-subtitle>
                        </v-list-item-content>
                      </v-list-item>
                    </v-card>
                    <div class="slide-arr" v-if="k !== (data_stage.length - 1)">
                      <v-icon>mdi-chevron-right</v-icon>
                    </div>
                  </div>
                </v-slide-item>
              </v-slide-group>
            </v-sheet>
          </template>
        </div>
      </v-col>
    </v-row>

    <v-dialog
      class="segmentDialog"
      v-model="dialog"
      max-width="1000px"
      max-height="850px"
    >
      <v-card outlined >
        <v-card-title>
          <b class="mt-5 sb-grey sb-title">セグメント：{{data_senario.segment_name}}</b>
        </v-card-title>
        <v-card-text>
          <v-list dense rounded class="box-sub-segment">
            <v-list-item-group>
              <v-row>
                <v-col cols="3" v-for="(item, i) in data_senario['sub_segment']" :key="i">
                  <v-list-item disabled>
                    <p class="black--text f-16"><b>{{ item.name }}</b> ({{ Number(item.item_count).toLocaleString() }})</p>
                  </v-list-item>
                </v-col>
              </v-row>
            </v-list-item-group>
          </v-list>
        </v-card-text>
        <v-card-actions class="justify-center align-center pb-6">
          <v-btn
            color="success"
            class="light-green accent-4 justify-center align-center font-weight-bold"
            width="120px"
            rounded
            @click="dialog = false"
          >
            閉じる
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </div>
</template>

<script>
import SenarioService from "@/services/SenarioService";
import {mapActions} from "vuex";

export default {
  data: () => ({
    data_senario: [],
    data_stage: [],
    data_activity: [],
    model: 0,
    dialog: false,
    currentStage: 0
  }),
  created() {
    this.getSenarioDetail();
  },
  methods: {
    ...mapActions([
        'setStageID',
      'setSenarioTemplateType',
      'setSenarioID',
      'setSubSegment',
      'setSenarioTemplateId',
      'setSenarioName',
      'setSenarioTemplateName',
      'setSegmentName']),
    getStageActivity(id, senario_id) {
      this.setStageID(id);
      this.$root.$emit('getStageActivity', {id: id, senario_id: senario_id});
    },
    getSenarioDetail() {
      SenarioService.getSenarioDettail(this.$route.params.id).then((response) => {
        this.data_senario = response.data.data;
        this.getListStage();
        // set golobal state
        this.setSenarioTemplateType(response.data.data.senario_template_type);
        this.setSenarioTemplateName(response.data.data.senario_template_name);
        this.setSenarioName(response.data.data.name);
        this.setSenarioTemplateId(response.data.data.senario_template_id);
        this.setSenarioID(response.data.data.id);
        this.setSubSegment(response.data.data.sub_segment);
        this.$root.$emit('setSubSegment', {data: response.data.data.sub_segment});
        this.setSegmentName(response.data.data.segment_name);
      }).catch(() => {
        this.$router.push('/404');
      });
    },
    getListStage() {
      SenarioService.getSenarioStage(this.$route.params.id).then((response) => {
        this.data_stage = response.data.data;
        // set global state stage_id default
        this.setStageID(response.data.data[0].id);
        this.$root.$emit('getStageActivity',
            {id: response.data.data[0].id, senario_id: this.data_senario.id}
        );
      }).catch(() => {
      })
    }
  },
  mounted() {
  }
};
</script>

<style scoped>
.target_box {
  height: 92px;
}
.segment {
  overflow: auto;
  white-space: nowrap;
}
.segment .items {
  display: inline-block;
  text-align: center;
  text-decoration: none;
}
.v-slide-item--active .v-card {
  border: 1px solid #64dd17;
}
.box-sub-segment {
  background-color: rgba(198, 198, 198, 0.12);
}
.title-box {
  position: relative;
}
.title-box h2 {
  max-width: 85%;
}
.title-box a {
  position: absolute;
  bottom: 16px;
  right: 0;
}
.slide-arr i {
  font-size: 30px;
  transform: translateY(-50%);
  top: 50%;
}
</style>
