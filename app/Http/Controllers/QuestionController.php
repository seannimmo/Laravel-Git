<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use DB;

// class QuestionController extends Controller
// {
//     public function index()
//     {
//         $query_objects = DB::table('questions')->latest()->get();
//         dd($query_objects);
//         return "This is the list of questions";
//     }

//     public function show()
//     {
//         $query_object2 = DB::table('answers')->where('id', 1)->oldest();
//         dd($query_object2);
//         return "This is a detail of a question";
//     }   

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
// }

// 以下、Eloquentでの同じ記述方法
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Question;
use App\Answer;

class QuestionController extends Controller
{
    public function index()
    {
        $all_mentions = Question ::orderBy('created_at','desc')->get();
        $view = view('questions/index');
        return $view;
        // return "this is the list of question.";
    }

    public function show()
    {
        $questions = Question :: where('id',1)
        ->first();
        $question = Question :: find(1);//equivalent in the line above bacause 'id' is in the PC
        //dd($question->answers);//このanswersはQuestion.phpのfunctionのanswersと同じ名前

        $view = view("questions/show");
        return $view;
        // return "this is the list of question.";
    }
    
}

//get all answers for question1
// SELECT answers *
// FROM answers
// WHERE question_id = 1

//get the right question for an answer with question_id 1
// SELECT question *
// FROM question
// WHERE id = 1