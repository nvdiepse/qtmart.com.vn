<template>
  <div class="home">
    <v-breadcrumbs :items="items" class="breadcrumbs">
      <template v-slot:divider>
        <div class="breadcrumbs-divider"></div>
      </template>
    </v-breadcrumbs>
    <MailList />
  </div>
</template>

<script>
// @ is an alias to /src
import MailList from "@/components/mail/MailList.vue";

export default {
  name: "MailTemplateList",
  components: {
    MailList,
  },
  data: () => ({
    items: [
      {
        text: "ダッシュボード",
        disabled: false,
        href: "/",
      },
      {
        text: "メールテンプレート一覧",
        disabled: true,
        href: "#",
      },
    ],
  }),
  mounted() {
    this.$store.commit('SET_ACTIVE_MENU', 1);
  }
};
</script>
