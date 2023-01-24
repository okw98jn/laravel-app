@extends('layouts.app')
@section('content')
<div class="container-fluid text-center">
    <div class="form-area col-lg-7 mx-auto mt-3 p-5">
        <img src="{{ asset('image/sign-up-icon.png') }}" alt="新規登録" width="70" height="70" class="mb-3">
        <h2 class="mb-2 form-title">SIGN-UP</h2>
        <h3 class="mb-4 form-sub-title">新規登録</h3>
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" placeholder="ニックネーム" name='name' class="input-field" value="{{ old('name') }}">
                @error('name')
                    <li class="text-danger">{{$message}}</li>
                @enderror
            </div>
            <div class="mb-3">
                <input type="email" placeholder="メールアドレス" name='email' class="input-field" value="{{ old('email') }}">
                @error('email')
                    <li class="text-danger">{{$message}}</li>
                @enderror
            </div>
            <div class="mb-3">
                <input type="password" placeholder="パスワード（６文字以上）" name='password' class="input-field">
                @error('password')
                    <li class="text-danger">{{$message}}</li>
                @enderror
            </div>
            <div class="mb-5">
                <input type="password" placeholder="パスワード確認" name='confirm_password' class="input-field">
                @error('confirm_password')
                    <li class="text-danger">{{$message}}</li>
                @enderror
            </div>
            <div class="mb-3">
                <input type="submit" value="登録" class="form-btn">
            </div>
        </form>
    </div>
</div>
@endsection
