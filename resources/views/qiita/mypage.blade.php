@extends('layouts.root')
@section('title', 'マイページ')
@section('content')
    <div>〇</div>
    <ul>
        <!--　アカウント名 -->
        <li>{{ $user->name }}</li>
        <!-- ログイン時メールアドレス -->
        <li>{{ $user->email }}</li>
    </ul>