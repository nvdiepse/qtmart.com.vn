<template>
  <v-snackbar :color="color" :timeout="timer" v-model="showSnackbar" top right class="pt-12">
    <v-icon left>{{ icon }}</v-icon
    >{{ message }}
    <v-icon class="float-right" @click="close()">{{ iconRight }}</v-icon>
  </v-snackbar>
</template>

<script>
export default {
  name: "vtoast",
  data() {
    return {
      showSnackbar: false,
      message: "",
      color: "success",
      icon: "mdi-check",
      timer: 2000,
      iconRight: "mdi-close",
    };
  },
  methods: {
    show(data) {
      this.showSnackbar = true;
      this.message = data.message || 'missing "message".';
      this.color = data.color || "success";
      this.timer = data.timer || 2000;
      this.icon = data.icon || "mdi-check";
    },
    close() {
      this.showSnackbar = false;
    },
  },
};
</script>
<style>
  .v-application .v-snack .red.accent-4 {
    background-color: #EC6363!important;
  }
</style>