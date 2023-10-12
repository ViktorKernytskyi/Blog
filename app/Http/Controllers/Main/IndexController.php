<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //однометодный контороллер(экшенов нет)
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        return view('main.index');
    }
}
