<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Questionnaire') - 偏爱京都</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>
    <script>
    $(document).ready(function() {
        var id;
        $("#coffee_cup a").bind("click", function() {
            id = $(this).children("input").attr("id");
        });
        $("#teapot a").bind("click", function() {
            id = $(this).children("input").attr("id");
        });
        $("#ceramic_cup a").bind("click", function() {
            id = $(this).children("input").attr("id");
        });
        $("#silver_product a").bind("click", function() {
            id = $(this).children("input").attr("id");
        });
        $("#textile a").bind("click", function() {
            id = $(this).children("input").attr("id");
        });
        $("#lacquer a").bind("click", function() {
            id = $(this).children("input").attr("id");
        });

        $("#coffee_cupsave").click(function() {
            $("#coffee_cup1").modal('hide');
            $("#" + id + "").attr("checked", true);
        });
        $("#coffee_cupclose").click(function() {
            $("#coffee_cup1").modal('hide');
            $("#" + id + "").attr("checked", false);
        });

        $("#teapotsave").click(function() {
            $("#teapot1").modal('hide');
            $("#" + id + "").attr("checked", true);
        });
        $("#teapotclose").click(function() {
            $("#teapot1").modal('hide');
            $("#" + id + "").attr("checked", false);
        });

        $("#ceramic_cupsave").click(function() {
            $("#ceramic_cup1").modal('hide');
            $("#" + id + "").attr("checked", true);
        });
        $("#ceramic_cupclose").click(function() {
            $("#ceramic_cup1").modal('hide');
            $("#" + id + "").attr("checked", false);
        });

        $("#silver_productsave").click(function() {
            $("#silver_product1").modal('hide');
            $("#" + id + "").attr("checked", true);
        });
        $("#silver_productclose").click(function() {
            $("#silver_product1").modal('hide');
            $("#" + id + "").attr("checked", false);
        });

        $("#textilesave").click(function() {
            $("#textile1").modal('hide');
            $("#" + id + "").attr("checked", true);
        });
        $("#textileclose").click(function() {
            $("#textile1").modal('hide');
            $("#" + id + "").attr("checked", false);
        });

        $("#lacquersave").click(function() {
            $("#lacquer1").modal('hide');
            $("#" + id + "").attr("checked", true);
        });
        $("#lacquerclose").click(function() {
            $("#lacquer1").modal('hide');
            $("#" + id + "").attr("checked", false);
        });

        var width = $(window).width();
        // if(width < 561){
        //   $(".form-image-check").removeClass("form-check-inline");
        // }
        //sessionStorage.setItem("width",width);
        document.cookie = "width="+width;
    });
    </script>
</head>

<body>
    <div id="app" class="{{ route_class() }}-page">

        @include('layouts._header')

        <div class="container">

            @include('shared._messages')

            @yield('content')

        </div>

        @include('layouts._footer')
    </div>


</body>

</html>
