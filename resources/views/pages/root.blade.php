@extends('layouts.app')
@section('title', '问卷')

@section('content')

<div class="container">
    <h2 class="text-center">关于京都传统匠人产品购买意向的问卷调查</h2>
        <div class="row justify-content-md-center">
            <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                <p class="">
                    为了确保信息安全性，本问卷不会包含任何可以识别您身份的信息。调查结果仅作市场用途， 所有数据只用于统计分析。
                    <br>
                    为感谢大家的宝贵意见，此次调查我们将抽选幸运朋友赠送奖品。
                </p>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-lg-4 col-md-4 hidden-sm hidden-m">
                <p>
                    手作黄交趾浅口碗(一对 2 只) 1 位
                    <br>
                    京都传统工艺士
                    <br>
                    清水烧陶艺家高岛慎一作品
                </p>
                <image class="img-fluid" src="/images/prize/prize1.png">
            </div>
            <div class="col-lg-3 col-md-3 hidden-sm hidden-m">
                <p>&nbsp;</p>
            </div>
            <div class="col-lg-4 col-md-4 hidden-sm hidden-m">
                <p>
                    手绘京漆器挂坠 5 位
                    <br>
                    京都百年老店乾漆器匠人手绘作品
                    <br>
                    &nbsp;
                </p>
                <image class="img-fluid" src="/images/prize/prize2.jpg">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 hidden-sm hidden-xs text-center">
                <p>
                    (注:此次抽奖奖品将由我司承担运费从日本直邮，如被抽查发生关税，税费由中奖者承担。)
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                <p>
                    感谢您能抽出几分钟时间来参加本次问卷调查，现在我们就开始吧!
                </p>
            </div>
        </div>
        {{-- 问题列表 --}}
        @include('pages._questions_list')
        {{--@include('pages.code')--}}

        {{-- 弹出框 --}}
        @include('pages._modal')


</div>



@stop
