<!-- 1 共通テンプレlayout.blade.phpを作る
2 共通ヘッダーを作る
3 共通フッターを作る
4 共通テンプレを継承したリストを作る -->

@extends('layout')
@section('title', 'ブログ一覧')
@section('content')

<!-- 1 リンクを作る 
　　2 routeを作る
    3 (CM) Controllerを作る
    4 (v) 詳細画面を作る
-->

<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h2>ブログ記事一覧</h2>
    @if(session('err_msg'))
      <p class="text-danger">{{ session('err_msg')}}</p>
    @endif
    <table class="table table-striped">
        <tr>
            <th>記事番号</th>
            <th>タイトル</th>
            <th>日付</th>
            <th></th>
        </tr>
        @foreach($blogs as $blog)
        <tr>
          <td>{{ $blog->id }}</td>  
          <td><a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a></td>  
          <td>{{ $blog->updated_at }}</td>  
        </tr>
        @endforeach
    </table>
  </div>
</div>
@endsection