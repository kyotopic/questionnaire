@if($questions->count() > 0)
@foreach($questions as $question)
@if($question->id>8 && $question->id < 15)
<form action="/feedback" method="get" accept-charset="UTF-8">
<div id="{{ $question->name }}">
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
                id="{{ $question->name }}{{ $answer->id }}" value="{{ $answer->answer_content }}">
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
                <option value="{{ $answer->answer_content }}">{{ $answer->answer_content }}</option>
                @endforeach
            </select>
        </div>
        @elseif( $question->type->id == 2 )
        @foreach( $question->answers as $answer)
        @if( $answer->answer_content !== '其他' )
        <div class="form-check check-box">
            <input class="form-check-input" type="checkbox" name="{{ $question->name }}[]"
                id="{{ $question->name }}{{ $answer->id }}" value="{{ $answer->answer_content }}">
            <label class="form-check-label form-margin" for="{{ $question->name }}{{ $answer->id }}">
                {{ $answer->answer_content }}
            </label>
        </div>
        @else
        <div class="form-check check-box">
            <input class="form-check-input" type="checkbox" name="{{ $question->name }}[]"
                id="{{ $question->name }}{{ $answer->id }}" value="其他">
            <label class="form-check-label form-margin" for="{{ $question->name }}{{ $answer->id }}">
                <input type="text" class="form-control form-control-sm form-margin"
                    aria-label="Text input with checkbox" placeholder="{{ $answer->answer_content }}">
            </label>
        </div>
        @endif
        @endforeach
        @elseif( $question->type->id == 3 )
        @foreach( $question->answers as $answer)
        @if( $answer->answer_content !== '其他' )
        <div class="form-check check-box">
            <input class="form-check-input" type="radio" name="{{ $question->name }}"
                id="{{ $question->name }}{{ $answer->id }}" value="{{ $answer->answer_content }}">
            <label class="form-check-label form-margin" for="{{ $question->name }}{{ $answer->id }}">
                {{ $answer->answer_content }}
            </label>
        </div>
        @else
        <div class="form-check check-box">
            <input class="form-check-input" type="radio" name="{{ $question->name }}"
                id="{{ $question->name }}{{ $answer->id }}" value="其他">
            <label class="form-check-label form-margin" for="{{ $question->name }}{{ $answer->id }}">
                <input type="text" class="form-control form-control-sm form-margin"
                    aria-label="Text input with checkbox" placeholder="{{ $answer->answer_content }}">
            </label>
        </div>
        @endif
        @endforeach

        @elseif( $question->type->id == 4 )
        <?php
              $count=1;
            ?>

<!-- <div class="modal fade" id="price3001200" tabindex="-1" role="dialog" aria-labelledby="price3001200ModalLabel"
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
                    <input class="form-check-input" type="radio" name="price3001200" id="price30012001" value="300"
                    checked>
                    <label class="form-check-label form-margin" for="price30012001">
                        ~300元
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="close1" class="btn btn-secondary">取消</button>
                <button type="button" id="save1" class="btn btn-primary">确定</button>
            </div>
        </div>
    </div>
</div> -->




















        @foreach( $question->answers as $answer)
        @if($question->answers->count() == 8)
        @if( $count == 1 || $count == 5)
        <div class="form-group form-check-inline" id="image-click-div">
            @endif
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                <a class="images-checkbox" href="" data-toggle="modal" data-target="#{{$question->priceforquestions[0]->name}}">
                    <label for="{{ $question->name }}{{ $answer->id }}">
                        <image class="img-fluid" src="/images/{{ $answer->question_id }}/{{ $count }}.jpg">
                    </label>
                    <input class="form-check-input" type="checkbox" name="{{ $question->name }}[]"
                        id="{{ $question->name }}{{ $answer->id }}" value="其他">
                </a>
            </div>

            @if( $count == 4 || $count == 8)
        </div>
        @endif
        @endif
        @if($question->answers->count() == 6)
        @if( $count == 1 || $count == 4)
        <div class="form-group form-check-inline" id="image-click-div">
            @endif
            <div class="col-lg-4 col-md-4 hidden-sm hidden-xs text-center">
                <a class="images-checkbox" href="" data-toggle="modal" data-target="#{{$question->priceforquestions[0]->name}}">
                    <label for="{{ $question->name }}{{ $answer->id }}">
                        <image class="img-fluid" src="/images/{{ $answer->question_id }}/{{ $count }}.jpg">
                    </label>
                    <input class="form-check-input" type="checkbox" name="{{ $question->name }}[]"
                        id="{{ $question->name }}{{ $answer->id }}" value="其他">
                </a>
            </div>

            @if( $count == 3 || $count == 6)
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
            <input class="form-input" type="text" name="{{ $question->name }}"  placeholder="姓名或全称">
            小姐/女士/先生(抽奖使用)
        </p>
        @endif
        @if( $question->id == 18 )
        <p class="input-margin">
        <input class="form-input" type="text" name="{{ $question->name }}" placeholder="手机号11 位">(抽奖使用)
        </p>
        @endif
        @endforeach
        @endif
    </div>
</div>
@if($question->id>8 && $question->id < 15)
</div>
@endif
@endforeach



@endif
<div class="row justify-content-md-center form-submit">
    <input type="submit" class="btn btn-primary btn-lg" value="提交问卷">
</div>

</form>
