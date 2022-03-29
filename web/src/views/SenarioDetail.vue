<template>
  <div class="senarioEdit">
    <v-breadcrumbs :items="items" class="breadcrumbs">
      <template v-slot:divider>
        <div class="breadcrumbs-divider"></div>
      </template>
    </v-breadcrumbs>
    <ActivityManager />
    <ActivityList/>
  </div>
</template>

<script>

// @ is an alias to /src
import ActivityManager from '@/components/senario/activity/ActivityManagerTemplate.vue'
import ActivityList from '@/components/senario/activity/ActivityList.vue'

export default {
  name: "SenarioDetail",
  components: {
    ActivityManager,
    ActivityList,
  },
  data: () => ({
    items: [
      {
        text: "ダッシュボード",
        disabled: false,
        href: "/",
      },
      {
        text: "シナリオ詳細",
        disabled: true,
        href: "#",
      },
    ],
  }),
  mounted() {
    this.$store.commit('SET_ACTIVE_MENU', 0);
  }
};
</script>
<style>
.v-slide-group__wrapper {margin-left:  -10px !important;}
.v-slide-group__content {
  padding-bottom: 16px !important;
  padding-left: 10px !important;
  padding-top: 15px;
}
</style>
