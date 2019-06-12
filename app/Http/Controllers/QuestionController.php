<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QuestionController extends Controller
{
    public function index()
    {
        // $content = view("/questions/1");
        // return $content;
        return "This is the list of questions";
    }
}
