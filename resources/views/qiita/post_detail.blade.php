@extends('layouts.app')
<!-- レイアウト名を仮にappに設定 -->

@section('title', '{{$post->title}}')

<!-- 上下の投稿ユーザー表示について -->
@section('username')
    <ul>
        <li><a href=""><img src=""></a></li>
        <li>{{$post->username}}</li>
        <li>{{$post->updatetime}}</li>
    </ul>
@endsection

@section('content') 

    <div>
        {{$post->title}}
    </div>

    <div>
        {{$post->post_text}}
    </div>

@endsection

@section('username')
    <ul>
        <li><a href=""><img src="画像のアドレス"></a></li>
        <li>{{$post->username}}</li>
        <li>{{$post->updatetime}}</li>
    </ul>
@endsection