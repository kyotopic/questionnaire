<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [

    ];
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function answers(){
        return $this->hasMany(Answer::class);
    }
    public function priceforquestions(){
        return $this->hasMany(Priceforquestion::class);
    }
}
