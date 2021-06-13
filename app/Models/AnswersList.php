<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Userinfo;

class AnswersList extends Model
{
    use HasFactory;

    protected $fillable = [
        'userinfo_id',
        'gender',
        'age',
        'residence',
        'frequency',
        'income',
        'know',
        'road',
        'like',
        'coffee_cup',
        'teapot',
        'ceramic_cup',
        'silver_product',
        'textile',
        'lacquer',
        'interest',
        'budget',
        'answer_ids',
        'priceforquestion_ids',
        'question_6',
        'question_7',
        'question_8',
    ];

    public function userinfo(){
        return $this->belongsTo(Userinfo::class);
    }
}
