@extends('layouts.app')

@section('title', 'История заказов')
@section('description', '')

@section('styles')
@endsection

@section('content')
        <div class="subscriptions height-content">
            <div class="container">

                <div class="subscriptions__empty">
                    <img class="cart__empty-img" src="{{ asset('img/empty-box.png') }}" alt="">
                    <div class="cart__empty-text">У вас нет оплаченных заказов</div>
                </div>

                <div class="cart__full">
                    <div class="cart__full-top">
                        <ul class="cart__list">

                            <li class="cart__list-item">

                                <div class="cart__list-img">
                                    <img src="{{ asset('img/service/instagram.svg') }}" alt="">
                                </div>

                                <div class="cart__list-group">

                                    <div class="cart__list-top subscriptions-top">
                                        <div class="cart__list-top_name id-name">ID37805139</div>
                                        <div class="cart__list-top_title">Instagram подписка на лайки</div>
                                        <div class="cart__list-top_time">
                                            <span class="data">11.06.2021</span>
                                            <span class="time">10:35</span>
                                        </div>
                                    </div>

                                    <div class="cart__list-middle">
                                        ссылка не указана
                                    </div>

                                    <div class="subscriptions-bottom">
                                        <p class="subscriptions-bottom_left">
                                            100 шт. (7 новых постов)
                                        </p>
                                        <p class="subscriptions-bottom_right">
                                            оплачен
                                        </p>
                                    </div>

                                </div>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection