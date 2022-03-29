<template>
  <v-container fluid>
    <ul class="v-breadcrumbs breadcrumbs theme--light">
      <li>
        <a href="/" class="v-breadcrumbs__item">ダッシュボード</a>
      </li>
      <li class="v-breadcrumbs__divider">
        <div class="breadcrumbs-divider"></div>
      </li>
      <li>
        <div class="v-breadcrumbs__item v-breadcrumbs__item--disabled">
          {{ this.getSenarioTemplateName() }}
        </div>
      </li>
    </ul>
    <h2 class="mb-4 grey--text mt-5">{{ this.getSenarioName() }}</h2>
    <v-form ref="form" lazy-validation v-model="valid">
      <v-card elevation="2">
        <h3 class="pa-3">アクティビティ作成</h3>
        <v-divider></v-divider>
        <div class="pa-4">
          <h3 class="font-weight-bold grey--text">対象セグメント</h3>
          <h1 style="font-size: 29px">{{ getSegment() }}</h1>
          <v-form ref="formName" lazy-validation v-model="validName">
            <v-row>
              <v-col cols="12" sm="6" md="6">
                <MessageErrorBackend :message="errors"/>
                <!-- alert err backend-->
                <v-text-field
                    label="アクティビティ名(*)"
                    outlined
                    dense
                    class="mt-2"
                    v-model="activity.name"
                    :rules="nameRules"
                ></v-text-field>
              </v-col>
            </v-row>
          </v-form>
          <p class="font-weight-bold">
            アクティビティ実行スケジュール <span class="red--text">(*)</span>
          </p>
          <v-radio-group v-model="activity.schedule_type">
            <ul class="radio-type">
              <li>
                <v-radio
                    label="繰り返し"
                    color="light-green accent-4"
                    :value="1"
                ></v-radio>
              </li>
              <li class="ml-5">
                <v-radio
                    label="日付データ指定"
                    color="light-green accent-4"
                    :value="2"
                ></v-radio>
              </li>
              <li class="ml-5">
                <v-radio
                    label="日時指定"
                    color="light-green accent-4"
                    :value="3"
                ></v-radio>
              </li>
            </ul>
          </v-radio-group>

          <!-- Radio 1 -->
          <div
              v-show="activity.schedule_type == 1"
              class="grey lighten-4 rounded pa-6 wrap-border"
          >
            <v-row class="mb-0 pb-0">
              <v-col cols="12" md="6" class="mb-0 pb-0">
                <p>繰り返す間隔</p>
                <v-form ref="formTimeUnit" lazy-validation v-model="validTimeUnit">
                  <v-row>
                    <v-col cols="12" md="6" class="mb-0">
                      <v-select
                          :items="time_unit_value"
                          dense
                          single-line
                          outlined
                          v-model="activity.r1_time_unit_value"
                          :rules="selectBoxRules"
                      >
                      </v-select>
                    </v-col>

                    <v-col cols="12" md="6" class="mb-0">
                      <v-select
                          :items="time_unit_type"
                          label="日ごと"
                          dense
                          single-line
                          outlined
                          v-model="activity.r1_time_unit_type"
                      ></v-select>
                    </v-col>
                  </v-row>
                </v-form>
              </v-col>
            </v-row>

            <!--  -->
            <v-row class="mt-0 mb-0" v-if="activity.r1_time_unit_type == 3">
              <v-col cols="12" md="6" class="mb-0 pb-0">
                <span> 送信タイミング</span>
                <v-form ref="formTimeMonth3" lazy-validation v-model="validTimeMonth3">
                  <v-row>
                    <v-col md="2" class="mb-0 pt-4">
                      <v-radio-group v-model="activity.r1_send_time_type">
                        <v-radio
                            label="月末"
                            color="light-green accent-4"
                            value="3"
                        ></v-radio>
                      </v-radio-group>
                    </v-col>
                    <v-col md="9" class="mb-0">
                      <v-select
                          :items="send_time"
                          dense
                          single-line
                          outlined
                          required
                          :disabled="this.activity.r1_send_time_type != 3"
                          v-model="activity.r1_send_time_type_3"
                          :rules="selectBoxTimeRules"
                      >
                      </v-select>
                    </v-col>
                    <v-col md="1" class="mb-0 pt-4">
                      <span class="description-input">時</span>
                    </v-col>
                  </v-row>
                </v-form>
                <v-form ref="formTimeMonth1" lazy-validation v-model="validTimeMonth1">
                  <v-row>
                    <v-col md="2" class="mb-0 pt-4">
                      <v-radio-group v-model="activity.r1_send_time_type">
                        <v-radio
                            label="月"
                            value="1"
                            color="light-green accent-4"
                            name="r1_send_time_type"
                        ></v-radio>
                      </v-radio-group>
                    </v-col>
                    <v-col md="4" class="mb-0">
                      <v-select
                          :items="day_in_month"
                          dense
                          single-line
                          outlined
                          v-model="activity.r1_day_in_month"
                          :disabled="this.activity.r1_send_time_type != 1"
                          :rules="selectBoxMonth1Rules"
                      >
                      </v-select>
                    </v-col>
                    <v-col md="1" class="mb-0 pt-4">
                      <span class="description-input">日</span>
                    </v-col>
                    <v-col md="4" class="mb-0">
                      <v-select
                          :items="send_time"
                          dense
                          single-line
                          outlined
                          :disabled="this.activity.r1_send_time_type != 1"
                          v-model="activity.r1_send_time_type_1"
                          :rules="selectBoxTimeRules"
                      >
                      </v-select>
                    </v-col>
                    <v-col md="1" class="mb-0 pt-4">
                      <span class="description-input">時</span>
                    </v-col>
                  </v-row>
                </v-form>
                <v-form ref="formTimeMonth2" lazy-validation v-model="validTimeMonth2">
                  <v-row>
                    <v-col md="2" class="mb-0 pt-4">
                      <v-radio-group v-model="activity.r1_send_time_type">
                        <v-radio
                            label="月第"
                            value="2"
                            color="light-green accent-4"
                            name="r1_send_time_type"
                        ></v-radio>
                      </v-radio-group>
                    </v-col>
                    <v-col md="2" class="mb-0">
                      <!-- send time day-->
                      <v-select
                          :items="send_time_day"
                          dense
                          single-line
                          outlined
                          :disabled="this.activity.r1_send_time_type != 2"
                          v-model="activity.r1_send_time_day"
                          :rules="selectBoxMonth2Rules"
                      >
                      </v-select>
                    </v-col>
                    <v-col md="3" class="mb-0">
                      <!-- kind of day -->
                      <v-select
                          :items="kind_of_day"
                          label="日曜"
                          dense
                          single-line
                          outlined
                          :disabled="this.activity.r1_send_time_type != 2"
                          v-model="activity.r1_kind_of_day"
                      >
                      </v-select>
                      <!-- end kind of day -->
                    </v-col>
                    <v-col md="1" class="mb-0 pt-4">
                    <span cols="1" class="description-input">
                      日
                    </span>
                    </v-col>
                    <v-col md="3" class="mb-0">
                      <!-- send time -->
                      <v-select
                          :items="send_time"
                          dense
                          single-line
                          outlined
                          :disabled="this.activity.r1_send_time_type != 2"
                          v-model="activity.r1_send_time_type_2"
                          :rules="selectBoxTimeRules"
                      >
                      </v-select>
                    </v-col>
                    <v-col md="1" class="mb-0 pt-4">
                      <span class="description-input">時</span>
                    </v-col>
                  </v-row>
                </v-form>
              </v-col>
            </v-row>
            <v-row
                class="mt-0 mb-0"
                v-else-if="activity.r1_time_unit_type == 2"
            >
              <v-form ref="formDayInWeek" lazy-validation v-model="validDayInWeek">
                <div>
                  <v-col cols="12" md="6" class="mb-0 pb-0">
                    <span>曜日</span>
                    <div class="day_of_week">
                      <v-checkbox
                          v-model="activity.r1_day_in_week"
                          label="月"
                          :multiple="true"
                          value="1"
                          :rules="selectBoxDayInWeekRules"
                      >月
                      </v-checkbox
                      >
                      <v-checkbox
                          v-model="activity.r1_day_in_week"
                          label="火"
                          :multiple="true"
                          value="2"
                          :rules="selectBoxDayInWeekRules"
                          hide-details
                      >火
                      </v-checkbox
                      >
                      <v-checkbox
                          v-model="activity.r1_day_in_week"
                          label="水"
                          :multiple="true"
                          value="3"
                          :rules="selectBoxDayInWeekRules"
                          hide-details
                      >水
                      </v-checkbox
                      >
                      <v-checkbox
                          v-model="activity.r1_day_in_week"
                          label="木"
                          :multiple="true"
                          value="4"
                          :rules="selectBoxDayInWeekRules"
                          hide-details
                      >木
                      </v-checkbox
                      >
                      <v-checkbox
                          v-model="activity.r1_day_in_week"
                          label="金"
                          :multiple="true"
                          value="5"
                          :rules="selectBoxDayInWeekRules"
                          hide-details
                      >金
                      </v-checkbox
                      >
                      <v-checkbox
                          v-model="activity.r1_day_in_week"
                          label="土"
                          :multiple="true"
                          value="6"
                          :rules="selectBoxDayInWeekRules"
                          hide-details
                      >土
                      </v-checkbox
                      >
                      <v-checkbox
                          v-model="activity.r1_day_in_week"
                          label="日"
                          :multiple="true"
                          value="0"
                          :rules="selectBoxDayInWeekRules"
                          hide-details
                      >日
                      </v-checkbox
                      >
                    </div>
                  </v-col>
                </div>
              </v-form>
            </v-row>
            <v-form ref="formTimingDay" lazy-validation v-model="validTimingDay">
              <v-row class="mt-0 mb-0" v-if="activity.r1_time_unit_type != 3">
                <v-col cols="12" md="3" class="mb-0 pb-0">
                  <p>送信タイミング</p>
                  <v-select
                      :items="send_time"
                      dense
                      item-text="text"
                      item-value="value"
                      single-line
                      outlined
                      v-model="activity.r1_send_time_unit_type_1"
                      :rules="selectBoxTimeRules"
                  >
                  </v-select>
                </v-col>
                <v-col cols="12" md="3" class="mb-0 pt-14">
                  <p>時</p>
                </v-col>
              </v-row>
            </v-form>
            <v-row class="mt-0 pb-0 mb-0">
              <v-col cols="12" md="6" class="mt-0 pb-0 mb-0">
                <v-form ref="formStartEndDate1" lazy-validation v-model="validStartEndDate1">
                  <v-row>
                    <v-col cols="12" md="6" class="mt-0">
                      <p>開始日</p>
                      <v-menu
                          ref="menu1"
                          v-model="menu1"
                          :close-on-content-click="false"
                          :return-value.sync="date1"
                          transition="scale-transition"
                          offset-y
                          min-width="auto"
                      >
                        <template v-slot:activator="{ on, attrs }">
                          <v-text-field
                              v-model="activity.r1_start_date"
                              prepend-inner-icon="mdi-calendar"
                              readonly
                              v-bind="attrs"
                              v-on="on"
                              dense
                              single-line
                              outlined
                              :rules="startDateRules"
                          ></v-text-field>
                        </template>
                        <v-date-picker
                            v-model="activity.r1_start_date"
                            no-title
                            scrollable
                            locale="ja"
                        >
                          <v-spacer></v-spacer>
                          <v-btn
                              text
                              color="primary"
                              @click="close('r1_start_date', 'menu1')"
                          >
                            {{ $t("button.cancel") }}
                          </v-btn>
                          <v-btn
                              text
                              color="primary"
                              @click="$refs.menu1.save(activity.r1_start_date)"
                          >
                            {{ $t("button.success") }}
                          </v-btn>
                        </v-date-picker>
                      </v-menu>
                    </v-col>
                    <v-col cols="12" md="6" class="mt-0 pb-0 mb-0">
                      <p>終了日</p>
                      <v-menu
                          ref="menu2"
                          v-model="menu2"
                          :close-on-content-click="false"
                          :return-value.sync="date2"
                          transition="scale-transition"
                          offset-y
                          min-width="auto"
                      >
                        <template v-slot:activator="{ on, attrs }">
                          <v-text-field
                              v-model="activity.r1_end_date"
                              prepend-inner-icon="mdi-calendar"
                              readonly
                              v-bind="attrs"
                              v-on="on"
                              dense
                              single-line
                              outlined
                              :rules="endDateRules"
                          ></v-text-field>
                        </template>
                        <v-date-picker
                            v-model="activity.r1_end_date"
                            no-title
                            scrollable
                            locale="ja"
                        >
                          <v-spacer></v-spacer>
                          <v-btn
                              text
                              color="primary"
                              @click="close('r1_end_date', 'menu2')"
                          >
                            {{ $t("button.cancel") }}
                          </v-btn>
                          <v-btn
                              text
                              color="primary"
                              @click="$refs.menu2.save(activity.r1_end_date)"
                          >
                            {{ $t("button.success") }}
                          </v-btn>
                        </v-date-picker>
                      </v-menu>
                    </v-col>
                  </v-row>
                </v-form>
              </v-col>
            </v-row>
          </div>
          <!-- End radio 1 -->

          <!-- Radio 2 -->
          <v-form ref="form2" lazy-validation v-model="valid2">
            <div
                v-show="activity.schedule_type == 2"
                class="grey lighten-5 rounded pa-6"
            >
              <v-row class="mb-0 pb-0">
                <v-col cols="12" md="6" class="mb-0 pb-0">
                  <v-row>
                    <v-col cols="12" md="6" class="mb-0">
                      <p>対象データ</p>
                      <v-select
                          :items="target_data"
                          item-text="text"
                          item-value="value"
                          label=""
                          dense
                          single-line
                          outlined
                          v-model="activity.r2_target_data"
                          :rules="targetDataRules"
                      ></v-select>
                    </v-col>
                    <v-col cols="12" md="6" class="mb-0">
                      <p>送信タイミング</p>
                      <v-row>
                        <v-col md="3" class="mb-0 pr-0">
                          <v-select
                              :items="send_time_before_after"
                              dense
                              single-line
                              outlined
                              v-model="activity.r2_send_time_before_after"
                              :rules="selectBoxTimeRules"
                          ></v-select>
                        </v-col>
                        <v-col md="5" class="mb-0">
                          <v-select
                              :items="send_time_before_after_type"
                              label="日前"
                              dense
                              single-line
                              outlined
                              v-model="activity.r2_send_time_before_after_type"
                          ></v-select>
                        </v-col>
                        <v-col md="3" class="mb-0 pl-0">
                          <v-select
                              :items="send_time"
                              dense
                              single-line
                              outlined
                              v-model="activity.r2_send_time"
                              :rules="selectBoxTimeRules"
                          ></v-select>
                        </v-col>
                        <v-col md="1" class="mb-0 pt-4">
                          <p class="float-right">時</p>
                        </v-col>
                      </v-row>
                    </v-col>
                  </v-row>
                </v-col>
              </v-row>
              <v-row class="mt-0 pb-0 mb-0">
                <v-col cols="12" md="6" class="mt-0 pb-0 mb-0">
                  <v-row>
                    <v-col cols="12" md="6" class="mt-0">
                      <p>開始日</p>
                      <v-menu
                          ref="menu3"
                          v-model="menu3"
                          :close-on-content-click="false"
                          :return-value.sync="date3"
                          transition="scale-transition"
                          offset-y
                          min-width="auto"
                      >
                        <template v-slot:activator="{ on, attrs }">
                          <v-text-field
                              v-model="activity.r2_start_date"
                              prepend-inner-icon="mdi-calendar"
                              readonly
                              v-bind="attrs"
                              v-on="on"
                              dense
                              single-line
                              outlined
                              :rules="startDateRules"
                          ></v-text-field>
                        </template>
                        <v-date-picker
                            v-model="activity.r2_start_date"
                            no-title
                            scrollable
                            locale="ja"
                        >
                          <v-spacer></v-spacer>
                          <v-btn
                              text
                              color="primary"
                              @click="this.close('r2_start_date', 'menu3')"
                          >
                            {{ $t("button.cancel") }}
                          </v-btn>
                          <v-btn
                              text
                              color="primary"
                              @click="$refs.menu3.save(activity.r2_start_date)"
                          >
                            {{ $t("button.success") }}
                          </v-btn>
                        </v-date-picker>
                      </v-menu>
                    </v-col>
                    <v-col cols="12" md="6" class="mt-0 pb-0 mb-0">
                      <p>終了日</p>
                      <v-menu
                          ref="menu4"
                          v-model="menu4"
                          :close-on-content-click="false"
                          :return-value.sync="date4"
                          transition="scale-transition"
                          offset-y
                          min-width="auto"
                      >
                        <template v-slot:activator="{ on, attrs }">
                          <v-text-field
                              v-model="activity.r2_end_date"
                              prepend-inner-icon="mdi-calendar"
                              readonly
                              v-bind="attrs"
                              v-on="on"
                              dense
                              single-line
                              outlined
                              :rules="endDateRules"
                          ></v-text-field>
                        </template>
                        <v-date-picker
                            v-model="activity.r2_end_date"
                            no-title
                            scrollable
                            locale="ja"
                        >
                          <v-spacer></v-spacer>
                          <v-btn
                              text
                              color="primary"
                              @click="close('r2_end_date', 'menu4')"
                          >
                            {{ $t("button.cancel") }}
                          </v-btn>
                          <v-btn
                              text
                              color="primary"
                              @click="$refs.menu4.save(activity.r2_end_date)"
                          >
                            {{ $t("button.success") }}
                          </v-btn>
                        </v-date-picker>
                      </v-menu>
                    </v-col>
                  </v-row>
                </v-col>
              </v-row>
            </div>
          </v-form>
          <!-- End radio 2 -->

          <!-- Radio 3 -->
          <v-form ref="form3" lazy-validation v-model="valid3">
            <div
                v-show="activity.schedule_type == 3"
                class="grey lighten-5 rounded pa-6"
            >
              <v-row class="mt-0 pb-0 mb-0">
                <v-col cols="12" md="6" class="mt-0 pb-0 mb-0">
                  <p>送信日時</p>
                  <v-row>
                    <v-col cols="12" md="6" class="pb-0 mb-0">
                      <v-menu
                          ref="menu5"
                          v-model="menu5"
                          :close-on-content-click="false"
                          :return-value.sync="date5"
                          transition="scale-transition"
                          offset-y
                          min-width="auto"
                      >
                        <template v-slot:activator="{ on, attrs }">
                          <v-text-field
                              v-model="activity.r3_send_date"
                              prepend-inner-icon="mdi-calendar"
                              readonly
                              v-bind="attrs"
                              v-on="on"
                              dense
                              single-line
                              outlined
                              :rules="dateRules"
                          ></v-text-field>
                        </template>
                        <v-date-picker
                            v-model="activity.r3_send_date"
                            no-title
                            scrollable
                            locale="ja"
                        >
                          <v-spacer></v-spacer>
                          <v-btn
                              text
                              color="primary"
                              @click="close('r3_send_date', 'menu5')"
                          >
                            {{ $t("button.cancel") }}
                          </v-btn>
                          <v-btn
                              text
                              color="primary"
                              @click="$refs.menu5.save(activity.r3_send_date)"
                          >
                            {{ $t("button.success") }}
                          </v-btn>
                        </v-date-picker>
                      </v-menu>
                    </v-col>
                    <v-col cols="12" md="6" class="pb-0 mb-0">
                      <v-row>
                        <v-col cols="12" md="6">
                          <v-select
                              :items="send_time"
                              dense
                              single-line
                              outlined
                              v-model="activity.r3_send_time"
                              :rules="selectBoxTimeRules"
                          ></v-select>
                        </v-col>
                        <v-col cols="12" md="6" class="pt-4">
                          <span>時</span>
                        </v-col>
                      </v-row>
                    </v-col>
                  </v-row>
                </v-col>
              </v-row>
            </div>
            <!-- End radio 3 -->
          </v-form>
          <p class="font-weight-bold mt-8">
            アクティビティ実行スケジュール <span class="red--text">(*)</span>
          </p>
          <div class="blue-grey lighten-5 rounded chart-container mt-6">
            <organization-chart
                id="organization-chart"
                :datasource="ds"
                @node-click="node_id = $event['id']"
            >
              <template slot-scope="{ nodeData }">
                <!-- Mail -->
                <div class="mail" v-if="!nodeData.actionType" :class="nodeData.id == 1 ? 'dotted' : ''">
                  <v-icon class="send-mail" color="light-blue lighten-2"
                  >mdi-send
                  </v-icon>
                  <b class="title" click="selectNode(nodeData)">メール送信</b>
                  <v-divider class="mt-2"></v-divider>
                  <div class="mail-contents text-left">
                    <v-list-item three-line class="pa-0 ma-0">
                      <v-list-item-content>
                        <div class="title-header-mail">
                          <div class="title-left">
                            <v-list-item-title>メール</v-list-item-title>
                          </div>
                          <div class="edit-right">
                            <!-- icon edit -->
                            <v-btn
                                icon
                                class="edit-button"
                                @click="showModalUpdateMailByNodeId(nodeData.id)"
                            >
                              <v-icon>mdi-pencil</v-icon>
                            </v-btn>
                            <!-- icon edit -->
                          </div>
                        </div>
                        <v-list-item-subtitle class="d-flex">
                          <span class="d-inline-block ml-3 mr-5">To</span>
                          <p class="inline-block node-to">{{ nodeData.to_name }}</p>
                        </v-list-item-subtitle
                        >
                        <v-list-item-subtitle class="d-flex">
                          <span class="d-inline-block ml-3 kenmei">件名</span
                          >
                          <p class="inline-block node-title">{{ nodeData.title }}</p>
                        </v-list-item-subtitle>
                      </v-list-item-content>
                    </v-list-item>
                    <v-list-item three-two class="pa-0 ma-0">
                      <v-list-item-content>
                        <v-list-item-title
                        >送信結果確認タイミング
                        </v-list-item-title>
                        <v-list-item-subtitle
                        ><span class="d-inline-block ml-3 mr-2">
                            {{ nodeData.expired_condition_date }} 日後
                            {{ nodeData.expired_condition_time }} 時
                          </span></v-list-item-subtitle
                        >
                      </v-list-item-content>
                    </v-list-item>
                  </div>
                  <v-tooltip top>
                    <template v-slot:activator="{ on, attrs }">
                      <v-btn
                          icon
                          v-bind="attrs"
                          v-on="on"
                          class="add-button"
                          @click="displayFormAction(nodeData)"
                      >
                        <v-icon>mdi-plus-circle</v-icon>
                      </v-btn>
                    </template>
                    <span>{{ $t("tool-tip.add") }}</span>
                  </v-tooltip>
                  <v-btn
                      icon
                      v-bind="attrs"
                      v-on="on"
                      class="delete-button"
                      @click="showDeletePopup(nodeData['id'])"
                      v-if="nodeData['id'] != 1"
                  >
                    <v-icon>mdi-delete</v-icon>
                  </v-btn>
                </div>
                <!-- End mail -->
                <!-- Action -->
                <div
                    class="action"
                    v-if="nodeData.actionType == true"
                    style="display: flex"
                >
                  <strong class="title">
                    <v-icon class="icon-email" color="#eeb73f"
                    >{{ nodeData.icon }}
                    </v-icon>
                    {{ nodeData.name }}</strong
                  >
                  <v-tooltip top>
                    <template v-slot:activator="{ on, attrs }">
                      <v-btn
                          icon
                          v-bind="attrs"
                          v-on="on"
                          class="add-button"
                          @click="displayFormMail(nodeData)"
                      >
                        <v-icon>mdi-plus-circle</v-icon>
                      </v-btn>
                    </template>
                    <span>{{ $t("tool-tip.add") }}</span>
                  </v-tooltip>
                  <v-btn
                      icon
                      v-bind="attrs"
                      v-on="on"
                      class="delete-button"
                      @click="showDeletePopup(nodeData['id'])"
                  >
                    <v-icon>mdi-delete</v-icon>
                  </v-btn>
                </div>
                <!-- End Action -->
              </template>
            </organization-chart>
          </div>
        </div>
        <v-card-actions class="justify-center align-center pb-6">
          <v-btn
              color="grey lighten-3"
              class="justify-center align-center font-weight-bold mr-2"
              width="120px"
              depressed
              rounded
              @click="cancelAddActivity"
          >
            {{ $t("button.cancel") }}
          </v-btn>
          <v-btn
              color="success"
              class="light-green accent-4 justify-center align-center font-weight-bold"
              width="120px"
              rounded
              :disabled="
              this.ds.from == '' || this.ds.to == '' || this.ds.title == ''
            "
              @click="submitForm"
          >
            {{ $t("button.save") }}
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-form>
    <DialogMail
        :datachart="this.ds"
        :node="this.node_id"
        :showActionDialog="showActionDialog"
        :showMailDialog="showMailDialog"
        :actionTypeEqualOneDisable="actionTypeEqualOneDisable"
        :actionTypeEqualTwoDisable="actionTypeEqualTwoDisable"
        :actionTypeEqualThreeDisable="actionTypeEqualThreeDisable"
        @closeMail="closeMail"
        @closeAction="closeAction"
        @addMail="addMail"
        @updateMail="updateMail"
        @addAction="addAction"
        :showDeleteMail="showDeleteMailDialog"
        @submit="deleteMail"
        :method="showModalUpdateMailByNodeId"
        :mailData="mailData"
    />

    <v-dialog v-model="showDeleteTemplate" max-width="500px">
      <v-card>
        <v-card-title class="justify-center align-center">
          <v-icon x-large color="orange" class="mt-5">mdi-alert</v-icon>
          <span class="text-h5 mt-5 ml-3">削除確認</span>
        </v-card-title>
        <v-card-text class="text-center">
          <p>削除します。よろしいでしょうか？</p>
        </v-card-text>
        <v-card-actions class="justify-center align-center pb-6">
          <v-btn color="grey lighten-3"
                 class="justify-center align-center font-weight-bold mr-2"
                 width="120px" depressed rounded
                 @click="showDeleteTemplate = false">
            キャンセル
          </v-btn>
          <v-btn color="success"
                 class="light-green accent-4 justify-center align-center font-weight-bold"
                 width="120px" rounded
                 @click="deleteNode(itemToDelete)">
            削除
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-container>
</template>

