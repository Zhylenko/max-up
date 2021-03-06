@section('navbar')
    <!-- Navbar -->
	<div class="pre-b" id="pre">
		<div class="burger__menu" id="sidebar">
			@auth
			<div class="greetings">Привет, <span class="greeting-user">{{ Auth::user()->name }}</span>!</div>
			@endif
			<div class="burger-hr">
				<a class="lng-home burger__menu-link" href="{{ Route('index') }}" target="_top"><i class="fas fa-home"></i>Главная</a>
				<a class="lng-socail burger__menu-link" href="{{ Route('socialnetworks') }}" target="_top"><i class="fas fa-hashtag"></i>Социальные сети</a>
				<a class="lng-rate burger__menu-link" href="{{ Route('rating') }}" target="_top"><i class="fas fa-hashtag"></i>Рейтинги и отзывы</a>

			</div>
			<div class="burger-hr">
				<a class="lng-buck burger__menu-link" href="{{ Route('cart') }}" target="_top"><i class="fas fa-shopping-cart"></i>Корзина</a>
				<a class="lng-subsc burger__menu-link" href="{{ Route('subscriptions') }}" target="_top"><i class="fas fa-sync"></i>Подписки</a>
				<a class="lng-history burger__menu-link" href="{{ Route('history') }}" target="_top"><i class="fas fa-history"></i>История заказов</a>
				<a class="lng-balance burger__menu-link" href="{{ Route('replenishment') }}" target="_top"><i class="far fa-credit-card"></i>Пополнить баланс</a>
				<a class="lng-promo burger__menu-link" href="{{ Route('promocode') }}" target="_top"><i class="fas fa-money-bill-wave"></i>Активировать промокод</a>
			</div>

			<div class="burger-hr">
				<a class="lng-partner burger__menu-link" target="_top" href="{{ Route('partnership') }}"><i class="fas fa-dollar-sign"></i>Партнерская программа</a>
				<a class="lng-free burger__menu-link" target="_top" href="{{ Route('promotion') }}"><i class="fas fa-hand-holding-usd"></i>Бесплатное продвижение</a>
			</div>

			<div class="burger-hr">
				<a class="lng-help burger__menu-link" target="_top" href="{{ Route('support') }}"><i class="fas fa-question"></i>Служба поддержки</a>
				<a class="lng-info burger__menu-link" target="_top" href="{{ Route('information') }}"><i class="far fa-file-alt"></i>Информация</a>
				<a class="lng-feedback burger__menu-link" target="_top" href="{{ Route('reviews') }}"><i class="far fa-comment-alt"></i>Отзывы</a>
			</div>

			<div class="burger-hr">
				<a class="lng-instr burger__menu-link" target="_top" href="{{ Route('tools') }}"><i class="fas fa-wrench"></i>Инструменты</a>
			</div>

			<div class="burger-hr">
				<a class="burger__menu-link" target="_top" href="{{ Route('api') }}"><i class="fas fa-terminal"></i>Public API</a>
				<a class="burger__menu-link" target="_top" href="{{ Route('api.reseller') }}"><i class="fas fa-terminal"></i>Reseller API</a>
			</div>

			<div class="burger-hr">
				@auth
				<a class="lng-registr burger__menu-link logout green-link" href="{{ Route('logout') }}"><i class="fas fa-sign-out-alt"></i>Выйти</a>
				@else
				<a class="lng-login burger__menu-link login green-link" href="{{ Route('login') }}"><i class="fas fa-sign-in-alt"></i>Вход</a>
				<a class="lng-registr burger__menu-link register green-link" href="{{ Route('register') }}"><i class="fas fa-sign-in-alt"></i>Регистрация</a> 					
				@endif
			</div>

		</div>
	</div>
@endsection