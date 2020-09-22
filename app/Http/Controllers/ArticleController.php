<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
class ArticleController extends Controller
{   
    //投稿フォームに遷移するaction
    public function add ()
    {
        return view('qiita.post_form');
    }
    //投稿フォームで投稿ボタンを押したときのaction
    public function postForm (Request $request) 
    {
        //$this->validate()で投稿フォームにバリデーションをつける;
        $qiita = new Post;
        $form = $request->all();
        unset($form['_token']);
        //$qiitaのカラムに値を入れる
        $qiita->fill($form);
        //データベースに保存
        $qiita->save();
        return redirect('/');
    }
    //記事一覧ページで記事一覧を表示するaction
    public function index (Request $request)
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10); 
        return view('qiita.index', compact('posts'));
        
    }
    
    //投稿のタイトルを押すと投稿内容を表示するaction
    public function postDetail (Request $request)
    {
        $post = Post::find($request->id);
        if (empty($post)) {
            abort(404);
        }
        return view('qiita.post_detail', [
            'posts' => $post
            ]);
    }
}