<script>
import OrganizationChart from "vue-organization-chart";
import "vue-organization-chart/dist/orgchart.css";
import DialogMail from "@/components/senario/activity/DialogMail.vue";
import router from "@/router/index";
import {mapActions, mapGetters} from "vuex";
import {
  getTargetDatas,
  SEND_TIME_BEFORE_AFTER_TYPE,
  SEND_TIME_BEFORE_AFTER,
  SEND_TIMES,
  TIME_UNIT_TYPES,
  TIME_UNIT_VALUES,
  SCHEDULE_TYPE_TYPE_1,
  SCHEDULE_TYPE_TYPE_2,
  KIND_OF_DAY,
  DAYS_IN_MONTH,
  SEND_TIME_DAY,
  WEEK,
  MONTH,
  DAY,
  HOUR_LIST
} from "../../../constants/common";
import moment from "moment";
import MessageErrorBackend from "../../commons/MessageErrorBackend";

export default {
  name: "ActivityNew",

  components: {
    OrganizationChart,
    DialogMail,
    MessageErrorBackend
  },
  data: () => ({
    errors: [],
    show: false,
    showToast: "",
    valid: false,
    validName: false,
    valid2: false,
    valid3: false,
    validTimingDay: false,
    validTimeUnit: false,
    validDayInWeek: false,
    validStartEndDate1: false,
    validTimeMonth3: false,
    validTimeMonth1: false,
    validTimeMonth2: false,
    time_unit_type: TIME_UNIT_TYPES,
    time_unit_value: TIME_UNIT_VALUES,
    send_time: SEND_TIMES,
    send_time_before_after: SEND_TIME_BEFORE_AFTER,
    send_time_before_after_type: SEND_TIME_BEFORE_AFTER_TYPE,
    target_data: [],
    kind_of_day: KIND_OF_DAY,
    send_time_day: SEND_TIME_DAY,
    day_in_month: DAYS_IN_MONTH,
    activity: {
      name: "",
      schedule_type: 1,

      r1_time_unit_type: "1",
      r1_time_unit_value: "",
      r1_send_time: "",
      r1_start_date: moment().format("YYYY-MM-DD"),
      r1_end_date: moment().format("YYYY-MM-DD"),
      r1_day_in_month: "",
      r1_day_in_week: [],
      r1_send_time_type: "3",
      r1_send_time_day: "",
      r1_kind_of_day: "",
      r1_send_time_type_1: "",
      r1_send_time_type_2: "",
      r1_send_time_type_3: "",
      r1_send_time_unit_type_1: "",

      r2_target_data: "",
      r2_start_date: moment().format("YYYY-MM-DD"),
      r2_end_date: moment().format("YYYY-MM-DD"),
      r2_send_time_before_after_type: "1",
      r2_send_time_before_after: "",
      r2_send_time: "",

      r3_send_time: "",
      r3_send_date: moment().format("YYYY-MM-DD"),
    },
    menu1: false,
    menu2: false,
    menu3: false,
    menu4: false,
    menu5: false,
    date1: [],
    date2: [],
    date3: [],
    date4: [],
    date5: [],
    showMailDialog: false,
    showDeleteMailDialog: false,
    showActionDialog: false,
    TestTransmissionDialog: true,
    showCreateMail: false,
    actionTypeEqualOneDisable: false,
    actionTypeEqualTwoDisable: false,
    actionTypeEqualThreeDisable: false,
    holder: [],
    ds: new Object(),
    node_id: "",
    nameRules: [
      (v) => !!v || "アクティビティ名は必須項目です",
      (v) => (v && v.length <= 255) || "1~255桁以内で入力してください",
      (v) => (v && v.length >= 1) || "1~255桁以内で入力してください",
    ],
    isDisable: true,
    mailData: {},
    selectBoxRules: [(v) => (!!v) || "繰り返す間隔は必須項目です"],
    selectBoxTimeRules: [(v) => (HOUR_LIST.includes(v)) || "送信タイミングは必須項目です"],
    startDateRules: [(v) => !!v || "開始日は必須項目です"],
    endDateRules: [(v) => !!v || "終了日は必須項目です"],
    dateRules: [(v) => !!v || "送信日は必須項目です"],
    targetDataRules: [(v) => !!v || "対象データは必須項目です"],
    selectBoxMonth1Rules: [(v) => (!!v) || "日は必須項目です"],
    selectBoxMonth2Rules: [(v) => (!!v) || "必須項目です"],
    showDeleteTemplate: false,
    itemToDelete: null,
  }),
  computed: {
    selectBoxDayInWeekRules() {
      return [
        this.activity.r1_day_in_week.length > 0 || "曜日は必須項目です"
      ];
    }
  },
  created() {
    this.initData();
    this.getTarget();
  },
  methods: {
    ...mapActions(["store", "addCounter"]),
    ...mapGetters([
      "getTargetSegments",
      "getStage",
      "getSenarioTemplateType",
      "getSenarioId",
      "getSubSegments",
      "getSenarioTemplateName",
      "getSenarioName",
    ]),
    initData() {
      let json = {
        id: 1,
        name: "",
        title: "",
        to: "",
        to_name: "",
        from: "",
        expired_condition_date: "",
        expired_condition_time: "",
        children: [],
      };
      this.ds = json;
    },
    deleteMail: function () {
      this.deleteNodeFromTree(this.ds, this.node_id);
    },
    deleteAction: function () {
      this.deleteNodeFromTree(this.ds, this.node_id);
    },
    addAction(data) {
      this.insertNodeIntoTree(this.ds, data.parentId, data);
    },
    addMail(data) {
      this.insertNodeIntoTree(this.ds, data.parentId, data);
    },
    updateMail(json) {
      this.recurseUpdateDataByNodeId(json, [this.ds]);
    },
    recurseUpdateDataByNodeId(json, data) {
      for (const item of data) {
        if (item.id == json.id) {
          item.parentId = json.parentId;
          item.content = json.content;
          item.from = json.from;
          item.to = json.to;
          item.to_name = json.to_name;
          item.title = json.title;
          item.expired_condition_time = json.expired_condition_time;
          item.expired_condition_date = json.expired_condition_date;
          return;
        }
        this.recurseUpdateDataByNodeId(json, item.children);
      }
    },

    findByNodeId(data, nodeId) {
      return this.recurseFindDataByNodeId(data, nodeId);
    },
    recurseFindDataByNodeId(data, nodeId) {
      for (const item of data) {
        if (item.id == nodeId) return item;
        const res = this.recurseFindDataByNodeId(item.children, nodeId);
        if (res === undefined) continue;
        return res;
      }
      return undefined;
    },
    closeMail() {
      this.showMailDialog = false;
    },
    closeAction() {
      this.showActionDialog = false;
    },
    displayFormAction(nodeData) {
      this.actionTypeEqualOneDisable = false;
      this.actionTypeEqualTwoDisable = false;
      this.actionTypeEqualThreeDisable = false;

      let actions = nodeData.children;
      if (actions.length > 0) {
        actions.forEach((item) => {
          if (item.action_type == 1) {
            this.actionTypeEqualOneDisable = true;
          }
          if (item.action_type == 2) {
            this.actionTypeEqualTwoDisable = true;
          }
          if (item.action_type == 3) {
            this.actionTypeEqualThreeDisable = true;
          }
        });
      }
      this.showActionDialog = true;
    },
    displayFormMail(nodeData) {
      if (nodeData.children.length == 0) {
        this.showMailDialog = true;
      } else {
        alert("メールが既に存在しますので、追加できません。");
      }
    },
    showModalUpdateMailByNodeId(nodeId) {
      let mail = this.findByNodeId([this.ds], nodeId);
      this.mailData = {
        id: mail.id,
        name: mail.name,
        mail_template_id: mail.mail_template_id,
        from: mail.from,
        to: mail.to,
        to_name: mail.to_name,
        content: mail.content,
        title: mail.title,
        expired_condition_date: mail.expired_condition_date,
        expired_condition_time: mail.expired_condition_time,
      };
      this.showMailDialog = true;
    },
    showDeletePopup(id) {
      this.itemToDelete = id;
      this.showDeleteTemplate = true;
    },
    deleteNode(id) {
      this.showDeleteTemplate = false;
      this.deleteNodeFromTree(this.ds, id);
    },
    insertNodeIntoTree(node, parentId, newNode) {
      if (node.id == parentId) {
        node.children.push(newNode);
      } else {
        if (node.children.length == 0) return;
        for (let i = 0; i < node.children.length; i++) {
          this.insertNodeIntoTree(node.children[i], parentId, newNode);
        }
      }
    },
    deleteNodeFromTree: function (node, id) {
      if (node.children != null) {
        for (let i = 0; i < node.children.length; i++) {
          let filtered = node.children.filter((f) => f.id == id);
          if (filtered && filtered.length > 0) {
            node.children = node.children.filter((f) => f.id != id);
            return;
          }
          this.deleteNodeFromTree(node.children[i], id);
        }
      }
    },
    getTarget() {
      let targets = getTargetDatas(this.getSenarioTemplateType());
      this.target_data = targets;
    },
    async submitForm() {
      try {
        if (!this.$refs.formName.validate()) return;
        if (this.activity.schedule_type == 1) {
          if (!this.$refs.formTimeUnit.validate()) return;
          if (this.activity.r1_time_unit_type == "1") {
            if (!this.$refs.formTimingDay.validate()) return;
            if (!this.$refs.formStartEndDate1.validate()) return;
          }
          if (this.activity.r1_time_unit_type == "2") {
            if (!this.$refs.formDayInWeek.validate()) return;
            if (!this.$refs.formTimingDay.validate()) return;
            if (!this.$refs.formStartEndDate1.validate()) return;
          }
          if (this.activity.r1_time_unit_type == "3") {
            if (this.activity.r1_send_time_type == 1) {
              if (!this.$refs.formTimeMonth1.validate()) return;
            }
            if (this.activity.r1_send_time_type == 2) {
              if (!this.$refs.formTimeMonth2.validate()) return;
            }
            if (this.activity.r1_send_time_type == 3) {
              if (!this.$refs.formTimeMonth3.validate()) return;
            }
            if (!this.$refs.formStartEndDate1.validate()) return;
          }
        }
        if (this.activity.schedule_type == 2) {
          if (!this.$refs.form2.validate()) return;
        }
        if (this.activity.schedule_type == 3) {
          if (!this.$refs.form3.validate()) return;
        }

        let targetSegments = this.getTargetSegments();

        let data = {
          name: this.activity.name,
          schedule_type: this.activity.schedule_type,
          schedule_setting: JSON.stringify(
              this.getScheduleSettingByScheduleType(this.activity.schedule_type)
          ),
          stage_id: this.getStage(),
          senario_id: this.getSenarioId(),
          segments: targetSegments.join(","),
          action_and_mail: JSON.stringify(this.ds),
        };
        try {
          await this.store(data);
          this.addCounter(2);
          this.alertSuccess();
          this.errors = [];
          this.$refs.form.reset();
          router
              .push({path: `/senario/detail/${this.$route.params.id}`})
              .catch(() => {
              });
        } catch (err) {
          let stt = err.response.status;
          if (stt == 500) return (this.errors = [this.$i18n.t("error-message.update-activity-fail")]);
          if (stt == 400) return (this.errors = err.response.data.response_message);
        }
      } catch (e) {
        this.errors = [this.$i18n.t("error-message.update-activity-fail")];
      }
    },
    alertSuccess() {
      this.$root.SnackBar.show({
        message: this.$i18n.t("success-message.update-activity-success"),
        color: "light-green accent-4",
      });
    },
    getScheduleSettingByScheduleType(actionType) {
      switch (actionType) {
        case SCHEDULE_TYPE_TYPE_1:
          return this.getDataScheduleTypeEqualOne();
        case SCHEDULE_TYPE_TYPE_2:
          return this.getDataScheduleTypeEqualTwo();
        default:
          return this.getDataScheduleTypeEqualThree();
      }
    },
    close(element, menu) {
      this.activity[element] = "";
      this[menu] = false;
    },
    getDataScheduleTypeEqualOne() {
      let data = {
        time_unit_type: this.activity.r1_time_unit_type,
        time_unit_value: this.activity.r1_time_unit_value,
        send_time: this.activity.r1_send_time_type_1,
        start_date: this.activity.r1_start_date,
        end_date: this.activity.r1_end_date,
        schedule_type: this.activity.schedule_type,
      };
      let json = "";
      switch (this.activity.r1_time_unit_type) {
        case WEEK:
          json = this.getDataTimeUnitTypeEqualWeek(data);
          break;
        case MONTH:
          json = this.getDataTimeUnitTypeEqualMonth(data);
          break;
        case DAY:
          json = this.getDataTimeUnitTypeEqualDay(data);
          break;
      }
      return json;
    },
    getDataTimeUnitTypeEqualDay(data) {
      data.send_time = this.activity.r1_send_time_unit_type_1;
      return data;
    },
    getDataTimeUnitTypeEqualWeek(data) {
      data.day_in_week = this.parseArrayToString(this.activity.r1_day_in_week);
      data.send_time = this.activity.r1_send_time_unit_type_1;
      return data;
    },
    getDataTimeUnitTypeEqualMonth(data) {
      if (this.activity.r1_send_time_type == DAY) {
        data.day_in_month = this.activity.r1_day_in_month;
        data.send_time = this.activity.r1_send_time_type_1;
      } else if (this.activity.r1_send_time_type == WEEK) {
        data.send_time_day = this.activity.r1_send_time_day;
        data.kind_of_day = this.activity.r1_kind_of_day;
        data.send_time = this.activity.r1_send_time_type_2;
      } else {
        data.send_time = this.activity.r1_send_time_type_3;
      }
      data.send_time_type = this.activity.r1_send_time_type;
      return data;
    },
    getDataScheduleTypeEqualTwo() {
      return {
        schedule_type: this.activity.schedule_type,
        target_data: this.activity.r2_target_data,
        start_date: this.activity.r2_start_date,
        end_date: this.activity.r2_end_date,
        send_time_before_after_type: this.activity
            .r2_send_time_before_after_type,
        send_time_before_after: this.activity.r2_send_time_before_after,
        send_time: this.activity.r2_send_time
      };
    },
    getDataScheduleTypeEqualThree() {
      return {
        schedule_type: this.activity.schedule_type,
        send_time: this.activity.r3_send_time,
        send_date: this.activity.r3_send_date,
      };
    },
    getSegment() {
      let ids = this.getTargetSegments();
      let subSegments = this.getSubSegments();
      return subSegments
          .map((item) => {
            if (ids.includes(item.id)) {
              return item.name;
            }
          })
          .filter(Boolean)
          .join(", ");
    },
    parseArrayToString(arr) {
      return arr.toString();
    },
    getNodeTree() {
      let obj = {
        id: 1,
        from: "",
        to: "",
        title: "",
        expired_condition_date: "",
        expired_condition_time: "",
        children: [],
      };
      this.ds = obj;
    },
    cancelAddActivity() {
      router
          .push({name: 'SenarioDetail'})
          .catch(() => {
          });
    },
  },
};
</script>
<style>
.mail.dotted {
  border-style: dotted !important;
  border-color: #999999;
}

