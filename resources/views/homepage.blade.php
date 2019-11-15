<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trang chủ</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.style')
</head>

<body class="tg-home tg-homeone">
    <!--************************************
            Wrapper Start
    *************************************-->
    <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
        <!--************************************
                Header Start
        *************************************-->
        @include('layouts.header')
        <!--************************************
                Header End
        *************************************-->
        <!--************************************
                Home Slider Start
        *************************************-->
        @include('layouts.banner-home')
        <!--************************************
                Home Slider End
        *************************************-->
        <!--************************************
                Main Start
        *************************************-->
        @include('layouts.main-home')
        <!--************************************
                Main End
        *************************************-->
        <!--************************************
                Footer Start
        *************************************-->
        @include('layouts.footer')
        <!--************************************
                Footer End
        *************************************-->
    </div>
    <!--************************************
            Wrapper End
    *************************************-->

    @include('layouts.script')
</body>


</html>