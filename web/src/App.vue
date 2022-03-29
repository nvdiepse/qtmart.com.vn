<template>
  <router-view></router-view>
</template>
<script>
export default {
  name: "App",
  components: {},
  data: () => ({}),
  computed: {},
  watch: {
    $route: {
      immediate: true,
      handler(to) {
        document.title = to.meta.title || "BrainLab";
      },
    },
  },
  mounted() {},
  created() {},
};
</script>
<style lang="scss"></style>
