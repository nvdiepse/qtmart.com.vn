@extends('layouts.admin.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-8 mb-4 order-0">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                                    <p class="mb-4">You have done <span class="fw-bold">72%</span> more
                                        sales today. Check your new badge in your profile.</p>

                                    <a href="javascript:;" class="btn btn-sm btn-label-primary">View Badges</a>
                                </div>
                            </div>
                            <div class="col-sm-5 text-center text-sm-left">
                                <div class="card-body pb-0 px-0 px-md-4">
                                    <img src="../../assets/img/illustrations/man-with-laptop-light.png" height="140"
                                        alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                        data-app-light-img="illustrations/man-with-laptop-light.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 order-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body pb-0">
                                    <span class="d-block fw-semibold mb-1">Order</span>
                                    <h3 class="card-title mb-1">276k</h3>
                                </div>
                                <div id="orderChart" class="mb-3" style="min-height: 80px;">
                                    <div id="apexchartskwjgn4q6g"
                                        class="apexcharts-canvas apexchartskwjgn4q6g apexcharts-theme-light"
                                        style="width: 207px; height: 80px;"><svg id="SvgjsSvg1417" width="207" height="80"
                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG1419" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1418">
                                                    <clipPath id="gridRectMaskkwjgn4q6g">
                                                        <rect id="SvgjsRect1424" width="205" height="82" x="-3" y="-1"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskkwjgn4q6g"></clipPath>
                                                    <clipPath id="nonForecastMaskkwjgn4q6g"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskkwjgn4q6g">
                                                        <rect id="SvgjsRect1425" width="227" height="108" x="-14" y="-14"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient1443" x1="0" y1="0" x2="0"
                                                        y2="1">
                                                        <stop id="SvgjsStop1444" stop-opacity="0.8"
                                                            stop-color="rgba(113,221,55,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1445" stop-opacity="0.25"
                                                            stop-color="rgba(227,248,215,0.25)" offset="0.85"></stop>
                                                        <stop id="SvgjsStop1446" stop-opacity="0.25"
                                                            stop-color="rgba(227,248,215,0.25)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line id="SvgjsLine1423" x1="0" y1="0" x2="0" y2="80" stroke="#b6b6b6"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="80"
                                                    fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG1449" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1450" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1459" class="apexcharts-grid">
                                                    <g id="SvgjsG1460" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1462" x1="0" y1="0" x2="199" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1463" x1="0" y1="16" x2="199" y2="16"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1464" x1="0" y1="32" x2="199" y2="32"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1465" x1="0" y1="48" x2="199" y2="48"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1466" x1="0" y1="64" x2="199" y2="64"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1467" x1="0" y1="80" x2="199" y2="80"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1461" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1469" x1="0" y1="80" x2="199" y2="80"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                    <line id="SvgjsLine1468" x1="0" y1="1" x2="0" y2="80"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                </g>
                                                <g id="SvgjsG1426" class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1427" class="apexcharts-series" seriesName="seriesx1"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1447"
                                                            d="M 0 80L 0 56C 11.608333333333334 56 21.558333333333337 58 33.16666666666667 58C 44.775000000000006 58 54.72500000000001 18 66.33333333333334 18C 77.94166666666668 18 87.89166666666667 72 99.5 72C 111.10833333333333 72 121.05833333333335 46 132.66666666666669 46C 144.275 46 154.22500000000002 52 165.83333333333334 52C 177.44166666666666 52 187.39166666666668 10 199 10C 199 10 199 10 199 80M 199 10z"
                                                            fill="url(#SvgjsLinearGradient1443)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskkwjgn4q6g)"
                                                            pathTo="M 0 80L 0 56C 11.608333333333334 56 21.558333333333337 58 33.16666666666667 58C 44.775000000000006 58 54.72500000000001 18 66.33333333333334 18C 77.94166666666668 18 87.89166666666667 72 99.5 72C 111.10833333333333 72 121.05833333333335 46 132.66666666666669 46C 144.275 46 154.22500000000002 52 165.83333333333334 52C 177.44166666666666 52 187.39166666666668 10 199 10C 199 10 199 10 199 80M 199 10z"
                                                            pathFrom="M -1 128L -1 128L 33.16666666666667 128L 66.33333333333334 128L 99.5 128L 132.66666666666669 128L 165.83333333333334 128L 199 128">
                                                        </path>
                                                        <path id="SvgjsPath1448"
                                                            d="M 0 56C 11.608333333333334 56 21.558333333333337 58 33.16666666666667 58C 44.775000000000006 58 54.72500000000001 18 66.33333333333334 18C 77.94166666666668 18 87.89166666666667 72 99.5 72C 111.10833333333333 72 121.05833333333335 46 132.66666666666669 46C 144.275 46 154.22500000000002 52 165.83333333333334 52C 177.44166666666666 52 187.39166666666668 10 199 10"
                                                            fill="none" fill-opacity="1" stroke="#71dd37" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskkwjgn4q6g)"
                                                            pathTo="M 0 56C 11.608333333333334 56 21.558333333333337 58 33.16666666666667 58C 44.775000000000006 58 54.72500000000001 18 66.33333333333334 18C 77.94166666666668 18 87.89166666666667 72 99.5 72C 111.10833333333333 72 121.05833333333335 46 132.66666666666669 46C 144.275 46 154.22500000000002 52 165.83333333333334 52C 177.44166666666666 52 187.39166666666668 10 199 10"
                                                            pathFrom="M -1 128L -1 128L 33.16666666666667 128L 66.33333333333334 128L 99.5 128L 132.66666666666669 128L 165.83333333333334 128L 199 128">
                                                        </path>
                                                        <g id="SvgjsG1428" class="apexcharts-series-markers-wrap"
                                                            data:realIndex="0">
                                                            <g id="SvgjsG1430" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskkwjgn4q6g)">
                                                                <circle id="SvgjsCircle1431" r="6" cx="0" cy="56"
                                                                    class="apexcharts-marker no-pointer-events wg9hx2ikx"
                                                                    stroke="transparent" fill="transparent" fill-opacity="1"
                                                                    stroke-width="4" stroke-opacity="0.9" rel="0" j="0"
                                                                    index="0" default-marker-size="6"></circle>
                                                                <circle id="SvgjsCircle1432" r="6" cx="33.16666666666667"
                                                                    cy="58"
                                                                    class="apexcharts-marker no-pointer-events wwueqtr9ch"
                                                                    stroke="transparent" fill="transparent" fill-opacity="1"
                                                                    stroke-width="4" stroke-opacity="0.9" rel="1" j="1"
                                                                    index="0" default-marker-size="6"></circle>
                                                            </g>
                                                            <g id="SvgjsG1433" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskkwjgn4q6g)">
                                                                <circle id="SvgjsCircle1434" r="6" cx="66.33333333333334"
                                                                    cy="18"
                                                                    class="apexcharts-marker no-pointer-events w6mnmtegg"
                                                                    stroke="transparent" fill="transparent" fill-opacity="1"
                                                                    stroke-width="4" stroke-opacity="0.9" rel="2" j="2"
                                                                    index="0" default-marker-size="6"></circle>
                                                            </g>
                                                            <g id="SvgjsG1435" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskkwjgn4q6g)">
                                                                <circle id="SvgjsCircle1436" r="6" cx="99.5" cy="72"
                                                                    class="apexcharts-marker no-pointer-events w45mz4wk3"
                                                                    stroke="transparent" fill="transparent" fill-opacity="1"
                                                                    stroke-width="4" stroke-opacity="0.9" rel="3" j="3"
                                                                    index="0" default-marker-size="6"></circle>
                                                            </g>
                                                            <g id="SvgjsG1437" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskkwjgn4q6g)">
                                                                <circle id="SvgjsCircle1438" r="6" cx="132.66666666666669"
                                                                    cy="46"
                                                                    class="apexcharts-marker no-pointer-events wn16vbdg7"
                                                                    stroke="transparent" fill="transparent" fill-opacity="1"
                                                                    stroke-width="4" stroke-opacity="0.9" rel="4" j="4"
                                                                    index="0" default-marker-size="6"></circle>
                                                            </g>
                                                            <g id="SvgjsG1439" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskkwjgn4q6g)">
                                                                <circle id="SvgjsCircle1440" r="6" cx="165.83333333333334"
                                                                    cy="52"
                                                                    class="apexcharts-marker no-pointer-events wsrvc3pwj"
                                                                    stroke="transparent" fill="transparent" fill-opacity="1"
                                                                    stroke-width="4" stroke-opacity="0.9" rel="5" j="5"
                                                                    index="0" default-marker-size="6"></circle>
                                                            </g>
                                                            <g id="SvgjsG1441" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskkwjgn4q6g)">
                                                                <circle id="SvgjsCircle1442" r="6" cx="199" cy="10"
                                                                    class="apexcharts-marker no-pointer-events wiism1nxyj"
                                                                    stroke="#71dd37" fill="#ffffff" fill-opacity="1"
                                                                    stroke-width="4" stroke-opacity="0.9" rel="6" j="6"
                                                                    index="0" default-marker-size="6"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1429" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine1470" x1="0" y1="0" x2="199" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1471" x1="0" y1="0" x2="199" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1472" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1473" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1474" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect1422" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe"></rect>
                                            <g id="SvgjsG1458" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1420" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 40px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(113, 221, 55);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 208px; height: 181px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="../../assets/img/icons/unicons/wallet-info.png" alt="Credit Card"
                                                class="rounded">
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt6"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span>Sales</span>
                                    <h3 class="card-title text-nowrap mb-1">$4,679</h3>
                                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                        +28.42%</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Total Revenue -->
                <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                    <div class="card">
                        <div class="row row-bordered g-0">
                            <div class="col-md-8">
                                <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
                                <div id="totalRevenueChart" class="px-2" style="min-height: 315px;">
                                    <div id="apexchartsq19rtzui"
                                        class="apexcharts-canvas apexchartsq19rtzui apexcharts-theme-light"
                                        style="width: 586px; height: 300px;"><svg id="SvgjsSvg1475" width="586" height="300"
                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <foreignObject x="0" y="0" width="586" height="300">
                                                <div class="apexcharts-legend apexcharts-align-left apx-legend-position-top"
                                                    xmlns="http://www.w3.org/1999/xhtml"
                                                    style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 150px;">
                                                    <div class="apexcharts-legend-series" rel="1" seriesname="2021"
                                                        data:collapsed="false" style="margin: 2px 10px;"><span
                                                            class="apexcharts-legend-marker" rel="1" data:collapsed="false"
                                                            style="background: rgb(105, 108, 255) !important; color: rgb(105, 108, 255); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                            class="apexcharts-legend-text" rel="1" i="0"
                                                            data:default-text="2021" data:collapsed="false"
                                                            style="color: rgb(161, 172, 184); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2021</span>
                                                    </div>
                                                    <div class="apexcharts-legend-series" rel="2" seriesname="2020"
                                                        data:collapsed="false" style="margin: 2px 10px;"><span
                                                            class="apexcharts-legend-marker" rel="2" data:collapsed="false"
                                                            style="background: rgb(3, 195, 236) !important; color: rgb(3, 195, 236); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                            class="apexcharts-legend-text" rel="2" i="1"
                                                            data:default-text="2020" data:collapsed="false"
                                                            style="color: rgb(161, 172, 184); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2020</span>
                                                    </div>
                                                </div>
                                                <style type="text/css">
                                                    .apexcharts-legend {
                                                        display: flex;
                                                        overflow: auto;
                                                        padding: 0 10px;
                                                    }

                                                    .apexcharts-legend.apx-legend-position-bottom,
                                                    .apexcharts-legend.apx-legend-position-top {
                                                        flex-wrap: wrap
                                                    }

                                                    .apexcharts-legend.apx-legend-position-right,
                                                    .apexcharts-legend.apx-legend-position-left {
                                                        flex-direction: column;
                                                        bottom: 0;
                                                    }

                                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                    .apexcharts-legend.apx-legend-position-right,
                                                    .apexcharts-legend.apx-legend-position-left {
                                                        justify-content: flex-start;
                                                    }

                                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                        justify-content: center;
                                                    }

                                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                        justify-content: flex-end;
                                                    }

                                                    .apexcharts-legend-series {
                                                        cursor: pointer;
                                                        line-height: normal;
                                                    }

                                                    .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                                    .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                        display: flex;
                                                        align-items: center;
                                                    }

                                                    .apexcharts-legend-text {
                                                        position: relative;
                                                        font-size: 14px;
                                                    }

                                                    .apexcharts-legend-text *,
                                                    .apexcharts-legend-marker * {
                                                        pointer-events: none;
                                                    }

                                                    .apexcharts-legend-marker {
                                                        position: relative;
                                                        display: inline-block;
                                                        cursor: pointer;
                                                        margin-right: 3px;
                                                        border-style: solid;
                                                    }

                                                    .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                                    .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                        display: inline-block;
                                                    }

                                                    .apexcharts-legend-series.apexcharts-no-click {
                                                        cursor: auto;
                                                    }

                                                    .apexcharts-legend .apexcharts-hidden-zero-series,
                                                    .apexcharts-legend .apexcharts-hidden-null-series {
                                                        display: none !important;
                                                    }

                                                    .apexcharts-inactive-legend {
                                                        opacity: 0.45;
                                                    }

                                                </style>
                                            </foreignObject>
                                            <g id="SvgjsG1477" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(53.7890625, 52)">
                                                <defs id="SvgjsDefs1476">
                                                    <linearGradient id="SvgjsLinearGradient1481" x1="0" y1="0" x2="0"
                                                        y2="1">
                                                        <stop id="SvgjsStop1482" stop-opacity="0.4"
                                                            stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop1483" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop1484" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                    <clipPath id="gridRectMaskq19rtzui">
                                                        <rect id="SvgjsRect1486" width="522.2109375" height="222.73" x="-5"
                                                            y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskq19rtzui"></clipPath>
                                                    <clipPath id="nonForecastMaskq19rtzui"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskq19rtzui">
                                                        <rect id="SvgjsRect1487" width="516.2109375" height="220.73" x="-2"
                                                            y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <rect id="SvgjsRect1485" width="23.415357142857143" height="216.73" x="0"
                                                    y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3"
                                                    fill="url(#SvgjsLinearGradient1481)" class="apexcharts-xcrosshairs"
                                                    y2="216.73" filter="none" fill-opacity="0.9"></rect>
                                                <g id="SvgjsG1507" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1508" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"><text id="SvgjsText1510"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="36.586495535714285" y="245.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px" font-weight="400"
                                                            fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1511">Jan</tspan>
                                                            <title>Jan</title>
                                                        </text><text id="SvgjsText1513"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="109.75948660714286" y="245.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px" font-weight="400"
                                                            fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1514">Feb</tspan>
                                                            <title>Feb</title>
                                                        </text><text id="SvgjsText1516"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="182.93247767857144" y="245.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px" font-weight="400"
                                                            fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1517">Mar</tspan>
                                                            <title>Mar</title>
                                                        </text><text id="SvgjsText1519"
                                                            font-family="Helvetica, Arial, sans-serif" x="256.10546875"
                                                            y="245.73" text-anchor="middle" dominant-baseline="auto"
                                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1520">Apr</tspan>
                                                            <title>Apr</title>
                                                        </text><text id="SvgjsText1522"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="329.27845982142856" y="245.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px" font-weight="400"
                                                            fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1523">May</tspan>
                                                            <title>May</title>
                                                        </text><text id="SvgjsText1525"
                                                            font-family="Helvetica, Arial, sans-serif" x="402.4514508928571"
                                                            y="245.73" text-anchor="middle" dominant-baseline="auto"
                                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1526">Jun</tspan>
                                                            <title>Jun</title>
                                                        </text><text id="SvgjsText1528"
                                                            font-family="Helvetica, Arial, sans-serif" x="475.6244419642857"
                                                            y="245.73" text-anchor="middle" dominant-baseline="auto"
                                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1529">Jul</tspan>
                                                            <title>Jul</title>
                                                        </text></g>
                                                </g>
                                                <g id="SvgjsG1544" class="apexcharts-grid">
                                                    <g id="SvgjsG1545" class="apexcharts-gridlines-horizontal">
                                                        <line id="SvgjsLine1547" x1="0" y1="0" x2="512.2109375" y2="0"
                                                            stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1548" x1="0" y1="43.346" x2="512.2109375"
                                                            y2="43.346" stroke="#eceef1" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1549" x1="0" y1="86.692" x2="512.2109375"
                                                            y2="86.692" stroke="#eceef1" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1550" x1="0" y1="130.03799999999998"
                                                            x2="512.2109375" y2="130.03799999999998" stroke="#eceef1"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1551" x1="0" y1="173.384" x2="512.2109375"
                                                            y2="173.384" stroke="#eceef1" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1552" x1="0" y1="216.73" x2="512.2109375"
                                                            y2="216.73" stroke="#eceef1" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1546" class="apexcharts-gridlines-vertical"></g>
                                                    <line id="SvgjsLine1554" x1="0" y1="216.73" x2="512.2109375" y2="216.73"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                    <line id="SvgjsLine1553" x1="0" y1="1" x2="0" y2="216.73"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                </g>
                                                <g id="SvgjsG1488" class="apexcharts-bar-series apexcharts-plot-series">
                                                    <g id="SvgjsG1489" class="apexcharts-series" seriesName="2021" rel="1"
                                                        data:realIndex="0">
                                                        <path id="SvgjsPath1491"
                                                            d="M 24.87881696428571 120.03800000000001L 24.87881696428571 62.01520000000002Q 24.87881696428571 52.01520000000002 34.87881696428571 52.01520000000002L 32.29417410714285 52.01520000000002Q 42.29417410714285 52.01520000000002 42.29417410714285 62.01520000000002L 42.29417410714285 62.01520000000002L 42.29417410714285 120.03800000000001Q 42.29417410714285 130.038 32.29417410714285 130.038L 34.87881696428571 130.038Q 24.87881696428571 130.038 24.87881696428571 120.03800000000001z"
                                                            fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskq19rtzui)"
                                                            pathTo="M 24.87881696428571 120.03800000000001L 24.87881696428571 62.01520000000002Q 24.87881696428571 52.01520000000002 34.87881696428571 52.01520000000002L 32.29417410714285 52.01520000000002Q 42.29417410714285 52.01520000000002 42.29417410714285 62.01520000000002L 42.29417410714285 62.01520000000002L 42.29417410714285 120.03800000000001Q 42.29417410714285 130.038 32.29417410714285 130.038L 34.87881696428571 130.038Q 24.87881696428571 130.038 24.87881696428571 120.03800000000001z"
                                                            pathFrom="M 24.87881696428571 120.03800000000001L 24.87881696428571 120.03800000000001L 42.29417410714285 120.03800000000001L 42.29417410714285 120.03800000000001L 42.29417410714285 120.03800000000001L 42.29417410714285 120.03800000000001L 42.29417410714285 120.03800000000001L 24.87881696428571 120.03800000000001"
                                                            cy="52.01520000000002" cx="95.05180803571429" j="0" val="18"
                                                            barHeight="78.02279999999999" barWidth="23.415357142857143">
                                                        </path>
                                                        <path id="SvgjsPath1492"
                                                            d="M 98.05180803571429 120.03800000000001L 98.05180803571429 109.69580000000002Q 98.05180803571429 99.69580000000002 108.05180803571429 99.69580000000002L 105.46716517857143 99.69580000000002Q 115.46716517857143 99.69580000000002 115.46716517857143 109.69580000000002L 115.46716517857143 109.69580000000002L 115.46716517857143 120.03800000000001Q 115.46716517857143 130.038 105.46716517857143 130.038L 108.05180803571429 130.038Q 98.05180803571429 130.038 98.05180803571429 120.03800000000001z"
                                                            fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskq19rtzui)"
                                                            pathTo="M 98.05180803571429 120.03800000000001L 98.05180803571429 109.69580000000002Q 98.05180803571429 99.69580000000002 108.05180803571429 99.69580000000002L 105.46716517857143 99.69580000000002Q 115.46716517857143 99.69580000000002 115.46716517857143 109.69580000000002L 115.46716517857143 109.69580000000002L 115.46716517857143 120.03800000000001Q 115.46716517857143 130.038 105.46716517857143 130.038L 108.05180803571429 130.038Q 98.05180803571429 130.038 98.05180803571429 120.03800000000001z"
                                                            pathFrom="M 98.05180803571429 120.03800000000001L 98.05180803571429 120.03800000000001L 115.46716517857143 120.03800000000001L 115.46716517857143 120.03800000000001L 115.46716517857143 120.03800000000001L 115.46716517857143 120.03800000000001L 115.46716517857143 120.03800000000001L 98.05180803571429 120.03800000000001"
                                                            cy="99.69580000000002" cx="168.22479910714287" j="1" val="7"
                                                            barHeight="30.3422" barWidth="23.415357142857143"></path>
                                                        <path id="SvgjsPath1493"
                                                            d="M 171.22479910714287 120.03800000000001L 171.22479910714287 75.01900000000002Q 171.22479910714287 65.01900000000002 181.22479910714287 65.01900000000002L 178.64015625000002 65.01900000000002Q 188.64015625000002 65.01900000000002 188.64015625000002 75.01900000000002L 188.64015625000002 75.01900000000002L 188.64015625000002 120.03800000000001Q 188.64015625000002 130.038 178.64015625000002 130.038L 181.22479910714287 130.038Q 171.22479910714287 130.038 171.22479910714287 120.03800000000001z"
                                                            fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskq19rtzui)"
                                                            pathTo="M 171.22479910714287 120.03800000000001L 171.22479910714287 75.01900000000002Q 171.22479910714287 65.01900000000002 181.22479910714287 65.01900000000002L 178.64015625000002 65.01900000000002Q 188.64015625000002 65.01900000000002 188.64015625000002 75.01900000000002L 188.64015625000002 75.01900000000002L 188.64015625000002 120.03800000000001Q 188.64015625000002 130.038 178.64015625000002 130.038L 181.22479910714287 130.038Q 171.22479910714287 130.038 171.22479910714287 120.03800000000001z"
                                                            pathFrom="M 171.22479910714287 120.03800000000001L 171.22479910714287 120.03800000000001L 188.64015625000002 120.03800000000001L 188.64015625000002 120.03800000000001L 188.64015625000002 120.03800000000001L 188.64015625000002 120.03800000000001L 188.64015625000002 120.03800000000001L 171.22479910714287 120.03800000000001"
                                                            cy="65.01900000000002" cx="241.39779017857143" j="2" val="15"
                                                            barHeight="65.01899999999999" barWidth="23.415357142857143">
                                                        </path>
                                                        <path id="SvgjsPath1494"
                                                            d="M 244.39779017857143 120.03800000000001L 244.39779017857143 14.334600000000023Q 244.39779017857143 4.334600000000023 254.39779017857143 4.334600000000023L 251.81314732142857 4.334600000000023Q 261.8131473214286 4.334600000000023 261.8131473214286 14.334600000000023L 261.8131473214286 14.334600000000023L 261.8131473214286 120.03800000000001Q 261.8131473214286 130.038 251.81314732142857 130.038L 254.39779017857143 130.038Q 244.39779017857143 130.038 244.39779017857143 120.03800000000001z"
                                                            fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskq19rtzui)"
                                                            pathTo="M 244.39779017857143 120.03800000000001L 244.39779017857143 14.334600000000023Q 244.39779017857143 4.334600000000023 254.39779017857143 4.334600000000023L 251.81314732142857 4.334600000000023Q 261.8131473214286 4.334600000000023 261.8131473214286 14.334600000000023L 261.8131473214286 14.334600000000023L 261.8131473214286 120.03800000000001Q 261.8131473214286 130.038 251.81314732142857 130.038L 254.39779017857143 130.038Q 244.39779017857143 130.038 244.39779017857143 120.03800000000001z"
                                                            pathFrom="M 244.39779017857143 120.03800000000001L 244.39779017857143 120.03800000000001L 261.8131473214286 120.03800000000001L 261.8131473214286 120.03800000000001L 261.8131473214286 120.03800000000001L 261.8131473214286 120.03800000000001L 261.8131473214286 120.03800000000001L 244.39779017857143 120.03800000000001"
                                                            cy="4.334600000000023" cx="314.57078125" j="3" val="29"
                                                            barHeight="125.70339999999999" barWidth="23.415357142857143">
                                                        </path>
                                                        <path id="SvgjsPath1495"
                                                            d="M 317.57078125 120.03800000000001L 317.57078125 62.01520000000002Q 317.57078125 52.01520000000002 327.57078125 52.01520000000002L 324.98613839285713 52.01520000000002Q 334.98613839285713 52.01520000000002 334.98613839285713 62.01520000000002L 334.98613839285713 62.01520000000002L 334.98613839285713 120.03800000000001Q 334.98613839285713 130.038 324.98613839285713 130.038L 327.57078125 130.038Q 317.57078125 130.038 317.57078125 120.03800000000001z"
                                                            fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskq19rtzui)"
                                                            pathTo="M 317.57078125 120.03800000000001L 317.57078125 62.01520000000002Q 317.57078125 52.01520000000002 327.57078125 52.01520000000002L 324.98613839285713 52.01520000000002Q 334.98613839285713 52.01520000000002 334.98613839285713 62.01520000000002L 334.98613839285713 62.01520000000002L 334.98613839285713 120.03800000000001Q 334.98613839285713 130.038 324.98613839285713 130.038L 327.57078125 130.038Q 317.57078125 130.038 317.57078125 120.03800000000001z"
                                                            pathFrom="M 317.57078125 120.03800000000001L 317.57078125 120.03800000000001L 334.98613839285713 120.03800000000001L 334.98613839285713 120.03800000000001L 334.98613839285713 120.03800000000001L 334.98613839285713 120.03800000000001L 334.98613839285713 120.03800000000001L 317.57078125 120.03800000000001"
                                                            cy="52.01520000000002" cx="387.74377232142854" j="4" val="18"
                                                            barHeight="78.02279999999999" barWidth="23.415357142857143">
                                                        </path>
                                                        <path id="SvgjsPath1496"
                                                            d="M 390.74377232142854 120.03800000000001L 390.74377232142854 88.02280000000002Q 390.74377232142854 78.02280000000002 400.74377232142854 78.02280000000002L 398.1591294642857 78.02280000000002Q 408.1591294642857 78.02280000000002 408.1591294642857 88.02280000000002L 408.1591294642857 88.02280000000002L 408.1591294642857 120.03800000000001Q 408.1591294642857 130.038 398.1591294642857 130.038L 400.74377232142854 130.038Q 390.74377232142854 130.038 390.74377232142854 120.03800000000001z"
                                                            fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskq19rtzui)"
                                                            pathTo="M 390.74377232142854 120.03800000000001L 390.74377232142854 88.02280000000002Q 390.74377232142854 78.02280000000002 400.74377232142854 78.02280000000002L 398.1591294642857 78.02280000000002Q 408.1591294642857 78.02280000000002 408.1591294642857 88.02280000000002L 408.1591294642857 88.02280000000002L 408.1591294642857 120.03800000000001Q 408.1591294642857 130.038 398.1591294642857 130.038L 400.74377232142854 130.038Q 390.74377232142854 130.038 390.74377232142854 120.03800000000001z"
                                                            pathFrom="M 390.74377232142854 120.03800000000001L 390.74377232142854 120.03800000000001L 408.1591294642857 120.03800000000001L 408.1591294642857 120.03800000000001L 408.1591294642857 120.03800000000001L 408.1591294642857 120.03800000000001L 408.1591294642857 120.03800000000001L 390.74377232142854 120.03800000000001"
                                                            cy="78.02280000000002" cx="460.9167633928571" j="5" val="12"
                                                            barHeight="52.01519999999999" barWidth="23.415357142857143">
                                                        </path>
                                                        <path id="SvgjsPath1497"
                                                            d="M 463.9167633928571 120.03800000000001L 463.9167633928571 101.02660000000002Q 463.9167633928571 91.02660000000002 473.9167633928571 91.02660000000002L 471.33212053571424 91.02660000000002Q 481.33212053571424 91.02660000000002 481.33212053571424 101.02660000000002L 481.33212053571424 101.02660000000002L 481.33212053571424 120.03800000000001Q 481.33212053571424 130.038 471.33212053571424 130.038L 473.9167633928571 130.038Q 463.9167633928571 130.038 463.9167633928571 120.03800000000001z"
                                                            fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskq19rtzui)"
                                                            pathTo="M 463.9167633928571 120.03800000000001L 463.9167633928571 101.02660000000002Q 463.9167633928571 91.02660000000002 473.9167633928571 91.02660000000002L 471.33212053571424 91.02660000000002Q 481.33212053571424 91.02660000000002 481.33212053571424 101.02660000000002L 481.33212053571424 101.02660000000002L 481.33212053571424 120.03800000000001Q 481.33212053571424 130.038 471.33212053571424 130.038L 473.9167633928571 130.038Q 463.9167633928571 130.038 463.9167633928571 120.03800000000001z"
                                                            pathFrom="M 463.9167633928571 120.03800000000001L 463.9167633928571 120.03800000000001L 481.33212053571424 120.03800000000001L 481.33212053571424 120.03800000000001L 481.33212053571424 120.03800000000001L 481.33212053571424 120.03800000000001L 481.33212053571424 120.03800000000001L 463.9167633928571 120.03800000000001"
                                                            cy="91.02660000000002" cx="534.0897544642856" j="6" val="9"
                                                            barHeight="39.011399999999995" barWidth="23.415357142857143">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG1498" class="apexcharts-series" seriesName="2020" rel="2"
                                                        data:realIndex="1">
                                                        <path id="SvgjsPath1500"
                                                            d="M 24.87881696428571 150.038L 24.87881696428571 186.3878Q 24.87881696428571 196.3878 34.87881696428571 196.3878L 32.29417410714285 196.3878Q 42.29417410714285 196.3878 42.29417410714285 186.3878L 42.29417410714285 186.3878L 42.29417410714285 150.038Q 42.29417410714285 140.038 32.29417410714285 140.038L 34.87881696428571 140.038Q 24.87881696428571 140.038 24.87881696428571 150.038z"
                                                            fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMaskq19rtzui)"
                                                            pathTo="M 24.87881696428571 150.038L 24.87881696428571 186.3878Q 24.87881696428571 196.3878 34.87881696428571 196.3878L 32.29417410714285 196.3878Q 42.29417410714285 196.3878 42.29417410714285 186.3878L 42.29417410714285 186.3878L 42.29417410714285 150.038Q 42.29417410714285 140.038 32.29417410714285 140.038L 34.87881696428571 140.038Q 24.87881696428571 140.038 24.87881696428571 150.038z"
                                                            pathFrom="M 24.87881696428571 150.038L 24.87881696428571 150.038L 42.29417410714285 150.038L 42.29417410714285 150.038L 42.29417410714285 150.038L 42.29417410714285 150.038L 42.29417410714285 150.038L 24.87881696428571 150.038"
                                                            cy="176.3878" cx="95.05180803571429" j="0" val="-13"
                                                            barHeight="-56.349799999999995" barWidth="23.415357142857143">
                                                        </path>
                                                        <path id="SvgjsPath1501"
                                                            d="M 98.05180803571429 150.038L 98.05180803571429 208.0608Q 98.05180803571429 218.0608 108.05180803571429 218.0608L 105.46716517857143 218.0608Q 115.46716517857143 218.0608 115.46716517857143 208.0608L 115.46716517857143 208.0608L 115.46716517857143 150.038Q 115.46716517857143 140.038 105.46716517857143 140.038L 108.05180803571429 140.038Q 98.05180803571429 140.038 98.05180803571429 150.038z"
                                                            fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMaskq19rtzui)"
                                                            pathTo="M 98.05180803571429 150.038L 98.05180803571429 208.0608Q 98.05180803571429 218.0608 108.05180803571429 218.0608L 105.46716517857143 218.0608Q 115.46716517857143 218.0608 115.46716517857143 208.0608L 115.46716517857143 208.0608L 115.46716517857143 150.038Q 115.46716517857143 140.038 105.46716517857143 140.038L 108.05180803571429 140.038Q 98.05180803571429 140.038 98.05180803571429 150.038z"
                                                            pathFrom="M 98.05180803571429 150.038L 98.05180803571429 150.038L 115.46716517857143 150.038L 115.46716517857143 150.038L 115.46716517857143 150.038L 115.46716517857143 150.038L 115.46716517857143 150.038L 98.05180803571429 150.038"
                                                            cy="198.0608" cx="168.22479910714287" j="1" val="-18"
                                                            barHeight="-78.02279999999999" barWidth="23.415357142857143">
                                                        </path>
                                                        <path id="SvgjsPath1502"
                                                            d="M 171.22479910714287 150.038L 171.22479910714287 169.0494Q 171.22479910714287 179.0494 181.22479910714287 179.0494L 178.64015625000002 179.0494Q 188.64015625000002 179.0494 188.64015625000002 169.0494L 188.64015625000002 169.0494L 188.64015625000002 150.038Q 188.64015625000002 140.038 178.64015625000002 140.038L 181.22479910714287 140.038Q 171.22479910714287 140.038 171.22479910714287 150.038z"
                                                            fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMaskq19rtzui)"
                                                            pathTo="M 171.22479910714287 150.038L 171.22479910714287 169.0494Q 171.22479910714287 179.0494 181.22479910714287 179.0494L 178.64015625000002 179.0494Q 188.64015625000002 179.0494 188.64015625000002 169.0494L 188.64015625000002 169.0494L 188.64015625000002 150.038Q 188.64015625000002 140.038 178.64015625000002 140.038L 181.22479910714287 140.038Q 171.22479910714287 140.038 171.22479910714287 150.038z"
                                                            pathFrom="M 171.22479910714287 150.038L 171.22479910714287 150.038L 188.64015625000002 150.038L 188.64015625000002 150.038L 188.64015625000002 150.038L 188.64015625000002 150.038L 188.64015625000002 150.038L 171.22479910714287 150.038"
                                                            cy="159.0494" cx="241.39779017857143" j="2" val="-9"
                                                            barHeight="-39.011399999999995" barWidth="23.415357142857143">
                                                        </path>
                                                        <path id="SvgjsPath1503"
                                                            d="M 244.39779017857143 150.038L 244.39779017857143 190.7224Q 244.39779017857143 200.7224 254.39779017857143 200.7224L 251.81314732142857 200.7224Q 261.8131473214286 200.7224 261.8131473214286 190.7224L 261.8131473214286 190.7224L 261.8131473214286 150.038Q 261.8131473214286 140.038 251.81314732142857 140.038L 254.39779017857143 140.038Q 244.39779017857143 140.038 244.39779017857143 150.038z"
                                                            fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMaskq19rtzui)"
                                                            pathTo="M 244.39779017857143 150.038L 244.39779017857143 190.7224Q 244.39779017857143 200.7224 254.39779017857143 200.7224L 251.81314732142857 200.7224Q 261.8131473214286 200.7224 261.8131473214286 190.7224L 261.8131473214286 190.7224L 261.8131473214286 150.038Q 261.8131473214286 140.038 251.81314732142857 140.038L 254.39779017857143 140.038Q 244.39779017857143 140.038 244.39779017857143 150.038z"
                                                            pathFrom="M 244.39779017857143 150.038L 244.39779017857143 150.038L 261.8131473214286 150.038L 261.8131473214286 150.038L 261.8131473214286 150.038L 261.8131473214286 150.038L 261.8131473214286 150.038L 244.39779017857143 150.038"
                                                            cy="180.7224" cx="314.57078125" j="3" val="-14"
                                                            barHeight="-60.6844" barWidth="23.415357142857143"></path>
                                                        <path id="SvgjsPath1504"
                                                            d="M 317.57078125 150.038L 317.57078125 151.711Q 317.57078125 161.711 327.57078125 161.711L 324.98613839285713 161.711Q 334.98613839285713 161.711 334.98613839285713 151.711L 334.98613839285713 151.711L 334.98613839285713 150.038Q 334.98613839285713 140.038 324.98613839285713 140.038L 327.57078125 140.038Q 317.57078125 140.038 317.57078125 150.038z"
                                                            fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMaskq19rtzui)"
                                                            pathTo="M 317.57078125 150.038L 317.57078125 151.711Q 317.57078125 161.711 327.57078125 161.711L 324.98613839285713 161.711Q 334.98613839285713 161.711 334.98613839285713 151.711L 334.98613839285713 151.711L 334.98613839285713 150.038Q 334.98613839285713 140.038 324.98613839285713 140.038L 327.57078125 140.038Q 317.57078125 140.038 317.57078125 150.038z"
                                                            pathFrom="M 317.57078125 150.038L 317.57078125 150.038L 334.98613839285713 150.038L 334.98613839285713 150.038L 334.98613839285713 150.038L 334.98613839285713 150.038L 334.98613839285713 150.038L 317.57078125 150.038"
                                                            cy="141.711" cx="387.74377232142854" j="4" val="-5"
                                                            barHeight="-21.673" barWidth="23.415357142857143"></path>
                                                        <path id="SvgjsPath1505"
                                                            d="M 390.74377232142854 150.038L 390.74377232142854 203.7262Q 390.74377232142854 213.7262 400.74377232142854 213.7262L 398.1591294642857 213.7262Q 408.1591294642857 213.7262 408.1591294642857 203.7262L 408.1591294642857 203.7262L 408.1591294642857 150.038Q 408.1591294642857 140.038 398.1591294642857 140.038L 400.74377232142854 140.038Q 390.74377232142854 140.038 390.74377232142854 150.038z"
                                                            fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMaskq19rtzui)"
                                                            pathTo="M 390.74377232142854 150.038L 390.74377232142854 203.7262Q 390.74377232142854 213.7262 400.74377232142854 213.7262L 398.1591294642857 213.7262Q 408.1591294642857 213.7262 408.1591294642857 203.7262L 408.1591294642857 203.7262L 408.1591294642857 150.038Q 408.1591294642857 140.038 398.1591294642857 140.038L 400.74377232142854 140.038Q 390.74377232142854 140.038 390.74377232142854 150.038z"
                                                            pathFrom="M 390.74377232142854 150.038L 390.74377232142854 150.038L 408.1591294642857 150.038L 408.1591294642857 150.038L 408.1591294642857 150.038L 408.1591294642857 150.038L 408.1591294642857 150.038L 390.74377232142854 150.038"
                                                            cy="193.7262" cx="460.9167633928571" j="5" val="-17"
                                                            barHeight="-73.6882" barWidth="23.415357142857143"></path>
                                                        <path id="SvgjsPath1506"
                                                            d="M 463.9167633928571 150.038L 463.9167633928571 195.05700000000002Q 463.9167633928571 205.05700000000002 473.9167633928571 205.05700000000002L 471.33212053571424 205.05700000000002Q 481.33212053571424 205.05700000000002 481.33212053571424 195.05700000000002L 481.33212053571424 195.05700000000002L 481.33212053571424 150.038Q 481.33212053571424 140.038 471.33212053571424 140.038L 473.9167633928571 140.038Q 463.9167633928571 140.038 463.9167633928571 150.038z"
                                                            fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMaskq19rtzui)"
                                                            pathTo="M 463.9167633928571 150.038L 463.9167633928571 195.05700000000002Q 463.9167633928571 205.05700000000002 473.9167633928571 205.05700000000002L 471.33212053571424 205.05700000000002Q 481.33212053571424 205.05700000000002 481.33212053571424 195.05700000000002L 481.33212053571424 195.05700000000002L 481.33212053571424 150.038Q 481.33212053571424 140.038 471.33212053571424 140.038L 473.9167633928571 140.038Q 463.9167633928571 140.038 463.9167633928571 150.038z"
                                                            pathFrom="M 463.9167633928571 150.038L 463.9167633928571 150.038L 481.33212053571424 150.038L 481.33212053571424 150.038L 481.33212053571424 150.038L 481.33212053571424 150.038L 481.33212053571424 150.038L 463.9167633928571 150.038"
                                                            cy="185.05700000000002" cx="534.0897544642856" j="6" val="-15"
                                                            barHeight="-65.01899999999999" barWidth="23.415357142857143">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG1490" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                    <g id="SvgjsG1499" class="apexcharts-datalabels" data:realIndex="1">
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine1555" x1="0" y1="0" x2="512.2109375" y2="0"
                                                    stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                    stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1556" x1="0" y1="0" x2="512.2109375" y2="0"
                                                    stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1557" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1558" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1559" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <g id="SvgjsG1530" class="apexcharts-yaxis" rel="0"
                                                transform="translate(15.7890625, 0)">
                                                <g id="SvgjsG1531" class="apexcharts-yaxis-texts-g"><text
                                                        id="SvgjsText1532" font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="53.5" text-anchor="end" dominant-baseline="auto" font-size="13px"
                                                        font-weight="400" fill="#a1acb8"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1533">30</tspan>
                                                        <title>30</title>
                                                    </text><text id="SvgjsText1534"
                                                        font-family="Helvetica, Arial, sans-serif" x="20" y="96.846"
                                                        text-anchor="end" dominant-baseline="auto" font-size="13px"
                                                        font-weight="400" fill="#a1acb8"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1535">20</tspan>
                                                        <title>20</title>
                                                    </text><text id="SvgjsText1536"
                                                        font-family="Helvetica, Arial, sans-serif" x="20" y="140.192"
                                                        text-anchor="end" dominant-baseline="auto" font-size="13px"
                                                        font-weight="400" fill="#a1acb8"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1537">10</tspan>
                                                        <title>10</title>
                                                    </text><text id="SvgjsText1538"
                                                        font-family="Helvetica, Arial, sans-serif" x="20" y="183.538"
                                                        text-anchor="end" dominant-baseline="auto" font-size="13px"
                                                        font-weight="400" fill="#a1acb8"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1539">0</tspan>
                                                        <title>0</title>
                                                    </text><text id="SvgjsText1540"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="226.88400000000001" text-anchor="end" dominant-baseline="auto"
                                                        font-size="13px" font-weight="400" fill="#a1acb8"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1541">-10</tspan>
                                                        <title>-10</title>
                                                    </text><text id="SvgjsText1542"
                                                        font-family="Helvetica, Arial, sans-serif" x="20" y="270.23"
                                                        text-anchor="end" dominant-baseline="auto" font-size="13px"
                                                        font-weight="400" fill="#a1acb8"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1543">-20</tspan>
                                                        <title>-20</title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG1478" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(105, 108, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(3, 195, 236);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 603px; height: 377px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <div class="text-center">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-label-primary dropdown-toggle" type="button"
                                                id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                2022
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                                                <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                                <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                                <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="growthChart" style="min-height: 154.875px;">
                                    <div id="apexchartssppxupsi"
                                        class="apexcharts-canvas apexchartssppxupsi apexcharts-theme-light"
                                        style="width: 301px; height: 154.875px;"><svg id="SvgjsSvg1560" width="301"
                                            height="154.875" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG1562" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(43.5, -25)">
                                                <defs id="SvgjsDefs1561">
                                                    <clipPath id="gridRectMasksppxupsi">
                                                        <rect id="SvgjsRect1564" width="222" height="285" x="-3" y="-1"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMasksppxupsi"></clipPath>
                                                    <clipPath id="nonForecastMasksppxupsi"></clipPath>
                                                    <clipPath id="gridRectMarkerMasksppxupsi">
                                                        <rect id="SvgjsRect1565" width="220" height="287" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient1570" x1="1" y1="0" x2="0"
                                                        y2="1">
                                                        <stop id="SvgjsStop1571" stop-opacity="1"
                                                            stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                        <stop id="SvgjsStop1572" stop-opacity="0.6"
                                                            stop-color="rgba(255,255,255,0.6)" offset="0.7"></stop>
                                                        <stop id="SvgjsStop1573" stop-opacity="0.6"
                                                            stop-color="rgba(255,255,255,0.6)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1581" x1="1" y1="0" x2="0"
                                                        y2="1">
                                                        <stop id="SvgjsStop1582" stop-opacity="1"
                                                            stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                        <stop id="SvgjsStop1583" stop-opacity="0.6"
                                                            stop-color="rgba(105,108,255,0.6)" offset="0.7"></stop>
                                                        <stop id="SvgjsStop1584" stop-opacity="0.6"
                                                            stop-color="rgba(105,108,255,0.6)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <g id="SvgjsG1566" class="apexcharts-radialbar">
                                                    <g id="SvgjsG1567">
                                                        <g id="SvgjsG1568" class="apexcharts-tracks">
                                                            <g id="SvgjsG1569"
                                                                class="apexcharts-radialbar-track apexcharts-track"
                                                                rel="1">
                                                                <path id="apexcharts-radialbarTrack-0"
                                                                    d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656"
                                                                    fill="none" fill-opacity="1"
                                                                    stroke="rgba(255,255,255,0.85)" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="17.357317073170734"
                                                                    stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                                    data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656">
                                                                </path>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1575">
                                                            <g id="SvgjsG1580"
                                                                class="apexcharts-series apexcharts-radial-series"
                                                                seriesName="Growth" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1585"
                                                                    d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481"
                                                                    fill="none" fill-opacity="0.85"
                                                                    stroke="url(#SvgjsLinearGradient1581)"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="17.357317073170734" stroke-dasharray="5"
                                                                    class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                    data:angle="234" data:value="78" index="0" j="0"
                                                                    data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481">
                                                                </path>
                                                            </g>
                                                            <circle id="SvgjsCircle1576" r="54.65121951219512" cx="108"
                                                                cy="108" class="apexcharts-radialbar-hollow"
                                                                fill="transparent"></circle>
                                                            <g id="SvgjsG1577" class="apexcharts-datalabels-group"
                                                                transform="translate(0, 0) scale(1)" style="opacity: 1;">
                                                                <text id="SvgjsText1578" font-family="Public Sans" x="108"
                                                                    y="123" text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="15px" font-weight="500" fill="#566a7f"
                                                                    class="apexcharts-text apexcharts-datalabel-label"
                                                                    style="font-family: &quot;Public Sans&quot;;">Growth</text><text
                                                                    id="SvgjsText1579" font-family="Public Sans" x="108"
                                                                    y="99" text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="22px" font-weight="500" fill="#566a7f"
                                                                    class="apexcharts-text apexcharts-datalabel-value"
                                                                    style="font-family: &quot;Public Sans&quot;;">78%</text>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine1586" x1="0" y1="0" x2="216" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1587" x1="0" y1="0" x2="216" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                            <g id="SvgjsG1563" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                    </div>
                                </div>
                                <div class="text-center fw-semibold pt-3 mb-2">62% Company Growth</div>

                                <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <span class="badge bg-label-primary p-2"><i
                                                    class="bx bx-dollar text-primary"></i></span>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <small>2022</small>
                                            <h6 class="mb-0">$32.5k</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <span class="badge bg-label-info p-2"><i
                                                    class="bx bx-wallet text-info"></i></span>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <small>2021</small>
                                            <h6 class="mb-0">$41.2k</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 302px; height: 377px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Total Revenue -->
                <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                    <div class="row">
                        <div class="col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="../../assets/img/icons/unicons/paypal.png" alt="Credit Card"
                                                class="rounded">
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt4"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="d-block mb-1">Payments</span>
                                    <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                                    <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i>
                                        -14.82%</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="card">
                                <div class="card-body pb-2" style="position: relative;">
                                    <span class="d-block fw-semibold mb-1">Revenue</span>
                                    <h3 class="card-title mb-1">425k</h3>
                                    <div id="revenueChart" style="min-height: 95px;">
                                        <div id="apexchartszmt4qa54"
                                            class="apexcharts-canvas apexchartszmt4qa54 apexcharts-theme-light"
                                            style="width: 159px; height: 80px;"><svg id="SvgjsSvg1588" width="159"
                                                height="80" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                                class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)" style="background: transparent;">
                                                <g id="SvgjsG1590" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 10)">
                                                    <defs id="SvgjsDefs1589">
                                                        <linearGradient id="SvgjsLinearGradient1593" x1="0" y1="0" x2="0"
                                                            y2="1">
                                                            <stop id="SvgjsStop1594" stop-opacity="0.4"
                                                                stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                            <stop id="SvgjsStop1595" stop-opacity="0.5"
                                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                            <stop id="SvgjsStop1596" stop-opacity="0.5"
                                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        </linearGradient>
                                                        <clipPath id="gridRectMaskzmt4qa54">
                                                            <rect id="SvgjsRect1598" width="163" height="42.73" x="-2" y="0"
                                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskzmt4qa54"></clipPath>
                                                        <clipPath id="nonForecastMaskzmt4qa54"></clipPath>
                                                        <clipPath id="gridRectMarkerMaskzmt4qa54">
                                                            <rect id="SvgjsRect1599" width="163" height="46.73" x="-2"
                                                                y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <rect id="SvgjsRect1597" width="17.03571428571429" height="42.73" x="0"
                                                        y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke-dasharray="3" fill="url(#SvgjsLinearGradient1593)"
                                                        class="apexcharts-xcrosshairs" y2="42.73" filter="none"
                                                        fill-opacity="0.9"></rect>
                                                    <g id="SvgjsG1618" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1619" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"><text id="SvgjsText1621"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="11.357142857142858" y="71.72999999999999"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#8592a3"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1622">M</tspan>
                                                                <title>M</title>
                                                            </text><text id="SvgjsText1624"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="34.07142857142857" y="71.72999999999999"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#8592a3"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1625">T</tspan>
                                                                <title>T</title>
                                                            </text><text id="SvgjsText1627"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="56.78571428571428" y="71.72999999999999"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#8592a3"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1628">W</tspan>
                                                                <title>W</title>
                                                            </text><text id="SvgjsText1630"
                                                                font-family="Helvetica, Arial, sans-serif" x="79.5"
                                                                y="71.72999999999999" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                                fill="#8592a3"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1631">T</tspan>
                                                                <title>T</title>
                                                            </text><text id="SvgjsText1633"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="102.21428571428572" y="71.72999999999999"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#8592a3"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1634">F</tspan>
                                                                <title>F</title>
                                                            </text><text id="SvgjsText1636"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="124.92857142857144" y="71.72999999999999"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#8592a3"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1637">S</tspan>
                                                                <title>S</title>
                                                            </text><text id="SvgjsText1639"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="147.64285714285717" y="71.72999999999999"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#8592a3"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1640">S</tspan>
                                                                <title>S</title>
                                                            </text></g>
                                                    </g>
                                                    <g id="SvgjsG1643" class="apexcharts-grid">
                                                        <g id="SvgjsG1644" class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line id="SvgjsLine1646" x1="0" y1="0" x2="159" y2="0"
                                                                stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1647" x1="0" y1="8.546" x2="159" y2="8.546"
                                                                stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1648" x1="0" y1="17.092" x2="159" y2="17.092"
                                                                stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1649" x1="0" y1="25.637999999999998" x2="159"
                                                                y2="25.637999999999998" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1650" x1="0" y1="34.184" x2="159" y2="34.184"
                                                                stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1651" x1="0" y1="42.73" x2="159" y2="42.73"
                                                                stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG1645" class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line id="SvgjsLine1653" x1="0" y1="42.73" x2="159" y2="42.73"
                                                            stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                        </line>
                                                        <line id="SvgjsLine1652" x1="0" y1="1" x2="0" y2="42.73"
                                                            stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                        </line>
                                                    </g>
                                                    <g id="SvgjsG1600"
                                                        class="apexcharts-bar-series apexcharts-plot-series">
                                                        <g id="SvgjsG1601" class="apexcharts-series" rel="1"
                                                            seriesName="seriesx1" data:realIndex="0">
                                                            <path id="SvgjsPath1605"
                                                                d="M 2.8392857142857135 40.73L 2.8392857142857135 27.637999999999998Q 2.8392857142857135 25.637999999999998 4.8392857142857135 25.637999999999998L 17.875 25.637999999999998Q 19.875 25.637999999999998 19.875 27.637999999999998L 19.875 27.637999999999998L 19.875 40.73Q 19.875 42.73 17.875 42.73L 4.8392857142857135 42.73Q 2.8392857142857135 42.73 2.8392857142857135 40.73z"
                                                                fill="#666ee81a" fill-opacity="1" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskzmt4qa54)"
                                                                pathTo="M 2.8392857142857135 40.73L 2.8392857142857135 27.637999999999998Q 2.8392857142857135 25.637999999999998 4.8392857142857135 25.637999999999998L 17.875 25.637999999999998Q 19.875 25.637999999999998 19.875 27.637999999999998L 19.875 27.637999999999998L 19.875 40.73Q 19.875 42.73 17.875 42.73L 4.8392857142857135 42.73Q 2.8392857142857135 42.73 2.8392857142857135 40.73z"
                                                                pathFrom="M 2.8392857142857135 40.73L 2.8392857142857135 40.73L 19.875 40.73L 19.875 40.73L 19.875 40.73L 19.875 40.73L 19.875 40.73L 2.8392857142857135 40.73"
                                                                cy="25.637999999999998" cx="25.55357142857143" j="0"
                                                                val="40" barHeight="17.092" barWidth="17.03571428571429">
                                                            </path>
                                                            <path id="SvgjsPath1607"
                                                                d="M 25.55357142857143 40.73L 25.55357142857143 4.136499999999998Q 25.55357142857143 2.136499999999998 27.55357142857143 2.136499999999998L 40.58928571428572 2.136499999999998Q 42.58928571428572 2.136499999999998 42.58928571428572 4.136499999999998L 42.58928571428572 4.136499999999998L 42.58928571428572 40.73Q 42.58928571428572 42.73 40.58928571428572 42.73L 27.55357142857143 42.73Q 25.55357142857143 42.73 25.55357142857143 40.73z"
                                                                fill="#666ee81a" fill-opacity="1" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskzmt4qa54)"
                                                                pathTo="M 25.55357142857143 40.73L 25.55357142857143 4.136499999999998Q 25.55357142857143 2.136499999999998 27.55357142857143 2.136499999999998L 40.58928571428572 2.136499999999998Q 42.58928571428572 2.136499999999998 42.58928571428572 4.136499999999998L 42.58928571428572 4.136499999999998L 42.58928571428572 40.73Q 42.58928571428572 42.73 40.58928571428572 42.73L 27.55357142857143 42.73Q 25.55357142857143 42.73 25.55357142857143 40.73z"
                                                                pathFrom="M 25.55357142857143 40.73L 25.55357142857143 40.73L 42.58928571428572 40.73L 42.58928571428572 40.73L 42.58928571428572 40.73L 42.58928571428572 40.73L 42.58928571428572 40.73L 25.55357142857143 40.73"
                                                                cy="2.136499999999998" cx="48.267857142857146" j="1"
                                                                val="95" barHeight="40.5935" barWidth="17.03571428571429">
                                                            </path>
                                                            <path id="SvgjsPath1609"
                                                                d="M 48.267857142857146 40.73L 48.267857142857146 19.092Q 48.267857142857146 17.092 50.267857142857146 17.092L 63.30357142857143 17.092Q 65.30357142857143 17.092 65.30357142857143 19.092L 65.30357142857143 19.092L 65.30357142857143 40.73Q 65.30357142857143 42.73 63.30357142857143 42.73L 50.267857142857146 42.73Q 48.267857142857146 42.73 48.267857142857146 40.73z"
                                                                fill="#666ee81a" fill-opacity="1" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskzmt4qa54)"
                                                                pathTo="M 48.267857142857146 40.73L 48.267857142857146 19.092Q 48.267857142857146 17.092 50.267857142857146 17.092L 63.30357142857143 17.092Q 65.30357142857143 17.092 65.30357142857143 19.092L 65.30357142857143 19.092L 65.30357142857143 40.73Q 65.30357142857143 42.73 63.30357142857143 42.73L 50.267857142857146 42.73Q 48.267857142857146 42.73 48.267857142857146 40.73z"
                                                                pathFrom="M 48.267857142857146 40.73L 48.267857142857146 40.73L 65.30357142857143 40.73L 65.30357142857143 40.73L 65.30357142857143 40.73L 65.30357142857143 40.73L 65.30357142857143 40.73L 48.267857142857146 40.73"
                                                                cy="17.092" cx="70.98214285714286" j="2" val="60"
                                                                barHeight="25.637999999999998" barWidth="17.03571428571429">
                                                            </path>
                                                            <path id="SvgjsPath1611"
                                                                d="M 70.98214285714286 40.73L 70.98214285714286 25.5015Q 70.98214285714286 23.5015 72.98214285714286 23.5015L 86.01785714285715 23.5015Q 88.01785714285715 23.5015 88.01785714285715 25.5015L 88.01785714285715 25.5015L 88.01785714285715 40.73Q 88.01785714285715 42.73 86.01785714285715 42.73L 72.98214285714286 42.73Q 70.98214285714286 42.73 70.98214285714286 40.73z"
                                                                fill="#666ee81a" fill-opacity="1" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskzmt4qa54)"
                                                                pathTo="M 70.98214285714286 40.73L 70.98214285714286 25.5015Q 70.98214285714286 23.5015 72.98214285714286 23.5015L 86.01785714285715 23.5015Q 88.01785714285715 23.5015 88.01785714285715 25.5015L 88.01785714285715 25.5015L 88.01785714285715 40.73Q 88.01785714285715 42.73 86.01785714285715 42.73L 72.98214285714286 42.73Q 70.98214285714286 42.73 70.98214285714286 40.73z"
                                                                pathFrom="M 70.98214285714286 40.73L 70.98214285714286 40.73L 88.01785714285715 40.73L 88.01785714285715 40.73L 88.01785714285715 40.73L 88.01785714285715 40.73L 88.01785714285715 40.73L 70.98214285714286 40.73"
                                                                cy="23.5015" cx="93.69642857142858" j="3" val="45"
                                                                barHeight="19.228499999999997" barWidth="17.03571428571429">
                                                            </path>
                                                            <path id="SvgjsPath1613"
                                                                d="M 93.69642857142858 40.73L 93.69642857142858 6.273000000000003Q 93.69642857142858 4.273000000000003 95.69642857142858 4.273000000000003L 108.73214285714288 4.273000000000003Q 110.73214285714288 4.273000000000003 110.73214285714288 6.273000000000003L 110.73214285714288 6.273000000000003L 110.73214285714288 40.73Q 110.73214285714288 42.73 108.73214285714288 42.73L 95.69642857142858 42.73Q 93.69642857142858 42.73 93.69642857142858 40.73z"
                                                                fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskzmt4qa54)"
                                                                pathTo="M 93.69642857142858 40.73L 93.69642857142858 6.273000000000003Q 93.69642857142858 4.273000000000003 95.69642857142858 4.273000000000003L 108.73214285714288 4.273000000000003Q 110.73214285714288 4.273000000000003 110.73214285714288 6.273000000000003L 110.73214285714288 6.273000000000003L 110.73214285714288 40.73Q 110.73214285714288 42.73 108.73214285714288 42.73L 95.69642857142858 42.73Q 93.69642857142858 42.73 93.69642857142858 40.73z"
                                                                pathFrom="M 93.69642857142858 40.73L 93.69642857142858 40.73L 110.73214285714288 40.73L 110.73214285714288 40.73L 110.73214285714288 40.73L 110.73214285714288 40.73L 110.73214285714288 40.73L 93.69642857142858 40.73"
                                                                cy="4.273000000000003" cx="116.4107142857143" j="4" val="90"
                                                                barHeight="38.456999999999994" barWidth="17.03571428571429">
                                                            </path>
                                                            <path id="SvgjsPath1615"
                                                                d="M 116.4107142857143 40.73L 116.4107142857143 23.365Q 116.4107142857143 21.365 118.4107142857143 21.365L 131.44642857142858 21.365Q 133.44642857142858 21.365 133.44642857142858 23.365L 133.44642857142858 23.365L 133.44642857142858 40.73Q 133.44642857142858 42.73 131.44642857142858 42.73L 118.4107142857143 42.73Q 116.4107142857143 42.73 116.4107142857143 40.73z"
                                                                fill="#666ee81a" fill-opacity="1" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskzmt4qa54)"
                                                                pathTo="M 116.4107142857143 40.73L 116.4107142857143 23.365Q 116.4107142857143 21.365 118.4107142857143 21.365L 131.44642857142858 21.365Q 133.44642857142858 21.365 133.44642857142858 23.365L 133.44642857142858 23.365L 133.44642857142858 40.73Q 133.44642857142858 42.73 131.44642857142858 42.73L 118.4107142857143 42.73Q 116.4107142857143 42.73 116.4107142857143 40.73z"
                                                                pathFrom="M 116.4107142857143 40.73L 116.4107142857143 40.73L 133.44642857142858 40.73L 133.44642857142858 40.73L 133.44642857142858 40.73L 133.44642857142858 40.73L 133.44642857142858 40.73L 116.4107142857143 40.73"
                                                                cy="21.365" cx="139.12500000000003" j="5" val="50"
                                                                barHeight="21.365" barWidth="17.03571428571429"></path>
                                                            <path id="SvgjsPath1617"
                                                                d="M 139.12500000000003 40.73L 139.12500000000003 12.682499999999997Q 139.12500000000003 10.682499999999997 141.12500000000003 10.682499999999997L 154.1607142857143 10.682499999999997Q 156.1607142857143 10.682499999999997 156.1607142857143 12.682499999999997L 156.1607142857143 12.682499999999997L 156.1607142857143 40.73Q 156.1607142857143 42.73 154.1607142857143 42.73L 141.12500000000003 42.73Q 139.12500000000003 42.73 139.12500000000003 40.73z"
                                                                fill="#666ee81a" fill-opacity="1" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskzmt4qa54)"
                                                                pathTo="M 139.12500000000003 40.73L 139.12500000000003 12.682499999999997Q 139.12500000000003 10.682499999999997 141.12500000000003 10.682499999999997L 154.1607142857143 10.682499999999997Q 156.1607142857143 10.682499999999997 156.1607142857143 12.682499999999997L 156.1607142857143 12.682499999999997L 156.1607142857143 40.73Q 156.1607142857143 42.73 154.1607142857143 42.73L 141.12500000000003 42.73Q 139.12500000000003 42.73 139.12500000000003 40.73z"
                                                                pathFrom="M 139.12500000000003 40.73L 139.12500000000003 40.73L 156.1607142857143 40.73L 156.1607142857143 40.73L 156.1607142857143 40.73L 156.1607142857143 40.73L 156.1607142857143 40.73L 139.12500000000003 40.73"
                                                                cy="10.682499999999997" cx="161.83928571428575" j="6"
                                                                val="75" barHeight="32.0475" barWidth="17.03571428571429">
                                                            </path>
                                                            <g id="SvgjsG1603" class="apexcharts-bar-goals-markers"
                                                                style="pointer-events: none">
                                                                <g id="SvgjsG1604" className="apexcharts-bar-goals-groups">
                                                                </g>
                                                                <g id="SvgjsG1606" className="apexcharts-bar-goals-groups">
                                                                </g>
                                                                <g id="SvgjsG1608" className="apexcharts-bar-goals-groups">
                                                                </g>
                                                                <g id="SvgjsG1610" className="apexcharts-bar-goals-groups">
                                                                </g>
                                                                <g id="SvgjsG1612" className="apexcharts-bar-goals-groups">
                                                                </g>
                                                                <g id="SvgjsG1614" className="apexcharts-bar-goals-groups">
                                                                </g>
                                                                <g id="SvgjsG1616" className="apexcharts-bar-goals-groups">
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1602" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine1654" x1="0" y1="0" x2="159" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1655" x1="0" y1="0" x2="159" y2="0"
                                                        stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1656" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1657" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1658" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <g id="SvgjsG1641" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-8, 0)">
                                                    <g id="SvgjsG1642" class="apexcharts-yaxis-texts-g"></g>
                                                </g>
                                                <g id="SvgjsG1591" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 40px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgba(102, 110, 232, 0.1);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 208px; height: 188px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- </div>
    <div class="row"> -->
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between flex-sm-row flex-column gap-3"
                                        style="position: relative;">
                                        <div
                                            class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                            <div class="card-title">
                                                <h5 class="text-nowrap mb-2">Profile Report</h5>
                                                <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                                            </div>
                                            <div class="mt-sm-auto">
                                                <small class="text-success text-nowrap fw-semibold"><i
                                                        class="bx bx-chevron-up"></i> 68.2%</small>
                                                <h3 class="mb-0">$84,686k</h3>
                                            </div>
                                        </div>
                                        <div id="profileReportChart" style="min-height: 80px;">
                                            <div id="apexcharts77qagg25"
                                                class="apexcharts-canvas apexcharts77qagg25 apexcharts-theme-light"
                                                style="width: 253px; height: 80px;"><svg id="SvgjsSvg1660" width="253"
                                                    height="80" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <g id="SvgjsG1662" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(0, 0)">
                                                        <defs id="SvgjsDefs1661">
                                                            <clipPath id="gridRectMask77qagg25">
                                                                <rect id="SvgjsRect1667" width="254" height="85" x="-4.5"
                                                                    y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMask77qagg25"></clipPath>
                                                            <clipPath id="nonForecastMask77qagg25"></clipPath>
                                                            <clipPath id="gridRectMarkerMask77qagg25">
                                                                <rect id="SvgjsRect1668" width="249" height="84" x="-2"
                                                                    y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <filter id="SvgjsFilter1674" filterUnits="userSpaceOnUse"
                                                                width="200%" height="200%" x="-50%" y="-50%">
                                                                <feFlood id="SvgjsFeFlood1675" flood-color="#ffab00"
                                                                    flood-opacity="0.15" result="SvgjsFeFlood1675Out"
                                                                    in="SourceGraphic"></feFlood>
                                                                <feComposite id="SvgjsFeComposite1676"
                                                                    in="SvgjsFeFlood1675Out" in2="SourceAlpha" operator="in"
                                                                    result="SvgjsFeComposite1676Out"></feComposite>
                                                                <feOffset id="SvgjsFeOffset1677" dx="5" dy="10"
                                                                    result="SvgjsFeOffset1677Out"
                                                                    in="SvgjsFeComposite1676Out"></feOffset>
                                                                <feGaussianBlur id="SvgjsFeGaussianBlur1678"
                                                                    stdDeviation="3 " result="SvgjsFeGaussianBlur1678Out"
                                                                    in="SvgjsFeOffset1677Out"></feGaussianBlur>
                                                                <feMerge id="SvgjsFeMerge1679" result="SvgjsFeMerge1679Out"
                                                                    in="SourceGraphic">
                                                                    <feMergeNode id="SvgjsFeMergeNode1680"
                                                                        in="SvgjsFeGaussianBlur1678Out"></feMergeNode>
                                                                    <feMergeNode id="SvgjsFeMergeNode1681"
                                                                        in="[object Arguments]"></feMergeNode>
                                                                </feMerge>
                                                                <feBlend id="SvgjsFeBlend1682" in="SourceGraphic"
                                                                    in2="SvgjsFeMerge1679Out" mode="normal"
                                                                    result="SvgjsFeBlend1682Out"></feBlend>
                                                            </filter>
                                                        </defs>
                                                        <line id="SvgjsLine1666" x1="0" y1="0" x2="0" y2="80"
                                                            stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt"
                                                            class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                            height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                            stroke-width="1"></line>
                                                        <g id="SvgjsG1683" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG1684" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, -4)"></g>
                                                        </g>
                                                        <g id="SvgjsG1692" class="apexcharts-grid">
                                                            <g id="SvgjsG1693" class="apexcharts-gridlines-horizontal"
                                                                style="display: none;">
                                                                <line id="SvgjsLine1695" x1="0" y1="0" x2="245" y2="0"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    stroke-linecap="butt" class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine1696" x1="0" y1="20" x2="245" y2="20"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    stroke-linecap="butt" class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine1697" x1="0" y1="40" x2="245" y2="40"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    stroke-linecap="butt" class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine1698" x1="0" y1="60" x2="245" y2="60"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    stroke-linecap="butt" class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine1699" x1="0" y1="80" x2="245" y2="80"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    stroke-linecap="butt" class="apexcharts-gridline">
                                                                </line>
                                                            </g>
                                                            <g id="SvgjsG1694" class="apexcharts-gridlines-vertical"
                                                                style="display: none;"></g>
                                                            <line id="SvgjsLine1701" x1="0" y1="80" x2="245" y2="80"
                                                                stroke="transparent" stroke-dasharray="0"
                                                                stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine1700" x1="0" y1="1" x2="0" y2="80"
                                                                stroke="transparent" stroke-dasharray="0"
                                                                stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG1669"
                                                            class="apexcharts-line-series apexcharts-plot-series">
                                                            <g id="SvgjsG1670" class="apexcharts-series"
                                                                seriesName="seriesx1" data:longestSeries="true" rel="1"
                                                                data:realIndex="0">
                                                                <path id="SvgjsPath1673"
                                                                    d="M 0 76C 17.150000000000002 76 31.850000000000005 12 49.00000000000001 12C 66.15 12 80.85000000000001 62 98.00000000000001 62C 115.15 62 129.85 22 147 22C 164.15 22 178.85000000000002 38 196.00000000000003 38C 213.15000000000003 38 227.85000000000002 6 245.00000000000003 6"
                                                                    fill="none" fill-opacity="1"
                                                                    stroke="rgba(255,171,0,0.85)" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="5"
                                                                    stroke-dasharray="0" class="apexcharts-line" index="0"
                                                                    clip-path="url(#gridRectMask77qagg25)"
                                                                    filter="url(#SvgjsFilter1674)"
                                                                    pathTo="M 0 76C 17.150000000000002 76 31.850000000000005 12 49.00000000000001 12C 66.15 12 80.85000000000001 62 98.00000000000001 62C 115.15 62 129.85 22 147 22C 164.15 22 178.85000000000002 38 196.00000000000003 38C 213.15000000000003 38 227.85000000000002 6 245.00000000000003 6"
                                                                    pathFrom="M -1 120L -1 120L 49.00000000000001 120L 98.00000000000001 120L 147 120L 196.00000000000003 120L 245.00000000000003 120">
                                                                </path>
                                                                <g id="SvgjsG1671" class="apexcharts-series-markers-wrap"
                                                                    data:realIndex="0">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1707" r="0" cx="0" cy="0"
                                                                            class="apexcharts-marker wbluqeayc no-pointer-events"
                                                                            stroke="#ffffff" fill="#ffab00" fill-opacity="1"
                                                                            stroke-width="2" stroke-opacity="0.9"
                                                                            default-marker-size="0"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1672" class="apexcharts-datalabels"
                                                                data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine1702" x1="0" y1="0" x2="245" y2="0"
                                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1703" x1="0" y1="0" x2="245" y2="0"
                                                            stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG1704" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG1705" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG1706" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                    <rect id="SvgjsRect1665" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fefefe"></rect>
                                                    <g id="SvgjsG1691" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-18, 0)"></g>
                                                    <g id="SvgjsG1663" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend" style="max-height: 40px;"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                    <div class="apexcharts-tooltip-title"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(255, 171, 0);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="resize-triggers">
                                            <div class="expand-trigger">
                                                <div style="width: 392px; height: 118px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Order Statistics -->
                <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                    <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between pb-0">
                            <div class="card-title mb-0">
                                <h5 class="m-0 me-2">Order Statistics</h5>
                                <small class="text-muted">42.82k Total Sales</small>
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="orederStatistics"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                                    <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3"
                                style="position: relative;">
                                <div class="d-flex flex-column align-items-center gap-1">
                                    <h2 class="mb-2">8,258</h2>
                                    <span>Total Orders</span>
                                </div>
                                <div id="orderStatisticsChart" style="min-height: 137.55px;">
                                    <div id="apexcharts6rbws7zz"
                                        class="apexcharts-canvas apexcharts6rbws7zz apexcharts-theme-light"
                                        style="width: 130px; height: 137.55px;"><svg id="SvgjsSvg1708" width="130"
                                            height="137.55" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG1710" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(-7, 0)">
                                                <defs id="SvgjsDefs1709">
                                                    <clipPath id="gridRectMask6rbws7zz">
                                                        <rect id="SvgjsRect1712" width="150" height="173" x="-4.5" y="-2.5"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMask6rbws7zz"></clipPath>
                                                    <clipPath id="nonForecastMask6rbws7zz"></clipPath>
                                                    <clipPath id="gridRectMarkerMask6rbws7zz">
                                                        <rect id="SvgjsRect1713" width="145" height="172" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g id="SvgjsG1714" class="apexcharts-pie">
                                                    <g id="SvgjsG1715" transform="translate(0, 0) scale(1)">
                                                        <circle id="SvgjsCircle1716" r="44.835365853658544" cx="70.5"
                                                            cy="70.5" fill="transparent"></circle>
                                                        <g id="SvgjsG1717" class="apexcharts-slices">
                                                            <g id="SvgjsG1718"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="Electronic" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1719"
                                                                    d="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z"
                                                                    fill="rgba(105,108,255,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="5" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                    index="0" j="0" data:angle="153" data:startAngle="0"
                                                                    data:strokeWidth="5" data:value="85"
                                                                    data:pathOrig="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z"
                                                                    stroke="#ffffff"></path>
                                                            </g>
                                                            <g id="SvgjsG1720"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="Sports" rel="2" data:realIndex="1">
                                                                <path id="SvgjsPath1721"
                                                                    d="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z"
                                                                    fill="rgba(133,146,163,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="5" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                    index="0" j="1" data:angle="27" data:startAngle="153"
                                                                    data:strokeWidth="5" data:value="15"
                                                                    data:pathOrig="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z"
                                                                    stroke="#ffffff"></path>
                                                            </g>
                                                            <g id="SvgjsG1722"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="Decor" rel="3" data:realIndex="2">
                                                                <path id="SvgjsPath1723"
                                                                    d="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z"
                                                                    fill="rgba(3,195,236,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="5" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                                    index="0" j="2" data:angle="90" data:startAngle="180"
                                                                    data:strokeWidth="5" data:value="50"
                                                                    data:pathOrig="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z"
                                                                    stroke="#ffffff"></path>
                                                            </g>
                                                            <g id="SvgjsG1724"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="Fashion" rel="4" data:realIndex="3">
                                                                <path id="SvgjsPath1725"
                                                                    d="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z"
                                                                    fill="rgba(113,221,55,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="5" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-donut-slice-3"
                                                                    index="0" j="3" data:angle="90" data:startAngle="270"
                                                                    data:strokeWidth="5" data:value="50"
                                                                    data:pathOrig="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z"
                                                                    stroke="#ffffff"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1726" class="apexcharts-datalabels-group"
                                                        transform="translate(0, 0) scale(1)"><text id="SvgjsText1727"
                                                            font-family="Helvetica, Arial, sans-serif" x="70.5" y="90.5"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="0.8125rem" font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-datalabel-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">Weekly</text><text
                                                            id="SvgjsText1728" font-family="Public Sans" x="70.5" y="71.5"
                                                            text-anchor="middle" dominant-baseline="auto" font-size="1.5rem"
                                                            font-weight="400" fill="#566a7f"
                                                            class="apexcharts-text apexcharts-datalabel-value"
                                                            style="font-family: &quot;Public Sans&quot;;">38%</text></g>
                                                </g>
                                                <line id="SvgjsLine1729" x1="0" y1="0" x2="141" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1730" x1="0" y1="0" x2="141" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                            <g id="SvgjsG1711" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-dark">
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(105, 108, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(133, 146, 163);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(3, 195, 236);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 4;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(113, 221, 55);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 392px; height: 139px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                            <ul class="p-0 m-0">
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-primary"><i
                                                class="bx bx-mobile-alt"></i></span>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Electronic</h6>
                                            <small class="text-muted">Mobile, Earbuds, TV</small>
                                        </div>
                                        <div class="user-progress">
                                            <small class="fw-semibold">82.5k</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-success"><i
                                                class="bx bx-closet"></i></span>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Fashion</h6>
                                            <small class="text-muted">T-shirt, Jeans, Shoes</small>
                                        </div>
                                        <div class="user-progress">
                                            <small class="fw-semibold">23.8k</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-info"><i
                                                class="bx bx-home-alt"></i></span>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Decor</h6>
                                            <small class="text-muted">Fine Art, Dining</small>
                                        </div>
                                        <div class="user-progress">
                                            <small class="fw-semibold">849k</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-secondary"><i
                                                class="bx bx-football"></i></span>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Sports</h6>
                                            <small class="text-muted">Football, Cricket Kit</small>
                                        </div>
                                        <div class="user-progress">
                                            <small class="fw-semibold">99</small>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/ Order Statistics -->

                <!-- Expense Overview -->
                <div class="col-md-6 col-lg-4 order-1 mb-4">
                    <div class="card h-100">
                        <div class="card-header">
                            <ul class="nav nav-pills" role="tablist">
                                <li class="nav-item">
                                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-tabs-line-card-income"
                                        aria-controls="navs-tabs-line-card-income" aria-selected="true">Income</button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="nav-link" role="tab">Expenses</button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="nav-link" role="tab">Profit</button>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body px-0">
                            <div class="tab-content p-0">
                                <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel"
                                    style="position: relative;">
                                    <div class="d-flex p-4 pt-3">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <img src="../../assets/img/icons/unicons/wallet.png" alt="User">
                                        </div>
                                        <div>
                                            <small class="text-muted d-block">Total Balance</small>
                                            <div class="d-flex align-items-center">
                                                <h6 class="mb-0 me-1">$459.10</h6>
                                                <small class="text-success fw-semibold">
                                                    <i class="bx bx-chevron-up"></i>
                                                    42.9%
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="incomeChart" style="min-height: 215px;">
                                        <div id="apexchartsdbttnstq"
                                            class="apexcharts-canvas apexchartsdbttnstq apexcharts-theme-light"
                                            style="width: 439px; height: 215px;"><svg id="SvgjsSvg1731" width="439"
                                                height="215" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                                class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)" style="background: transparent;">
                                                <g id="SvgjsG1733" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 10)">
                                                    <defs id="SvgjsDefs1732">
                                                        <clipPath id="gridRectMaskdbttnstq">
                                                            <rect id="SvgjsRect1738" width="427.6875" height="175.73" x="-3"
                                                                y="-1" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskdbttnstq"></clipPath>
                                                        <clipPath id="nonForecastMaskdbttnstq"></clipPath>
                                                        <clipPath id="gridRectMarkerMaskdbttnstq">
                                                            <rect id="SvgjsRect1739" width="449.6875" height="201.73"
                                                                x="-14" y="-14" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <linearGradient id="SvgjsLinearGradient1759" x1="0" y1="0" x2="0"
                                                            y2="1">
                                                            <stop id="SvgjsStop1760" stop-opacity="0.5"
                                                                stop-color="rgba(105,108,255,0.5)" offset="0"></stop>
                                                            <stop id="SvgjsStop1761" stop-opacity="0.25"
                                                                stop-color="rgba(195,196,255,0.25)" offset="0.95"></stop>
                                                            <stop id="SvgjsStop1762" stop-opacity="0.25"
                                                                stop-color="rgba(195,196,255,0.25)" offset="1"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <line id="SvgjsLine1737" x1="0" y1="0" x2="0" y2="173.73"
                                                        stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                        height="173.73" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                        stroke-width="1"></line>
                                                    <g id="SvgjsG1765" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1766" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"><text id="SvgjsText1768"
                                                                font-family="Helvetica, Arial, sans-serif" x="0" y="202.73"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1769"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1771"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="60.24107142857142" y="202.73" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                                fill="#a1acb8"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1772">Jan</tspan>
                                                                <title>Jan</title>
                                                            </text><text id="SvgjsText1774"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="120.48214285714283" y="202.73" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                                fill="#a1acb8"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1775">Feb</tspan>
                                                                <title>Feb</title>
                                                            </text><text id="SvgjsText1777"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="180.72321428571428" y="202.73" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                                fill="#a1acb8"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1778">Mar</tspan>
                                                                <title>Mar</title>
                                                            </text><text id="SvgjsText1780"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="240.96428571428572" y="202.73" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                                fill="#a1acb8"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1781">Apr</tspan>
                                                                <title>Apr</title>
                                                            </text><text id="SvgjsText1783"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="301.20535714285717" y="202.73" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                                fill="#a1acb8"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1784">May</tspan>
                                                                <title>May</title>
                                                            </text><text id="SvgjsText1786"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="361.4464285714286" y="202.73" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                                fill="#a1acb8"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1787">Jun</tspan>
                                                                <title>Jun</title>
                                                            </text><text id="SvgjsText1789"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="421.68750000000006" y="202.73" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                                fill="#a1acb8"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1790">Jul</tspan>
                                                                <title>Jul</title>
                                                            </text></g>
                                                    </g>
                                                    <g id="SvgjsG1793" class="apexcharts-grid">
                                                        <g id="SvgjsG1794" class="apexcharts-gridlines-horizontal">
                                                            <line id="SvgjsLine1796" x1="0" y1="0" x2="421.6875" y2="0"
                                                                stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1797" x1="0" y1="43.4325" x2="421.6875"
                                                                y2="43.4325" stroke="#eceef1" stroke-dasharray="3"
                                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1798" x1="0" y1="86.865" x2="421.6875"
                                                                y2="86.865" stroke="#eceef1" stroke-dasharray="3"
                                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1799" x1="0" y1="130.29749999999999"
                                                                x2="421.6875" y2="130.29749999999999" stroke="#eceef1"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1800" x1="0" y1="173.73" x2="421.6875"
                                                                y2="173.73" stroke="#eceef1" stroke-dasharray="3"
                                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG1795" class="apexcharts-gridlines-vertical"></g>
                                                        <line id="SvgjsLine1802" x1="0" y1="173.73" x2="421.6875"
                                                            y2="173.73" stroke="transparent" stroke-dasharray="0"
                                                            stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine1801" x1="0" y1="1" x2="0" y2="173.73"
                                                            stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                        </line>
                                                    </g>
                                                    <g id="SvgjsG1740"
                                                        class="apexcharts-area-series apexcharts-plot-series">
                                                        <g id="SvgjsG1741" class="apexcharts-series" seriesName="seriesx1"
                                                            data:longestSeries="true" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1763"
                                                                d="M 0 173.73L 0 112.92450000000001C 21.084374999999998 112.92450000000001 39.15669642857142 125.95425 60.24107142857142 125.95425C 81.32544642857142 125.95425 99.39776785714285 86.86500000000001 120.48214285714285 86.86500000000001C 141.56651785714286 86.86500000000001 159.63883928571428 121.611 180.72321428571428 121.611C 201.80758928571427 121.611 219.8799107142857 34.74600000000001 240.9642857142857 34.74600000000001C 262.0486607142857 34.74600000000001 280.1209821428571 104.238 301.2053571428571 104.238C 322.28973214285713 104.238 340.36205357142853 65.14875 361.44642857142856 65.14875C 382.5308035714285 65.14875 400.603125 91.20825 421.68749999999994 91.20825C 421.68749999999994 91.20825 421.68749999999994 91.20825 421.68749999999994 173.73M 421.68749999999994 91.20825z"
                                                                fill="url(#SvgjsLinearGradient1759)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMaskdbttnstq)"
                                                                pathTo="M 0 173.73L 0 112.92450000000001C 21.084374999999998 112.92450000000001 39.15669642857142 125.95425 60.24107142857142 125.95425C 81.32544642857142 125.95425 99.39776785714285 86.86500000000001 120.48214285714285 86.86500000000001C 141.56651785714286 86.86500000000001 159.63883928571428 121.611 180.72321428571428 121.611C 201.80758928571427 121.611 219.8799107142857 34.74600000000001 240.9642857142857 34.74600000000001C 262.0486607142857 34.74600000000001 280.1209821428571 104.238 301.2053571428571 104.238C 322.28973214285713 104.238 340.36205357142853 65.14875 361.44642857142856 65.14875C 382.5308035714285 65.14875 400.603125 91.20825 421.68749999999994 91.20825C 421.68749999999994 91.20825 421.68749999999994 91.20825 421.68749999999994 173.73M 421.68749999999994 91.20825z"
                                                                pathFrom="M -1 217.1625L -1 217.1625L 60.24107142857142 217.1625L 120.48214285714285 217.1625L 180.72321428571428 217.1625L 240.9642857142857 217.1625L 301.2053571428571 217.1625L 361.44642857142856 217.1625L 421.68749999999994 217.1625">
                                                            </path>
                                                            <path id="SvgjsPath1764"
                                                                d="M 0 112.92450000000001C 21.084374999999998 112.92450000000001 39.15669642857142 125.95425 60.24107142857142 125.95425C 81.32544642857142 125.95425 99.39776785714285 86.86500000000001 120.48214285714285 86.86500000000001C 141.56651785714286 86.86500000000001 159.63883928571428 121.611 180.72321428571428 121.611C 201.80758928571427 121.611 219.8799107142857 34.74600000000001 240.9642857142857 34.74600000000001C 262.0486607142857 34.74600000000001 280.1209821428571 104.238 301.2053571428571 104.238C 322.28973214285713 104.238 340.36205357142853 65.14875 361.44642857142856 65.14875C 382.5308035714285 65.14875 400.603125 91.20825 421.68749999999994 91.20825"
                                                                fill="none" fill-opacity="1" stroke="#696cff"
                                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMaskdbttnstq)"
                                                                pathTo="M 0 112.92450000000001C 21.084374999999998 112.92450000000001 39.15669642857142 125.95425 60.24107142857142 125.95425C 81.32544642857142 125.95425 99.39776785714285 86.86500000000001 120.48214285714285 86.86500000000001C 141.56651785714286 86.86500000000001 159.63883928571428 121.611 180.72321428571428 121.611C 201.80758928571427 121.611 219.8799107142857 34.74600000000001 240.9642857142857 34.74600000000001C 262.0486607142857 34.74600000000001 280.1209821428571 104.238 301.2053571428571 104.238C 322.28973214285713 104.238 340.36205357142853 65.14875 361.44642857142856 65.14875C 382.5308035714285 65.14875 400.603125 91.20825 421.68749999999994 91.20825"
                                                                pathFrom="M -1 217.1625L -1 217.1625L 60.24107142857142 217.1625L 120.48214285714285 217.1625L 180.72321428571428 217.1625L 240.9642857142857 217.1625L 301.2053571428571 217.1625L 361.44642857142856 217.1625L 421.68749999999994 217.1625">
                                                            </path>
                                                            <g id="SvgjsG1742" class="apexcharts-series-markers-wrap"
                                                                data:realIndex="0">
                                                                <g id="SvgjsG1744" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskdbttnstq)">
                                                                    <circle id="SvgjsCircle1745" r="6" cx="0"
                                                                        cy="112.92450000000001"
                                                                        class="apexcharts-marker no-pointer-events w0c2sxf22"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="4"
                                                                        stroke-opacity="0.9" rel="0" j="0" index="0"
                                                                        default-marker-size="6"></circle>
                                                                    <circle id="SvgjsCircle1746" r="6"
                                                                        cx="60.24107142857142" cy="125.95425"
                                                                        class="apexcharts-marker no-pointer-events wfz4bdzel"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="4"
                                                                        stroke-opacity="0.9" rel="1" j="1" index="0"
                                                                        default-marker-size="6"></circle>
                                                                </g>
                                                                <g id="SvgjsG1747" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskdbttnstq)">
                                                                    <circle id="SvgjsCircle1748" r="6"
                                                                        cx="120.48214285714285" cy="86.86500000000001"
                                                                        class="apexcharts-marker no-pointer-events w9x6h9oewj"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="4"
                                                                        stroke-opacity="0.9" rel="2" j="2" index="0"
                                                                        default-marker-size="6"></circle>
                                                                </g>
                                                                <g id="SvgjsG1749" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskdbttnstq)">
                                                                    <circle id="SvgjsCircle1750" r="6"
                                                                        cx="180.72321428571428" cy="121.611"
                                                                        class="apexcharts-marker no-pointer-events wzjke8h5p"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="4"
                                                                        stroke-opacity="0.9" rel="3" j="3" index="0"
                                                                        default-marker-size="6"></circle>
                                                                </g>
                                                                <g id="SvgjsG1751" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskdbttnstq)">
                                                                    <circle id="SvgjsCircle1752" r="6"
                                                                        cx="240.9642857142857" cy="34.74600000000001"
                                                                        class="apexcharts-marker no-pointer-events wc4an2sic"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="4"
                                                                        stroke-opacity="0.9" rel="4" j="4" index="0"
                                                                        default-marker-size="6"></circle>
                                                                </g>
                                                                <g id="SvgjsG1753" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskdbttnstq)">
                                                                    <circle id="SvgjsCircle1754" r="6"
                                                                        cx="301.2053571428571" cy="104.238"
                                                                        class="apexcharts-marker no-pointer-events w4xn1d93m"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="4"
                                                                        stroke-opacity="0.9" rel="5" j="5" index="0"
                                                                        default-marker-size="6"></circle>
                                                                </g>
                                                                <g id="SvgjsG1755" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskdbttnstq)">
                                                                    <circle id="SvgjsCircle1756" r="6"
                                                                        cx="361.44642857142856" cy="65.14875"
                                                                        class="apexcharts-marker no-pointer-events wt3mq7p9l"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="4"
                                                                        stroke-opacity="0.9" rel="6" j="6" index="0"
                                                                        default-marker-size="6"></circle>
                                                                </g>
                                                                <g id="SvgjsG1757" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskdbttnstq)">
                                                                    <circle id="SvgjsCircle1758" r="6"
                                                                        cx="421.68749999999994" cy="91.20825"
                                                                        class="apexcharts-marker no-pointer-events weptkl4c"
                                                                        stroke="#696cff" fill="#ffffff" fill-opacity="1"
                                                                        stroke-width="4" stroke-opacity="0.9" rel="7" j="7"
                                                                        index="0" default-marker-size="6"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1743" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine1803" x1="0" y1="0" x2="421.6875" y2="0"
                                                        stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1804" x1="0" y1="0" x2="421.6875" y2="0"
                                                        stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1805" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1806" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1807" class="apexcharts-point-annotations"></g>
                                                    <rect id="SvgjsRect1808" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                                    <rect id="SvgjsRect1809" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                                </g>
                                                <rect id="SvgjsRect1736" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fefefe"></rect>
                                                <g id="SvgjsG1791" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-8, 0)">
                                                    <g id="SvgjsG1792" class="apexcharts-yaxis-texts-g"></g>
                                                </g>
                                                <g id="SvgjsG1734" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 107.5px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(105, 108, 255);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                                <div class="apexcharts-xaxistooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center pt-4 gap-2">
                                        <div class="flex-shrink-0" style="position: relative;">
                                            <div id="expensesOfWeek" style="min-height: 57.7px;">
                                                <div id="apexchartsm1nq7dy9"
                                                    class="apexcharts-canvas apexchartsm1nq7dy9 apexcharts-theme-light"
                                                    style="width: 60px; height: 57.7px;"><svg id="SvgjsSvg1810" width="60"
                                                        height="57.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <g id="SvgjsG1812" class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(-10, -10)">
                                                            <defs id="SvgjsDefs1811">
                                                                <clipPath id="gridRectMaskm1nq7dy9">
                                                                    <rect id="SvgjsRect1814" width="86" height="87" x="-3"
                                                                        y="-1" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                        stroke="none" stroke-dasharray="0" fill="#fff">
                                                                    </rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMaskm1nq7dy9"></clipPath>
                                                                <clipPath id="nonForecastMaskm1nq7dy9"></clipPath>
                                                                <clipPath id="gridRectMarkerMaskm1nq7dy9">
                                                                    <rect id="SvgjsRect1815" width="84" height="89" x="-2"
                                                                        y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                        stroke="none" stroke-dasharray="0" fill="#fff">
                                                                    </rect>
                                                                </clipPath>
                                                            </defs>
                                                            <g id="SvgjsG1816" class="apexcharts-radialbar">
                                                                <g id="SvgjsG1817">
                                                                    <g id="SvgjsG1818" class="apexcharts-tracks">
                                                                        <g id="SvgjsG1819"
                                                                            class="apexcharts-radialbar-track apexcharts-track"
                                                                            rel="1">
                                                                            <path id="apexcharts-radialbarTrack-0"
                                                                                d="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 39.99617740968999 18.098171065291247"
                                                                                fill="none" fill-opacity="1"
                                                                                stroke="rgba(236,238,241,0.85)"
                                                                                stroke-opacity="1" stroke-linecap="round"
                                                                                stroke-width="2.0408536585365864"
                                                                                stroke-dasharray="0"
                                                                                class="apexcharts-radialbar-area"
                                                                                data:pathOrig="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 39.99617740968999 18.098171065291247">
                                                                            </path>
                                                                        </g>
                                                                    </g>
                                                                    <g id="SvgjsG1821">
                                                                        <g id="SvgjsG1825"
                                                                            class="apexcharts-series apexcharts-radial-series"
                                                                            seriesName="seriesx1" rel="1"
                                                                            data:realIndex="0">
                                                                            <path id="SvgjsPath1826"
                                                                                d="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 22.2810479140526 52.873572242130095"
                                                                                fill="none" fill-opacity="0.85"
                                                                                stroke="rgba(105,108,255,0.85)"
                                                                                stroke-opacity="1" stroke-linecap="round"
                                                                                stroke-width="4.081707317073173"
                                                                                stroke-dasharray="0"
                                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                                data:angle="234" data:value="65" index="0"
                                                                                j="0"
                                                                                data:pathOrig="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 22.2810479140526 52.873572242130095">
                                                                            </path>
                                                                        </g>
                                                                        <circle id="SvgjsCircle1822" r="18.881402439024395"
                                                                            cx="40" cy="40"
                                                                            class="apexcharts-radialbar-hollow"
                                                                            fill="transparent"></circle>
                                                                        <g id="SvgjsG1823"
                                                                            class="apexcharts-datalabels-group"
                                                                            transform="translate(0, 0) scale(1)"
                                                                            style="opacity: 1;"><text id="SvgjsText1824"
                                                                                font-family="Helvetica, Arial, sans-serif"
                                                                                x="40" y="45" text-anchor="middle"
                                                                                dominant-baseline="auto" font-size="13px"
                                                                                font-weight="400" fill="#697a8d"
                                                                                class="apexcharts-text apexcharts-datalabel-value"
                                                                                style="font-family: Helvetica, Arial, sans-serif;">$65</text>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <line id="SvgjsLine1827" x1="0" y1="0" x2="80" y2="0"
                                                                stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                                            </line>
                                                            <line id="SvgjsLine1828" x1="0" y1="0" x2="80" y2="0"
                                                                stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                        </g>
                                                        <g id="SvgjsG1813" class="apexcharts-annotations"></g>
                                                    </svg>
                                                    <div class="apexcharts-legend"></div>
                                                </div>
                                            </div>
                                            <div class="resize-triggers">
                                                <div class="expand-trigger">
                                                    <div style="width: 61px; height: 59px;"></div>
                                                </div>
                                                <div class="contract-trigger"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="mb-n1 mt-1">Expenses This Week</p>
                                            <small class="text-muted">$39 less than last week</small>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 440px; height: 377px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Expense Overview -->

                <!-- Transactions -->
                <div class="col-md-6 col-lg-4 order-2 mb-4">
                    <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0 me-2">Transactions</h5>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="p-0 m-0">
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="../../assets/img/icons/unicons/paypal.png" alt="User"
                                            class="rounded">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <small class="text-muted d-block mb-1">Paypal</small>
                                            <h6 class="mb-0">Send money</h6>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <h6 class="mb-0">+82.6</h6> <span class="text-muted">USD</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="../../assets/img/icons/unicons/wallet.png" alt="User"
                                            class="rounded">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <small class="text-muted d-block mb-1">Wallet</small>
                                            <h6 class="mb-0">Mac'D</h6>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <h6 class="mb-0">+270.69</h6> <span
                                                class="text-muted">USD</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="../../assets/img/icons/unicons/chart.png" alt="User"
                                            class="rounded">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <small class="text-muted d-block mb-1">Transfer</small>
                                            <h6 class="mb-0">Refund</h6>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <h6 class="mb-0">+637.91</h6> <span
                                                class="text-muted">USD</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="../../assets/img/icons/unicons/cc-success.png" alt="User"
                                            class="rounded">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <small class="text-muted d-block mb-1">Credit Card</small>
                                            <h6 class="mb-0">Ordered Food</h6>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <h6 class="mb-0">-838.71</h6> <span
                                                class="text-muted">USD</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="../../assets/img/icons/unicons/wallet.png" alt="User"
                                            class="rounded">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <small class="text-muted d-block mb-1">Wallet</small>
                                            <h6 class="mb-0">Starbucks</h6>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <h6 class="mb-0">+203.33</h6> <span
                                                class="text-muted">USD</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="../../assets/img/icons/unicons/cc-warning.png" alt="User"
                                            class="rounded">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <small class="text-muted d-block mb-1">Mastercard</small>
                                            <h6 class="mb-0">Ordered Food</h6>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <h6 class="mb-0">-92.45</h6> <span class="text-muted">USD</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/ Transactions -->
                <!-- Activity Timeline -->
                <div class="col-md-12 col-lg-6 order-4 order-lg-3 ">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0 me-2">Activity Timeline</h5>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="timelineWapper" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="timelineWapper">
                                    <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Activity Timeline -->
                            <ul class="timeline">
                                <li class="timeline-item timeline-item-transparent">
                                    <span class="timeline-point timeline-point-primary"></span>
                                    <div class="timeline-event">
                                        <div class="timeline-header mb-1">
                                            <h6 class="mb-0">12 Invoices have been paid</h6>
                                            <small class="text-muted">12 min ago</small>
                                        </div>
                                        <p class="mb-2">Invoices have been paid to the company</p>
                                        <div class="d-flex">
                                            <a href="javascript:void(0)" class="d-flex align-items-center me-3">
                                                <img src="../../assets/img/icons/misc/pdf.png" alt="PDF image" width="23"
                                                    class="me-2">
                                                <h6 class="mb-0">invoices.pdf</h6>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item timeline-item-transparent">
                                    <span class="timeline-point timeline-point-warning"></span>
                                    <div class="timeline-event">
                                        <div class="timeline-header mb-1">
                                            <h6 class="mb-0">Client Meeting</h6>
                                            <small class="text-muted">45 min ago</small>
                                        </div>
                                        <p class="mb-2">Project meeting with john @10:15am</p>
                                        <div class="d-flex flex-wrap">
                                            <div class="avatar me-3">
                                                <img src="../../assets/img/avatars/3.png" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Lester McCarthy (Client)</h6>
                                                <span>CEO of ThemeSelection</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item timeline-item-transparent">
                                    <span class="timeline-point timeline-point-info"></span>
                                    <div class="timeline-event pb-0">
                                        <div class="timeline-header mb-1">
                                            <h6 class="mb-0">Create a new project for client</h6>
                                            <small class="text-muted">2 Day Ago</small>
                                        </div>
                                        <p class="mb-2">5 team members in a project</p>
                                        <div class="d-flex align-items-center avatar-group">
                                            <div class="avatar pull-up" data-bs-toggle="tooltip"
                                                data-popup="tooltip-custom" data-bs-placement="top" title=""
                                                data-bs-original-title="Vinnie Mostowy">
                                                <img src="../../assets/img/avatars/5.png" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                            <div class="avatar pull-up" data-bs-toggle="tooltip"
                                                data-popup="tooltip-custom" data-bs-placement="top" title=""
                                                data-bs-original-title="Marrie Patty">
                                                <img src="../../assets/img/avatars/12.png" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                            <div class="avatar pull-up" data-bs-toggle="tooltip"
                                                data-popup="tooltip-custom" data-bs-placement="top" title=""
                                                data-bs-original-title="Jimmy Jackson">
                                                <img src="../../assets/img/avatars/9.png" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                            <div class="avatar pull-up" data-bs-toggle="tooltip"
                                                data-popup="tooltip-custom" data-bs-placement="top" title=""
                                                data-bs-original-title="Kristine Gill">
                                                <img src="../../assets/img/avatars/6.png" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                            <div class="avatar pull-up" data-bs-toggle="tooltip"
                                                data-popup="tooltip-custom" data-bs-placement="top" title=""
                                                data-bs-original-title="Nelson Wilson">
                                                <img src="../../assets/img/avatars/14.png" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-end-indicator">
                                    <i class="bx bx-check-circle"></i>
                                </li>
                            </ul>
                            <!-- /Activity Timeline -->
                        </div>
                    </div>
                </div>
                <!--/ Activity Timeline -->
                <!-- pill table -->
                <div class="col-md-6 order-3 order-lg-4 mb-4 mb-lg-0">
                    <div class="card text-center">
                        <div class="card-header py-3">
                            <ul class="nav nav-pills" role="tablist">
                                <li class="nav-item">
                                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-pills-browser" aria-controls="navs-pills-browser"
                                        aria-selected="true">Browser</button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-pills-os" aria-controls="navs-pills-os"
                                        aria-selected="false">Operating System</button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-pills-country" aria-controls="navs-pills-country"
                                        aria-selected="false">Country</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content pt-0">
                            <div class="tab-pane fade show active" id="navs-pills-browser" role="tabpanel">
                                <div class="table-responsive text-start">
                                    <table class="table table-borderless text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Browser</th>
                                                <th>Visits</th>
                                                <th class="w-50">Data In Percentage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/img/icons/brands/chrome.png" alt="Chrome"
                                                            height="24" class="me-2">
                                                        <span>Chrome</span>
                                                    </div>
                                                </td>
                                                <td>8.92k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                style="width: 84.75%" aria-valuenow="84.75"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-semibold">84.75%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/img/icons/brands/safari.png" alt="Safari"
                                                            height="24" class="me-2">
                                                        <span>Safari</span>
                                                    </div>
                                                </td>
                                                <td>7.29k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-primary" role="progressbar"
                                                                style="width: 72.43%" aria-valuenow="72.43"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-semibold">72.43%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/img/icons/brands/firefox.png" alt="Firefox"
                                                            height="24" class="me-2">
                                                        <span>Firefox</span>
                                                    </div>
                                                </td>
                                                <td>6.11k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-primary" role="progressbar"
                                                                style="width: 67.37%" aria-valuenow="67.37"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-semibold">67.37%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/img/icons/brands/edge.png" alt="Edge"
                                                            height="24" class="me-2">
                                                        <span>Edge</span>
                                                    </div>
                                                </td>
                                                <td>5.08k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-info" role="progressbar"
                                                                style="width: 60.12%" aria-valuenow="60.12"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-semibold">60.12%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/img/icons/brands/opera.png" alt="Opera"
                                                            height="24" class="me-2">
                                                        <span>Opera</span>
                                                    </div>
                                                </td>
                                                <td>3.93k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-info" role="progressbar"
                                                                style="width: 51.94%" aria-valuenow="51.94"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-semibold">51.94%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/img/icons/brands/brave.png" alt="Brave"
                                                            height="24" class="me-2">
                                                        <span>Brave</span>
                                                    </div>
                                                </td>
                                                <td>3.19k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 39.94%" aria-valuenow="39.94"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-semibold">39.94%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/img/icons/brands/vivaldi.png" alt="Vivaldi"
                                                            height="24" class="me-2">
                                                        <span>Vivaldi</span>
                                                    </div>
                                                </td>
                                                <td>1.29k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                style="width: 28.43%" aria-valuenow="28.43"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-semibold">18.43%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/img/icons/brands/uc.png" alt="UC Browser"
                                                            height="24" class="me-2">
                                                        <span>UC Browser</span>
                                                    </div>
                                                </td>
                                                <td>328</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                style="width: 20.14%" aria-valuenow="20.14"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-semibold">20.14%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="navs-pills-os" role="tabpanel">
                                <div class="table-responsive text-start">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>System</th>
                                                <th>Visits</th>
                                                <th class="w-50">Data In Percentage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/img/icons/brands/windows.png" alt="Windows"
                                                            height="24" class="me-2">
                                                        <span>Windows</span>
                                                    </div>
                                                </td>
                                                <td>875.24k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                style="width: 71.50%" aria-valuenow="71.50"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-semibold">71.50%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/img/icons/brands/mac.png" alt="Mac"
                                                            height="24" class="me-2">
                                                        <span>Mac</span>
                                                    </div>
                                                </td>
                                                <td>89.68k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-primary" role="progressbar"
                                                                style="width: 66.67%" aria-valuenow="66.67"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-semibold">66.67%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/img/icons/brands/ubuntu.png" alt="Ubuntu"
                                                            height="24" class="me-2">
                                                        <span>Ubuntu</span>
                                                    </div>
                                                </td>
                                                <td>37.68k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-info" role="progressbar"
                                                                style="width: 62.82%" aria-valuenow="62.82"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-semibold">62.82%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/img/icons/brands/chrome.png" alt="Chrome"
                                                            height="24" class="me-2">
                                                        <span>Chrome</span>
                                                    </div>
                                                </td>
                                                <td>35.34k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-info" role="progressbar"
                                                                style="width: 56.25%" aria-valuenow="56.25"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-semibold">56.25%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/img/icons/brands/cent.png" alt="Cent"
                                                            height="24" class="me-2">
                                                        <span>Cent</span>
                                                    </div>
                                                </td>
                                                <td>32.25k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-info" role="progressbar"
                                                                style="width: 42.76%" aria-valuenow="42.76"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-semibold">42.76%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/img/icons/brands/linux.png" alt="Linux"
                                                            height="24" class="me-2">
                                                        <span>Linux</span>
                                                    </div>
                                                </td>
                                                <td>22.15k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 37.77%" aria-valuenow="37.77"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-semibold">37.77%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/img/icons/brands/fedora.png" alt="Fedora"
                                                            height="24" class="me-2">
                                                        <span>Fedora</span>
                                                    </div>
                                                </td>
                                                <td>1.13k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                style="width: 29.16%" aria-valuenow="29.16"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-semibold">29.16%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/img/icons/brands/vivaldi-os.png"
                                                            alt="Vivaldi" height="24" class="me-2">
                                                        <span>Vivaldi</span>
                                                    </div>
                                                </td>
                                                <td>1.09k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                style="width: 26.26%" aria-valuenow="26.26"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-semibold">26.26%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="navs-pills-country" role="tabpanel">
                                <div class="table-responsive text-start">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Country</th>
                                                <th>Visits</th>
                                                <th class="w-50">Data In Percentage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/svg/flags/us.svg" alt="USA" height="24"
                                                            class="me-2">
                                                        <span>USA</span>
                                                    </div>
                                                </td>
                                                <td>87.24k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                style="width: 89.12%" aria-valuenow="89.12"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-semibold">89.12%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/svg/flags/br.svg" alt="Brazil" height="24"
                                                            class="me-2">
                                                        <span>Brazil</span>
                                                    </div>
                                                </td>
                                                <td>62.68k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-primary" role="progressbar"
                                                                style="width: 78.23%" aria-valuenow="78.23"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-semibold">78.23%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/svg/flags/in.svg" alt="India" height="24"
                                                            class="me-2">
                                                        <span>India</span>
                                                    </div>
                                                </td>
                                                <td>52.58k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-info" role="progressbar"
                                                                style="width: 69.82%" aria-valuenow="69.82"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-semibold">69.82%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/svg/flags/au.svg" alt="Australia" height="24"
                                                            class="me-2">
                                                        <span>Australia</span>
                                                    </div>
                                                </td>
                                                <td>44.13k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 59.90%" aria-valuenow="59.90"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-semibold">59.90%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/svg/flags/de.svg" alt="Germany" height="24"
                                                            class="me-2">
                                                        <span>Germany</span>
                                                    </div>
                                                </td>
                                                <td>32.21k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 57.11%" aria-valuenow="57.11"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-semibold">57.11%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/svg/flags/fr.svg" alt="France" height="24"
                                                            class="me-2">
                                                        <span>France</span>
                                                    </div>
                                                </td>
                                                <td>37.87k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 41.23%" aria-valuenow="41.23"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-semibold">41.23%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/svg/flags/pt.svg" alt="Portugal" height="24"
                                                            class="me-2">
                                                        <span>Portugal</span>
                                                    </div>
                                                </td>
                                                <td>20.29k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                style="width: 37.11%" aria-valuenow="37.11"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-semibold">37.11%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/svg/flags/cn.svg" alt="China" height="24"
                                                            class="me-2">
                                                        <span>China</span>
                                                    </div>
                                                </td>
                                                <td>12.21k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                style="width: 17.61%" aria-valuenow="17.61"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-semibold">17.61%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ pill table -->
            </div>


        </div>
        <!-- / Content -->




        <!-- Footer -->
        <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>2022
                    , made with ❤️ by <a href="https://themeselection.com" target="_blank"
                        class="footer-link fw-bolder">ThemeSelection</a>
                </div>
                <div>

                    <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                    <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                    <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                        target="_blank" class="footer-link me-4">Documentation</a>


                    <a href="https://themeselection.com/support/" target="_blank"
                        class="footer-link d-none d-sm-inline-block">Support</a>

                </div>
            </div>
        </footer>
        <!-- / Footer -->


        <div class="content-backdrop fade"></div>
    </div>
@endsection
