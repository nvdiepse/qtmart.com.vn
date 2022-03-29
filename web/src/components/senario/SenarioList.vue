<template>
  <div class="container--fluid">
    <v-row class="mt-6">
      <v-col cols="12">
        <h3 class="mb-4 grey--text">シナリオ一覧</h3>
        <v-data-table
          :headers="headers"
          :items="scenarioList"
          :items-per-page="itemsPerPage"
          :options.sync="options"
          :server-items-length="totalSenario"
          :loading="tableLoading"
          :footer-props="{
            'items-per-page-options': [5, 10, 15, 20],
            'items-per-page-text': '表示件数',
            'show-first-last-page': true,
          }"
          class="elevation-1"
          @page-count="pageCount = $event"
        >
          <template
              v-for="header in headers"
              v-slot:[`item.${header.value}`]="{ item }"
          >
            <slot v-if="header.value !== 'link'" :name="[`item.${header.value}`]" :item="item">
              {{ getVal(item, header.value) }}
            </slot>
            <a v-else v-bind:key="header.value" :href="getLink(item, 'id')">もっと見る</a>
          </template>
          <template v-slot:no-data>
            <span>登録シナリオがありません</span>
          </template>
          <template v-slot:footer.page-text="{pageStart, pageStop, itemsLength}" >
            <span> {{itemsLength}}件中 {{pageStart}}～{{pageStop}}件</span>
          </template>
        </v-data-table>
<!--        <div class="text-center pt-2">-->
<!--          <v-pagination v-model="page" :length="pageCount" color="light-green accent-4"></v-pagination>-->
<!--        </div>-->
      </v-col>
    </v-row>
  </div>
</template>

<script>
import {SCENARIO_HEADER} from "@/constants/header-constants.js";
import SenarioService from "@/services/SenarioService.js";

export default {
  name: "SenarioList",
  components: {},
  data: () => ({
    scenarioList: [],
    headers: SCENARIO_HEADER,
    page: 1,
    pageCount: 0,
    itemsPerPage: 10,
    tableLoading: false,
    options: {},
    totalSenario: 0
  }),
  created() {
    //this.getListSenario();
  },
  methods: {
    getListSenario() {
      this.tableLoading = true;
      const { page, itemsPerPage } = this.options;
      let query = {
        page: page,
        per_page: itemsPerPage
      };
      SenarioService.getAllScenario(query)
          .then((response) => {
            this.scenarioList = response.data.data.items;
            this.totalSenario = response.data.data.total;
            this.tableLoading = false;
          })
          .catch(() => {
            this.tableLoading = false;
            this.$root.SnackBar.show({
              message: this.$i18n.t('error-message.get-senario-list'),
              color: "red accent-4",
              icon: "mdi-alert"
            });
          });
    },
    getVal(item, path) {
      return path.split(".").reduce((res, prop) => res[prop], item);
    },
    getLink(item, path) {
      return "/senario/detail/" + path.split(".").reduce((res, prop) => res[prop], item);
    }
  },
  mounted() {
    // let self = this;
    // this.$root.$on('updateListSenario', () => {
    //   self.getListSenario();
    // });
  },
  watch: {
    options: {
      handler () {
        this.getListSenario()
      },
      deep: true,
    },
  }
};
</script>