.v-input--radio-group__input {
  display: contents;
}

.chart-container {
  height: 1000px;
}

.chart-container .orgchart-container {
  position: relative;
  display: inline-block;
  height: 100%;
  width: 100%;
  border: none;
  border-radius: 0;
  overflow: auto;
  text-align: left;
}

#app .orgchart .node {
  width: 250px;
}

#app .orgchart .node .title {
  background-color: transparent;
  color: black;
}

#app .orgchart .node .content {
  border: 1px solid #06c4de;
}

#app .orgchart .lines .leftLine {
  border-left: 1px solid gray;
}

#app .orgchart .lines .rightLine {
  border-right: 1px solid gray;
}

#app .orgchart .lines .topLine {
  border-top: 1px solid gray;
}

#app .orgchart .lines .bottomLine {
  border-bottom: 1px solid gray;
}

#app .orgchart .lines .downLine {
  background-color: gray;
}

.mail {
  position: relative;
  padding: 10px;
  background: white;
  border-radius: 4px;
  border: 2px solid #64d6fc;
}

.mail:hover {
  border: 2px solid #64d6fc;
}

.send-mail {
  transform: rotate(-45deg);
  vertical-align: initial !important;
}

.orgchart {
  background-image: none !important;
}

.action {
  width: 100%;
  margin: auto;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 50px;
  background: white;
  border-radius: 10px;
  color: black;
  border: 2px solid #eeb73f;
}

