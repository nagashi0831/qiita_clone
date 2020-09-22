@extends('layouts.header.auth')
@section('content')
<div class="wrapper">
    <h1 class="article_list">記事一覧</h1>
    @foreach ($posts as $post)
    <article>
        <figure>
            <p class="image"></p>
        </figure>
        <div class="draft_info">
            <h2 class="draft_title">{{ $post->title }}</h2>
            <p class="author">by {{ $post->username }}</p>
        </div>
    </article>
    @endforeach
</div>
@endsection