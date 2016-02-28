<?php
/**
 * Created by PhpStorm.
 * User: abrarjahin
 * Date: 2/28/16
 * Time: 3:53 PM
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    public function getIndex()
    {
        //$redis = app()->make('redis');
        $redis = Redis::Connection();
        $redis->set("key1","testValue");
        return $redis->get("key1");
    }

    public function getArticle($id)
    {
        $storage = Redis::Connection();
        $view = $storage->incr("Article " . $id . " :views");
        //$storage->zIncrBy('articleVIews',3,'article:'.$id);

        return "This is an article with id: " . $id . " it has " . $view . " views";
    }
}