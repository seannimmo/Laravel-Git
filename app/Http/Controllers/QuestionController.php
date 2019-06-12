<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QuestionController extends Controller
{
    public function index()
    {
        return "This is the list of questions";
    }

    public function show()
    {
        return "This is a detail of a question";
    }   
}
