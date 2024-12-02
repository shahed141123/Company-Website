@props(['title'])
<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
            data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
            class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">

            @if ($title ?? null)
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">{{ $title }}</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
            @endif
            @if (isset($breadcrumbs))
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-5 my-1">
                    <!--begin::Item-->
                    @foreach ($breadcrumbs as $breadcrumb)
                        <li class="breadcrumb-item">
                            <a href="{{ $breadcrumb['url'] }}" class= "text-hover-primary">{{ $breadcrumb['name'] }}</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        @unless ($loop->last)
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-300 w-5px h-2px"></span>
                            </li>
                        @endunless
                    @endforeach
                </ul>
            @endif
            <!--end::Breadcrumb-->
            <!--end::Title-->
        </div>
        <!--end::Page title-->
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->