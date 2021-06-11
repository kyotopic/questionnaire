<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswersList extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_info_id',
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
        'price9',
        'price10',
        'price11',
        'price12',
        'price13',
        'price14',
        'question_6',
        'question_7',
        'question_8',
    ];

    public function userinfos(){
        return $this->hasMany(AnswerList::class);
    }
}
