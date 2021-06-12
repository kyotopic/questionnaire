<?php

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}



// function question_type($name){
//     switch ($name)
//         {
//         case '单选文字':
//             return 1;
//             break;
//         case '复选文字填空':
//             如果 n=label2，此处代码将执行;
//             break;
//         case '单选文字填空':
//             如果 n=label2，此处代码将执行;
//             break;
//         case '复选图片小于三件':
//             如果 n=label2，此处代码将执行;
//             break;
//         case '文字填空':
//             如果 n=label2，此处代码将执行;
//             break;
//         default:
//             return false;
//             break;
//         }
// }
