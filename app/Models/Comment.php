<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * @var string
     */
    protected $table = 'comments';

    /**
     * @var array
     */
    protected $fillable = array (
        'post_id',
        'content',
        'name',
        'email',
        'parent_comment_id'
    );

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post() {
        return $this->belongsTo('Post', 'post_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parentComment() {
        return $this->belongsTo('Comment', 'parent_comment_id', 'id');
    }

    /**
     * @param $postId
     * @return Model|null|static
     */
    public static function getPostComments($postId) {
        return self::where('post_id', '=', $postId)->get();
    }
}
