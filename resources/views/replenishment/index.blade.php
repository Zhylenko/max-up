@extends('layouts.app')

@section('title', 'Пополнение баланса')
@section('description', '')

@section('styles')
@endsection

@section('content')
        <div class="cart height-content">
            <div class="container">

                <div class="addfunds__top">
                    <p class="addfunds__top-text">
                        Пополняйте баланс и оплачивайте покупки в 1 клик
                    </p>
                </div>

                <div class="cart__full">

                    <div class="cart__full-bottom">
                        <form class="cart__form" id="balance-form" action="#" novalidate>

                            <div class="cart__form-title">
                                Пополнение баланса
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-input _balance _req" id="balance" name="balance"
                                    required>
                                <label class="lng-password form-label" for="balance">Сумма</label>
                                <div class="form-error">Необходимо заполнить пустое поле</div>
                            </div>

                            <div class="cart__payment">
                                <ul class="cart__payment-list">

                                    <li class="cart__payment-item">
                                        <label class="cart__payment-label">
                                            <input class="cart__payment-checkbox" type="radio" value="1"
                                                name="pay-checkbox" checked>
                                            <img class="cart__payment-image" src="{{ asset('img/payment/card_ym.svg') }}" alt="">
                                            <p class="cart__payment-subtitle">Банковская карта</p>
                                        </label>
                                    </li>

                                    <li class="cart__payment-item">
                                        <label class="cart__payment-label">
                                            <input class="cart__payment-checkbox" type="radio" value="2"
                                                name="pay-checkbox">
                                            <img class="cart__payment-image" src="{{ asset('img/payment/card_up_ru.svg') }}" alt="">
                                            <p class="cart__payment-subtitle">Банковская карта</p>
                                        </label>
                                    </li>

                                    <li class="cart__payment-item">
                                        <label class="cart__payment-label">
                                            <input class="cart__payment-checkbox" type="radio" value="3"
                                                name="pay-checkbox">
                                            <img class="cart__payment-image" src="{{ asset('img/payment/card_tf.svg') }}" alt="">
                                            <p class="cart__payment-subtitle">Банковская карта</p>
                                        </label>
                                    </li>

                                    <li class="cart__payment-item">
                                        <label class="cart__payment-label">
                                            <input class="cart__payment-checkbox" type="radio" value="4"
                                                name="pay-checkbox">
                                            <img class="cart__payment-image" src="{{ asset('img/payment/qiwi.svg') }}" alt="">
                                            <p class="cart__payment-subtitle">QIWI Кошелек</p>
                                        </label>
                                    </li>

                                    <li class="cart__payment-item">
                                        <label class="cart__payment-label">
                                            <input class="cart__payment-checkbox" type="radio" value="5"
                                                name="pay-checkbox">
                                            <img class="cart__payment-image" src="{{ asset('img/payment/ym.svg') }}" alt="">
                                            <p class="cart__payment-subtitle">ЮMoneyк</p>
                                        </label>
                                    </li>

                                    <li class="cart__payment-item">
                                        <label class="cart__payment-label">
                                            <input class="cart__payment-checkbox" type="radio" value="6"
                                                name="pay-checkbox">
                                            <img class="cart__payment-image" src="{{ asset('img/payment/webmoney.svg') }}" alt="">
                                            <p class="cart__payment-subtitle">WebMoney</p>
                                        </label>
                                    </li>

                                    <li class="cart__payment-item">
                                        <label class="cart__payment-label">
                                            <input class="cart__payment-checkbox" type="radio" value="7"
                                                name="pay-checkbox">
                                            <img class="cart__payment-image" src="{{ asset('img/payment/bitcoin.svg') }}" alt="">
                                            <p class="cart__payment-subtitle">Криптовалюта</p>
                                        </label>
                                    </li>

                                    <li class="cart__payment-item">
                                        <label class="cart__payment-label">
                                            <input class="cart__payment-checkbox" type="radio" value="8"
                                                name="pay-checkbox">
                                            <img class="cart__payment-image" src="{{ asset('img/payment/mobile.svg') }}" alt="">
                                            <p class="cart__payment-subtitle">Баланс телефона</p>
                                        </label>
                                    </li>

                                    <li class="cart__payment-item">
                                        <label class="cart__payment-label">
                                            <input class="cart__payment-checkbox" type="radio" value="9"
                                                name="pay-checkbox">
                                            <img class="cart__payment-image" src="{{ asset('img/payment/cash.svg') }}" alt="">
                                            <p class="cart__payment-subtitle">Наличные</p>
                                        </label>
                                    </li>

                                </ul>
                            </div>

                            <div class="form-group-check">

                                <label>
                                    <input class="form-control form-checkbox _req" name="checkbox" type="checkbox"
                                        required>
                                    <span class="form-checkstyle"></span>
                                    <span class="lng-terms form-terms">Оплачивая, Вы принимаете <a
                                            class="lng-rules form-terms_rules"
                                            href="{{ Route('terms') }}">правила
                                            сервиса</a></span>
                                    <div class="form-error"></div>
                                </label>

                            </div>

                            <div class="cart__form-total">
                                баланс
                                <span class="cart-total-price">
                                    0
                                </span>
                                грн.
                            </div>

                            <button class="form-btn" id="submit_total-order" name="buttonName" value="Submit">Пополнить
                                баланс</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection