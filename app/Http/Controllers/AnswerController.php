<?php
//day35-morning exercise
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;

class AnswerController extends Controller
{
    public function show()
    {
        //1
        $answer = Answer::find(1);
        return view('answers/view',compact('answer'));
    }

    public function vote()
    {
        //gets the request object
        $request = request();
 
        //finds an answer with `id` = 1
        $answer = Answer::find(1);
        
        //create new empty Vote object
        $vote = new \App\Vote;
        //set the answer_id of vote to be the same as the id of the voted answer
        //(practically specifying the relationship)
        $vote->answer_id = $answer->id;
        
        if ($request->input('up')) {//if there is some 'up' in the request ($GET or $_POST)
            $vote->vote = 1; //set the value of the vote to 1
            $answer->rating++; //rasing the total ratings in the answer object by 1
        } elseif($request->input('down')) {//if there is some `down` in the respect ($GET or $POST)
            $vote->vote = -1;//set the value of the vote to -1
            $answer->rating--; //lowers the total ratings in the answer object by 1
        }
        
        $vote->save();//INSERT
        $answer->save();//answerはすでにあるため、UPDATEになる
        
        //前のページにリダイレクト
        return back();

    }

}