<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        // productsテーブルからすべてのデータを取得し、変数$productsに代入する
        $posts = DB::table('posts')->get();

        return view('posts.index',  compact('posts'));
    }
}
