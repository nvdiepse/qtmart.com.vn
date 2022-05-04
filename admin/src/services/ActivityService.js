import Api from "./ApiService";
import {
  ACTIVITY_URL,
  ACTIVITY_CREATE
} from "@/constants/api-constants.js";
import {
  MAIL_FROM_URL,
  MAIL_TEMPLATE_BY_SENARIO_TEMPLATE,
  MAIL_TO_URL,
  MAIL_REPLACE_TEXT_URL, ACTIVITY_UPDATE
} from "../constants/api-constants";

const deleteActivity = (id) => {
    return Api.deleteRequest(ACTIVITY_URL + '/' + id);
};

const setStatusInactive = (id) => {
  return Api.postRequest(ACTIVITY_URL + '/' + id + '/status');
};

const store = async (data) => {
  return await Api.postRequest(ACTIVITY_CREATE, data);
};

const updateById = async (id, data) => {
  let url = ACTIVITY_UPDATE + '/' + id;
  return await Api.postRequest(url, data);
};

const getMailTemplates = async (senarioTemplateId) => {
  let url = MAIL_TEMPLATE_BY_SENARIO_TEMPLATE + "?senario_template_id=" + senarioTemplateId;
  return await Api.getRequest(url);
}

const getMailFrom = async () => {
  return await Api.getRequest(MAIL_FROM_URL);
}

const getMailTo = async (templateId) => {
  let url = MAIL_TO_URL  + "?senario_template_id=" + templateId;
  return await Api.getRequest(url);
}
const getReplaceTexts = async (senarioTemplateId) => {
  let url = MAIL_REPLACE_TEXT_URL  + "?senario_template_id=" + senarioTemplateId;
  return await Api.getRequest(url);
}

const getActivityReport = async (activityId) => {
  let url = ACTIVITY_URL + "/detail/" + activityId;
  return await Api.getRequest(url);
}
export default {
  deleteActivity,
  setStatusInactive,
  store,
  getMailTemplates,
  getMailFrom,
  getMailTo,
  getReplaceTexts,
  getActivityReport,
  updateById
};