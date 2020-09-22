@extends('layouts.app')
<!-- レイアウト名を仮にappに設定 -->
@section('title', 'index')
@section('menu_title')
記事一覧
@endsection
@section('content') 
    <ul>
        @foreach ($items as $item)
        <li><a href="index/detail">{{$item -> title}} by {{$item -> username}}</a></li>
        @endforeach
    </ul>
@endsection