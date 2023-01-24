<header>	
	<div class="header-menu">
		<div class="header-left">
			<a class="app-logo" href="/">MyFoodDiary</a>
		</div>
		<div class="header-right">
			@guest
				<div class="menu-item">
					<a href="{{ route('user.login') }}">
						<i class="fa-solid fa-right-to-bracket icon-size icon-color"></i>
						<p class="menu-item-text">ログイン</p>
					</a>
				</div>
				<div class="menu-item">
					<a href="{{ route('user.create') }}">
						<i class="fa-solid fa-user-plus icon-size icon-color"></i>
						<p class="menu-item-text">新規登録</p>
					</a>
				</div>
				<div class="menu-item">
					<a href="{{ route('user.guest_login') }}">
						<i class="fa-solid fa-person-walking-arrow-right icon-size icon-color"></i>
						<p class="menu-item-text">ゲストログイン</p>
					</a>
				</div>
			@endguest
			@auth
				<div class="menu-item">
					<a href="{{ route('user.index') }}">
						<i class="fa-solid fa-users icon-size icon-color"></i>
						<p class="menu-item-text">ユーザー</p>
					</a>
				</div>
				<div class="menu-item">
					<a href="{{ route('user.show', Auth::id()) }}">
						<i class="fa-solid fa-user icon-size icon-color"></i>
						<p class="menu-item-text">マイページ</p>
					</a>
				</div>
				<div class="menu-item">
					<a href="{{ route('user.logout') }}">
						<i class="fa-solid fa-person-walking-arrow-right icon-size icon-color"></i>
						<p class="menu-item-text">ログアウト</p>
					</a>
				</div>
			@endauth
		</div>
	</div>
</header>
