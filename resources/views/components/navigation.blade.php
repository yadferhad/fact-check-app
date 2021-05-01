<!--begin::Header-->
<div id="kt_header" class="header header-fixed header-small">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <div class="d-none d-lg-flex align-items-center mr-3">
            <a href="/">
                <p class="logo-text-big text-dark">FactCheck</p>
                <span class="logo-pharmacy-name">v1.0</span>
            </a>
        </div>
        <!--begin::Topbar-->
        <div class="topbar">
            <!--begin::Create-->
            <div class="dropdown">
                <!--begin::POS Button-->
                <div class="topbar-item mr-4" data-offset="10px,0px">
                    <a href="{{ route('index') }}"><div class="btn font-weight-bolder btn-sm btn-light-success px-5">HOME</div></a>
                </div>
                <!--end::POS Button-->
                <div class="topbar-item mr-4" data-offset="10px,0px">
                    <a href="#"><div class="btn font-weight-bolder btn-sm btn-light-danger px-5">ABOUT</div></a>
                </div>
            </div>
            <!--end::Create-->
            <!--begin::User-->
            <div class="topbar-item mr-4">
                <div class="dropdown dropdown-inline">
                    <a href="#" class="btn btn-sm btn-clean btn-text-dark-75" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="svg-icon svg-icon-lg">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5"/>
                                    <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                        <!--begin::Naviigation-->
                        <ul class="navi">
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="navi-icon flaticon2-document"></i>
                                </span>
                                    <span class="navi-text">Documentation</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="navi-icon flaticon2-help"></i>
                                </span>
                                    <span class="navi-text">Help</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="navi-icon flaticon2-contract"></i>
                                </span>
                                    <span class="navi-text">Licences</span>
                                </a>
                            </li>
                        </ul>
                        <!--end::Naviigation-->
                    </div>
                </div>
            </div>
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header-->
