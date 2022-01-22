<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function hello1()
    {
        return ['hello' => 'world covid'];
    }
}
