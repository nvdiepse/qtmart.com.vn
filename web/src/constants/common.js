export const UNAUTHORIZED = 401;
export const BAD_REQUEST = 400;
export const SERVER_ERROR = 500;
export const SUCCESS = 200;

// export SCHEDULE_TYPE = [
//   "" => "",
// ];
export let TIME_UNIT_TYPES = [
  {
    text: "日ごと",
    value: "1"
  },
  {
    text: "週ごと",
    value: "2"
  },
  {
    text: "ヶ月",
    value: "3"
  },
];

export let TIME_UNIT_VALUES = getDataByNumber(12);

export let SEND_TIMES = getDataByNumber(23, 0);

export const getTargetDatas = (senario_template_type) => {
  switch (senario_template_type) {
    case "TRN_ATTRACT_PROFILE":
      return getAttractProfile();
    case "TRN_CLOSE_PROFILE":
      return getCloseProfile();
    case "TRN_DIGGING_PROFILE":
      return getDiggingProfile();
    case "TRN_JOINED_PROFILE":
      return getJoinedProfile();
  }
}

function getJoinedProfile() {
  return [
    {
      text: "成約日",
      value: "trn_joined_profile.contract_date",
    },
    {
      text: "入社日",
      value: "trn_joined_profile.end_date",
    },
    {
      text: "フォロー終了予定日",
      value: "trn_joined_profile.follow_end_date",
    },

  ];
}

function getDiggingProfile() {
  return [
    {
      text: "未決定",
      value: "trn_digging_profile.contract_date",
    },
  ];
}

function getCloseProfile() {
  return [
    {
      text: "面接実施日 ",
      value: "trn_close_profile.interview_date",
    },
    {
      text: "内定日",
      value: "trn_close_profile.unofficialdicdate",
    },
    {
      text: "入社予定日",
      value: "trn_close_profile.entdate",
    },
  ];
}

function getAttractProfile() {
  return [
    {
      text: "求人更新日付",
      value: "trn_attract_profile.job_update_date",
    },
    {
      text: "企業との取引オープン日",
      value: "trn_attract_profile.open_transation_date",
    },
  ];
}

export const SEND_TIME_BEFORE_AFTER_TYPE = [
  {
    text: "日前",
    value: "1"
  },
  {
    text: "日後",
    value: "4"
  },
  {
    text: "週前",
    value: "2"
  },
  {
    text: "週後",
    value: "5"
  },
  {
    text: "月前",
    value: "3"
  },
  {
    text: "月後",
    value: "6"
  }
];

export const SEND_TIME_BEFORE_AFTER = getDataByNumber(12);

export const KIND_OF_DAY = [
  {
    text: "日曜",
    value: "0"
  },
  {
    text: "月曜",
    value: "1"
  },
  {
    text: "火曜",
    value: "2"
  },
  {
    text: "水曜",
    value: "3"
  },
  {
    text: "木曜",
    value: "4"
  },
  {
    text: "金曜",
    value: "5"
  },
  {
    text: "土曜",
    value: "6"
  },
];

export const SEND_TIME_DAY = getDataByNumber(5);

export const DAYS_IN_MONTH = getDataByNumber(31);

function getDataByNumber(value, start = 1) {
  let arr = [];
  let lastDay = value;
  for (let i = start; i <= lastDay; i++) {
    let obj = {
      text: i,
      value: i,
    };
    arr.push(obj);
  }
  return arr;
}

export const DAY = "1";
export const WEEK = "2";
export const MONTH = "3";

export const SCHEDULE_TYPE_TYPE_1 = 1 //日時指定/
export const SCHEDULE_TYPE_TYPE_2 = 2 //日付データ指定
export const SCHEDULE_TYPE_TYPE_3 = 3 //繰り返し

export const SEND_TIME_TYPE_1 = 1 //毎月/
export const SEND_TIME_TYPE_2 = 2 //毎月第/
export const SEND_TIME_TYPE_3 = 3 //月末/

export let EXPIRED_CONDITION_TIME = getDataByNumber(23, 0);
export let EXPIRED_CONDITION_DATE = getDataByNumber(31, 1);
export let HOUR_LIST = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23];
export const DAY_IN_WEEKS = [
	{key: '1', value: "月"},
	{key: '2', value: "火"},
	{key: '3', value: "水"},
	{key: '4', value: "木"},
	{key: '5', value: "金"},
	{key: '6', value: "土"},
	{key: '0', value: "日"},
];
export const isDuplicateActivity = () => {
  let url = window.location.pathname;
  return url.search("duplicate") > 0;
};
