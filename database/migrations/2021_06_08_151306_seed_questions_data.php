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
                'name'                    => 'gender',
                'question_content'        => '1、您的性别是?',
                'type_id' => 1,
            ],
            [
                'name'                    => 'age',
                'question_content'        => '2、您的年龄?',
                'type_id' => 1,
            ],
            [
                'name'                    => 'residence',
                'question_content'        => '3、您的居住地?',
                'type_id' => 1,
            ],
            [
                'name'                    => 'frequency',
                'question_content'        => '4、您去过京都几次?',
                'type_id' => 1,
            ],
            [
                'name'                    => 'income',
                'question_content'        => '5、您的月收入或月生活费是?',
                'type_id' => 1,
            ],
            [
                'name'                    => 'know',
                'question_content'        => '6、您知道以下哪些京都传统工艺产品?',
                'type_id' => 2,
            ],
            [
                'name'                    => 'road',
                'question_content'        => '7、您是通过哪些途径得知日本传统匠人工艺的?',
                'type_id' => 2,
            ],
            [
                'name'                    => 'like',
                'question_content'        => '8、如果购买日本传统工艺品，您更中意那一类商品?',
                'type_id' => 3,
            ],
            [
                'name'                    => 'coffee_cup',
                'question_content'        => '9、以下清水烧陶瓷咖啡杯，您会购买哪几件商品?',
                'type_id' => 4,
            ],
            [
                'name'                    => 'teapot',
                'question_content'        => '10、以下清水烧陶瓷小茶壶，您会购买哪几件商品?',
                'type_id' => 4,
            ],
            [
                'name'                    => 'ceramic_cup',
                'question_content'        => '11、以下清水烧陶瓷茶杯，您会购买哪几件商品?',
                'type_id' => 4,
            ],
            [
                'name'                    => 'silver_product',
                'question_content'        => '12、京都名匠手工制作的下列银器制品，您会购买哪几件商品?',
                'type_id' => 4,
            ],
            [
                'name'                    => 'textile',
                'question_content'        => '13、以下西阵织制品，您会购买哪几件商品?',
                'type_id' => 4,
            ],
            [
                'name'                    => 'lacquer',
                'question_content'        => '14、以下京漆器，您会购买哪几件商品?',
                'type_id' => 4,
            ],
            [
                'name'                    => 'interest',
                'question_content'        => '15、未来在国内组织的京都传统工艺分享会，您有兴趣参加吗?',
                'type_id' => 1,
            ],
            [
                'name'                    => 'budget',
                'question_content'        => '16、当您前往京都旅行时，用于购买特色工艺品的预算是多少?',
                'type_id' => 1,
            ],
            [
                'name'                    => 'user_name',
                'question_content'        => '17、您贵姓',
                'type_id' => 5,
            ],
            [
                'name'                    => 'phone',
                'question_content'        => '18、请填写您的手机号码',
                'type_id' => 5,
            ],
            [
                'name'                    => 'price',
                'question_content'        => '您能接受的售价范围(人民币)',
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
