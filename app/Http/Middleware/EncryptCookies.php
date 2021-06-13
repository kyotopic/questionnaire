<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array
     */
    protected $except = [
        //
        'coffee_cup0',
        'coffee_cup1',
        'coffee_cup2',
        'teapot0',
        'teapot1',
        'teapot2',
        'ceramic_cup0',
        'ceramic_cup1',
        'ceramic_cup2',
        'silver_product0',
        'silver_product1',
        'silver_product2',
        'textile0',
        'textile1',
        'textile2',
        'lacquer0',
        'lacquer1',
        'lacquer2',
    ];
}
