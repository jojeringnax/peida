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
    public static function isNewPostToday()
    {
        return self::whereDate('created_at', '=', date('Y-m-d'))->get() === array() ? false : true;
    }

    /**
     * @param int $limit
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection|static[]
     */
    public static function getLastPosts($limit = 14)
    {
        return self::where('active', '=', 1)->orderBy('created_at', 'desc')->take($limit)->get();
    }

    /**
     * @return bool
     */
    public function isTodayPost()
    {
        return date('Y-m-d', strtotime($this->created_at)) === date('Y-m-d') ? true : false;
    }


}
