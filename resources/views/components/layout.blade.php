<!DOCTYPE html>
<html lang="en">
<x-header />

<body class="bg-gray-100 analytics-template">
    <x-sidebar />

    <div class="main-content">
        <x-topbar />
        <div class="px-3 px-xxl-5 py-3 py-lg-4 border-bottom border-gray-200 after-header">
            <div class="container-fluid px-0">
                <div class="row align-items-center">
                    <div class="col">
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                            aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumbTitle ?? '' }}</li>
                            </ol>
                        </nav>
                    </div>
                    <x-cta-button />
                </div>
            </div>
        </div>
        <div class="p-3 p-xxl-5">
            <div class="container-fluid px-0">
                <div class="row">
                    {{ $slot }}
                </div>
            </div>
            <x-footer />
        </div>
    </div>
    <x-script />
</body>

</html>