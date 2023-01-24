@extends('layouts.app')
@section('content')
<div class="container-fluid text-center">
    <div class="col-lg-8 mx-auto mt-5 post-form">
        <h2 class="mb-4 notification-title">レシピ作成</h2>
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="post-field">
                <label for="title" class="required">
                    料理名
                </label>
                <input type="text" placeholder="料理名を入力" id="title" name="title" value="{{ old('title') }}">
                @error('title')
                    <li class="text-danger">{{$message}}</li>
                @enderror
            </div>
            <div class="post-field">
                <label for="description">コメント</label>
                <textarea name="description" id="description" placeholder="コメントを入力" rows="4">{{ old('description') }}</textarea>
            </div>
            <div class="post-field mb-3">
                <label for="" class="required">画像</label>
                <input type="file" name="image">
                @error('image')
                    <li class="text-danger">{{$message}}</li>
                @enderror
            </div>
            <div class="post-field time-field">
                <label for="time">調理時間</label>
                <select name="time" id="time">
                    <option value="5分以内">5分以内</option>
                    <option value="10分">10分</option>
                    <option value="20分">20分</option>
                </select>
            </div>
            <div class="post-field time-field">
                <label for="category">カテゴリ</label>
                <select name="category_id" id="category">
                    <option value="1">肉料理</option>
                    <option value="2">魚料理</option>
                </select>
            </div>
            <div class="post-field time-field">
                <label for="persons">人数</label>
                <select name="persons" id="persons">
                    <option value="1人前">1人前</option>
                    <option value="2人前">2人前</option>
                </select>
            </div>
            <input type="hidden" value="{{ Auth::id() }}" name="user_id">
            <input type="submit" value="完了" class="post-btn">
        </form>
    </div>
</div>
@endsection
