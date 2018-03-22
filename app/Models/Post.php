<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * @var string
     */
    protected $table = 'posts';

    /**
     * @var array
     */
    protected $fillable = array(
        'title',
        'content',
        'type',
        'views_counter',
        'comments_counter',
        'tags',
        'active'
    );

    /**
     * @return bool
     */
    public static function isNewPostsToday()
    {
        return self::whereBetween(
            'created_at', array(
                date('Y-m-d H:i:s', time() - 3600*24),
                date('Y-m-d H:i:s', time())
            )
        )->get() != array() ? false : true;
    }

    public static function getLastPosts($limit = 14)
    {
        return self::where('active', '=', 1)->orderBy('created_at', 'desc')->take($limit)->get();
    }


}
