@extends('layouts.app')

@section('title', 'Партнерская программа')
@section('description', '')

@section('styles')
@endsection

@section('content')
        <div class="partnership">
            <div class="container">

                <div class="partnership__inner">

                    <div class="partnership__inner-title">
                        Зарабатывай вместе с нами
                    </div>

                    <div class="partnership__inner-images">
                        <img class="partnership__inner-img" src="{{ asset('img/header.webp') }}" alt="">
                    </div>

                    <div class="partnership__inner-text">
                        <dl class="public__table">
                            <dt class="public__table-title" id="no-radius">
                                Пожизненно получай до 10% с привлеченных пользователей
                            </dt>
                            <dd class="public__table-info">
                                Когда новый пользователь перейдёт по твоей специальной реферальной ссылке и
                                зарегистрируется,
                                он запишется как реферал.
                            </dd>
                            <dd class="public__table-info">
                                За каждый заказ, сделанный рефералом мы будем платить тебе проценты.
                            </dd>
                            <dd class="public__table-info">
                                Вознаграждение от покупок реферала высчитывается из количества привлеченных
                                пользователей.
                                Чем больше у тебя рефералов - тем больше вознаграждение, вплоть до 50% (берутся в расчет
                                только активные рефералы).
                            </dd>
                            <dd class="public__table-info">
                                Весь доход от рефералов автоматически (в течении 30 минут) будет добавляться на твой
                                баланс на сайте.
                            </dd>
                        </dl>
                    </div>

                </div>

                <div class="partnership__inner-materials">
                    <a class="partnership__inner-link" href="https://maxup.com.ua/Maxup.zip">
                        Рекламные материалы
                    </a>
                </div>

                <form id="ref-from" action="#">
                    <div class="partnership__inner-materials" id="ref-name" style="display: none;">
                        https://Maxup.net?ref=<span></span>
                    </div>
                </form>


                <div class="register__login" style="display: none;">
                    <p class="register__login-text" id="no-margin">
                        Сначало нужно
                        <a class="register__login-link" href="{{ Route('login') }}">войти</a>
                        или
                        <a class="register__login-link" href="{{ Route('register') }}">зарегистрироваться</a>
                    </p>
                </div>

            </div>
        </div>
@endsection