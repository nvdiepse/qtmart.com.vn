import UserService from "../../services/AuthService";
import router from "../../router/index";

const auth = {
  state: () => ({
    isLoggedIn: localStorage.getItem("TOKEN") ? true : false,
    flError: false,
    message: "",
    user: JSON.parse(localStorage.getItem("USER")) || {
      userName: "",
      fullName: "",
      email: "",
    }
  }),
  mutations: {
    SET_STATUS_LOGIN(state, status) {
      state.isLoggedIn = status;
    },
    SET_FL_ERROR(state, status) {
      state.flError = status;
    },
    SET_MESSAGE_ERROR(state, message) {
      state.message = message;
    },
    SET_USER(state, user) {
      state.user.userName = user.userName;
      state.user.fullName = user.fullName;
      state.user.email = user.email;
    },
    SET_PROFILE_FULLNAME(state, val) {
      state.user.fullName = val;
    }
  },
  actions: {
    async login({ dispatch }, user) {
      try {
        let json = await UserService.login(user);
        await dispatch("isLoggedIn", json);
      } catch (e) {
        await dispatch("isLoggedInFailure", e.response.data.response_message);
        throw new Error(e);
      }
    },

    async isLoggedInFailure({ commit }, message) {
      await commit("SET_STATUS_LOGIN", false);
      await commit("SET_FL_ERROR", true);
      await commit("SET_MESSAGE_ERROR", message);
    },

    async isLoggedIn({ commit }, json) {
      await commit("SET_STATUS_LOGIN", true);
      await commit("SET_USER", json.data.data.user);
      localStorage.setItem("TOKEN", json.data.data.access_token);
      localStorage.setItem("RF_TOKEN", json.data.data.refresh_token);
      localStorage.setItem("USER", JSON.stringify(json.data.data.user));
      let token = localStorage.getItem("TOKEN");
      if (token) {
        router.push({ path: "/" }).catch(() => { });
      }
    },

    async logout({ commit }, user) {
      let res = await UserService.logout(user);
      if (res.data.response_code == 200) {
        commit("SET_STATUS_LOGIN", false);
        localStorage.clear();
        router.push({ path: "/login" });
      }
    },

    setFlError({ commit }, status) {
      commit("SET_FL_ERROR", status);
    },
  },
  getters: {
    getFlError: (state) => {
      return state.flError;
    },
    getMessageErr: (state) => {
      return state.message;
    },
  },
};

export default auth;
