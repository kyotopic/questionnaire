@if($questions->count() > 0)
@foreach($questions as $question)


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
        @foreach( $question->answers as $answer)
        @if($question->answers->count() == 8)
        @if( $count == 1 || $count == 5)
        <div class="form-group form-check-inline" id="image-click-div">
            @endif
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center">
                <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
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
                <a class="images-checkbox" href="" data-toggle="modal" data-target="#price3001200">
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
@endforeach



@endif
