@extends('layouts.app')

@section('title', 'Max Up')
@section('description', '')

@section('styles')
@endsection

@section('content')
        <div class="cart height-content">
            <div class="container">

                <div class="cart__empty">

                    <img class="cart__empty-img" src="{{ asset('img/empty-box.png') }}" alt="">
                    <div class="cart__empty-text">Корзина пуста</div>

                </div>

                <div class="cart__full">

                    <div class="cart__full-top">
                        <ul class="cart__list">

                            <li class="cart__list-item">

                                <div class="cart__list-img">
                                    <img src="{{ asset('img/service/vk.svg') }}" alt="">
                                </div>

                                <div class="cart__list-group">

                                    <div class="cart__list-top">
                                        <div class="cart__list-top_name">vk</div>
                                        <div class="cart__list-top_title">ВКонтакте друзья</div>
                                        <button class="cart__list-top_btn">
                                            <img src="{{ asset('img/trash.svg') }}" alt="">
                                        </button>
                                    </div>

                                    <div class="cart__list-middle">
                                        ссылка не указана
                                    </div>

                                    <div class="cart__list-bottom">
                                        100 шт. x 0.24 грн. = 24 грн. (офферы, высокое качество)
                                    </div>

                                </div>

                            </li>

                        </ul>
                    </div>

                    <div class="cart__full-bottom">
                        <form class="cart__form" action="#" novalidate>

                            <div class="cart__form-title">
                                Оформление заказа
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-input" id="email-order" name="email-order" required>
                                <label class="lng-password form-label" for="email-order">Почта для чека <span
                                        class="password-span">(по желанию)</span></label>
                                <div class="form-error">Необходимо заполнить пустое поле</div>
                            </div>

                            <div class="cart__payment">
                                <ul class="cart__payment-list">

                                    <li class="cart__payment-item">
                                        <label class="cart__payment-label">
                                            <input class="cart__payment-checkbox" type="radio" value="1"
                                                name="pay-checkbox" checked>
                                            <img class="cart__payment-image" src="./img/payment/card_ym.svg" alt="">
                                            <p class="cart__payment-subtitle">Банковская карта</p>
                                        </label>
                                    </li>

                                    <li class="cart__payment-item">
                                        <label class="cart__payment-label">
                                            <input class="cart__payment-checkbox" type="radio" value="2"
                                                name="pay-checkbox">
                                            <img class="cart__payment-image" src="./img/payment/card_up_ru.svg" alt="">
                                            <p class="cart__payment-subtitle">Банковская карта</p>
                                        </label>
                                    </li>

                                    <li class="cart__payment-item">
                                        <label class="cart__payment-label">
                                            <input class="cart__payment-checkbox" type="radio" value="3"
                                                name="pay-checkbox">
                                            <img class="cart__payment-image" src="./img/payment/card_tf.svg" alt="">
                                            <p class="cart__payment-subtitle">Банковская карта</p>
                                        </label>
                                    </li>

                                    <li class="cart__payment-item">
                                        <label class="cart__payment-label">
                                            <input class="cart__payment-checkbox" type="radio" value="4"
                                                name="pay-checkbox">
                                            <img class="cart__payment-image" src="./img/payment/qiwi.svg" alt="">
                                            <p class="cart__payment-subtitle">QIWI Кошелек</p>
                                        </label>
                                    </li>

                                    <li class="cart__payment-item">
                                        <label class="cart__payment-label">
                                            <input class="cart__payment-checkbox" type="radio" value="5"
                                                name="pay-checkbox">
                                            <img class="cart__payment-image" src="./img/payment/ym.svg" alt="">
                                            <p class="cart__payment-subtitle">ЮMoneyк</p>
                                        </label>
                                    </li>

                                    <li class="cart__payment-item">
                                        <label class="cart__payment-label">
                                            <input class="cart__payment-checkbox" type="radio" value="6"
                                                name="pay-checkbox">
                                            <img class="cart__payment-image" src="./img/payment/webmoney.svg" alt="">
                                            <p class="cart__payment-subtitle">WebMoney</p>
                                        </label>
                                    </li>

                                    <li class="cart__payment-item">
                                        <label class="cart__payment-label">
                                            <input class="cart__payment-checkbox" type="radio" value="7"
                                                name="pay-checkbox">
                                            <img class="cart__payment-image" src="./img/payment/bitcoin.svg" alt="">
                                            <p class="cart__payment-subtitle">Криптовалюта</p>
                                        </label>
                                    </li>

                                    <li class="cart__payment-item">
                                        <label class="cart__payment-label">
                                            <input class="cart__payment-checkbox" type="radio" value="8"
                                                name="pay-checkbox">
                                            <img class="cart__payment-image" src="./img/payment/mobile.svg" alt="">
                                            <p class="cart__payment-subtitle">Баланс телефона</p>
                                        </label>
                                    </li>

                                    <li class="cart__payment-item">
                                        <label class="cart__payment-label">
                                            <input class="cart__payment-checkbox" type="radio" value="9"
                                                name="pay-checkbox">
                                            <img class="cart__payment-image" src="./img/payment/cash.svg" alt="">
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
                                    <div class="form-error">Необходимо заполнить пустое поле</div>
                                </label>

                            </div>

                            <div class="cart__form-total">
                                сумма
                                <span class="cart-total-price">
                                    0
                                </span>
                                грн.
                            </div>

                            <button class="form-btn" id="submit_total-order" type="submit" value="reset">Оформить заказ</button>

                        </form>
                    </div>

                </div>

            </div>
        </div>
@endsection