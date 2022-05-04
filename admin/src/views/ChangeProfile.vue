<template>
  <div>
    <v-breadcrumbs :items="items" class="breadcrumbs">
      <template v-slot:divider>
        <div class="breadcrumbs-divider"></div>
      </template>
    </v-breadcrumbs>
    <v-container>
      <v-row class="mt-4">
        <v-col cols="12">
          <h2 class="mb-5 grey--text f-25">プロフィール</h2>
          <v-card class="mx-auto card-login-form pa-5" elevation="2">
            <v-form
                ref="form"
                class="mt-3 mb-3"
                lazy-validation
                v-model="valid"
                v-on:submit.prevent
            >
              <v-row>
                <v-col md="4" align-self-left>
                  <v-alert
                      dense
                      type="error"
                      v-if="errors.length > 0"
                  >
                    <ul>
                      <li v-for="item in errors" :key="item"> {{ item }}</li>
                    </ul>
                  </v-alert>
                  <v-list-item two-line class="pd-0">
                    <v-list-item-content>
                      <v-list-item-subtitle class="sb-grey f-16">ID（ユーザー名）</v-list-item-subtitle>
                      <v-list-item-title class="f-16 black--text font-weight-bold"> {{ getUserName() }}</v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>
                  <v-text-field
                      v-model="user.name"
                      label="お名前 (*)"
                      class="mt-3"
                      dense
                      outlined
                      :rules="nameRules"
                  ></v-text-field>
                  <v-btn
                      rounded
                      color="success"
                      class="light-green accent-4 justify-center align-center font-weight-bold px-7"
                      @click="submitForm"
                  >
                    保存
                  </v-btn>
                </v-col>
              </v-row>
            </v-form>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </div>
</template>

<script>
// @ is an alias to /src
import {mapActions} from "vuex";

export default {
  name: "ChangeProfile",
  computed: {
    isRequired() {
      return this.$store.state.User.user.updateProfileError;
    },
  },
  data() {
    return {
      user: {
        name: "",
      },
      errors: [],
      valid: true,
      nameRules: [
        (v) => !!v || "お名前は必須項目です",
        (v) => (v && v.length <= 255) || "1~255桁以内で入力してください",
      ],
      items: [
        {
          text: "ダッシュボード",
          disabled: false,
          href: "/",
        },
        {
          text: "プロフィール",
          disabled: true,
          href: "breadcrumbs_link_1",
        },
      ],
    };
  },
  async created() {
    await this.getUser();
  },
  methods: {
    ...mapActions(["updateProfile", "getUserProfile"]),
    async submitForm() {
      if (!this.$refs.form.validate()) return;
      let data = {
        name: this.user.name,
        username: this.getUserName(),
      };
      let res = await this.updateProfile(data);
      let stt = res.response_code;
      if (stt == 500) return this.errors = [res.response_message];
      if (stt == 400) return this.errors = res.response_message;
      this.$root.SnackBar.show({
        message: this.$i18n.t("success-message.update-profile"),
        color: "light-green accent-4",
      });
      this.errors = [];
    },
    async getUser() {
      let data = {
        username: this.getUserName(),
      };
      let json = await this.getUserProfile(data);
      if (json.data.response_code != 200) {
        this.user.name = "";
      } else {
        this.user.name = json.data.data.fullName;
      }
    },
    getUserName() {
      let local = localStorage.getItem("USER");
      let data = JSON.parse(local);
      return data.userName;
    },
  },
  mounted() {
    this.$store.commit('SET_ACTIVE_MENU', null);
  }
};
</script>
<style>
.pd-0 {
  padding: 0;
}

.pd-0.v-list-item .v-list-item__content {
  padding: 0 !important;
}
</style>
