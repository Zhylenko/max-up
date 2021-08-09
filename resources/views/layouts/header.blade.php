@section('header')
    <!-- Header -->
    <header class="header">
        <div class="container">

            <div class="header__top">

                <div class="burger__openable" id="burger">
                    <div class="center-line"></div>
                </div>

                <div class="lng-home header__title hide1100max">
                    <h3 id="page_title"><a href="/index">Главная</a></h3>
                </div>

                <a class="logo" href="/index">
                    <img src="/images/logo.svg" th:href="@{/images/logo.svg}" alt="">
                </a>

                <div class="header__op">

                    <div class="header__balance">
                        <a class="lng-balance-rub header__balance-link header-btn" href="/addfunds"
                            target="_top">Баланс: <span class="balance-span">0</span><span> грн</span> </a>
                    </div>

                    <div class="header__cart">
                        <a class="lng-buck header__cart-link header-btn" href="/cart" target="_top">Корзина</a>
                    </div>

                </div>

            </div>

        </div>
    </header>
@endsection