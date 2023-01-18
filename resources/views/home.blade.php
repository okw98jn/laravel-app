@extends('layouts.app')
@section('content')
<div class="main-image">
    <div class="top-app-name">
        <h2>My Food Diary</h2>
        <h3>#自炊日記をつけよう</h3>
    </div>
</div>
<div class="top-description">
    <p class="app-title">My Food Diary</p>
    <p class="app-text">My Food Diaryは日々の自炊を簡単に管理し、楽しく自炊を続けるためのアプリです。</p>
    <div class="card-area">
        <div class="l-wrapper_02 card-radius_02">
            <article class="card_02">
                <div class="card__header_02">
                    <p class="card__title_02">レシピ作成</p>
                    <figure class="card__thumbnail_02">
                        <img class="card__image_02" src="{{ asset('image/top-description-1.png') }}" />
                    </figure>
                </div>
                <div class="card__body_02">
                    <p class="card__text2_02">手軽にレシピを記録できるように料理名と写真だけで投稿できます。他にも材料や作り方なども登録できます。一番映える写真で投稿するのをおすすめします。</p>
                </div>    
            </article>
        </div>
        <div class="l-wrapper_02 card-radius_02">
            <article class="card_02">
                <div class="card__header_02">
                    <p class="card__title_02">レシピ確認</p>
                    <figure class="card__thumbnail_02">
                        <img class="card__image_02" src="{{ asset('image/top-description-2.png') }}" />
                    </figure>
                </div>
                <div class="card__body_02">
                    <p class="card__text2_02">作り方を忘れた時など過去に投稿したレシピを確認できます。編集ができるので、より美味しくできた時はレシピを進化させましょう。</p>
                </div>    
            </article>
        </div>
        <div class="l-wrapper_02 card-radius_02">
            <article class="card_02">
                <div class="card__header_02">
                    <p class="card__title_02">レシピ検索</p>
                    <figure class="card__thumbnail_02">
                        <img class="card__image_02" src="{{ asset('image/top-description-3.png') }}" />
                    </figure>
                </div>
                <div class="card__body_02">
                    <p class="card__text2_02">献立を考えるのが面倒くさい時は他のユーザーのレシピを参考にしましょう。料理名の他にカテゴリでの検索など作りたいレシピが見つかるはずです。</p>
                </div>    
            </article>
        </div>
    </div>
    <div class="button018">
        <a href="{{ route('user.login') }}"><span>はじめる</span></a>
    </div>
</div>
@endsection
