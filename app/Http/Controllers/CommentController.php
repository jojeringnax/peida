<?php
/**
 * Created by PhpStorm.
 * User: jojer
 * Date: 29/03/2018
 * Time: 12:10
 */

namespace App\Http\Controllers;


use \Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * @param Request $request
     * @return array|string
     */
    public function postComment(Request $request)
    {
        return json_encode($request->input());
    }

    public function deleteComment()
    {

    }
}