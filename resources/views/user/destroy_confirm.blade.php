@extends('layouts.app')
@section('content')
<div class="container-field text-center">
    <div class="col-lg-7 mx-auto mt-3 p-5">
        <img src="{{ asset('image/user_exit_icon.png') }}" alt="退会" width="70" height="70">
        <h2 class="form-title mb-4">退会のお手続き</h2>
        <p class="mb-4 text-secondary withdrawal_text">
            退会手続きをされますと、全てのサービスがご利用いただけなくなります。<br>
            再度ご利用をいただく場合には、新規登録のお手続きが必要になります。<br>
            本当に退会してよろしいですか？
        </p>
        <form method="POST" action="{{ route('user.destroy')}}" >
            @csrf
            <button type="submit" class="form-btn d-inline-block">退会する</button>
        </form>
        <a href="{{ route('user.show', Auth::id()) }}" class="form-btn d-inline-block">退会しない</a>
    </div>
</div>
@endsection

