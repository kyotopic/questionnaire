<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedTypesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $types = [
            [
                'name'        => '单选文字',
                'description' => '1 2 3 4 5 15 16 19',
            ],
            [
                'name'        => '复选文字填空',
                'description' => '6 7',
            ],
            [
                'name'        => '单选文字填空',
                'description' => '8',
            ],
            [
                'name'        => '复选图片小于三件',
                'description' => '9 10 11 12 13 14',
            ],
            [
                'name'        => '文字填空',
                'description' => '17 18',
            ],
        ];

        DB::table('types')->insert($types);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('types')->truncate();
    }
}
