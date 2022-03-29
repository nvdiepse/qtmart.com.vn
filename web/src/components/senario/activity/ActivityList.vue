<template>
  <div class="container--fluid">
    <v-row class="mt-6">
      <v-col cols="12">
        <div class="d-flex align-center">
          <h4 class="text--darken-4 mr-5">アクティビティ</h4>
          <v-btn
            color="success"
            rounded
            class="light-green accent-4 px-4 pr-6 justify-center align-center font-weight-bold"
            dark
            @click="dialog = !dialog"
          >
            <v-icon right dark class="mr-0"> mdi-plus </v-icon>作成
          </v-btn>
        </div>
        <v-data-table
          :headers="headers"
          :items="activityList"
          :items-per-page="item_per_page"
          :options.sync="options"
          :server-items-length="totalActivity"
          :loading="loading"
          :footer-props="{
            'items-per-page-text': '表示件数',
            'items-per-page-options': [5, 10, 15, 20],
            'show-first-last-page': true,
          }"
          class="elevation-1 mt-6"
        >
          <template
            v-slot:footer.page-text="{ pageStart, pageStop, itemsLength }"
          >
            <span>
              {{ itemsLength }}件中 {{ pageStart }}～{{ pageStop }}件</span
            >
          </template>
          <template v-slot:no-data>
            <span>登録アクティビティがありません</span>
          </template>
          <template v-slot:no-results>
            <span>登録アクティビティがありません</span>
          </template>
          <template #item.status="{ item }">
            <div>{{ getStatus(item.status) }}</div>
          </template>
          <template #item.action="{ item }">
            <v-menu bottom left>
              <template v-slot:activator="{ on, attrs }">
                <v-btn dark icon v-bind="attrs" v-on="on">
                  <v-icon>mdi-dots-vertical</v-icon>
                </v-btn>
              </template>
              <v-list dense>
                <v-list-item dense link @click="getReport(item.id)">
                  <v-list-item-title
                    >アクティビティレポート</v-list-item-title
                  ></v-list-item
                >
                <v-list-item dense link @click="updateActivity(item.id)"><v-list-item-title>編集</v-list-item-title>
                </v-list-item>
                <v-list-item dense link  @click="duplicateActivity(item.id)"
                  ><v-list-item-title
                    >コピーして新規作成</v-list-item-title
                  ></v-list-item
                >
                <v-list-item dense link @click="setStatusInactive(item.id)" :disabled="item.status === 3"
                  ><v-list-item-title
                    >有効／無効</v-list-item-title
                  ></v-list-item
                >
                <v-list-item dense link @click="showDeleteDialog(item)"
                  ><v-list-item-title>削除</v-list-item-title></v-list-item
                >
              </v-list>
            </v-menu>
          </template>
        </v-data-table></v-col
      >
    </v-row>

    <v-dialog v-model="dialog" max-width="600px" @click:outside="closeCreateActivityDialog" v-on:keydown.esc="closeCreateActivityDialog">
      <v-form ref="form" v-model="valid" @submit.prevent="">
        <v-card>
          <v-card-title>
            <div class="text">
              <div class="grey--text">
                <h3 class="sb-grey mb-4">アクティビティ作成</h3>
                <small class="sb-light-grey font-weight-bold">セグメント</small>
              </div>
              <b>年齢 {{ this.getSegmentName() }}</b>
            </div>
          </v-card-title>
          <v-card-text>
            <v-container>
              <v-row>
                <v-col cols="12" sm="12">
                  <v-select
                    v-model="subSegment"
                    :items="subSegments"
                    item-text="name"
                    item-value="id"
                    :menu-props="{ maxHeight: '400' }"
                    label="対象セグメント(*)"
                    multiple
                    persistent-hint
                    item-color="grey"
                    outlined
                    dense
                    required
                    :rules="requireRules"
                    @change="changeSubSegment()"
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
              @click="closeCreateActivityDialog"
            >
              キャンセル
            </v-btn>
            <v-btn
              color="success"
              class="light-green accent-4 justify-center align-center font-weight-bold"
              width="120px"
              rounded
              :disabled="!valid"
              @click="confirmButton"
            >
              完了
            </v-btn>
          </v-card-actions>
        </v-card>
      </v-form>
    </v-dialog>
    <v-dialog v-model="showDeleteActivity" max-width="500px" @click:outside="showDeleteActivity = false">
      <v-card>
        <v-card-title class="justify-center align-center">
          <v-icon x-large color="orange" class="mt-5">mdi-alert</v-icon>
          <span class="text-h5 mt-5 ml-3">削除確認</span>
        </v-card-title>
        <v-card-text class="text-center">
          <p>「{{itemToDelete.name}}」を削除します。よろしいでしょうか？</p>
        </v-card-text>
        <v-card-actions class="justify-center align-center pb-6">
          <v-btn color="grey lighten-3" class="px-4 pr-6 mr-2" width="120px" depressed rounded
                 @click="showDeleteActivity = false">
            キャンセル
          </v-btn>
          <v-btn  class="red accent-2 px-4 pr-6" width="120px" rounded dark
                 @click="deleteActivity(itemToDelete.id)">
            削除
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </div>
</template>

