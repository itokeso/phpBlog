<!-- 1 共通テンプレlayout.blade.phpを作る
2 共通ヘッダーを作る
3 共通フッターを作る
4 共通テンプレを継承したリストを作る -->

@extends('layout')
@section('title', 'ブログ詳細')
@section('content')

<!-- 1 リンクを作る 
　　2 routeを作る
    3 (CM) Controllerを作る
    4 (v) 詳細画面を作る
-->

<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h2>{{ $blog->title }}</h2>
    <span>作成日: {{ $blog->created_at}} </span>
    <span>更新日: {{ $blog->updated_at}} </span>
    <p>{{ $blog->content }}</p>
  </div>
</div>
@endsection