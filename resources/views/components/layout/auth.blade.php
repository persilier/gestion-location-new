<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" class="light"
    data-header-styles="light" data-menu-styles="light" data-toggled="close">


<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Description" content="Ynex –Laravel Tailwind CSS Responsive Admin Web Dashboard Template">
    <meta name="keywords"
        content="admin panel in laravel, tailwind, tailwind template admin, laravel admin panel, tailwind css dashboard, admin dashboard template, admin template, tailwind laravel, template dashboard, admin panel tailwind, tailwind css admin template, laravel tailwind template, laravel tailwind, tailwind admin dashboard">

    <!-- TITLE -->
    <title> YNEX - Laravel Tailwind CSS Admin & Dashboard Template </title>

    <!-- FAVICON -->
    <link rel="icon" href="/assets/images/brand-logos/favicon.ico" type="image/x-icon">

    <!-- ICONS CSS -->
    <link href="/assets/iconfonts/icons.css" rel="stylesheet">

    <!-- APP SCSS -->
    <link rel="preload" as="style" href="/assets/app-6b44ca98.css" />
    <link rel="stylesheet" href="/assets/app-6b44ca98.css" />

    <!-- SWEETALERT CSS -->
    <link rel="stylesheet" href="/assets/libs/sweetalert2/sweetalert2.min.css">

    <!-- MAIN JS -->
    <script src="/assets/authentication-main.js"></script>


    <!-- SWIPER CSS -->
    <link rel="stylesheet" href="/assets/libs/swiper/swiper-bundle.min.css">

    @livewireStyles

</head>

<body class="bg-white dark:!bg-bodybg">



    <div class="grid grid-cols-12 authentication mx-0 text-defaulttextcolor text-defaultsize">

        {{ $slot }}

    </div>



    <!-- SCRIPTS -->


    <!-- Swiper JS -->
    <script src="/assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- SWEETALERT JS -->
    <script src="/assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- Internal Sing-Up JS -->
    <link rel="modulepreload" href="/assets/authentication-fa6f6b78.js" />
    <script type="module" src="/assets/authentication-fa6f6b78.js"></script>

    <!-- Show Password JS -->
    <script src="/assets/show-password.js"></script>
    <!-- CUSTOM-SWITCHER JS -->
    <link rel="modulepreload" href="/assets/custom-switcher-508a7845.js" />
    <script type="module" src="/assets/custom-switcher-508a7845.js"></script>

    <!-- END SCRIPTS -->


    <!-- END SCRIPTS -->
    @stack('modals')

    @livewireScripts
</body>

</html>
