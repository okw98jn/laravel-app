@extends('layouts.app')
@section('content')
<div class="container-fluid text-center">
    <div class="form-area col-lg-7 mx-auto mt-3 p-5">
        <h2 class="mb-2 form-title">プロフィール編集</h2>
        <form action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image">
            <div class="mb-3">
                <input type="text" placeholder="ニックネーム" name='name' class="input-field" value="{{ $user->name }}">
                @error('name')
                    <li class="text-danger">{{$message}}</li>
                @enderror
            </div>
            <div class="mb-3">
                <input type="email" placeholder="メールアドレス" name='email' class="input-field" value="{{ $user->email }}">
                @error('email')
                    <li class="text-danger">{{$message}}</li>
                @enderror
            </div>
            <div class="mb-5">
                <textarea name="introduction" rows="5" placeholder="自己紹介" class="input-field">{{ $user->introduction }}</textarea>
                @error('introduction')
                    <li class="text-danger">{{$message}}</li>
                @enderror
            </div>
            <div class="mb-3">
                <input type="submit" value="編集する" class="form-btn">
            </div>
        </form>
    </div>
</div>
@endsection
