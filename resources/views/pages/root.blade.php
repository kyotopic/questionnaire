@extends('layouts.app')
@section('title', '问卷')

@section('content')

<div class="alertinfo">
    <form action=" {{ route('index')}}" method="get" accept-charset="UTF-8">
        @CSRF
        <button id="infobtn" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#info-alert" hidden>
            提示
        </button>
    </form>



</div>



@stop
