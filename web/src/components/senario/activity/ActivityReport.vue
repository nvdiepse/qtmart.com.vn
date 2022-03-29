<template>
  <v-container fluid>
    <ul class="v-breadcrumbs breadcrumbs theme--light">
      <li><a href="/" class="v-breadcrumbs__item">ダッシュボード</a></li>
      <li class="v-breadcrumbs__divider"><div class="breadcrumbs-divider"></div></li>
      <li>
        <a href="breadcrumbs_link_1" class="v-breadcrumbs__item v-breadcrumbs__item--disabled">
          {{ activity.senario_template_name }} &nbsp; &nbsp;{{ activity.senario_name }}
        </a>
      </li>
    </ul>
    <h2 class="mb-4 grey--text mt-5">{{ activity.name }}</h2>

    <v-card class="mx-auto date-card" elevation="0">
      <v-card-text>
        <div>アクティビティ実行スケジュール</div>
        <p class="text--primary">{{ activity.schedule_type_value }}</p>
      </v-card-text>

      <!-- schedule_type == 1 -->
      <v-card-text v-if="activity.schedule_type == 1">
        <div>繰り返す間隔</div>
        <p class="text--primary" v-if="activity.schedule_setting.time_unit_type == 1">
          {{ activity.schedule_setting.time_unit_value }}日ごと</p>
        <p class="text--primary" v-if="activity.schedule_setting.time_unit_type == 2">
          {{ activity.schedule_setting.time_unit_value }}週ごと</p>
        <p class="text--primary" v-if="activity.schedule_setting.time_unit_type == 3">
          {{ activity.schedule_setting.time_unit_value }}ヶ月</p>
      </v-card-text>
      <v-card-text v-if="activity.schedule_type == 1 && activity.schedule_setting.time_unit_type == 1">
        <div>送信タイミング</div>
        <p class="text--primary">{{ activity.schedule_setting.send_time }} 時</p>
      </v-card-text>
      <v-card-text v-if="activity.schedule_type == 1 && activity.schedule_setting.time_unit_type == 1">
        <div>開始日時</div>
        <p class="text--primary">{{ formatDate(activity.schedule_setting.start_date) }}</p>
      </v-card-text>
      <v-card-text v-if="activity.schedule_type == 1 && activity.schedule_setting.time_unit_type == 1">
        <div>終了</div>
        <p class="text--primary">{{ formatDate(activity.schedule_setting.end_date) }}</p>
      </v-card-text>

      <v-card-text v-if="activity.schedule_type == 1 && activity.schedule_setting.time_unit_type == 2">
        <div>曜日</div>
        <p class="text--primary">{{ getDayInWeek(activity.schedule_setting.day_in_week) }}</p>
      </v-card-text>
      <v-card-text v-if="activity.schedule_type == 1 && activity.schedule_setting.time_unit_type == 2">
        <div>送信タイミング</div>
        <p class="text--primary">{{ activity.schedule_setting.send_time }}時</p>
      </v-card-text>
      <v-card-text v-if="activity.schedule_type == 1 && activity.schedule_setting.time_unit_type == 2">
        <div>開始日時</div>
        <p class="text--primary">{{ formatDate(activity.schedule_setting.start_date) }}</p>
      </v-card-text>
      <v-card-text v-if="activity.schedule_type == 1 && activity.schedule_setting.time_unit_type == 2">
        <div>終了</div>
        <p class="text--primary">{{ formatDate(activity.schedule_setting.end_date) }}</p>
      </v-card-text>
      <!-- end schedule type == 1 -->

      <!-- schedule type == 3 -->
      <v-card-text
          v-if="activity.schedule_type == 1 && activity.schedule_setting.time_unit_type == 3">
        <div>送信日</div>
        <p class="text--primary" v-if="activity.schedule_setting.send_time_type == 3">
          {{ getSendTimeType(activity.schedule_setting.send_time_type) }}
        </p>
        <p class="text--primary" v-if="activity.schedule_setting.send_time_type == 1">
          {{ getSendTimeType(activity.schedule_setting.send_time_type) }}
          {{ activity.schedule_setting.day_in_month }}日
        </p>
        <p class="text--primary" v-if="activity.schedule_setting.send_time_type == 2">
          {{ getSendTimeType(activity.schedule_setting.send_time_type) }}
          第{{ activity.schedule_setting.send_time_day }}{{ getKindOfDay(activity.schedule_setting.send_time_day) }}日
        </p>
      </v-card-text>
      <v-card-text v-if="activity.schedule_type == 1 && activity.schedule_setting.time_unit_type == 3">
        <div>送信タイミング</div>
        <p class="text--primary">{{ activity.schedule_setting.send_time }}時</p>
      </v-card-text>
      <v-card-text v-if="activity.schedule_type == 1 && activity.schedule_setting.time_unit_type == 3">
        <div>開始日時</div>
        <p class="text--primary">{{ formatDate(activity.schedule_setting.start_date) }}</p>
      </v-card-text>
      <v-card-text v-if="activity.schedule_type == 1 && activity.schedule_setting.time_unit_type == 3">
        <div>終了</div>
        <p class="text--primary">{{ formatDate(activity.schedule_setting.end_date) }}</p>
      </v-card-text>
      <!-- end schedule type = 3-->

      <!-- schedule type = 2-->
      <v-card-text v-if="activity.schedule_type == 2">
        <div>開始日時</div>
        <p class="text--primary">{{ formatDate(activity.schedule_setting.start_date) }}</p>
      </v-card-text>
      <v-card-text v-if="activity.schedule_type == 2">
        <div>終了</div>
        <p class="text--primary">{{ formatDate(activity.schedule_setting.end_date) }}</p>
      </v-card-text>

      <!-- schedule type = 3-->
      <v-card-text v-if="activity.schedule_type == 3">
        <div>送信日</div>
        <p class="text--primary">{{ formatDate(activity.schedule_setting.send_date) }}</p>
      </v-card-text>
      <v-card-text v-if="activity.schedule_type == 3">
        <div>送信タイミング</div>
        <p class="text--primary">{{ formatDate(activity.schedule_setting.send_time) }}時</p>
      </v-card-text>
    </v-card>

    <v-card elevation="2" class="mt-6">
      <v-card class="mx-auto date-card date-card-header" elevation="0">
        <v-card-text>
          <div>セグメント</div>
          <p class="text--primary">{{ activity.segment_name }}</p>
        </v-card-text>
        <v-card-text>
          <div>対象セグメント</div>
          <p class="text--primary">{{ activity.sub_segments }}</p>
        </v-card-text>
        <v-card-text>
          <div>対象数</div>
          <p class="text--primary">{{ activity.count_profile }}件</p>
        </v-card-text>
      </v-card>
      <v-divider></v-divider>
      <div class="pa-4">
        <p class="font-weight-bold mt-3">
          アクティビティ設定 <span class="red--text">(*)</span>
        </p>
        <div class="blue-grey lighten-5 rounded chart-container mt-6">
          <organization-chart id="organization-chart" :datasource="ds">
            <template slot-scope="{ nodeData }">
              <div class="mail" v-if="!nodeData.actionType">
                <v-icon class="send-mail" color="light-blue lighten-2"
                >mdi-send
                </v-icon
                >
                <b class="title" click="selectNode(nodeData)">メール送信</b>
                <v-divider class="mt-2"></v-divider>
                <div class="mail-contents text-left">
                  <v-list-item three-line class="pa-0 ma-0">
                    <v-list-item-content>
                      <v-list-item-title>メール</v-list-item-title>
                      <v-list-item-subtitle
                      ><span class="d-inline-block ml-3 mr-2">To</span
                      >{{ nodeData.to_name }}
                      </v-list-item-subtitle
                      >
                      <v-list-item-subtitle
                      ><span class="d-inline-block ml-3 mr-2">件名</span
                      >{{ nodeData.title }}
                      </v-list-item-subtitle
                      >
                    </v-list-item-content>
                  </v-list-item>
                  <v-list-item three-two class="pa-0 ma-0">
                    <v-list-item-content>
                      <v-list-item-title
                      >送信結果確認タイミング
                      </v-list-item-title
                      >
                      <v-list-item-subtitle
                      ><span class="d-inline-block ml-3 mr-2">{{ nodeData.expired_condition_date }}日後</span
                      >{{ nodeData.expired_condition_time }}時
                      </v-list-item-subtitle
                      >
                    </v-list-item-content>
                  </v-list-item>
                </div>
                <div style="background: #64d6fc; margin: 0px -10px -50px -10px">
                  <p
                      style="
                      border: 1px solid #64d6fc;
                      padding: 3px 0;
                      font-size: 18px;
                    "
                      class="font-weight-bold"
                  >
                    {{ nodeData.count }}<small style="font-size: 12px"> 件</small>
                  </p>
                </div>
                <br/>
              </div>
              <div
                  class="action action-report"
                  v-if="nodeData.actionType == true"
              >
                <div class="title" click="selectNode(nodeData)"
                >
                  <v-icon class="icon-email" color="#eeb73f">{{
                      nodeData.icon
                    }}
                  </v-icon
                  >
                  {{ nodeData.name }}
                </div
                >
                <div class="report-info">
                  <p style="font-size: 18px; margin-bottom: 0!important; width: 50%;text-align: left;" class="font-weight-bold">
                    {{ nodeData.percent }}
                  </p>
                  <p style="font-size: 18px; color: #FFFFFF; margin-bottom: 0!important;width: 50%;text-align: right;" class="font-weight-bold">
                    {{ nodeData.count_action_type }} <small>件/{{ nodeData.sent }}件</small>
                  </p>
                </div>
              </div>
            </template>
          </organization-chart>
        </div>
      </div>
      <v-card-actions class="justify-center align-center pb-6">
        <v-btn
            color="grey lighten-3"
            class="accent-4 justify-center align-center font-weight-bold mr-2"
            width="170px"
            depressed
            rounded
            @click="edit"
        >
          アクティビティ編集
        </v-btn>
        <v-btn
            color="success"
            class="light-green accent-4 px-4 pr-6"
            width="170px"
            depressed
            rounded
            @click="comeBack"
        >
          戻る
        </v-btn>
      </v-card-actions>
    </v-card>
  </v-container>
