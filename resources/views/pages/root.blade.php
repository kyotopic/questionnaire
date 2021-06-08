@extends('layouts.app')
@section('title', '首页')

@section('content')

<div class="container">
    <h2 class="text-center">关于京都传统匠人产品购买意向的问卷调查</h1>
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
        <div class="row">
            <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                <p>
                    1、 您的性别是?
                </p>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="gender" id="gender1" value="option1" checked>
                    <label class="form-check-label form-margin" for="gender1">
                        男
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="gender" id="gender2" value="option2">
                    <label class="form-check-label form-margin" for="gender2">
                        女
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                <p>
                    2、您的年龄?
                </p>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="age" id="age1" value="option1" checked>
                    <label class="form-check-label form-margin" for="age1">
                        18 岁以下
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="age" id="age2" value="option2">
                    <label class="form-check-label form-margin" for="age2">
                        18-25 岁
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="age" id="age3" value="option2">
                    <label class="form-check-label form-margin" for="age3">
                        26-40 岁
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="age" id="age4" value="option2">
                    <label class="form-check-label form-margin" for="age4">
                        41-60 岁
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="age" id="age5" value="option2">
                    <label class="form-check-label form-margin" for="age5">
                        60 岁以上
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 hidden-sm hidden-xs">
                <p>
                    3、您的居住地?
                </p>
                <div class="form-group">
                    <select class="form-control" name="address" required>
                        <option value="" hidden disabled selected>请选择地址</option>
                        <option value="">北京</option>
                        <option value="">上海</option>
                        <option value="">港澳台</option>
                        <option value="">海外</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                <p>
                    4、您去过京都几次?
                </p>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="gokyoto" id="gokyoto1" value="option1" checked>
                    <label class="form-check-label form-margin" for="gokyoto1">
                        0 次(没去过)
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="gokyoto" id="gokyoto2" value="option2">
                    <label class="form-check-label form-margin" for="gokyoto2">
                        1次
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="gokyoto" id="gokyoto3" value="option2">
                    <label class="form-check-label form-margin" for="gokyoto3">
                        2次
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="gokyoto" id="gokyoto4" value="option2">
                    <label class="form-check-label form-margin" for="gokyoto4">
                        3 次及以上
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                <p>
                    5、您的月收入或月生活费是?
                </p>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="income" id="income1" value="option1" checked>
                    <label class="form-check-label form-margin" for="income1">
                        ~10000 元
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="income" id="income2" value="option2">
                    <label class="form-check-label form-margin" for="income2">
                        10001~20000 元
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="income" id="income3" value="option2">
                    <label class="form-check-label form-margin" for="income3">
                        20001~30000 元
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="income" id="income4" value="option2">
                    <label class="form-check-label form-margin" for="income4">
                        30001 元~
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                <p>
                    6、您知道以下哪些京都传统工艺产品?<span class="text-danger">(可复选)</span>
                </p>
                <div class="form-check check-box">
                    <input class="form-check-input" type="checkbox" name="arts[]" id="art1" value="option1" checked>
                    <label class="form-check-label form-margin" for="art1">
                        西阵织
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="checkbox" name="arts[]" id="art2" value="option2">
                    <label class="form-check-label form-margin" for="art2">
                        金属工艺(银器、锡器、铁器等)
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="checkbox" name="arts[]" id="art3" value="option2">
                    <label class="form-check-label form-margin" for="art3">
                        清水烧
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="checkbox" name="arts[]" id="art4" value="option2">
                    <label class="form-check-label form-margin" for="art4">
                        漆器
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="checkbox" name="arts[]" id="art5" value="option2">
                    <label class="form-check-label form-margin" for="art5">
                        竹艺
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="checkbox" name="arts[]" id="art6" value="option2">
                    <label class="form-check-label form-margin" for="art6">
                        扇子
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="checkbox" name="arts[]" id="art6" value="其他">
                    <input type="text" class="form-control form-control-sm form-margin"
                        aria-label="Text input with checkbox" placeholder="其他">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                <p>
                    7、您是通过哪些途径得知日本传统匠人工艺的?<span class="text-danger">(可复选)</span>
                </p>
                <div class="form-check check-box">
                    <input class="form-check-input" type="checkbox" name="info[]" id="info1" value="option1" checked>
                    <label class="form-check-label form-margin" for="info1">
                        口口相传
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="checkbox" name="info[]" id="info2" value="option2">
                    <label class="form-check-label form-margin" for="info2">
                        旅游发现
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="checkbox" name="info[]" id="info3" value="option2">
                    <label class="form-check-label form-margin" for="info3">
                        传统媒体
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="checkbox" name="info[]" id="info4" value="option2">
                    <label class="form-check-label form-margin" for="info4">
                        网络
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="checkbox" name="info[]" id="info5" value="其他">
                    <input type="text" class="form-control form-control-sm form-margin"
                        aria-label="Text input with checkbox" placeholder="其他">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                <p>
                    8、如果购买日本传统工艺品，您更中意那一类商品?
                </p>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="like" id="like1" value="option2">
                    <label class="form-check-label form-margin" for="like1">
                        高价值工艺藏品
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="like" id="like2" value="option2">
                    <label class="form-check-label form-margin" for="like2">
                        实用性较高的生活用品
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="like" id="like3" value="option2">
                    <label class="form-check-label form-margin" for="like3">
                        有纪念意义的小工艺品
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="like" id="like4" value="option2">
                    <label class="form-check-label form-margin" for="like4">
                        日本独有/较有日本特色的纪念商品
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="like" id="like5" value="其他">
                    <input type="text" class="form-control form-control-sm form-margin"
                        aria-label="Text input with checkbox" placeholder="其他">
                </div>
            </div>
        </div>
        <div id="imagescheckcups">
            <div class="row">
                <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                    <p>
                        9、以下清水烧陶瓷咖啡杯，您会购买哪几件商品?<span class="text-danger">(可复选，最多三件)</span>
                    </p>
                </div>
                <div class="form-group form-check-inline" id="image-click-div">
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
                            <label for="cup1">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="cups" id="cup1" value="其他">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
                            <label for="cup2">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="cups" id="cup2" value="其他">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
                            <label for="cup3">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="cups" id="cup3" value="其他">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
                            <label for="cup4">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="cups" id="cup4" value="其他">
                        </a>
                    </div>
                </div>
            </div>

            <div class="row row-margin">
                <div class="form-group form-check-inline">
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
                            <label for="cup5">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="cups" id="cup5" value="其他">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
                            <label for="cup6">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="cups" id="cup6" value="其他">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
                            <label for="cup7">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="cups" id="cup7" value="其他">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
                            <label for="cup8">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="cups" id="cup8" value="其他">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="imagescheckteapots">
            <div class="row">
                <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                    <p>
                        10、以下清水烧陶瓷小茶壶，您会购买哪几件商品?<span class="text-danger">(可复选，最多三件)</span>
                    </p>
                </div>
                <div class="form-group form-check-inline" id="image-click-div">
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price6002400">
                            <label for="teapot1">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="teapots" id="teapot1" value="其他">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price6002400">
                            <label for="teapot2">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="teapots" id="teapot2" value="其他">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price6002400">
                            <label for="teapot3">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="teapots" id="teapot3" value="其他">
                        </a>
                    </div>
                </div>
            </div>

            <div class="row row-margin">
                <div class="form-group form-check-inline">
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price6002400">
                            <label for="teapot4">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="teapots" id="teapot4" value="其他">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price6002400">
                            <label for="teapot5">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="teapots" id="teapot5" value="其他">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price6002400">
                            <label for="teapot6">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="teapots" id="teapot6" value="其他">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="imagescheckceramics">
            <div class="row">
                <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                    <p>
                        11、以下清水烧陶瓷茶杯，您会购买哪几件商品?<span class="text-danger">(可复选，最多三件)</span>
                    </p>
                </div>
                <div class="form-group form-check-inline" id="image-click-div">
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
                            <label for="ceramic1">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="ceramics" id="ceramic1" value="其他">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
                            <label for="ceramic2">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="ceramics" id="ceramic2" value="其他">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
                            <label for="ceramic3">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="ceramics" id="ceramic3" value="其他">
                        </a>
                    </div>
                </div>
            </div>

            <div class="row row-margin">
                <div class="form-group form-check-inline">
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
                            <label for="ceramic4">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="ceramics" id="ceramic4" value="其他">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
                            <label for="ceramic5">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="ceramics" id="ceramic5" value="其他">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
                            <label for="ceramic6">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="ceramics" id="ceramic6" value="其他">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="imageschecksilver">
            <div class="row">
                <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                    <p>
                        12、京都名匠手工制作的下列银器制品，您会购买哪几件商品?<span class="text-danger">(可复选，最多三件)</span>
                    </p>
                </div>
                <div class="form-group form-check-inline" id="image-click-div">
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price500030000">
                            <label for="silver1">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="silver" id="silver1" value="其他">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price500030000">
                            <label for="silver2">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="silver" id="silver2" value="其他">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price500030000">
                            <label for="silver3">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="silver" id="silver3" value="其他">
                        </a>
                    </div>
                </div>
            </div>

            <div class="row row-margin">
                <div class="form-group form-check-inline">
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price500030000">
                            <label for="silver4">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="silver" id="silver4" value="其他">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price500030000">
                            <label for="silve5">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="silver" id="silver5" value="其他">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price500030000">
                            <label for="silver6">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="silver" id="silver6" value="其他">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="imagescheckweave">
            <div class="row">
                <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                    <p>
                        13、以下西阵织制品，您会购买哪几件商品?<span class="text-danger">(可复选，最多三件)</span>
                    </p>
                </div>
                <div class="form-group form-check-inline" id="image-click-div">
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
                            <label for="weave1">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="weave" id="weave1" value="其他">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
                            <label for="weave2">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="weave" id="weave2" value="其他">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
                            <label for="weave3">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="weave" id="weave3" value="其他">
                        </a>
                    </div>
                </div>
            </div>

            <div class="row row-margin">
                <div class="form-group form-check-inline">
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
                            <label for="weave4">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="weave" id="weave4" value="其他">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
                            <label for="weave5">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="weave" id="weave5" value="其他">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
                            <label for="weave6">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="weave" id="weave6" value="其他">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="imagescheckpaint">
            <div class="row">
                <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                    <p>
                        14、以下京漆器，您会购买哪几件商品?<span class="text-danger">(可复选，最多三件)</span>
                    </p>
                </div>
                <div class="form-group form-check-inline" id="image-click-div">
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
                            <label for="paint1">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="paint" id="paint1" value="其他">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
                            <label for="paint2">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="paint" id="paint2" value="其他">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
                            <label for="paint3">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="paint" id="paint3" value="其他">
                        </a>
                    </div>
                </div>
            </div>

            <div class="row row-margin">
                <div class="form-group form-check-inline">
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
                            <label for="paint4">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="paint" id="paint4" value="其他">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
                            <label for="paint5">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="paint" id="paint5" value="其他">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                        <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
                            <label for="paint6">
                                <image class="img-fluid" src="/images/prize/prize1.png">
                            </label>
                            <input class="form-check-input" type="checkbox" name="paint" id="paint6" value="其他">
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                <p>
                    15、未来在国内组织的京都传统工艺分享会，您有兴趣参加吗?
                </p>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="activity" id="activity1" value="option1" checked>
                    <label class="form-check-label form-margin" for="activity1">
                        会将活动列入日程计划，一定参加
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="activity" id="activity2" value="option2">
                    <label class="form-check-label form-margin" for="activity2">
                        如果时间、地点合适，可能会参加
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="activity" id="activity3" value="activity3">
                    <label class="form-check-label form-margin" for="activity3">
                        不会参加
                    </label>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                <p>
                    16、当您前往京都旅行时，用于购买特色工艺品的预算是多少?
                </p>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="budget" id="budget1" value="option1" checked>
                    <label class="form-check-label form-margin" for="budget1">
                        ~1000 元人民币
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="budget" id="budget2" value="option2">
                    <label class="form-check-label form-margin" for="budget2">
                        ~3000 元人民币
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="income" id="budget" value="budget3">
                    <label class="form-check-label form-margin" for="budget3">
                        ~6000 元人民币
                    </label>
                </div>
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="budget" id="budget4" value="activity3">
                    <label class="form-check-label form-margin" for="budget4">
                        无特定限额
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                <p>
                    17、您贵姓
                </p>
                <p class="input-margin">
                    <input class="form-input" type="text" name="username" id="username1" placeholder="姓名或全称">
                    小姐/女士/先生(抽奖使用)
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                <p>
                    18、请填写您的手机号码
                </p>
                <p class="input-margin">
                    <input class="form-input" type="text" name="phone" id="phone1" placeholder="手机号">11 位(抽奖使用)
                </p>
            </div>
        </div>

        <!-- Modal 300-1200 -->
        <div class="modal fade" id="price3001200" tabindex="-1" role="dialog" aria-labelledby="price3001200ModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="price3001200ModalLabel">您能接受的售价范围(人民币)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-check check-box">
                            <input class="form-check-input" type="radio" name="price3001200" id="price30012001"
                                value="option2" checked>
                            <label class="form-check-label form-margin" for="price30012001">
                                ~300元
                            </label>
                        </div>
                        <div class="form-check check-box">
                            <input class="form-check-input" type="radio" name="price3001200" id="price30012002"
                                value="option2">
                            <label class="form-check-label form-margin" for="price30012002">
                                ~600元
                            </label>
                        </div>
                        <div class="form-check check-box">
                            <input class="form-check-input" type="radio" name="price3001200" id="price30012003"
                                value="option2">
                            <label class="form-check-label form-margin" for="price30012003">
                                ~1200元
                            </label>
                        </div>
                        <div class="form-check check-box">
                            <input class="form-check-input" type="radio" name="price3001200" id="price30012003"
                                value="option2">
                            <label class="form-check-label form-margin" for="price30012003">
                                1200元以上
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="close1" class="btn btn-secondary">取消</button>
                        <button type="button" id="save1" class="btn btn-primary">确定</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 600-2400 -->
        <div class="modal fade" id="price6002400" tabindex="-1" role="dialog" aria-labelledby="price6002400ModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="price6002400ModalLabel">您能接受的售价范围(人民币)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-check check-box">
                            <input class="form-check-input" type="radio" name="price6002400" id="price60024001"
                                value="option2" checked>
                            <label class="form-check-label form-margin" for="price60024001">
                                ~600元
                            </label>
                        </div>
                        <div class="form-check check-box">
                            <input class="form-check-input" type="radio" name="price6002400" id="price60024002"
                                value="option2">
                            <label class="form-check-label form-margin" for="price60024002">
                                ~1200元
                            </label>
                        </div>
                        <div class="form-check check-box">
                            <input class="form-check-input" type="radio" name="price6002400" id="price60024003"
                                value="option2">
                            <label class="form-check-label form-margin" for="price60024003">
                                ~2400元
                            </label>
                        </div>
                        <div class="form-check check-box">
                            <input class="form-check-input" type="radio" name="price6002400" id="price60024004"
                                value="option2">
                            <label class="form-check-label form-margin" for="price60024004">
                                2400元以上
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="close2" class="btn btn-secondary">取消</button>
                        <button type="button" id="save2" class="btn btn-primary">确定</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 5000-30000 -->
        <div class="modal fade" id="price500030000" tabindex="-1" role="dialog"
            aria-labelledby="price500030000ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="price500030000ModalLabel">您能接受的售价范围(人民币)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-check check-box">
                            <input class="form-check-input" type="radio" name="price500030000" id="price5000300001"
                                value="option2" checked>
                            <label class="form-check-label form-margin" for="price5000300001">
                                ~5000元
                            </label>
                        </div>
                        <div class="form-check check-box">
                            <input class="form-check-input" type="radio" name="price500030000" id="price5000300002"
                                value="option2">
                            <label class="form-check-label form-margin" for="price5000300002">
                                ~10000元
                            </label>
                        </div>
                        <div class="form-check check-box">
                            <input class="form-check-input" type="radio" name="price500030000" id="price5000300003"
                                value="option2">
                            <label class="form-check-label form-margin" for="price5000300003">
                                ~30000元
                            </label>
                        </div>
                        <div class="form-check check-box">
                            <input class="form-check-input" type="radio" name="price500030000" id="price5000300004"
                                value="option2">
                            <label class="form-check-label form-margin" for="price5000300004">
                                30000元以上
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="close3" class="btn btn-secondary">取消</button>
                        <button type="button" id="save3" class="btn btn-primary">确定</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center form-submit">
            <input type="submit" class="btn btn-primary btn-lg" value="提交问卷">
        </div>
</div>



@stop
