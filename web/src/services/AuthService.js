import Api from "./ApiService";
import {
  CHANGE_PASSWORD,
  GET_USER,
  LOGIN,
  LOGOUT,
  UPDATE_PROFILE,
} from "../constants/api-constants";

const login = async (user) => {
  return await Api.postRequest(LOGIN, user);
};

const logout = async (userName) => {
  return await Api.postRequest(LOGOUT, userName);
};

const getUser = async (userName) => {
  let url = GET_USER + "?username=" + userName;
  return await Api.getRequest(url);
};

const updateProfile = async (data) => {
  return await Api.postRequest(UPDATE_PROFILE, data);
};

const changePassword = async (data) => {
  return await Api.postRequest(CHANGE_PASSWORD, data);
};

const updateUserLocalstorage = (data) => {
  localStorage.setItem("USER", JSON.stringify(data));
};

const updateRefreshTokenLocalstorage = (data) => {
  localStorage.setItem("RF_TOKEN", data);
};

const updateTokenLocalstorage = (data) => {
  localStorage.setItem("TOKEN", data);
};

const getTokenFromStorage = () => {
  return localStorage.getItem("TOKEN");
};

const getUserFromStorage = () => {
  return localStorage.getItem("USER");
};

const clearStorage = () => {
  localStorage.clear();
};

export default {
  login,
  logout,
  getUser,
  updateProfile,
  changePassword,
  updateUserLocalstorage,
  updateRefreshTokenLocalstorage,
  updateTokenLocalstorage,
  getTokenFromStorage,
  clearStorage,
  getUserFromStorage
};
