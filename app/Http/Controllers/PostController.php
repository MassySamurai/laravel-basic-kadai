<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Http\Requests\PostsRequest;

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

    public function create() {
        return view('posts.create');
    }

    public function store(PostsRequest $request) {

        // フォームの入力内容をもとに、テーブルにデータを追加する
        $post = new Posts();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return redirect('/posts');
    }
}
