@extends('layouts.app')
@section('content')
<div class="container-field text-center pb-5">
    <div class="col-lg-8 mx-auto mt-5 post-form">
        <div class="user-image">
            @if ($user->image)
                <img src="{{ Storage::url($user->image) }}" alt="ユーザー画像">
            @else
                <img src="{{ asset('image/default_user.png') }}" alt="ユーザー画像">
            @endif
        </div>
        <h2 class="user-name mb-3">{{ $user->name }}</h2>
        <div class="follows-link">
            <a href="#">フォロー</a>
            <a href="#">フォロワー</a>
        </div>
        <div class="user-link-btn mb-3">
            <a href="#">作成</a>
            @if ($user->id === Auth::id())
                <a href="{{ route('user.edit', Auth::id())}}">編集</a>
            @endif
        </div>
        @if ($user->id === Auth::id())
            <a href="{{ route('user.destroy_confirm', Auth::id()) }}">退会する</a>
        @endif
        <p class="user-introduction">{{ $user->introduction }}</p>
    </div>
</div>
@endsection
