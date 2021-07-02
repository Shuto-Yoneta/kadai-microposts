@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            {{-- ユーザ情報 --}}
            @include('users.card')
        </aside>
        <div class="col-sm-8">
            {{-- タブ --}}
            @include('users.navtabs')
            {{-- 投稿一覧 --}}
<<<<<<< HEAD
            @include('microposts.favorites')
=======
            @include('microposts.microposts')
>>>>>>> f8fbcc4c3754fb8f5b1e8e0f8e60c1d7f1e6b27d
        </div>
    </div>
@endsection