<template>
  <div>
    <v-alert
        dense
        type="error"
        v-if="message.length > 0"
    >
      <ul>
        <li v-for="item in message" :key="item"> {{ item }}</li>
      </ul>
    </v-alert>
  </div>
</template>

<script>
export default {
  name: "MessageErrorBackend",
  props: ["message"],
};
</script>
