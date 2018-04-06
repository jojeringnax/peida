<?php
/**
 * Created by PhpStorm.
 * User: jojer
 * Date: 29/03/2018
 * Time: 12:10
 */

namespace App\Http\Controllers;


use App\Models\Comment;
use App\Models\Post;
use Carbon\Carbon;
use \Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * @param Request $request
     * @return array|string
     */
    public function postComment(Request $request)
    {
        $comment = new Comment();
        $comment->name = $request->get('name');
        $comment->content = $request->get('content');
        $comment->email = $request->get('email');
        $comment->post_id = $request->get('post_id');
        $comment->save();

        Post::updateCommentCounter($request->get('post_id'));

        $resultArray = array(
            'id' => $comment->id,
            'name' => $comment->name,
            'content' => $comment->content,
            'created_at' => $comment->created_at->toDateTimeString()
        );
        return json_encode($resultArray);
    }

    public function deleteAjaxComment(Request $request)
    {
        $comment = Comment::find($request->get('comment_id'));
        Post::updateCommentCounter($comment->post_id, -1);
        $comment->delete();
        return json_encode(array('result' => true));
    }
}