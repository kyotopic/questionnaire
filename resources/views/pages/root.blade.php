@extends('layouts.app')
@section('title', '问卷')

@section('content')

<div class="alertinfo">
    <button id="infobtn"
     type="button" class="btn btn-primary" data-toggle="modal" data-target="#info-alert" hidden>
        提示
    </button>
    <div class="modal fade" id="info-alert" tabindex="-1" role="dialog" aria-labelledby="alertinfoModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="alertinfoModal">体验提示</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        为了您的用户体验，请确保您是使用浏览器打开的该页面<br>
                        如果您是使用微信打开的该链接，请点击微信右上角的按钮，使用浏览器打开该页面，谢谢您的配合！
                    </div>
                </div>
                <div class="modal-footer">
                    <form action=" {{ route('index')}}" method="get" accept-charset="UTF-8">
                        @CSRF
                        <button type="submit" id="save1" class="btn btn-primary">确定</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


</div>



@stop