</template>

<script>
import OrganizationChart from "vue-organization-chart";
import "vue-organization-chart/dist/orgchart.css";
import ActivityService from "../../../services/ActivityService";
import moment from "moment";
import router from "../../../router";
import {
  DAY_IN_WEEKS,
  KIND_OF_DAY,
  SEND_TIME_TYPE_1,
  SEND_TIME_TYPE_2,
  SEND_TIME_TYPE_3
} from "../../../constants/common";
import _ from "lodash";

export default {
  name: "ActivityReport",
  components: {
    OrganizationChart,
  },
  created() {
    this.getData();
  },
  data: () => ({
    ds: null,
    activity: "",
  }),
  methods: {
    async getData() {
      try {
        let activityId = this.$route.params.activityId;
        const result = await ActivityService.getActivityReport(activityId);
        let stt = result.data.response_code;
        if (stt == 500) return (this.errors = [result.data.response_message]);
        if (stt == 400) return (this.errors = result.data.response_message);
        this.activity = result.data.data['activity'];
        this.activity.schedule_setting = JSON.parse(result.data.data['activity'].schedule_setting)
        this.ds = result.data.data['actionAndMail'];
      } catch (e) {
        throw new Error(e);
      }
    },
    formatDate(date) {
      return moment(date).format('Y/M/D');
    },
    comeBack() {
      router.push({path: `/senario/detail/${this.$route.params.id}`});
    },
    edit() {
      router.push({path: `/senario/${this.$route.params.id}/activity/${this.$route.params.activityId}`});
    },
    getDayInWeek(dayInWeeks) {
      let string = "";
      let dayInWeekArray = dayInWeeks.split(',');
      for (const item of dayInWeekArray) {
        let obj = _.find(DAY_IN_WEEKS, function (o) {
          return o.key == item;
        });
        if (string == "") {
          string = obj.value;
        } else {
          string = string + "," + obj.value;
        }
      }
      return string;
    },
    getKindOfDay(kindOfDay) {
      let obj = _.find(KIND_OF_DAY, function (o) {
        return o.value == kindOfDay;
      });
      return obj.text;
    },
    getSendTimeType(val) {
      if (val == SEND_TIME_TYPE_1) return "毎月";
      if (val == SEND_TIME_TYPE_2) return "毎月";
      if (val == SEND_TIME_TYPE_3) return "月末";
    },
  }
};
</script>
<style>
.date-card {
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
  background-color: #fffde8 !important;
  border: 1px solid #d4bf00 !important;
}

