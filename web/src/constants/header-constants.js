export const SCENARIO_HEADER = [
    {text: "ID", value: "id", sortable: false},
    { text: "シナリオ名", value: "name", width: "25%", sortable: false },
    { text: "シナリオタイプ", value: "scenario_name", width: "20%", sortable: false },
    { text: "ターゲット", value: "target_name", width: "20%" , sortable: false},
    { text: "対象件数", value: "item_count", width: "6%", sortable: false},
    { text: "セグメント", value: "segment_name", width: "12%" , sortable: false,
        cellClass: "text-center" ,
        align: "center"
    },
    { text: "", value: "link" ,sortable: false, width: "8%"},
]

export const USER_HEADER = [
    {
        text: "ID",
        value: "val1",
    },
    { text: "シナリオ名", value: "val2" },
    { text: "シナリオタイプ", value: "val3" },
    { text: "ターゲット", value: "val4" },
    { text: "対象件数", value: "val5" },
    { text: "セグメント", value: "val6" },
    { text: "", value: "val7" ,sortable: false},
]

export const MAIL_HEADER = [
    {text: "ID", value: "id", sortable: false},
    { text: "テンプレート名", value: "name", sortable: false, width: "25%"},
    { text: "シナリオタイプ", value: "scenario_template_name", sortable: false, width: "20%"},
    { text: "最終更新日\n更新者", value: "updated_at", sortable: false , width: "20%"},
    { text: "作成日\n作成者", value: "created_at", sortable: false, width: "20%"},
    { text: "", value: "action", align: 'end', width: '60', sortable: false},
]

export const ACTIVITY_HEADER = [
    {text: "ID", value: "id", sortable: false, width: "4%"},
    { text: "アクティビティ名", value: "name" ,sortable: false , width: "20%"},
    { text: "対象セグメント", value: "sub_segment_name", sortable: false, width: "15%" },
    { text: "ステータス", value: "status", sortable: false, width: "10%" },
    { text: "実施回数", value: "execute_times" , sortable: false , width: "7%"},
    { text: "対象数", value: "target_count" ,sortable: false},
    { text: "開封率", value: "open_rate" ,sortable: false, width: "10%"},
    { text: "クリック", value: "url_click_count" ,sortable: false},
    { text: "ユニーククリック", value: "unique_click_count" ,sortable: false},
    { text: "クリック率", value: "click_rate" , sortable: false},
    { text: "", value: "action", align: 'end', width: '5%', sortable: false},
]