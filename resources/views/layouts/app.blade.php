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
        var coffee_cup_count = 0;
        var teapot_count = 0;
        var ceramic_cup_count = 0;
        var silver_product_count = 0;
        var textile_count = 0;
        var lacquer_count = 0;

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
            if (!$("#" + id + "").attr("checked")) {
                if (coffee_cup_count < 3) {
                    $("#coffee_cup1").modal('hide');
                    $("#" + id + "").prop("checked", true);
                    $("#" + id + "").attr("checked", true);
                    coffee_cup_count++;
                } else
                    alert("您最多可以选择三个选项，请不要再继续选择");
            } else
                $("#coffee_cup1").modal('hide');
        });
        $("#coffee_cupclose").click(function() {
            if (!$("#" + id + "").attr("checked")) {
                if (coffee_cup_count = 3) {
                    $("#coffee_cup1").modal('hide');
                }
            } else if (coffee_cup_count > 0) {
                $("#coffee_cup1").modal('hide');
                $("#" + id + "").prop("checked", false);
                $("#" + id + "").attr("checked", false);
                coffee_cup_count--;
            }
        });

        $("#teapotsave").click(function() {
            if (!$("#" + id + "").attr("checked")) {
                if (teapot_count < 3) {
                    $("#teapot1").modal('hide');
                    $("#" + id + "").prop("checked", true);
                    $("#" + id + "").attr("checked", true);
                    teapot_count++;
                } else
                    alert("您最多可以选择三个选项，请不要再继续选择");
            } else
                $("#teapot1").modal('hide');
        });
        $("#teapotclose").click(function() {
            if (!$("#" + id + "").attr("checked")) {
                if (teapot_count = 3) {
                    $("#teapot1").modal('hide');
                }
            } else if (teapot_count > 0) {
                $("#teapot1").modal('hide');
                $("#" + id + "").prop("checked", false);
                $("#" + id + "").attr("checked", false);
                teapot_count--;
            }
        });

        $("#ceramic_cupsave").click(function() {
            if (!$("#" + id + "").attr("checked")) {
                if (ceramic_cup_count < 3) {
                    $("#ceramic_cup1").modal('hide');
                    $("#" + id + "").prop("checked", true);
                    $("#" + id + "").attr("checked", true);
                    ceramic_cup_count++;
                } else
                    alert("您最多可以选择三个选项，请不要再继续选择");
            } else
                $("#ceramic_cup1").modal('hide');
        });
        $("#ceramic_cupclose").click(function() {
            if (!$("#" + id + "").attr("checked")) {
                if (ceramic_cup_count = 3) {
                    $("#ceramic_cup1").modal('hide');
                }
            } else if (ceramic_cup_count > 0) {
                $("#ceramic_cup1").modal('hide');
                $("#" + id + "").prop("checked", false);
                $("#" + id + "").attr("checked", false);
                ceramic_cup_count--;
            }
        });

        $("#silver_productsave").click(function() {
          if (!$("#" + id + "").attr("checked")) {
                if (silver_product_count < 3) {
                    $("#silver_product1").modal('hide');
                    $("#" + id + "").prop("checked", true);
                    $("#" + id + "").attr("checked", true);
                    silver_product_count++;
                } else
                    alert("您最多可以选择三个选项，请不要再继续选择");
            } else
                $("#silver_product1").modal('hide');
        });
        $("#silver_productclose").click(function() {
          if (!$("#" + id + "").attr("checked")) {
                if (silver_product_count = 3) {
                    $("#silver_product1").modal('hide');
                }
            } else if (silver_product_count > 0) {
                $("#silver_product1").modal('hide');
                $("#" + id + "").prop("checked", false);
                $("#" + id + "").attr("checked", false);
                silver_product_count--;
            }
        });

        $("#textilesave").click(function() {
          if (!$("#" + id + "").attr("checked")) {
                if (textile_count < 3) {
                    $("#textile1").modal('hide');
                    $("#" + id + "").prop("checked", true);
                    $("#" + id + "").attr("checked", true);
                    textile_count++;
                } else
                    alert("您最多可以选择三个选项，请不要再继续选择");
            } else
                $("#textile1").modal('hide');
        });
        $("#textileclose").click(function() {
          if (!$("#" + id + "").attr("checked")) {
                if (textile_count = 3) {
                    $("#textile1").modal('hide');
                }
            } else if (textile_count > 0) {
                $("#textile1").modal('hide');
                $("#" + id + "").prop("checked", false);
                $("#" + id + "").attr("checked", false);
                textile_count--;
            }
        });

        $("#lacquersave").click(function() {
          if (!$("#" + id + "").attr("checked")) {
                if (lacquer_count < 3) {
                    $("#lacquer1").modal('hide');
                    $("#" + id + "").prop("checked", true);
                    $("#" + id + "").attr("checked", true);
                    lacquer_count++;
                } else
                    alert("您最多可以选择三个选项，请不要再继续选择");
            } else
                $("#lacquer1").modal('hide');
        });
        $("#lacquerclose").click(function() {
          if (!$("#" + id + "").attr("checked")) {
                if (lacquer_count = 3) {
                    $("#lacquer1").modal('hide');
                }
            } else if (lacquer_count > 0) {
                $("#lacquer1").modal('hide');
                $("#" + id + "").prop("checked", false);
                $("#" + id + "").attr("checked", false);
                lacquer_count--;
            }
        });

        var width = $(window).width();
        // if(width < 561){
        //   $(".form-image-check").removeClass("form-check-inline");
        // }
        //sessionStorage.setItem("width",width);
        document.cookie = "width=" + width;

        if ($("#infobtn").length > 0) {
            $("#infobtn").trigger("click");
        }

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
