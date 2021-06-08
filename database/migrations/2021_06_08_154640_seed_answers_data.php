<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedAnswersData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $answers = [
            [
                'answer_content'        => '男',
                'question_id' => 1,
            ],
            [
                'answer_content'        => '女',
                'question_id' => 1,
            ],
            [
                'answer_content'        => '18 岁以下',
                'question_id' => 2,
            ],
            [
                'answer_content'        => '18-25 岁',
                'question_id' => 2,
            ],
            [
                'answer_content'        => '26-40 岁',
                'question_id' => 2,
            ],
            [
                'answer_content'        => '41-60 岁',
                'question_id' => 2,
            ],
            [
                'answer_content'        => '60 岁以上',
                'question_id' => 2,
            ],
            [
                'answer_content'        => '安徽',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '北京',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '重庆',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '福建',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '甘肃',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '广东',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '广西',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '贵州',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '海南',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '河北',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '河南',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '黑龙江',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '湖北',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '湖南',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '吉林',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '江苏',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '江西',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '辽宁',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '内蒙古',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '宁夏',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '青海',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '山东',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '山西',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '陕西',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '上海',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '四川',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '天津',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '西藏',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '新疆',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '云南',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '浙江',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '港/澳/台',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '海外',
                'question_id' => 3,
            ],
            [
                'answer_content'        => '0 次(没去过)',
                'question_id' => 4,
            ],
            [
                'answer_content'        => '1次',
                'question_id' => 4,
            ],
            [
                'answer_content'        => '2次',
                'question_id' => 4,
            ],
            [
                'answer_content'        => '3 次及以上',
                'question_id' => 4,
            ],
            [
                'answer_content'        => '~10000 元',
                'question_id' => 5
            ],
            [
                'answer_content'        => '10001~20000 元',
                'question_id' => 5,
            ],
            [
                'answer_content'        => '20001~30000 元',
                'question_id' => 5,
            ],
            [
                'answer_content'        => '30001 元~',
                'question_id' => 5,
            ],
            [
                'answer_content'        => '西阵织',
                'question_id' => 6,
            ],
            [
                'answer_content'        => '金属工艺(银器、锡器、铁器等)',
                'question_id' => 6,
            ],
            [
                'answer_content'        => '清水烧',
                'question_id' => 6,
            ],
            [
                'answer_content'        => '漆器',
                'question_id' => 6,
            ],
            [
                'answer_content'        => '竹艺',
                'question_id' => 6,
            ],
            [
                'answer_content'        => '扇子',
                'question_id' => 6,
            ],
            [
                'answer_content'        => '其他',
                'question_id' => 6,
            ],
            [
                'answer_content'        => '口口相传',
                'question_id' => 7,
            ],
            [
                'answer_content'        => '旅游发现',
                'question_id' => 7,
            ],
            [
                'answer_content'        => '传统媒体',
                'question_id' => 7,
            ],
            [
                'answer_content'        => '网络',
                'question_id' => 7,
            ],
            [
                'answer_content'        => '其他',
                'question_id' => 7,
            ],
            [
                'answer_content'        => '高价值工艺藏品',
                'question_id' => 8,
            ],
            [
                'answer_content'        => '实用性较高的生活用品',
                'question_id' => 8,
            ],
            [
                'answer_content'        => '有纪念意义的小工艺品',
                'question_id' => 8,
            ],
            [
                'answer_content'        => '日本独有/较有日本特色的纪念商品',
                'question_id' => 8,
            ],
            [
                'answer_content'        => '其他',
                'question_id' => 8,
            ],
            [
                'answer_content'        => '/images/9/1.jpg',
                'question_id' => 9,
            ],
            [
                'answer_content'        => '/images/9/2.jpg',
                'question_id' => 9,
            ],
            [
                'answer_content'        => '/images/9/3.jpg',
                'question_id' => 9,
            ],
            [
                'answer_content'        => '/images/9/4.jpg',
                'question_id' => 9,
            ],
            [
                'answer_content'        => '/images/9/5.jpg',
                'question_id' => 9,
            ],
            [
                'answer_content'        => '/images/9/6.jpg',
                'question_id' => 9,
            ],
            [
                'answer_content'        => '/images/9/7.jpg',
                'question_id' => 9,
            ],
            [
                'answer_content'        => '/images/9/8.jpg',
                'question_id' => 9,
            ],
            [
                'answer_content'        => '/images/10/1.jpg',
                'question_id' => 10,
            ],
            [
                'answer_content'        => '/images/10/2.jpg',
                'question_id' => 10,
            ],
            [
                'answer_content'        => '/images/10/3.jpg',
                'question_id' => 10,
            ],
            [
                'answer_content'        => '/images/10/4.jpg',
                'question_id' => 10,
            ],
            [
                'answer_content'        => '/images/10/5.jpg',
                'question_id' => 10,
            ],
            [
                'answer_content'        => '/images/10/6.jpg',
                'question_id' => 10,
            ],
            [
                'answer_content'        => '/images/11/1.jpg',
                'question_id' => 11,
            ],
            [
                'answer_content'        => '/images/11/2.jpg',
                'question_id' => 11,
            ],
            [
                'answer_content'        => '/images/11/3.jpg',
                'question_id' => 11,
            ],
            [
                'answer_content'        => '/images/11/4.jpg',
                'question_id' => 11,
            ],
            [
                'answer_content'        => '/images/11/5.jpg',
                'question_id' => 11,
            ],
            [
                'answer_content'        => '/images/11/6.jpg',
                'question_id' => 11,
            ],
            [
                'answer_content'        => '/images/12/1.jpg',
                'question_id' => 12,
            ],
            [
                'answer_content'        => '/images/12/2.jpg',
                'question_id' => 12,
            ],
            [
                'answer_content'        => '/images/12/3.jpg',
                'question_id' => 12,
            ],
            [
                'answer_content'        => '/images/12/4.jpg',
                'question_id' => 12,
            ],
            [
                'answer_content'        => '/images/12/5.jpg',
                'question_id' => 12,
            ],
            [
                'answer_content'        => '/images/12/6.jpg',
                'question_id' => 12,
            ],
            [
                'answer_content'        => '/images/13/1.jpg',
                'question_id' => 13,
            ],
            [
                'answer_content'        => '/images/13/2.jpg',
                'question_id' => 13,
            ],
            [
                'answer_content'        => '/images/13/3.jpg',
                'question_id' => 13,
            ],
            [
                'answer_content'        => '/images/13/4.jpg',
                'question_id' => 13,
            ],
            [
                'answer_content'        => '/images/13/5.jpg',
                'question_id' => 13,
            ],
            [
                'answer_content'        => '/images/13/6.jpg',
                'question_id' => 13,
            ],
            [
                'answer_content'        => '/images/14/1.jpg',
                'question_id' => 14,
            ],
            [
                'answer_content'        => '/images/14/2.jpg',
                'question_id' => 14,
            ],
            [
                'answer_content'        => '/images/14/3.jpg',
                'question_id' => 14,
            ],
            [
                'answer_content'        => '/images/14/4.jpg',
                'question_id' => 14,
            ],
            [
                'answer_content'        => '/images/14/5.jpg',
                'question_id' => 14,
            ],
            [
                'answer_content'        => '/images/14/6.jpg',
                'question_id' => 14,
            ],
            [
                'answer_content'        => '会将活动列入日程计划，一定参加',
                'question_id' => 15,
            ],
            [
                'answer_content'        => '如果时间、地点合适，可能会参加',
                'question_id' => 15,
            ],
            [
                'answer_content'        => '不会参加',
                'question_id' => 15,
            ],
            [
                'answer_content'        => '~1000 元人民币',
                'question_id' => 16,
            ],
            [
                'answer_content'        => '~3000 元人民币',
                'question_id' => 16,
            ],
            [
                'answer_content'        => '~6000 元人民币',
                'question_id' => 16,
            ],
            [
                'answer_content'        => '无特定限额',
                'question_id' => 16,
            ],
            [
                'answer_content'        => '空',
                'question_id' => 17,
            ],
            [
                'answer_content'        => '空',
                'question_id' => 18,
            ],

        ];

        DB::table('answers')->insert($answers);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('answers')->truncate();
    }
}
