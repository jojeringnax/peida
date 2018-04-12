<?php
/**
 * Created by PhpStorm.
 * User: jojer
 * Date: 06/04/2018
 * Time: 09:56
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * @var string
     */
    protected $table="questions";

    protected $fillable=array(
      'question',
      'answer',
      'status'
    );

    public static function getActiveAnsweredQuestions()
    {
        return self::where('active', '=', 1)->where('answer', '!=', null)->get();
    }
}