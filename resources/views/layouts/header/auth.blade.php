@extends('layouts.root')

@section('body')
<header>
        <a class="titleLink mainTitle" href="./">triton</a>
        <a class="titleLink toPost" href="/postForm">投稿する</a>
</header>

@yield('content')

@endsection