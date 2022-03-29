<template>
  <div>
    <v-breadcrumbs :items="items" class="breadcrumbs">
      <template v-slot:divider>
        <div class="breadcrumbs-divider"></div>
      </template>
    </v-breadcrumbs>
    <v-container fluid>
      <v-row class="mt-4">
        <v-col cols="12">
          <h2 class="mb-5 grey--text">パスワード変更</h2>
          <v-card class="mx-auto card-login-form pa-5" elevation="2">
            <v-form
              ref="form"
              class="mt-3 mb-3"
              lazy-validation
              v-model="valid"
            >
              <v-row class="mt-4">
                <v-col md="4" align-self-left>
<!--                  <v-alert-->
<!--                      dense-->
<!--                      type="error"-->
<!--                      v-if="errors.length > 0"-->
<!--                  >-->
<!--                    <ul>-->
<!--                      <li v-for="item in errors" :key="item"> {{ item }}</li>-->
<!--                    </ul>-->
<!--                  </v-alert>-->
                  <v-text-field
                    v-model="form.old_password"
                    label="現在のパスワード (*)"
                    dense
                    outlined
                    type="password"
                    :rules="oldPasswordRules"
                  ></v-text-field>

                  <v-text-field
                    v-model="form.password"
                    label="新しいパスワード (*)"
                    dense
                    outlined
                    type="password"
                    :rules="passwordRules"
                  ></v-text-field>

                  <v-text-field
                    v-model="form.new_confirm_password"
                    label="新しいパスワード（確認用）(*)"
                    dense
                    outlined
                    type="password"
                    :rules="confirmPasswordRules"
                  ></v-text-field>

                  <v-btn
                    rounded
                    color="success"
                    class="light-green accent-4 px-7 justify-center align-center font-weight-bold"
                    @click="submitChangePassword"
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
import { mapActions } from "vuex";
export default {
  name: "ResetPass",
  data() {
    return {
      valid: true,
      errors: [],
      form: {
        password: "",
        old_password: "",
        new_confirm_password: "",
      },
      passwordRules: [
        (v) => !!v || "新しいパスワードは必須項目です",
        (v) => (v && v.length <= 255) || "1~255桁以内で入力してください",
        (v) => (new RegExp('^[a-zA-Z0-9!"#$%&\'()-^@\\[;:\\],.\\/\\\\=~|`{+*}<>?_]+$').test(v)) || "半角英数字記号で入力してください",
      ],
      oldPasswordRules: [
        (v) => !!v || "現在のパスワードは必須項目です",
        (v) => (v && v.length <= 255) || "1~255桁以内で入力してください",
        (v) => (new RegExp('^[a-zA-Z0-9!"#$%&\'()-^@\\[;:\\],.\\/\\\\=~|`{+*}<>?_]+$').test(v)) || "半角英数字記号で入力してください",
      ],
      confirmPasswordRules: [
        (v) => v == this.form.password || "新しいパスワードと一致しません",
        (v) => !!v || "新しいパスワード（確認用）は必須項目です",
        (v) => (v && v.length <= 255) || "1~255桁以内で入力してください"
      ],
      items: [
        {
          text: "ダッシュボード",
          disabled: false,
          href: "/",
        },
        {
          text: "パスワード変更",
          disabled: true,
          href: "breadcrumbs_link_1",
        },
      ],
    };
  },
  methods: {
    ...mapActions(["changePassword"]),
    async submitChangePassword() {
      if (!this.$refs.form.validate()) return;
      let data = {
        password: this.form.password,
        old_password: this.form.old_password,
        new_confirm_password: this.form.new_confirm_password,
        username: this.getUserName(),
      };
      let res = await this.changePassword(data);
      console.log(res);

      let stt = res.response_code;
      if (stt == 500) {
        this.$root.SnackBar.show({
          message: res.response_message,
          color: "red accent-4",
          icon: "mdi-alert"
        });
        return;
      }
      if (stt == 400) {
        this.$root.SnackBar.show({
          message: this.$i18n.t("error-message.update-password"),
          color: "red accent-4",
          icon: "mdi-alert"
        });
        return;
      }

      this.$root.SnackBar.show({
        message: this.$i18n.t("success-message.update-password"),
        color: "light-green accent-4",
      });
      this.errors = [];
      this.clearData();
      this.$refs.form.reset();
    },
    clearData() {
      this.form.old_password = "";
      this.form.password = "";
      this.form.new_confirm_password = "";
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
.breadcrumbs li a:hover {
  text-decoration: underline;
}
.breadcrumbs {
  display: inline-flex !important;
  padding: 6px 10px !important;
}
.breadcrumbs .v-breadcrumbs__item {
  color: #6dd400 !important;
}
.breadcrumbs .v-breadcrumbs__item--disabled {
  color: rgba(0, 0, 0, 0.38) !important;
}
</style>
