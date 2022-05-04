import axios from "axios";
import {REFRESH_TOKEN} from "../constants/api-constants";
import {UNAUTHORIZED} from "../constants/common";

let headers = {
  Accept: "application/json",
  "Content-type": "application/json",
  "Access-Control-Allow-Origin": "*",
};

//axios interceptors add header
axios.interceptors.request.use(function (config) {
  const token = "Bearer " + localStorage.getItem("TOKEN");
  config.headers.Authorization = token;
  return config;
});

const postRequest = async (url, payload) => {
  let data = await axios.post(url, payload, {
    headers,
  });
  let expired = await checkTokenExpired(data.data.response_code);

  let rfToken = localStorage.getItem("RF_TOKEN");
  if (expired && rfToken) {
    await refreshToken();
    return await postRequest(url, payload);
  }
  return data;
};

const deleteRequest = async (url, payload, loading = true) => {
  let client;
  if (loading) {
    client = axios;
  } else {
    client = axios.create();
    addHeader(client);
  }

  let data = await client.delete(url, {
    headers,
    data: payload
  });
  let expired = await checkTokenExpired(data.data.response_code);

  let rfToken = localStorage.getItem("RF_TOKEN");
  if (expired && rfToken) {
    await refreshToken();
    return await postRequest(url, payload, loading);
  }
  return data;
};

const getRequest = async (url, params, loading = true) => {
  let client;
  if (loading) {
    client = axios;
  } else {
    client = axios.create();
    addHeader(client);
  }

  let data = await client.get(url, {
    headers,
    params
  });

  let expired = await checkTokenExpired(data.data.response_code);
  let rfToken = localStorage.getItem("RF_TOKEN");

  if (expired && rfToken) {
    await refreshToken();
    return await getRequest(url, params, loading);
  }
  return data;
};

const checkTokenExpired = async (status) => {
  return status == UNAUTHORIZED;
};

const refreshToken = async () => {
  const user = JSON.parse(localStorage.getItem("USER"));
  const data = {
    refresh_token: localStorage.getItem("RF_TOKEN"),
    username: user.userName,
  };
  const result = await axios.post(REFRESH_TOKEN, data);
  if (result) {
    localStorage.setItem("TOKEN", result.data.data.access_token);
    localStorage.setItem("RF_TOKEN", result.data.data.refresh_token);
  }
};

const addHeader = (client) => {
  client.interceptors.request.use(function (config) {
    config.headers.Authorization = "Bearer " + localStorage.getItem("TOKEN");
    return config;
  });
}

export default {
  postRequest,
  getRequest,
  deleteRequest
};
