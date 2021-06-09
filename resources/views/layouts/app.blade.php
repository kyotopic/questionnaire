<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Questionnaire') - Questionnaire 传统艺人商品购买意向问卷</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

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

        $("#save1").click(function() {
            $("#price3001200").modal('hide');
            $("#" + id + "").attr("checked", true);
        });
        $("#close1").click(function() {
            $("#price3001200").modal('hide');
            $("#" + id + "").attr("checked", false);
        });
        $("#save2").click(function() {
            $("#price6002400").modal('hide');
            $("#" + id + "").attr("checked", true);
        });
        $("#close2").click(function() {
            $("#price6002400").modal('hide');
            $("#" + id + "").attr("checked", false);
        });
        $("#save3").click(function() {
            $("#price500030000").modal('hide');
            $("#" + id + "").attr("checked", true);
        });
        $("#close3").click(function() {
            $("#price500030000").modal('hide');
            $("#" + id + "").attr("checked", false);
        });

    });
    </script>
</body>

</html>
