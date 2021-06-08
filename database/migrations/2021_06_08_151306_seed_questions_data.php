<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedQuestionsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $questions = [
            [
                'qustion_content'        => '1、您的性别是?',
                'type_id' => 1,
            ],
            [
                'qustion_content'        => '2、您的年龄?',
                'type_id' => 1,
            ],
            [
                'qustion_content'        => '3、您的居住地?',
                'type_id' => 1,
            ],
            [
                'qustion_content'        => '4、您去过京都几次?',
                'type_id' => 1,
            ],
            [
                'qustion_content'        => '5、您的月收入或月生活费是?',
                'type_id' => 1,
            ],
            [
                'qustion_content'        => '6、您知道以下哪些京都传统工艺产品?',
                'type_id' => 2,
            ],
            [
                'qustion_content'        => '7、您是通过哪些途径得知日本传统匠人工艺的?',
                'type_id' => 2,
            ],
            [
                'qustion_content'        => '8、如果购买日本传统工艺品，您更中意那一类商品?',
                'type_id' => 3,
            ],
            [
                'qustion_content'        => '9、以下清水烧陶瓷咖啡杯，您会购买哪几件商品?',
                'type_id' => 4,
            ],
            [
                'qustion_content'        => '10、以下清水烧陶瓷小茶壶，您会购买哪几件商品?',
                'type_id' => 4,
            ],
            [
                'qustion_content'        => '11、以下清水烧陶瓷茶杯，您会购买哪几件商品?',
                'type_id' => 4,
            ],
            [
                'qustion_content'        => '12、京都名匠手工制作的下列银器制品，您会购买哪几件商品?',
                'type_id' => 4,
            ],
            [
                'qustion_content'        => '13、以下西阵织制品，您会购买哪几件商品?',
                'type_id' => 4,
            ],
            [
                'qustion_content'        => '14、以下京漆器，您会购买哪几件商品?',
                'type_id' => 4,
            ],
            [
                'qustion_content'        => '15、未来在国内组织的京都传统工艺分享会，您有兴趣参加吗?',
                'type_id' => 1,
            ],
            [
                'qustion_content'        => '16、当您前往京都旅行时，用于购买特色工艺品的预算是多少?',
                'type_id' => 1,
            ],
            [
                'qustion_content'        => '17、您贵姓',
                'type_id' => 5,
            ],
            [
                'qustion_content'        => '18、请填写您的手机号码',
                'type_id' => 5,
            ],
            [
                'qustion_content'        => '您能接受的售价范围(人民币)',
                'type_id' => 1,
            ],

        ];

        DB::table('questions')->insert($questions);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('questions')->truncate();
    }
}
