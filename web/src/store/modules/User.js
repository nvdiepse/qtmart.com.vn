import UserService from "../../services/AuthService";

const User = {
  state: () => ({
    user: {
      updateProfileError: false,
      changePasswordError: false,
    },
  }),
  mutations: {
    SET_UPDATE_PROFILE_ERROR(state, val) {
      state.user.updateProfileError = val;
    },
    SET_CHANGE_PASSWORD_ERROR(state, val) {
      state.user.changePasswordError = val;
    },
  },
  actions: {
    async changePassword({ commit }, data) {
      let jsonString = await UserService.changePassword(data);
      let json = await JSON.parse(JSON.stringify(jsonString.data));
      if (json.response_code != 200) {
        commit("SET_CHANGE_PASSWORD_ERROR", true);
      } else {
        commit("SET_CHANGE_PASSWORD_ERROR", false);
      }
      return json;
    },
    async updateProfile({ commit }, data) {
      try {
        let jsonString = await UserService.updateProfile(data);
        let json = await JSON.parse(JSON.stringify(jsonString.data));
        if (json.response_code != 200) {
          commit("SET_UPDATE_PROFILE_ERROR", true);
        } else {
          commit("SET_UPDATE_PROFILE_ERROR", false);
          let user = localStorage.getItem("USER");
          let newUser = JSON.parse(user);
          newUser.fullName = data.name;
          localStorage.setItem("USER", JSON.stringify(newUser));
          commit("SET_PROFILE_FULLNAME", data.name);
        }
        return json;
      } catch (e) {
        throw new Error(e);
      }
    },
    async getUserProfile(state, data) {
      let jsonString = await UserService.getUser(data.username);
      return jsonString;
    },
  },
  getters: {},
};

export default User;
