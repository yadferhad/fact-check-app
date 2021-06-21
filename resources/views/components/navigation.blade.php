<!--begin::Header-->
<div id="kt_header" class="header header-fixed header-small">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <div class="d-none d-lg-flex align-items-center mr-3">
            <a href="/">
                <p class="logo-text-big text-dark">CasualtIS</p>
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
                    <a href="{{ route('doc.index') }}"><div class="btn font-weight-bolder btn-sm btn-light-danger px-5">DOCUMENTATION</div></a>
                </div>
            </div>
            <!--end::Create-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header-->
