<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
        @if(isset($magazine->MagazineName))
           {{  $magazine->MagazineName  }} - الرئيسية
            @else
            المجلات العلمية - الرئيسية
        @endif
    </title>
    <meta name="description" content="المجلات العلمية | رئيسية المجلة">
    <meta name="author" content="المجلات">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
    <link rel="shortcut icon" href="{{ asset('assets/logo.png') }}">

    <!-- CSS StyleSheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/assets.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link id="theme_css" rel="stylesheet" href="{{ asset('assets/css/light.css') }}">

    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{ asset('assets/js/html5.js') }}"></script>
    <![endif]-->

    <!-- Skin CSS file -->
    <link id="skin_css" rel="stylesheet" href="{{ asset('assets/css/skins/6.css') }}">

    <link rel="stylesheet" id="rtl-css" href="{{ asset('assets/css/rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <style>
        .tools{
            display: none!important;
        }
    </style>
</head>