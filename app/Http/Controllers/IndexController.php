<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Question;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function getIndex()
    {

        $last14Posts = Post::getLastPosts();
        $questions = Question::getActiveAnsweredQuestions();
        return view('index', array(
            'last14posts' => $last14Posts,
            'questions' => $questions
        ));
    }
}