.date-card .v-card__text {
  width: auto;
  border-right: 1px solid #e7e1a4;
  padding: 10px 20px;
}

.date-card .v-card__text p {
  margin-bottom: 0;
  font-size: 1.2rem;
  font-weight: bold;
}

.date-card.date-card-header {
  background-color: #fff !important;
  border: 0 !important;
}

.date-card.date-card-header .v-card__text {
  border-right: 1px solid #E7E7E7;
}

.date-card.date-card-header .v-card__text p {
  font-size: 1.4rem;
}

.action.action-report {
  width: 100%;
  flex-direction: column;
  height: auto;
}

.action.action-report .title {
  padding: 15px 0 10px 0;
  height: auto;
  margin-bottom: 0;
}

.report-info {
  width: 100%;
  background-color: #EEB73F;
  display: flex;
  padding: 10px;
}

.report-info > div {
  display: flex;
  justify-content: space-between;
  width: calc(100% - 40px);
  padding: 8px 0;
  margin: auto;
  border-bottom: 1px solid rgba(255, 255, 255, 0.4);
}

.report-info div span:first-child {
  font-size: 1.3rem;
  font-weight: bold;
  letter-spacing: -1px;
}

.report-info div span:last-child {
  color: #fff;
  font-size: 1.2rem;
  font-weight: bold;
  letter-spacing: -1px;
}

.report-info div:last-child {
  border-bottom: 0;
}
</style>
