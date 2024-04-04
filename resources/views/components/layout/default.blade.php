<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light"
    data-menu-styles="dark">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="Description" content="Laravel Tailwind CSS Responsive Admin Web Dashboard Template">
    <meta name="keywords"
        content="admin panel in laravel, tailwind, tailwind template admin, laravel admin panel, tailwind css dashboard, admin dashboard template, admin template, tailwind laravel, template dashboard, admin panel tailwind, tailwind css admin template, laravel tailwind template, laravel tailwind, tailwind admin dashboard">

    <!-- TITLE -->
    <title> YNEX - Laravel Tailwind CSS Admin & Dashboard Template </title>

    <!-- FAVICON -->
    <link rel="icon" href="/assets/images/brand-logos/favicon.ico" type="image/x-icon">

    <!-- ICONS CSS -->
    <link href="/assets/iconfonts/icons.css" rel="stylesheet">

    <!-- SIMPLEBAR CSS -->
    <link rel="stylesheet" href="/assets/libs/simplebar/simplebar.min.css">

    <!-- SELECT2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">

    <!-- COLOR PICKER CSS -->
    <link rel="stylesheet" href="/assets/libs/@simonwep/pickr/themes/nano.min.css">

    <!-- SWEETALERT CSS -->
    <link rel="stylesheet" href="/assets/libs/sweetalert2/sweetalert2.min.css">

    <!-- MAIN JS -->
    <script src="/assets/main.js"></script>


    @vite(['resources/css/app.css'])

</head>

<body>
    <x-alert />
    <!-- SWITCHER -->
    <x-common.switch-component />
    <!-- END SWITCHER -->

    <!-- LOADER -->
    <x-common.loader />
    <!-- END LOADER -->

    <!-- PAGE -->
    <div class="page">

        <!-- HEADER -->
        <x-common.header />
        <!-- END HEADER -->

        <!-- SIDEBAR -->
        <x-common.sidebar />
        <!-- END SIDEBAR -->

        <!-- MAIN-CONTENT -->
        <div class="content">
            <div class="main-content ">

                {{ $slot }}



            </div>
        </div>

        <!-- END MAIN-CONTENT -->

        <!-- SEARCH-MODAL -->
        <x-common.search-modal />
        <!-- END SEARCH-MODAL -->

        <!-- FOOTER -->
        <x-common.footer />
        <!-- END FOOTER -->

    </div>
    <!-- END PAGE-->

    <!-- SCRIPTS -->

    <!-- SCROLL-TO-TOP -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill text-xl"></i></span>
    </div>
    <div id="responsive-overlay"></div>

    <!-- PRELINE JS -->
    <script src="/assets/libs/preline/preline.js"></script>

    <!-- POPPER JS -->
    <script src="/assets/libs/@popperjs/core/umd/popper.min.js"></script>

    <!-- COLOR PICKER JS -->
    <script src="/assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>

    <!-- SWITCH JS -->
    <link rel="modulepreload" href="/assets/switch-8d0a5268.js" />
    <script type="module" src="/assets/switch-8d0a5268.js"></script>

    <!-- SIMPLEBAR JS -->
    <script src="/assets/libs/simplebar/simplebar.min.js"></script>

    <!-- SWEETALERT JS -->
    <script src="/assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- JSVector Maps JS -->
    <script src="/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>

    <!-- JSVector Maps MapsJS -->
    <script src="/assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!-- Apex Charts JS -->
    <script src="/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Chartjs Chart JS -->
    <script src="/assets/libs/chart.js/chart.min.js"></script>

    <!-- Select2 Cdn -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Internal Select-2.js -->
    <link rel="modulepreload" href="/assets/select2-fce7f173.js" />
    <script type="module" src="/assets/select2-fce7f173.js"></script>

    <!-- CRM-Dashboard -->
    <link rel="modulepreload" href="/assets/crm-dashboard-5975eef2.js" />
    <script type="module" src="/assets/crm-dashboard-5975eef2.js"></script>


    <!-- STICKY JS -->
    <script src="/assets/sticky.js"></script>

    <!-- APP JS -->
    <link rel="modulepreload" href="/assets/app-cff42aa7.js" />
    <script type="module" src="/assets/app-cff42aa7.js"></script>

    <!-- CUSTOM-SWITCHER JS -->
    <link rel="modulepreload" href="/assets/custom-switcher-508a7845.js" />
    <script type="module" src="/assets/custom-switcher-508a7845.js"></script>


    {{-- sweet Alert script --}}
    <script>
        window.addEventListener('show-delete-confirmation', event => {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('deleteConfirmed');
                }
            });
        })

        window.addEventListener('resourceDeleted', event => {
            Swal.fire({
                title: "Deleted!",
                text: "the Resource has been deleted.",
                icon: "success"
            });
        })
    </script>
    <!-- END SCRIPTS -->
    @livewire('wire-elements-modal')
    @stack('modals')

</body>

</html>
