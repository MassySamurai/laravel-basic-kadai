<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Posts;


class PostController extends Controller
{
    public function index() {
        // productsテーブルからすべてのデータを取得し、変数$productsに代入する
        $posts = DB::table('posts')->get();

        return view('posts.index',  compact('posts'));
    }

    public function show($id) {
        $posts = Posts::find($id);

        // 変数$productをproducts/show.blade.phpファイルに渡す
        return view('posts.show', compact('posts'));
    }
}