.add-button {
  display: none !important;
  position: absolute !important;
  bottom: -18px;
  left: 50%;
  transform: translateX(-50%);
  color: #fff !important;
  background-color: #eeb73f;
  padding: 1px 3px 2px 3px;
  border-radius: 40px;
}

.edit-button {
  display: none !important;
}

.mail .add-button {
  background-color: #6dd400;
}

.delete-button {
  display: none !important;
  position: absolute !important;
  top: -12px;
  right: -10px;
  color: #fff !important;
  background-color: #e96868;
  padding: 1px 3px 2px 3px;
  border-radius: 40px;
}

.action:hover .add-button,
.action:hover .edit-button,
.action:hover .delete-button {
  display: block !important;
}

.mail:hover .add-button,
.mail:hover .delete-button,
.mail:hover .edit-button {
  display: block !important;
}

/* .orgchart .node.focused,
.orgchart .node:hover {
  background: none;
} */
.icon-email {
  vertical-align: top;
  margin-right: 5px;
}

.day_of_week {
  display: flex !important;
}

.v-input__slot {
  margin-right: 10px;
}

.date_time {
  display: flex;
}

.v-input--selection-controls__input {
  margin-top: 5px;
}

.v-radio.theme--light {
  padding-top: 3px;
}

.v-input--selection-controls {
  margin-top: 0 !important;
  padding-top: 0 !important;
}

.title-header-mail {
  justify-content: center;
  height: 40px;
}

.title-left {
  float: left;
  padding-top: 7px;
}

.edit-right {
  float: right !important;
  padding: 0 !important;
  margin: 0 !important;
}

ul.radio-type li {
  float: left;
  list-style-type: none;
}

ul.radio-type {
  padding-left: 0 !important;
}

.wrap-border {
  border: 1px solid rgba(215, 215, 215, 1) !important;
  margin-top: -12px;
}

.node:hover {
  background: none !important;
}

.node .title {
  font-size: 18px !important;
}

.kenmei {
  width: 36px !important;
}

.node-title, .node-to {
  width: 168px;
}
</style>
