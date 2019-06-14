<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function answers()
    {
        return $this->hasMany('App\Answer','question_id','MYID');//n:1のためhasManyを用いる
    }
}
