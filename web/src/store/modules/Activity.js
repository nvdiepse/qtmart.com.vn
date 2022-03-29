import ActivityService from "../../services/ActivityService";
const activity = {
  state: () => ({
    targetSegments: [],
    stage_id: "",
    senario_template_type: "",
    senario_template_name: "",
    senario_template_id: "",
    senario_id: "",
    senario_name: "",
    segment_name: "",
    sub_segment: [],
    action_mail: {
      id: 1,
      children: [],
    },
    counter: 2,
  }),
  mutations: {
    SET_TARGET_SEGMENT(state, data) {
      state.targetSegments = data;
    },
    SET_STAGE_ID(state, data) {
      state.stage_id = data;
    },
    SET_SENARIO_TEMPLATE_TYPE(state, data) {
      state.senario_template_type = data;
    },
    SET_SENARIO_TEMPLATE_NAME(state, data) {
      state.senario_template_name = data;
    },
    SET_SENARIO_NAME(state, data) {
      state.senario_name = data;
    },
    SET_SENARIO_TEMPLATE_ID(state, data) {
      state.senario_template_id = data;
    },
    SET_SENARIO_ID(state, data) {
      state.senario_id = data;
    },
    SET_SUB_SEGMENT(state, data) {
      state.sub_segment = data;
    },
    SET_SEGMENT_NAME(state, data) {
      state.segment_name = data;
    },
    UPDATE_COUNTER(state, data) {
      state.counter = data;
    }
  },
  actions: {
    setTargetSegments({commit}, data) {
      commit("SET_TARGET_SEGMENT", data);
    },
    setStageID({commit}, data) {
      commit("SET_STAGE_ID", data);
    },
    setSenarioTemplateType({commit}, data) {
      commit("SET_SENARIO_TEMPLATE_TYPE", data);
    },
    setSenarioTemplateId({commit}, data) {
      commit("SET_SENARIO_TEMPLATE_ID", data);
    },
    setSenarioID({commit}, data) {
      commit("SET_SENARIO_ID", data);
    },
    setSenarioName({commit}, data) {
      commit("SET_SENARIO_NAME", data);
    },
    setSenarioTemplateName({commit}, data) {
      commit("SET_SENARIO_TEMPLATE_NAME", data);
    },
    setSubSegment({commit}, data) {
      commit("SET_SUB_SEGMENT", data);
    },
    setSegmentName({commit}, data) {
      commit("SET_SEGMENT_NAME", data);
    },
    async store(state, data) {
      return await ActivityService.store(data);
    },
    addCounter({commit}, data) {
      commit("UPDATE_COUNTER", data);
    }
  },
  getters: {
    getTargetSegments: state => {
      return state.targetSegments;
    },
    getStage: state => {
      return state.stage_id;
    },
    getSenarioTemplateType: state => {
      return state.senario_template_type;
    },
    getSenarioTemplateId: state => {
      return state.senario_template_id;
    },
    getSenarioId: state => {
      return state.senario_id;
    },
    getSubSegments: state => {
      return state.sub_segment;
    },
    getActionMail: state => {
      return state.action_mail;
    },
    getCounter: state => {
      return state.counter;
    },
    getSenarioName: state => {
      return state.senario_name;
    },
    getSenarioTemplateName: state => {
      return state.senario_template_name;
    },
    getSegmentName: state => {
      return state.segment_name;
    },
  },
};

export default activity;
