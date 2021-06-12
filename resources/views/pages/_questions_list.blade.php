<?php
  $width = 1000;
  $width = (int)$_COOKIE['width'];
?>
@include('shared._error')
@if($questions->count() > 0)
<form action=" {{ route('submit')}}" method="post" accept-charset="UTF-8" onsubmit="return confirm('您确定提交信息吗？');">
    @CSRF
    @foreach($questions as $question)
    @if($question->id>8 && $question->id < 15) <div id="{{ $question->name }}">
        @endif
        <div class="row">
            <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                <p>
                    @if( $question->id != 19){{ $question->question_content }}@endif
                    @if( $question->type->id == 2 )
                    <span class="text-danger">(可复选)</span>
                    @endif
                    @if( $question->type->id == 4 )
                    <span class="text-danger">(可复选，最多三件)</span>
                    @endif
                </p>
                @if( $question->type->id == 1 && $question->id != 3 )

                @foreach( $question->answers as $answer)
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="{{ $question->name }}"
                        id="{{ $question->name }}{{ $answer->id }}" value="{{ $answer->id }}" {{ old( $question->name ) == $answer->id  ? "checked" : "" }} >
                    <label class="form-check-label form-margin" for="{{ $question->name }}{{ $answer->id }}">
                        {{ $answer->answer_content }}
                    </label>
                </div>
                @endforeach

                @elseif($question->id == 3 )
                <div class="form-group">
                    <select class="form-control" name="{{ $question->name }}" required>
                        <option value="" hidden disabled selected>请选择地址</option>
                        @foreach( $question->answers as $answer)
                        <option value="{{ $answer->id }}"  {{ old( $question->name ) == $answer->id  ? "selected" : "" }}>{{ $answer->answer_content }}</option>
                        @endforeach
                    </select>
                </div>
                @elseif( $question->type->id == 2 )
                @foreach( $question->answers as $answer)
                @if( $answer->answer_content !== '其他' )
                <div class="form-check check-box">
                    <input class="form-check-input" type="checkbox" name="{{ $question->name }}[]"
                        id="{{ $question->name }}{{ $answer->id }}" value="{{ $answer->id }}" {{ old($question->name)&&in_array($answer->id,old($question->name)) ? "checked" : "" }}>

                    <label class="form-check-label form-margin" for="{{ $question->name }}{{ $answer->id }}">
                        {{ $answer->answer_content }}
                    </label>
                </div>
                @else
                <div class="form-check check-box">
                    <input class="form-check-input" type="checkbox" name="{{ $question->name }}[]"
                        id="{{ $question->name }}{{ $answer->id }}" value="{{ $answer->id }}" {{ old($question->name)&&in_array($answer->id,old($question->name)) ? "checked" : "" }} >
                    <label class="form-check-label form-margin" for="{{ $question->name }}{{ $answer->id }}">
                        <input name="question_{{ $question->id }}" type="text" class="form-control form-control-sm form-margin"
                            aria-label="Text input with checkbox" placeholder="{{ $answer->answer_content }}" value="{{ old('question_'.$question->id) }}">
                    </label>
                </div>
                @endif
                @endforeach
                @elseif( $question->type->id == 3 )
                @foreach( $question->answers as $answer)
                @if( $answer->answer_content !== '其他' )
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="{{ $question->name }}"
                        id="{{ $question->name }}{{ $answer->id }}" value="{{ $answer->id }}" {{ old( $question->name ) == $answer->id  ? "checked" : "" }} >
                    <label class="form-check-label form-margin" for="{{ $question->name }}{{ $answer->id }}">
                        {{ $answer->answer_content }}
                    </label>
                </div>
                @else
                <div class="form-check check-box">
                    <input class="form-check-input" type="radio" name="{{ $question->name }}"
                        id="{{ $question->name }}{{ $answer->id }}" value="{{ $answer->id }}" {{ old( $question->name ) == $answer->id  ? "checked" : "" }} >
                    <label class="form-check-label form-margin" for="{{ $question->name }}{{ $answer->id }}">
                        <input name="question_{{ $question->id }}" type="text" class="form-control form-control-sm form-margin"
                            aria-label="Text input with checkbox" placeholder="{{ $answer->answer_content }}" value="{{ old('question_'.$question->id) }}">
                    </label>
                </div>
                @endif
                @endforeach

                @elseif( $question->type->id == 4 )
                <?php
              $count=1;
            ?>
                <div class="modal fade" id="{{$question->name}}1" tabindex="-1" role="dialog"
                    aria-labelledby="{{$question->name}}ModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="{{$question->name}}ModalLabel">您能接受的售价范围(人民币)</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @foreach( $question->priceforquestions as $price)
                            <div class="modal-body">
                                <div class="form-check check-box">
                                    <input class="form-check-input" type="radio" name="price{{$question->id}}"
                                        id="{{$question->name}}{{$price->id}}1" value="{{$price->id}}">
                                    <label class="form-check-label form-margin"
                                        for="{{$question->name}}{{$price->id}}1">@if($price->price % 2 == 0
                                        )~{{$price->price}}元@else{{$price->price-1}}元以上@endif
                                    </label>
                                </div>
                            </div>
                            @endforeach
                            <div class="modal-footer">
                                <button type="button" id="{{$question->name}}close"
                                    class="btn btn-secondary">取消</button>
                                <button type="button" id="{{$question->name}}save" class="btn btn-primary">确定</button>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach( $question->answers as $answer)
                @if($question->answers->count() == 8)
                @if($width < 560) @if( $count==1 || $count==3 || $count==5 || $count==7) <div
                    class="form-group form-check-inline form-image-check">
                    @endif
                    @elseif($count == 1 || $count == 5)
                    <div class="form-group form-check-inline form-image-check">
                        @endif
                        <div class="col-lg-3 col-md-3 col-s-1 hidden-sm hidden-xs text-center">
                            <a class="images-checkbox" href="" data-toggle="modal" data-target="#{{$question->name}}1">
                                <label for="{{ $question->name }}{{ $answer->id }}">
                                    <image class="img-fluid" src="/images/{{ $answer->question_id }}/{{ $count }}.jpg">
                                </label>
                                <input class="form-check-input" type="checkbox" name="{{ $question->name }}[]"
                                    id="{{ $question->name }}{{ $answer->id }}" value="{{ $answer->id }}" {{ old($question->name)&&in_array($answer->id,old($question->name)) ? "checked" : "" }}>
                            </a>
                        </div>
                        @if($width < 560) @if( $count==2 || $count==4 || $count==6 || $count==8) </div>
                            @endif
                            @elseif($count == 4 || $count == 8)
                    </div>
                    @endif
                    @endif
                    @if($question->answers->count() == 6)
                    @if($width < 560) @if( $count==1 || $count==3 || $count==5) <div
                        class="form-group form-check-inline form-image-check">
                        @endif
                        @elseif($count == 1 || $count == 4)
                        <div class="form-group form-check-inline form-image-check">
                            @endif
                            <div class="col-lg-4 col-md-4 col-s-1 hidden-sm hidden-xs text-center">
                                <a class="images-checkbox" href="" data-toggle="modal"
                                    data-target="#{{$question->name}}1">
                                    <label for="{{ $question->name }}{{ $answer->id }}">
                                        <image class="img-fluid"
                                            src="/images/{{ $answer->question_id }}/{{ $count }}.jpg">
                                    </label>
                                    <input class="form-check-input" type="checkbox" name="{{ $question->name }}[]"
                                        id="{{ $question->name }}{{ $answer->id }}" value="{{ $answer->id }}"  {{ old($question->name)&&in_array($answer->id,old($question->name)) ? "checked" : "" }}>
                                </a>
                            </div>

                            @if($width < 560) @if( $count==2 || $count==4 || $count==6) </div>
                                @endif
                                @elseif($count == 3 || $count == 6)
                        </div>
                        @endif
                        @endif
                        <?php
              $count++;
            ?>
                        @endforeach


                        @elseif( $question->type->id == 5)
                        <?php
              $count=0;
            ?>
                        @foreach( $question->answers as $answer)
                        @if( $question->id == 17 )
                        <p class="input-margin">
                            <input class="form-input" type="text" name="{{ $question->name }}" placeholder="姓名或全称" value="{{ old($question->name) }}">
                            <br>
                            小姐/女士/先生(抽奖使用)
                        </p>
                        @endif
                        @if( $question->id == 18 )
                        <p class="input-margin">
                            <input class="form-input" type="text" name="{{ $question->name }}" placeholder="手机号11 位" value="{{ old($question->name) }}">
                            <br>
                            (抽奖使用)
                        </p>
                        @endif
                        @endforeach
                        @endif
            </div>
        </div>
        @if($question->id>8 && $question->id < 15) </div>
            @endif
            @endforeach

            <div class="row justify-content-md-center form-submit">
                <div class="col-lg-12 col-md-12 col-s-12 hidden-sm hidden-xs text-center">
                    <input type="submit" class="btn btn-primary btn-lg" value="提交问卷">
                </div>
            </div>

</form>

@endif
