<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class PagesController extends Controller
{
    public function root()
    {
        $questions = Question::all();
        return view('pages.root', compact('questions'));
    }
}
