@extends('layouts.helloapp')
@section('title', 'Laravel Blue')
@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>本文コンテンツ</p>
    <p>必要なだけ書けるよ</p>
    <ul>
        @each('components.item', $data, 'item')
    </ul>
    @include('components.message', ['msg_title' => 'OK', 'msg_content' => 'サブビューです'])
    {{ $view_message}}
@endsection

@section('footer')
copyright 2024 yoshida.
@endsection