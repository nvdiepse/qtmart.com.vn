<template>
  <v-app-bar dense app color="light-green accent-4">
    <v-row no-gutters class="">
      <v-col md="4">
        <div><v-app-bar-nav-icon color="white" @click="changeDrawer"></v-app-bar-nav-icon></div>
      </v-col>
      <v-col md="8">
        <div class="text-right mt-2">
          <v-menu open-on-hover bottom offset-y>
            <template v-slot:activator="{ on, attrs }">
              <span class="text-user">{{ getUserFullName }}</span>
              <v-icon v-bind="attrs" v-on="on" color="white" large
                >mdi-account-circle</v-icon
              >
            </template>
            <v-list>
              <v-list-item dense link to="/changeProfile">
                <v-list-item-title>プロフィール</v-list-item-title>
              </v-list-item>
              <v-list-item dense link to="/resetPass">
                <v-list-item-title>パスワード変</v-list-item-title>
              </v-list-item>
              <v-list-item dense link @click="actionLogout">
                <div class="v-list-item__title">
                  ログアウト
                </div>
              </v-list-item>
            </v-list>
          </v-menu>
        </div>
      </v-col>
    </v-row>
  </v-app-bar>
</template>
<script>
import {mapActions, mapState} from "vuex";
import router from "../../router/index";

export default {
  data: () => ({
    username: "",
  }),
  computed: {
    ...mapState(["auth"]),
    getUserName() {
      return this.$store.state.Auth.user.userName;
    },
    getUserFullName() {
        return this.$store.state.Auth.user.fullName;
    }
  },
  async created() {
  },
  methods: {
    ...mapActions(["logout", "changeDrawer"]),
    async changePassword() {
      await router.push({ path: "/resetPass" });
    },
    async updateProfile() {
      await router.push({ path: "/changeProfile" });
    },
    actionLogout() {
      let user = {
        username: this.getUserName,
      };
      this.logout(user);
    }
  },
};
</script>
<style>
.v-list-item__title a {
  text-decoration: none !important;
  color: black !important;
}
.main-color {
  background-color: #6dd400 !important;
}
.search-input.v-text-field.v-text-field--solo.v-input--dense
  > .v-input__control {
  min-height: 35px;
}
.text-user {
  display: inline-block;
  margin-right: 10px;
  margin-top: 5px;
  color: #fff !important;
  font-size: 90%;
}
</style>