<script>
import { ACTIVITY_HEADER } from "@/constants/header-constants.js";
import { ACTIVITY_STATUS } from "@/constants/string-constant";
import SenarioService from "@/services/SenarioService.js";
import ActivityService from "@/services/ActivityService";
import {mapActions, mapGetters} from "vuex";
import _ from "lodash";
import router from "../../../router";

export default {
  name: "ActivityList",

  data() {
    return {
      valid: false,
      totalActivity: 0,
      activityList: [],
      headers: ACTIVITY_HEADER,
      dialog: false,
      subSegment: [],
      page: 1,
      item_per_page: 10,
      options: {},
      loading: false,
      requireRules: [(v) => v.length > 0 || "ユーザー名は必須項目です"],
      subSegments: [],
      stageQuery: {
        id: null,
        senario_id: null
      },
      showDeleteActivity: false,
      itemToDelete: {},
      segment_name: null
    };
  },
  components: {
  },
  mounted() {
    let self = this;
    this.$root.$on('getStageActivity', (params) => {
      self.stageQuery.id = params.id;
      self.stageQuery.senario_id = params.senario_id;
      self.options.page = 1;
      self.getStageActivity();
    });
    this.$root.$on('setSubSegment', (data) => {
      self.getSubSegment(data);
    });
  },
  methods: {
    ...mapActions(["setTargetSegments"]),
    ...mapGetters(["getSegmentName"]),
    showDeleteDialog(item) {
      this.showDeleteActivity = true;
      this.itemToDelete = item;
    },
    confirmButton() {
      if (!this.$refs.form.validate()) return;
      this.setTargetSegments(this.subSegment);
      router.push({ path: `/senario/${this.$route.params.id}/activity` }).catch(() => {});
    },
    getStatus(id) {
      let stt = _.find(ACTIVITY_STATUS, ["id", id]);
      if (stt) {
        return stt.value;
      }
      return "-";
    },
    deleteActivity(id) {
      this.showDeleteActivity = false;
      ActivityService.deleteActivity(id)
        .then(() => {
          this.getStageActivity();
          this.$root.SnackBar.show({
            message: this.$i18n.t("success-message.delete-activity"),
            color: "light-green accent-4",
          });
        })
        .catch(() => {
          this.$root.SnackBar.show({
            message: this.$i18n.t("error-message.delete-activity"),
            color: "red accent-4",
            icon: "mdi-alert",
          });
        });
    },
    setStatusInactive(id) {
      ActivityService.setStatusInactive(id)
        .then(() => {
          _.map(this.activityList, (item) => {
            if (item.id === id) {
              item.status = 3;
            }
            return item;
          });
          this.$root.SnackBar.show({
            message: this.$i18n.t("success-message.set-activity-inactive"),
            color: "light-green accent-4",
          });
        })
        .catch(() => {
          this.$root.SnackBar.show({
            message: this.$i18n.t("error-message.set-activity-inactive"),
            color: "red accent-4",
            icon: "mdi-alert",
          });
        });
    },
    getStageActivity() {
      this.loading = true;
      const { page, itemsPerPage } = this.options;
      let query = {
        senario_id: this.stageQuery.senario_id,
        page: page,
        per_page: itemsPerPage
      };
      SenarioService.getStageActivity(this.stageQuery.id, query).then((response) => {
        this.activityList = response.data.data.items ?? [];
        this.totalActivity = response.data.data.total;
        this.loading = false;
      }).catch(() => {
        this.loading = false;
        this.$root.SnackBar.show({
          message: this.$i18n.t("error-message.get-activity-list"),
          color: "red accent-4",
          icon: "mdi-alert"
        });
      });
    },
    getReport(id) {
      router.push({path: `/senario/${this.$route.params.id}/activity/report/${id}`});
    },
    updateActivity(activityId) {
      router.push({path: `/senario/${this.$route.params.id}/activity/${activityId}`});
    },
    getSubSegment(data) {
      this.subSegments = data.data;
    },
    closeCreateActivityDialog() {
      this.dialog = false;
      this.subSegment = [];
      this.$refs.form.resetValidation();
    },
    changeSubSegment() {
      if (!this.subSegment || !this.subSegment.length) {
        this.valid = false;
      } else {
        this.valid = true;
      }
    },
    duplicateActivity(id) {
      router.push({path: `/senario/${this.$route.params.id}/activity/duplicate/${id}`});
    }
  },
  watch: {
    options: {
      handler () {
        if (this.stageQuery.id && this.stageQuery.senario_id) {
          this.getStageActivity()
        }
      },
      deep: true,
    },
  },
  computed: {
  }
};
</script>
