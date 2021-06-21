<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CasualtIS Documentation</title>
    <meta name="description" content="factcheck" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset("assets/plugins/global/plugins.bundle.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/plugins/custom/prismjs/prismjs.bundle.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/css/style.bundle.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/css/main.css") }}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{ asset("favicon.ico") }}" />
</head>
<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed aside-enabled aside-static page-loading">
<x-navigation-mobile></x-navigation-mobile>
<div class="d-flex flex-column flex-root">
    <div class="d-flex flex-row flex-column-fluid page">
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <x-navigation></x-navigation>
            <div class="content d-flex flex-column flex-column-fluid" id="vueApp">
                <div class="d-flex flex-column-fluid">
                    <div class="container">
                        <div class="card card-custom overflow-hidden position-relative mb-8">
                            <div class="position-absolute bottom-0 left-0 right-0 d-none d-lg-flex flex-row-fluid">
                                <span class="svg-icon svg-icon-full flex-row-fluid svg-icon-dark opacity-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 1200 172" style="enable-background:new 0 0 1200 172;" xml:space="preserve">
                                        <path class="st0" d="M2058,94c0,0,16-14,73-14s153,92,248,92s286-145,456-145s183,34,292,34s131-54,131-54v172H2058V94z" />
                                        <path class="st0" d="M0,87c0,0,16-14,73-14s153,92,248,92S607,20,777,20s183,34,292,34s131-54,131-54v172H0V87z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="position-absolute d-flex top-0 right-0 offset-lg-5 col-lg-7 opacity-30 opacity-lg-100">
										<span class="svg-icon svg-icon-full flex-row-fluid p-15">
											<!--begin::Svg Icon | path:assets/media/svg/illustrations/working.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="e66d77ca-31e8-442d-a5de-b801817c4280" data-name="Layer 1" width="1024.7" height="671.65" viewBox="0 0 1024.7 671.65">
												<circle cx="720.55" cy="430.76" r="105" fill="url(#a374d817-ded2-4154-8f0a-fb69bb0241af)" />
												<circle cx="720.55" cy="430.76" r="100" fill="#f5f5f5" />
												<g opacity="0.5">
													<path d="M811,482.47a62.52,62.52,0,0,0-64.27,55.82h-18a3.64,3.64,0,0,0-3.64,3.64v6a3.65,3.65,0,0,0,3.64,3.65h18A62.5,62.5,0,1,0,811,482.47Z" transform="translate(-87.65 -114.18)" fill="url(#fd39efba-8078-41b8-857e-e17431406f47)" />
												</g>
												<path d="M810.19,486.22a58.75,58.75,0,0,0-60.41,52.47H732.36a2.91,2.91,0,0,0-2.91,2.91v6.67a2.91,2.91,0,0,0,2.91,2.92h17.42a58.75,58.75,0,1,0,60.41-65Z" transform="translate(-87.65 -114.18)" fill="#fff" />
												<circle cx="720.55" cy="430.76" r="41.25" fill="#795548" />
												<path d="M829.45,524.94s11.77,18.28,8.4,32.5C837.85,557.44,851.3,535.09,829.45,524.94Z" transform="translate(-87.65 -114.18)" fill="#fff" opacity="0.2" />
												<circle cx="746.8" cy="453.26" r="3.75" fill="#fff" opacity="0.2" />
												<rect x="119.09" y="182.63" width="213.27" height="308.72" transform="translate(-156.47 -56.04) rotate(-12.75)" fill="url(#b2bf7fa1-65c2-4695-aeca-af8d6fc55ae3)" />
												<rect x="334.38" y="133.91" width="213.27" height="308.72" transform="translate(-140.4 -9.72) rotate(-12.75)" fill="url(#a8abeec4-29f5-4a5c-9a38-56f560b9b0a3)" />
												<rect x="122.15" y="186.27" width="207.97" height="302.01" transform="translate(-156.52 -55.94) rotate(-12.75)" fill="#6c63ff" />
												<rect x="336.06" y="137.86" width="207.97" height="302.01" transform="translate(-140.56 -9.92) rotate(-12.75)" fill="#f5f5f5" />
												<rect x="135.55" y="222.61" width="124.88" height="20.81" transform="translate(-134.2 -64.73) rotate(-12.75)" fill="#f5f5f5" />
												<rect x="124.12" y="271.86" width="166.5" height="5.2" transform="translate(-143.12 -61.63) rotate(-12.75)" fill="#f5f5f5" />
												<rect x="126.8" y="283.7" width="166.5" height="5.2" transform="translate(-145.67 -60.75) rotate(-12.75)" fill="#f5f5f5" />
												<rect x="129.48" y="295.54" width="166.5" height="5.2" transform="translate(-148.21 -59.87) rotate(-12.75)" fill="#f5f5f5" />
												<rect x="133.23" y="316.95" width="79.78" height="5.2" transform="translate(-153.92 -68.08) rotate(-12.75)" fill="#f5f5f5" />
												<rect x="135.76" y="327.46" width="91.92" height="5.2" transform="translate(-156.02 -65.92) rotate(-12.75)" fill="#f5f5f5" />
												<rect x="137.52" y="331.07" width="166.5" height="5.2" transform="translate(-155.86 -57.21) rotate(-12.75)" fill="#f5f5f5" />
												<rect x="140.2" y="342.91" width="166.5" height="5.2" transform="translate(-158.4 -56.33) rotate(-12.75)" fill="#f5f5f5" />
												<rect x="143.03" y="356.09" width="154.36" height="5.2" transform="translate(-161.39 -56.72) rotate(-12.75)" fill="#f5f5f5" />
												<rect x="145.56" y="366.59" width="166.5" height="5.2" transform="translate(-163.5 -54.56) rotate(-12.75)" fill="#f5f5f5" />
												<rect x="149.22" y="387.24" width="86.72" height="5.2" transform="translate(-168.95 -62.05) rotate(-12.75)" fill="#f5f5f5" />
												<rect x="372.13" y="350.43" width="91.92" height="5.2" transform="translate(-155.26 -13.18) rotate(-12.75)" fill="#6c63ff" opacity="0.3" />
												<rect x="373.89" y="354.04" width="166.5" height="5.2" transform="translate(-155.1 -4.47) rotate(-12.75)" fill="#6c63ff" opacity="0.3" />
												<rect x="376.57" y="365.88" width="166.5" height="5.2" transform="translate(-157.64 -3.59) rotate(-12.75)" fill="#6c63ff" opacity="0.3" />
												<rect x="379.4" y="379.06" width="154.36" height="5.2" transform="translate(-160.63 -3.98) rotate(-12.75)" fill="#6c63ff" opacity="0.3" />
												<rect x="381.93" y="389.56" width="166.5" height="5.2" transform="translate(-162.74 -1.82) rotate(-12.75)" fill="#6c63ff" opacity="0.3" />
												<rect x="385.59" y="410.21" width="86.72" height="5.2" transform="translate(-168.19 -9.31) rotate(-12.75)" fill="#6c63ff" opacity="0.3" />
												<rect x="221.62" y="391.43" width="100.59" height="69.38" transform="translate(-175 -43.64) rotate(-12.75)" fill="#f5f5f5" />
												<rect x="337.76" y="165.98" width="100.59" height="69.38" transform="translate(-122.37 -23.57) rotate(-12.75)" fill="#6c63ff" opacity="0.3" />
												<rect x="433.79" y="236.72" width="100.59" height="69.38" transform="translate(-135.62 -0.63) rotate(-12.75)" fill="#6c63ff" opacity="0.3" />
												<rect x="410.68" y="203.79" width="213.27" height="308.72" rx="13.44" transform="translate(-153.95 8.85) rotate(-12.75)" fill="url(#af3e6cbd-120e-45f3-bb1d-3967e91ae903)" />
												<rect x="412.36" y="207.74" width="207.97" height="302.01" rx="13.44" transform="translate(-154.1 8.65) rotate(-12.75)" fill="#6c63ff" />
												<g opacity="0.5">
													<rect x="220.35" y="542.11" width="3" height="17" fill="#47e6b1" />
													<rect x="308" y="656.29" width="3" height="17" transform="translate(886.64 241.11) rotate(90)" fill="#47e6b1" />
												</g>
												<g opacity="0.5">
													<rect x="726.55" y="32.76" width="3" height="17" fill="#47e6b1" />
													<rect x="814.2" y="146.94" width="3" height="17" transform="translate(883.49 -774.44) rotate(90)" fill="#47e6b1" />
												</g>
												<g opacity="0.5">
													<rect x="636.55" y="249.76" width="3" height="17" fill="#47e6b1" />
													<rect x="724.2" y="363.94" width="3" height="17" transform="translate(1010.49 -467.44) rotate(90)" fill="#47e6b1" />
												</g>
												<g opacity="0.5">
													<rect x="894.15" y="288.76" width="3" height="17" fill="#47e6b1" />
													<rect x="981.8" y="402.94" width="3" height="17" transform="translate(1307.08 -686.03) rotate(90)" fill="#47e6b1" />
												</g>
												<path d="M482.69,654.59a3.68,3.68,0,0,1-2.05-4.44,1.15,1.15,0,0,0,.08-.41h0a1.84,1.84,0,0,0-3.31-1.22h0a2.53,2.53,0,0,0-.2.36,3.67,3.67,0,0,1-4.44,2,1.86,1.86,0,0,0-.41-.08h0a1.84,1.84,0,0,0-1.22,3.31h0a1.88,1.88,0,0,0,.36.21,3.67,3.67,0,0,1,2.05,4.44,1.89,1.89,0,0,0-.08.4h0a1.84,1.84,0,0,0,3.31,1.23h0a1.9,1.9,0,0,0,.2-.37,3.68,3.68,0,0,1,4.45-2,1.77,1.77,0,0,0,.4.08h0a1.84,1.84,0,0,0,1.22-3.31h0A1.62,1.62,0,0,0,482.69,654.59Z" transform="translate(-87.65 -114.18)" fill="#4d8af0" opacity="0.5" />
												<path d="M628.89,779.24a3.68,3.68,0,0,1-2-4.44,1.86,1.86,0,0,0,.08-.41h0a1.84,1.84,0,0,0-3.31-1.22h0a1.82,1.82,0,0,0-.2.36,3.66,3.66,0,0,1-4.44,2.05,2,2,0,0,0-.41-.08h0a1.84,1.84,0,0,0-1.22,3.31h0a1.62,1.62,0,0,0,.36.21,3.68,3.68,0,0,1,2,4.44,1.86,1.86,0,0,0-.08.41h0a1.84,1.84,0,0,0,3.31,1.22h0a1.65,1.65,0,0,0,.2-.37,3.67,3.67,0,0,1,4.44-2,2,2,0,0,0,.41.08h0a1.84,1.84,0,0,0,1.22-3.31h0A1.62,1.62,0,0,0,628.89,779.24Z" transform="translate(-87.65 -114.18)" fill="#4d8af0" opacity="0.5" />
												<path d="M847.89,348.24a3.68,3.68,0,0,1-2-4.44,1.86,1.86,0,0,0,.08-.41h0a1.84,1.84,0,0,0-3.31-1.22h0a1.82,1.82,0,0,0-.2.36,3.66,3.66,0,0,1-4.44,2.05,2,2,0,0,0-.41-.08h0a1.84,1.84,0,0,0-1.22,3.31h0a1.62,1.62,0,0,0,.36.21,3.68,3.68,0,0,1,2,4.44,1.86,1.86,0,0,0-.08.41h0a1.84,1.84,0,0,0,3.31,1.22h0a1.65,1.65,0,0,0,.2-.37,3.67,3.67,0,0,1,4.44-2,2,2,0,0,0,.41.08h0a1.84,1.84,0,0,0,1.22-3.31h0A1.62,1.62,0,0,0,847.89,348.24Z" transform="translate(-87.65 -114.18)" fill="#4d8af0" opacity="0.5" />
												<path d="M999.89,509.24a3.68,3.68,0,0,1-2-4.44,1.86,1.86,0,0,0,.08-.41h0a1.84,1.84,0,0,0-3.31-1.22h0a1.82,1.82,0,0,0-.2.36,3.66,3.66,0,0,1-4.44,2.05,2,2,0,0,0-.41-.08h0a1.84,1.84,0,0,0-1.22,3.31h0a1.62,1.62,0,0,0,.36.21,3.68,3.68,0,0,1,2,4.44,1.86,1.86,0,0,0-.08.41h0a1.84,1.84,0,0,0,3.31,1.22h0a1.65,1.65,0,0,0,.2-.37,3.67,3.67,0,0,1,4.44-2,2,2,0,0,0,.41.08h0a1.84,1.84,0,0,0,1.22-3.31h0A1.62,1.62,0,0,0,999.89,509.24Z" transform="translate(-87.65 -114.18)" fill="#4d8af0" opacity="0.5" />
												<circle cx="142.35" cy="487.11" r="6" fill="#f55f44" opacity="0.5" />
												<circle cx="523.55" cy="50.76" r="6" fill="#4d8af0" opacity="0.5" />
												<circle cx="498.55" cy="489.76" r="6" fill="#47e6b1" opacity="0.5" />
												<circle cx="844.55" cy="639.76" r="6" fill="#f55f44" opacity="0.5" />
												<g opacity="0.5">
													<path d="M848.9,203.3h286a6.29,6.29,0,0,1,6.29,6.29V362.51a6.29,6.29,0,0,1-6.29,6.29h-286a6.28,6.28,0,0,1-6.28-6.28V209.58A6.29,6.29,0,0,1,848.9,203.3Z" transform="translate(346.54 1040.57) rotate(-73.39)" fill="url(#ad46d94a-2a5e-454e-b2ea-f38dffec9c1a)" />
												</g>
												<rect x="911.41" y="140.66" width="161.02" height="290.64" rx="13.64" transform="translate(35.53 -385.86) rotate(16.61)" fill="#fff" />
												<path d="M1070.15,165.27a13,13,0,0,1-15.5,7l-53.29-15.91A13.05,13.05,0,0,1,992.2,142L964,133.59a6.13,6.13,0,0,0-7.61,4.11L880.92,390.53a6.11,6.11,0,0,0,4.12,7.6l134.84,40.24a6.11,6.11,0,0,0,7.6-4.11l75.44-252.83a6.1,6.1,0,0,0-4.11-7.6Z" transform="translate(-87.65 -114.18)" fill="#e0e0e0" />
												<rect x="1010.74" y="156.59" width="35.88" height="2.24" rx="1.12" transform="translate(-5.15 -389.83) rotate(15.89)" fill="#dbdbdb" />
												<circle cx="965.68" cy="50.32" r="1.35" fill="#dbdbdb" />
												<rect x="953.4" y="188.74" width="44" height="38" transform="translate(2.54 -365.73) rotate(15.4)" fill="#fff" />
												<rect x="938.79" y="241.77" width="44" height="38" transform="translate(16.09 -359.95) rotate(15.4)" fill="#6c63ff" opacity="0.3" />
												<rect x="924.19" y="294.79" width="44" height="38" transform="translate(29.65 -354.17) rotate(15.4)" fill="#fff" />
												<rect x="909.58" y="347.82" width="44" height="38" transform="translate(43.2 -348.39) rotate(15.4)" fill="#3ad29f" opacity="0.3" />
												<rect x="1008.3" y="214.49" width="58" height="4" transform="translate(7.08 -381.86) rotate(15.4)" fill="#fff" />
												<rect x="1005.11" y="226.06" width="58" height="4" transform="translate(10.04 -380.6) rotate(15.4)" fill="#fff" />
												<rect x="993.96" y="266.56" width="58" height="4" transform="translate(20.39 -376.18) rotate(15.4)" fill="#fff" />
												<rect x="990.77" y="278.12" width="58" height="4" transform="translate(23.35 -374.92) rotate(15.4)" fill="#fff" />
												<rect x="979.62" y="318.62" width="58" height="4" transform="translate(33.7 -370.5) rotate(15.4)" fill="#fff" />
												<rect x="976.43" y="330.19" width="58" height="4" transform="translate(36.66 -369.24) rotate(15.4)" fill="#fff" />
												<rect x="965.28" y="370.68" width="58" height="4" transform="translate(47.01 -364.83) rotate(15.4)" fill="#fff" />
												<rect x="962.09" y="382.25" width="58" height="4" transform="translate(49.97 -363.56) rotate(15.4)" fill="#fff" />
											</svg>
                                            <!--end::Svg Icon-->
										</span>
                            </div>
                            <div class="card-body d-flex justify-content-center flex-column col-lg-6 px-8 py-20 px-lg-20 py-lg-40">
                                <h1 class="text-dark font-weight-bolder mb-8">CasualtIS RDF Tool<br><span class="font-size-h2 text-primary">Documentation</span></h1>
                            </div>
                            <div class="position-relative px-20">
                                <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                                    <li class="nav-item mr-14 mt-4">
                                        <a v-on:click="changeActiveTab('about')" class="nav-link font-size-h5 font-weight-bold border-2 pb-6 mx-0 active" data-toggle="tab" href="#kt_tabs_6_1">About</a>
                                    </li>
                                    <li class="nav-item mr-14 mt-4">
                                        <a v-on:click="changeActiveTab('simple')" class="nav-link font-size-h5 font-weight-bold border-2 pb-6 mx-0" data-toggle="tab" href="#kt_tabs_6_2">Simple Mode</a>
                                    </li>
                                    <li class="nav-item mr-14 mt-4">
                                        <a v-on:click="changeActiveTab('advanced')" class="nav-link font-size-h5 font-weight-bold border-2 pb-6 mx-0" data-toggle="tab" href="#kt_tabs_6_3">Advanced Mode</a>
                                    </li>
                                    <li class="nav-item mr-14 mt-4">
                                        <a v-on:click="changeActiveTab('stack')" class="nav-link font-size-h5 font-weight-bold border-2 pb-6 mx-0" data-toggle="tab" href="#kt_tabs_6_5">Tech Stack</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div v-if="activeTab === 'about'" class="row">
                            <div class="card mb-8">
                                <div class="card-body">
                                    <div class="p-6">
                                        <h1 class="text-dark mb-8">About CasualtIS</h1>
                                        <p class="font-size-h5">This tool allows both new and advanced users to write queries to confirm or debunk information on the web regarding the topic of violations in Syria and Iraq, specifically regarding the death of individuals in the countries.</p><br>
                                        <h3>Introduction & Motivation</h3><br>
                                        <p class="font-size-h6">Significant information currently accessible to anyone with access to the web can be found and shared within seconds. Because of this, misinformation gets spread throughout the media and by word of mouth.In regions of conflict, like Syria and Iraq, news sources are subject to spread such misinformation, whetherbecause they are biased or are censored from publishing certain material. Hence, accurate data compiledfrom such regions is not easily accessible to stakeholders. To provide stakeholders and other users with away to verify whether facts published are truly accurate, a system must be put in place using ‘ground truth’information from datasets compiled by field workers in the region, including individual accounts of humanrights violations and body counts. Two databases of concern are the Violations Documentation Center(VDC) in Syria and the Iraqi Body Count (IBC) database. We are working on a system that uses thesedatabases to investigate casualties from conflicts within Syria and Iraq for the purpose of fact checking aswell as to allow for the statistical exploration of the burden of war.</p>
                                        <p class="font-size-h6">The implications of this work include addressing contested news to fact check falsely reported information. The spread of fake news has potentially explosive consequences for the conflict inthe region. False or altered narratives regarding the conflict can incur serious ramifications for the countryat war and the international community, as it becomes difficult to establish a widely-accepted narrativeon the conflict. This affects the accountability of parties involved. When many parties are involved andwhen serious human rights violations occur in wars such as those in Syria and Iraq, access to unbiasedand clear data is of utmost importance.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div v-if="activeTab === 'simple'" class="row">
                            <div class="card mb-8">
                                <div class="card-body">
                                    <div class="p-6">
                                        <h1 class="text-dark mb-8">Simple Mode</h1>
                                        <h3 class="text-dark mb-8">Introduction</h3>
                                        <p class="font-size-h6">In simple mode, users are presented with a sample list of readily available queries they can choose from for each dataset. These queries are parametrized so that the user can enter different data according to their needs. Parameters support autofill by presenting the user with a list of most common values as they begin typing. Date parameters have a calendar to choose a date from with support for date range. Most parameters* can be left empty if the user would like to return all info pertaining to that parameter.</p>
                                        <p class="font-size-h6">Users may look at the actual SPARQL query behind the selected query by clicking the water droplet icon next to the query drop down list.</p>
                                        <p>* Sex and Date parameters can't be empty.</p><br>
                                        <h3 class="text-dark mb-8">Query Categories</h3>
                                        <p class="font-size-h6">Sample queries are split into two categories, aggregation and listing, respectively. Aggregation queries** collect meaningful data by grouping one or more columns and aggregating the data to the user. Listing queries*** return people who were killed based on the information entered.</p>
                                        <p>** Aggregation queries start with "How many...".</p>
                                        <p>*** Listing queries start with "List those...".</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div v-if="activeTab === 'advanced'" class="row">
                            <div class="card mb-8">
                                <div class="card-body">
                                    <div class="p-6">
                                        <h1 class="text-dark mb-8">Advanced Mode</h1>
                                        <p class="font-size-h6">In advanced mode, users are presented with a text box to enter their own SPARQL queries. Those familiar with SPARQL can look at the available predicates* and begin writing their own queries. A query builder** is available for those who want a parametrized query to be generated for them. The query builder will simplify the process of creating new queries in the advanced mode. Users can select from the available predicates for a database, input parameters for each, and the builder will filter recordsby all those who fit the query created and have those parameters.</p>
                                        <p>* Available predicates can be found by clicking the Dataset Predicates button.</p>
                                        <p>** Query builder can be accessed by clicking the Query Builder button.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div v-if="activeTab === 'stack'" class="row">
                            <div class="card mb-8">
                                <div class="card-body">
                                    <div class="p-6">
                                        <h1 class="text-dark mb-8">Technology Stack</h1>
                                        <p class="font-size-h6">CasualtIS uses a number of tools, frameworks and programming languages to achieve results. Stored data is in the form of linked data and turtle files generated from JSON files scraped from the web. The client tool is built using Laravel PHP Framework and the frontend uses modern web technologies.</p><br>
                                        <h3 class="text-dark mb-8">Data collection</h3>
                                        <ol>
                                            <li class="font-size-h5">Java for scraping data from the web.</li>
                                            <li class="font-size-h5">Python for cleaning scraped data.</li>
                                            <li class="font-size-h5">RMLMapper java cli tool for generating linked data in the form of turtle files.</li>
                                            <li class="font-size-h5">SPARQL for querying RDF data.</li>
                                        </ol>
                                        <br>
                                        <h3 class="text-dark mb-8">Backend</h3>
                                        <ol>
                                            <li class="font-size-h5">Apache Jena Fuseki java tool for storing large RDF files and using endpoints for querying from the frontend.</li>
                                            <li class="font-size-h5">MySQL database to store sample queries.</li>
                                            <li class="font-size-h5">Laravel PHP Framework to build the backend of the client tool.</li>
                                        </ol>
                                        <br>
                                        <h3 class="text-dark mb-8">Frontend</h3>
                                        <ol>
                                            <li class="font-size-h5">Vue.js for reactive data on the frontend.</li>
                                            <li class="font-size-h5">Axios.js for consuming RESTful APIs on the backend.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <x-footer></x-footer>
        </div>
    </div>
</div>

<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
<script src="{{ asset("assets/plugins/global/plugins.bundle.js") }}"></script>
<script src="{{ asset("assets/plugins/custom/prismjs/prismjs.bundle.js") }}"></script>
<script src="{{ asset("assets/js/scripts.bundle.js") }}"></script>
<script src="{{ asset("assets/js/vue.min.js") }}"></script>
<script src="{{ asset("assets/js/pages/doc.js") }}"></script>

</body>
</html>
