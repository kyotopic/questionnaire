<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedPriceforquestionsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $priceforquestions = [
            [
                'price'        => 300,
                'question_id'      => 9,
                'name'             => 'price3001200',
            ],
            [
                'price'        => 600,
                'question_id'      => 9,
                'name'             => 'price3001200',
            ],
            [
                'price'        => 1200,
                'question_id'      => 9,
                'name'             => 'price3001200',
            ],
            [
                'price'        => 1201,
                'question_id'      => 9,
                'name'             => 'price3001200',
            ],
            [
                'price'        => 600,
                'question_id'      => 10,
                'name'             => 'price6002400',
            ],
            [
                'price'        => 1200,
                'question_id'      => 10,
                'name'             => 'price6002400',
            ],
            [
                'price'        => 2400,
                'question_id'      => 10,
                'name'             => 'price6002400',
            ],
            [
                'price'        => 2401,
                'question_id'      => 10,
                'name'             => 'price6002400',
            ],
            [
                'price'        => 300,
                'question_id'      => 11,
                'name'             => 'price3001200',
            ],
            [
                'price'        => 600,
                'question_id'      => 11,
                'name'             => 'price3001200',
            ],
            [
                'price'        => 1200,
                'question_id'      => 11,
                'name'             => 'price3001200',
            ],
            [
                'price'        => 1201,
                'question_id'      => 11,
                'name'             => 'price3001200',
            ],
            [
                'price'        => 5000,
                'question_id'      => 12,
                'name'             => 'price500030000',
            ],
            [
                'price'        => 10000,
                'question_id'      => 12,
                'name'             => 'price500030000',
            ],
            [
                'price'        => 30000,
                'question_id'      => 12,
                'name'             => 'price500030000',
            ],
            [
                'price'        => 30001,
                'question_id'      => 12,
                'name'             => 'price500030000',
            ],
            [
                'price'        => 300,
                'question_id'      => 13,
                'name'             => 'price3001200',
            ],
            [
                'price'        => 600,
                'question_id'      => 13,
                'name'             => 'price3001200',
            ],
            [
                'price'        => 1200,
                'question_id'      => 13,
                'name'             => 'price3001200',
            ],
            [
                'price'        => 1201,
                'question_id'      => 13,
                'name'             => 'price3001200',
            ],
            [
                'price'        => 300,
                'question_id'      => 14,
                'name'             => 'price3001200',
            ],
            [
                'price'        => 600,
                'question_id'      => 14,
                'name'             => 'price3001200',
            ],
            [
                'price'        => 1200,
                'question_id'      => 14,
                'name'             => 'price3001200',
            ],
            [
                'price'        => 1201,
                'question_id'      => 14,
                'name'             => 'price3001200',
            ],
        ];

        DB::table('priceforquestions')->insert($priceforquestions);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('priceforquestions')->truncate();
    }
}
