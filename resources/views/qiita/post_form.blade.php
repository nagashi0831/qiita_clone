<!-- 投稿フォーム -->
@extends('layouts.header.auth')
<!-- レイアウト名を仮にappに設定 -->
@section('content') 
    @if(count($errors) > 0)
    <div>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </div>
    @endif
    <form action="{{ action('ArticleController@postForm') }}" method="post">
        @csrf
        <ul>
            <li>記事タイトル</li>
            <li>
                <label for="title">Title</label>
                <input type="text" name="title">
            </li>
            <li>
                <textarea name="post_text" placeholder="プログラミング知識を共有しよう" rows="20" cols="50"></textarea>
            </li>
            <li>
                <input type="submit" value="記事を投稿">
            </li>
        </ul>
    </form>
@endsection