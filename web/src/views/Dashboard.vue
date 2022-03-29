<template>
  <div class="home">
    <SenarioTemplate/>
    <SenarioList/>
  </div>
</template>

<script>
// @ is an alias to /src
import SenarioList from '@/components/senario/SenarioList.vue'
import SenarioTemplate from '@/components/senario/SenarioTemplate.vue'

export default {
  name: 'DashBoard',
  components: {
    SenarioList,
    SenarioTemplate
  },
  mounted() {
    this.$store.commit('SET_ACTIVE_MENU', 0);
  }
}
</script>
