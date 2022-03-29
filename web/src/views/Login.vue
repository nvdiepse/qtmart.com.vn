<template>
  <v-row>
    <v-col md="6" offset-md="3" align-self-center>
      <div class="bg-page">
        <img src="../assets/bg-top.png" />
        <img src="../assets/bg-bottom.png" />
      </div>
      <div class="logo-login text-center">
        <img width="100" class="mx-auto" src="../assets/logo-saber.svg" />
      </div>
      <v-card
        class="mx-auto card-login-form pa-5 mt-5"
        elevation="4"
        max-width="344"
      >
        <v-form
          ref="form"
          class="mt-3 mb-3 text-center"
          lazy-validation
          @submit.prevent="submitLogin"
          method="post"
        >
          <v-alert
            outlined
            icon="mdi-exclamation"
            color="red"
            type="error"
            v-if="getFlError"
            class="login-alert"
          >{{ getMessageErr }}</v-alert>

          <v-text-field
            v-model="user.username"
            label="ID"
            dense
            outlined
            required
            :rules="rules"
          ></v-text-field>
          <v-text-field
            v-model="user.password"
            type="password"
            label="パスワード"
            dense
            outlined
            required
            :rules="rules"
          ></v-text-field>
          <v-btn
            rounded
            color="success"
            class="light-green accent-4 px-7"
            type="submit"
          >
            ログイン
          </v-btn>
        </v-form>
      </v-card>
    </v-col>
  </v-row>
</template>

<script>
import { mapActions, mapGetters } from "vuex";
import { required, minLength } from "vuelidate/lib/validators";
export default {
  name: "Login",
  data() {
    return {
      user: {
        username: "",
        password: "",
      },
      isError: false,
      rules: [
        v => !!v.trim()
      ]
    };
  },
  computed: {
    ...mapGetters(["getFlError", "getMessageErr"]),
  },
  mounted() {},
  validations: {
    user: {
      username: {
        required,
        minLength: minLength(1),
      },
      password: {
        required,
        minLength: minLength(1),
      },
    },
  },
  methods: {
    ...mapActions(["login"]),
    async submitLogin() {
      this.$v.$touch();
      if (this.$v.$invalid) return;
      await this.login(this.user);
    },
  },
};
</script>
<style lang="scss">
.bg-page {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #fbfbfb;
  img:first-child {
    position: absolute;
    top: 0;
    left: 0;
  }
  img:last-child {
    position: absolute;
    bottom: 0;
    right: 0;
  }
}
.logo-login {
  position: relative;
  z-index: 1;
  margin-top: 100px;
}
.v-alert--outlined .v-alert__icon {
    color: white !important;
    background: red !important;
}
.login-alert .v-alert__content {
  display: inline-block !important;
}
</style>
