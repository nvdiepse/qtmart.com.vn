import axios from 'axios';

const getRequest = async (url, params) => {
    return await axios.get(url, params);
}

const postRequest = async (url, payload) => {
    return await axios.post(url, payload);
}
export default {
    getRequest,
    postRequest
}
