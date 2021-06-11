@extends('layouts.app')
@section('title', '谢谢配合')

@section('content')

<div class="container">
    <h2 class="text-center">关于京都传统匠人产品购买意向的问卷调查</h2>
    <div class="row justify-content-md-center">
        <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
            <p class="text-center">
                <br>
                我们将于北京时间6月18日（五）20:00，通过“偏爱京都”公众号发布中奖信息。<br>
                如您希望参与抽奖，请确认您已填写正确的姓名及电话号码。<br>
                如您尚未关注我们的公众号，可搜索“偏爱京都”拼音或扫描下方二维码添加。<br>
                再次感谢您参与本次问卷调查！
            </p>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-lg-4 col-md-4 hidden-sm hidden-m">
            <p class="text-center">
                偏爱京都公众号二维码
            </p>
            <image class="img-fluid" src="/images/qrcode/gongzhonghao.jpeg">
        </div>
        <div class="col-lg-2 col-md-2 hidden-sm hidden-m">
            <p>&nbsp;</p>
        </div>
        <div class="col-lg-4 col-md-4 hidden-sm hidden-m">
            <p class="text-center">
                偏爱京都网站二维码
            </p>
            <image class="img-fluid" src="/images/qrcode/wangzhan.png">
        </div>
    </div>
</div>



@stop
