<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\UserInfo;
use App\Models\AnswersList;

class PagesController extends Controller
{
    public function root()
    {
        $questions = Question::all();
        return view('pages.root', compact('questions'));
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
            'price9' => 'required',
            'price10' => 'required',
            'price11' => 'required',
            'price12' => 'required',
            'price13' => 'required',
            'price14' => 'required',
            'user_name' => 'required',
            'phone' => 'required|unique:user_infos|regex:/^[0-9]+$/',
        ]);

        $user_id = UserInfo::create([
            'user_name' => $request->user_name,
            'phone' => $request->phone,
        ])->id;
        AnswersList::create([
            'user_info_id' => $user_id,
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
            'price9' => (int)$request->price9,
            'price10' => (int)$request->price10,
            'price11' => (int)$request->price11,
            'price12' => (int)$request->price12,
            'price13' => (int)$request->price13,
            'price14' => (int)$request->price14,
        ]);


        return redirect()->route('feedback')->with('success', '您的问卷已成功提交！');
    }
}

