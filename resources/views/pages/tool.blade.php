<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>FactCheck Tool</title>
    <meta name="description" content="factcheck" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset("assets/plugins/global/plugins.bundle.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/plugins/custom/prismjs/prismjs.bundle.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/css/style.bundle.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/css/main.css") }}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{ asset("favicon.ico") }}" />
</head>
<!--begin::Body-->
<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed aside-enabled aside-static page-loading">
<!--begin::Main-->
<x-navigation-mobile></x-navigation-mobile>

<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
    <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <x-navigation></x-navigation>
        <!--begin::Content-->
            <div class="pt-0 mt-0 content d-flex flex-column flex-column-fluid" id="vueApp">
                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container-fluid ml-10 mr-10">
                        <!--begin::Dashboard-->
                        <!--begin::Header Row-->
                        <div class="row">
                            <div class="col-xl-9">
                                <!--begin::Forms Widget 1-->
                                <div class="card card-custom card-shadowless gutter-b card-stretch card-shadowless p-0">
                                    <!--begin::Nav Tabs-->
                                    <ul class="dashboard-tabs nav nav-pills nav-danger row row-paddingless m-0 p-0" role="tablist">
                                        <!--begin::Item-->
                                        <li class="nav-item d-flex col flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
                                            <a v-on:click="changeActiveTab('simple');" class="nav-link active border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#">
                                                    <span class="nav-icon py-2 w-auto">
                                                        <span class="svg-icon svg-icon-3x">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                    <rect fill="#000000" x="4" y="4" width="16" height="16" rx="2"/>
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                <span class="nav-text font-size-lg py-2 font-weight-bold text-center">Simple Mode</span>
                                            </a>
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item d-flex col flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
                                            <a v-on:click="changeActiveTab('advanced');" class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#">
                                                <span class="nav-icon py-2 w-auto">
                                                    <span class="svg-icon svg-icon-3x">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                                <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"/>
                                                                <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"/>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                                <span class="nav-text font-size-lg py-2 font-weight-bolder text-center">Advanced Mode</span>
                                            </a>
                                        </li>
                                        <!--end::Item-->
                                    </ul>
                                    <!--end::Nav Tabs-->
                                </div>
                                <!--end::Forms Widget 1-->
                            </div>
                            <div class="col-xl-3">
                                <!--begin::Engage Widget 8-->
                                <div class="card card-custom gutter-b card-stretch card-shadowless">
                                    <div class="card-body p-0 d-flex">
                                        <div class="d-flex align-items-start justify-content-start flex-grow-1 bg-light-warning p-8 card-rounded flex-grow-1 position-relative">
                                            <div class="d-flex flex-column align-items-start flex-grow-1 h-100">
                                                <div class="p-1 flex-grow-1">
                                                    <div v-if="this.activeTab === 'simple'" id="simpleModeIntro">
                                                        <h4 class="text-warning font-weight-bolder">Simple Mode</h4>
                                                        <p class="text-dark-50 mt-3 font-weight-bold">Select a question from existing queries.</p>
                                                    </div>
                                                    <div v-if="this.activeTab === 'advanced'" id="advancedModeIntro">
                                                        <h4 class="text-warning font-weight-bolder">Advanced Mode</h4>
                                                        <p class="text-dark-50 mt-3 font-weight-bold">Users familiar with SPARQL can write queries.</p>
                                                    </div>
                                                </div>
                                                <a href='#' class="btn btn-link btn-link-warning font-weight-bold">Documentation
                                                    <span class="svg-icon svg-icon-lg svg-icon-warning">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																	<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																</g>
															</svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Engage Widget 8-->
                            </div>
                        </div>
                        <!--end::Header Row-->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="simpleModeTab" role="tabpanel">
                                <!--begin::Content Row-->
                                <div class="row">
                                    <div class="col-xl-9">
                                        <!--begin::Charts Widget 2-->
                                        <div style="min-height: 50vh;" class="card card-custom card-stretch bg-gray-100 gutter-b card-shadowless" id="tableCardEl">
                                            <div class="card-header h-auto border-0">
                                                <div class="card-title py-5">
                                                    <h3 class="card-label">
                                                        <span class="d-block text-dark font-weight-bolder">Response Overview</span>
                                                        <span class="d-block text-dark-50 mt-2 font-size-sm">Submit queries on the right and review responses</span>
                                                    </h3>
                                                </div>
                                                <div class="row align-items-center">
                                                    <div class="input-icon">
                                                        <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                                        <span>
                                                            <i class="flaticon2-search-1 text-muted"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--begin::Body-->
                                            <div class="card-body">
                                                <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
                                                <h4 id="runQueryAlert" style="padding-top: 10vh; margin-left: 50vh" class="text-black-50">run query to get results</h4>
                                            </div>
                                            <!--end::Body-->
                                            <div class="card-footer">
                                                <span class="d-block text-dark font-weight-bolder">Entry count: <span id="entryCountEl">0</span></span>
                                            </div>
                                        </div>
                                        <!--end::Charts Widget 2-->
                                    </div>
                                    <div class="col-xl-3">
                                        <!--begin::Stats Widget 7-->
                                        <div class="card card-custom bg-dark bg-hover-state-dark gutter-b card-stretch">
                                            <!--begin::Body-->
                                            <div class="card-body d-flex flex-column p-0">
                                                <div class="container mt-10 mb-10">
                                                    <form class="form">
                                                        <label class="col-form-label text-inverse-success">Data Source</label>
                                                        <select v-model="dataSource" class="form-control selectpicker">
                                                            <option value="ibc">Iraqi Body Count (IBC)</option>
                                                            <option value="vdc">Violations Documentation Center (VDC)</option>
                                                        </select>
                                                        <div v-if="activeTab === 'simple'">
                                                            <label for="sampleQueriesSelectBox" class="col-form-label text-inverse-success">Sample Queries</label>
                                                            <div class="row">
                                                                <div class="col-10">
                                                                    <select v-if="this.queries != null" v-model="activeQuery" id="sampleQueriesSelectBox" class="form-control" v-cloak>
                                                                        <option :value="item.id" v-for="item in queries[this.dataSource]" :key="item.id">@{{ item.query_text }}</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-2 justify-content-center">
                                                                    <a v-on:click="getSparqlSource()" data-toggle="modal" data-target="#sparqlModal" href="#" role="button" class="btn btn-icon btn-light-dark">
                                                                        <i class="flaticon2-drop"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div v-if="this.params != null" id="queryBlankContainer" v-cloak>
                                                                <div v-for="(item, index) in params" :key="index">
                                                                    <label class="col-form-label text-inverse-success">@{{ fromCamelToSentenceCase(item) }}</label>
                                                                    <input v-bind:id="item + 'ParamInput'" type="text" class="form-control" :placeholder="'Enter ' + fromCamelToSentenceCase(item)"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div v-if="activeTab === 'advanced'">
                                                            <label class="col-form-label text-inverse-success">SPARQL Query</label>
                                                            <textarea class="form-control" rows="10" id="advancedSparqlQueryField"></textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="card-footer bg-light-dark-75 summary-footer-top">
                                                <button v-on:click="query()" id="querySubmit" class="btn btn-dark btn-lg btn-block">Search</button>
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Stats Widget 7-->
                                    </div>
                                </div>
                                <!--end::Content Row-->
                            </div>
                        </div>
                        <!--end::Dashboard-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Entry-->
            </div>

            <!-- Modal-->
            <div class="modal fade" id="sparqlModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">SparQL Source</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p id="sparqlSourceEl"></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--end::Content-->
            <x-footer></x-footer>
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>

<!--end::Main-->
<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
<script src="{{ asset("assets/plugins/global/plugins.bundle.js") }}"></script>
<script src="{{ asset("assets/plugins/custom/prismjs/prismjs.bundle.js") }}"></script>
<script src="{{ asset("assets/js/scripts.bundle.js") }}"></script>
<script src="{{ asset("assets/js/vue.min.js") }}"></script>
<script src="{{ asset("assets/plugins/custom/axios/axios.min.js") }}"></script>
<script src="{{ asset("assets/js/pages/tool.js") }}"></script>

</body>
<!--end::Body-->
</html>
