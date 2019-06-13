<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QuestionController extends Controller
{
    public function index()
    {
        $query_objects = DB::table('questions')->latest()->get();
        dd($query_objects);
        return "This is the list of questions";
    }

    public function show()
    {
        $query_object2 = DB::table('answers')->where('id', 1)->oldest();
        dd($query_object2);
        return "This is a detail of a question";
    }   

    //例
    // public function test()
    // {
    //     $query_object = DB::table('questions')//FROM questions
    //                     ->limit(10)
    //                     ->orderBy('created_at')
    //                     -> where('user_id',1);

    //     // 上記の違う記載方法
    //     $query_object = DB::table('questions');//FROM questions
    //     $query_object ->orderBy('created_at');//WHERE user_id =1
    //     $query_object -> where('user_id',1);// ORDER BY created_at
    // }
}
