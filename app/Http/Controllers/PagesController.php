<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Userinfo;
use App\Models\AnswersList;

class PagesController extends Controller
{
    public function root()
    {
        return view('pages.root');
    }
    public function index()
    {
        $questions = Question::all();
        return view('pages.index', compact('questions'));
    }

    public function store(Request $request){


        $this->validate($request, [
            'gender' => 'required',
            'age' => 'required',
            'residence' => 'required',
            'frequency' => 'required',
            'income' => 'required',
            'know' => 'required',
            'road' => 'required',
            'like' => 'required',
            'coffee_cup' => 'required|array|max:3',
            'teapot' => 'required|array|max:3',
            'ceramic_cup' => 'required|array|max:3',
            'silver_product' => 'required|array|max:3',
            'textile' => 'required|array|max:3',
            'lacquer' => 'required|array|max:3',
            'interest' => 'required',
            'budget' => 'required',
            'user_name' => 'required',
            'phone' => 'required|unique:user_infos|regex:/^[0-9]+$/',
        ]);


        $answer_ids = array();
        $price_ids = array();
        $i = 0;
        $j = 0;
        if(request()->cookie('coffee_cup0')){
            $coffee_array = explode(",",request()->cookie('coffee_cup0'));
            $answer_ids[$i++] = $coffee_array[0];
            $price_ids[$j++] = $coffee_array[1];
        }
        if(request()->cookie('coffee_cup1')){
            $array = explode(",",request()->cookie('coffee_cup1'));
            $answer_ids[$i++] = $array[0];
            $price_ids[$j++] = $array[1];
        }
        if(request()->cookie('coffee_cup2')){
            $array = explode(",",request()->cookie('coffee_cup2'));
            $answer_ids[$i++] = $array[0];
            $price_ids[$j++] = $array[1];
        }
        if(request()->cookie('teapot0')){
            $array = explode(",",request()->cookie('teapot0'));
            $answer_ids[$i++] = $array[0];
            $price_ids[$j++] = $array[1];
        }
        if(request()->cookie('teapot1')){
            $array = explode(",",request()->cookie('teapot1'));
            $answer_ids[$i++] = $array[0];
            $price_ids[$j++] = $array[1];
        }
        if(request()->cookie('teapot2')){
            $array = explode(",",request()->cookie('teapot2'));
            $answer_ids[$i++] = $array[0];
            $price_ids[$j++] = $array[1];
        }
        if(request()->cookie('ceramic_cup0')){
            $array = explode(",",request()->cookie('ceramic_cup0'));
            $answer_ids[$i++] = $array[0];
            $price_ids[$j++] = $array[1];
        }
        if(request()->cookie('ceramic_cup1')){
            $array = explode(",",request()->cookie('ceramic_cup1'));
            $answer_ids[$i++] = $array[0];
            $price_ids[$j++] = $array[1];
        }
        if(request()->cookie('ceramic_cup2')){
            $array = explode(",",request()->cookie('ceramic_cup2'));
            $answer_ids[$i++] = $array[0];
            $price_ids[$j++] = $array[1];
        }
        if(request()->cookie('silver_product0')){
            $array = explode(",",request()->cookie('silver_product0'));
            $answer_ids[$i++] = $array[0];
            $price_ids[$j++] = $array[1];
        }
        if(request()->cookie('silver_product1')){
            $array = explode(",",request()->cookie('silver_product1'));
            $answer_ids[$i++] = $array[0];
            $price_ids[$j++] = $array[1];
        }
        if(request()->cookie('silver_product2')){
            $array = explode(",",request()->cookie('silver_product2'));
            $answer_ids[$i++] = $array[0];
            $price_ids[$j++] = $array[1];
        }
        if(request()->cookie('textile0')){
            $array = explode(",",request()->cookie('textile0'));
            $answer_ids[$i++] = $array[0];
            $price_ids[$j++] = $array[1];
        }
        if(request()->cookie('textile1')){
            $array = explode(",",request()->cookie('textile1'));
            $answer_ids[$i++] = $array[0];
            $price_ids[$j++] = $array[1];
        }
        if(request()->cookie('textile2')){
            $array = explode(",",request()->cookie('textile2'));
            $answer_ids[$i++] = $array[0];
            $price_ids[$j++] = $array[1];
        }
        if(request()->cookie('lacquer0')){
            $array = explode(",",request()->cookie('lacquer0'));
            $answer_ids[$i++] = $array[0];
            $price_ids[$j++] = $array[1];
        }
        if(request()->cookie('lacquer1')){
            $array = explode(",",request()->cookie('lacquer1'));
            $answer_ids[$i++] = $array[0];
            $price_ids[$j++] = $array[1];
        }
        if(request()->cookie('lacquer2')){
            $array = explode(",",request()->cookie('lacquer2'));
            $answer_ids[$i++] = $array[0];
            $price_ids[$j++] = $array[1];
        }



        $user_id = UserInfo::create([
            'name' => $request->user_name,
            'phone' => $request->phone,
        ])->id;






        AnswersList::create([
            'userinfo_id' => $user_id,
            'gender' => (int)$request->gender,
            'age' => (int)$request->age,
            'residence' => (int)$request->residence,
            'frequency' => (int)$request->frequency,
            'income' => (int)$request->income,
            'know' => json_encode($request->know),
            'road' => json_encode($request->road),
            'like' => (int)$request->like,
            'coffee_cup' => json_encode($request->coffee_cup),
            'teapot' => json_encode($request->teapot),
            'ceramic_cup' => json_encode($request->ceramic_cup),
            'silver_product' => json_encode($request->silver_product),
            'textile' => json_encode($request->textile),
            'lacquer' => json_encode($request->lacquer),
            'interest' => (int)$request->interest,
            'budget' => (int)$request->budget,
            'answer_ids' => json_encode($answer_ids),
            'priceforquestion_ids' => json_encode($price_ids),
            'question_6' => $request->question_6,
            'question_7' => $request->question_7,
            'question_8' => $request->question_8,

        ]);


        return redirect()->route('feedback')->with('success', '您的问卷已成功提交！');
    }

    public function show()
    {
        $answer_lists = AnswersList::all();
        return view('pages.show', compact('answer_lists'));
    }
}

