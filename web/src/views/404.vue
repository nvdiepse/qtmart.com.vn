<template>
  <v-row class="mt-9">
    <v-col md="8" offset-md="2" class="mt-9" align-self="center">
      <div class="bg-page">
        <img src="../assets/bg-top.png" />
        <img src="../assets/bg-bottom.png" />
      </div>
      <v-card
        class="mx-auto card-login-form card-404 pa-5 mt-5 text-center"
        elevation="0"
        max-width="600"
      >
        <p><img src="../assets/404.png" /></p>
        <h1 class="grey--text mt-0">Not Found</h1>
        <h2 class="mt-6">提供されたページが存在しません</h2>
        <p>対象のデータが削除されたか、URLが間違っています</p>
      </v-card>
      <div class="text-center mt-8">
        <v-btn
          color="success"
          class="light-green accent-4 px-4"
          width="160px"
          rounded
        >
          前のページに戻る
        </v-btn>
      </div>
    </v-col>
  </v-row>
</template>

<style lang="scss">
.card-404{
  border: 1px solid #ccc !important;
}
</style>
