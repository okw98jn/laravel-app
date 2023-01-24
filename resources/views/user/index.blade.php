@extends('layouts.app')
@section('content')
<div class="container-field text-center pb-5">
    <div class="col-lg-8 mx-auto mt-5 post-form">
        <img src="{{ asset('image/users.png') }}" alt="ユーザー" width="70" height="70" class="mb-3">
        <h2 class="form-title mb-4">ユーザー</h2>
        @foreach ( $users as $user )
            <a href="{{ route('user.show', $user->id) }}">
                <div class="user-block">
                    <div class="user-image">
                        @if ($user->image)
                            <img src="{{ Storage::url($user->image) }}" alt="ユーザー画像">
                        @else
                            <img src="{{ asset('image/default_user.png') }}" alt="ユーザー画像">
                        @endif
                    </div>
                    <div class="user-right">
                        <p>{{ $user->name }}</p>
                        <p>{{ $user->introduction }}</p>
                    </div>
                </div>
            </a>
        @endforeach
        {{ $users->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection
