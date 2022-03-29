import Api from "./ApiService";
import {
    ACTIVITY_STAGE_URL, ACTIVITY_URL,
    SCENARIO_LIST_URL,
    SCENARIO_TYPE_URL,
    TEMPLATE_SEGMENT_URL,
    TEMPLATE_TARGET_URL
} from "@/constants/api-constants.js";
class SenarioService {
    getAllScenario(query) {
        return Api.getRequest(SCENARIO_LIST_URL, query, false);
    }

    getAllType() {
        return Api.getRequest(SCENARIO_TYPE_URL);
    }

    getTemplateTarget(id) {
        return Api.getRequest(TEMPLATE_TARGET_URL,  { template_scenario_id: id } )
    }

    getTemplateSegment(id) {
        return Api.getRequest( TEMPLATE_SEGMENT_URL,{ template_scenario_id: id } )
    }

    getSegmentDetail(id, query) {
        return Api.getRequest(TEMPLATE_SEGMENT_URL + '/' + id, query);
    }

    createSenario(data) {
        return Api.postRequest(SCENARIO_LIST_URL, data);
    }

    getSenarioDettail(id) {
        return Api.getRequest(SCENARIO_LIST_URL + '/' + id);
    }

    getSenarioStage(id) {
        return Api.getRequest(ACTIVITY_STAGE_URL, {scenario_id: id});
    }

    getSenarioActivity(query) {
        return Api.getRequest(ACTIVITY_URL, query, false);
    }

    getStageActivity(id, query) {
        return Api.getRequest(ACTIVITY_STAGE_URL + '/' + id, query, false);
    }

}

export default new SenarioService();
