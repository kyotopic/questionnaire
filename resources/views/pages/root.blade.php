@extends('layouts.app')
@section('title', '首页')

@section('content')
<h2 class="text-center">关于京都传统匠人产品购买意向的问卷调查</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                <p class="">
                    为了确保信息安全性，本问卷不会包含任何可以识别您身份的信息。调查结果仅作市场用途， 所有数据只用于统计分析。
                </p>
                <p>
                    为感谢大家的宝贵意见，此次调查我们将抽选幸运朋友赠送奖品。
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 hidden-sm hidden-m">
                <p>手作黄交趾浅口碗(一对 2 只) 1 位</p>
                <p>京都传统工艺士</p>
                <p>清水烧陶艺家高岛慎一作品</p>
                <image class="img-fluid" src="/images/prize/prize1.png">
            </div>
            <div class="col-lg-3 col-md-3 hidden-sm hidden-m">
                <p>手绘京漆器挂坠 5 位</p>
                <p>京都百年老店乾漆器匠人手绘作品</p>
                <p>&nbsp;</p>
                <image class="img-fluid" src="/images/prize/prize2.jpg">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                <p class="">
                    (注:此次抽奖奖品将由我司承担运费从日本直邮，如被抽查发生关税，税费由中奖者承担。)
                </p>
            </div>
        </div>
    </div>
    @stop
