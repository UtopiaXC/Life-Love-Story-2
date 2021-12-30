<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Utils\R;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/main/contents", function (Request $request) {
    return R::ok([[
        'id' => 1,
        'img' => 'https://api.maho.cc/random-img/pc.php',
        'title' => '主页测试1',
        'avatar'=> 'https://api.maho.cc/random-img/pc.php',
        'userFullName'=>'测试用户1',
        'blogPosted'=>'2021/11/30',
        'tags'=>['表白', '匿名'],
        'excerpt'=> '测试摘要1',
        'comment'=> '0',
    ],[
        'id' => 2,
        'img' => 'https://cdn.jsdelivr.net/gh/Fuukei/API_Resources@1.0.0/random-img/s1/pc/p1.webp',
        'title' => '主页吐槽测试',
        'avatar'=> 'https://cdn.jsdelivr.net/gh/Fuukei/API_Resources@1.0.0/random-img/s1/pc/p1.webp',
        'userFullName'=>'测试用户2',
        'blogPosted'=>'2021/11/30',
        'tags'=>['吐槽', '匿名'],
        'excerpt'=> '测试摘要2',
        'comment'=> '0',
    ],[
        'id' => 3,
        'img' => 'https://cdn.jsdelivr.net/gh/Fuukei/API_Resources@1.0.0/random-img/s1/pc/p5.webp',
        'title' => '主页二手交易测试',
        'avatar'=> 'https://cdn.jsdelivr.net/gh/Fuukei/API_Resources@1.0.0/random-img/s1/pc/p5.webp',
        'userFullName'=>'测试用户3',
        'blogPosted'=>'2021/11/30',
        'tags'=>['二手', '匿名'],
        'excerpt'=> '测试摘要3',
        'comment'=> '0',
    ],]);
});
Route::get("/main/news", function (Request $request) {
    return R::ok(['recentPosts'=>[[
        'id' => 4,
        'img' => 'https://api.maho.cc/random-img/pc.php',
        'title' => '主页测试1',
        'createdTime'=> '2021/11/30',
    ],],'categories'=>[['category'=>'表白墙','icon'=>'HeartIcon'],['category'=>'吐槽','icon'=>'MessageCircleIcon'],['category'=>'二手交易','icon'=>'ShoppingCartIcon']]]);
});
