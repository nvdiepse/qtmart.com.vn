import Api from "./ApiService";
import {
  MAIL_TEMPLATE_URL,
  GET_FROM_EMAILS,
  REPLACE_TEXT_BY_SENARIO,
  MAIL_FROM_URL,
  MAIL_REPLACE_TEXT_URL,
  MAIL_TO_URL, MAIL_SEND_DEMO_URL,
} from "../constants/api-constants";

const getDetailMailTemplate = async (mailId) => {
  let url = MAIL_TEMPLATE_URL + mailId;
  return await Api.getRequest(url);
};

const createMailTemplate = async (data) => {
  return await Api.postRequest(MAIL_TEMPLATE_URL, data);
};

const getReplaceTextBySenarioTemplateId = async (data) => {
  return await Api.getRequest(REPLACE_TEXT_BY_SENARIO, data);
};

const getToEmails = async () => {
  return await Api.getRequest(MAIL_TO_URL);
};

const getFromEmails = async () => {
  return await Api.getRequest(GET_FROM_EMAILS);
};

const getBySenarioTemplateId = async (data) => {
  return await Api.getRequest(MAIL_TEMPLATE_URL, data);
};

const getListMailTemplate = (query) => {
  return Api.getRequest(MAIL_TEMPLATE_URL, query, false);
};

const deleteMailTemplate = (id) => {
  return Api.deleteRequest(MAIL_TEMPLATE_URL + "/" + id, {}, false);
};

const getMailFromList = () => {
  return Api.getRequest(MAIL_FROM_URL);
};

const getMailToList = (templateId) => {
  return Api.getRequest(MAIL_TO_URL, { senario_template_id: templateId });
};

const getReplaceText = (templateId) => {
  return Api.getRequest(MAIL_REPLACE_TEXT_URL, {
    senario_template_id: templateId,
  });
};

const saveMailTemplate = (data) => {
  return Api.postRequest(MAIL_TEMPLATE_URL, data);
};

const sendDemoEmail = (data) => {
  return Api.postRequest(MAIL_SEND_DEMO_URL, data);
}

export default {
  getDetailMailTemplate,
  createMailTemplate,
  getReplaceTextBySenarioTemplateId,
  getToEmails,
  getFromEmails,
  getBySenarioTemplateId,
  saveMailTemplate,
  getReplaceText,
  getMailToList,
  getMailFromList,
  deleteMailTemplate,
  getListMailTemplate,
  sendDemoEmail
};
