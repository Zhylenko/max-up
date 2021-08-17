@extends('layouts.app')

@section('title', 'Служба поддержки')
@section('description', '')

@section('styles')
@endsection

@section('content')
        <div class="support">
            <div class="container">

                <div class="promocode__default" id="support-default">

                    <p class="promocode__default-text">
                        Служба поддержки
                    </p>

                    <div class="register__login">
                        <p class="register__login-text">
                            Сначало нужно
                            <a class="register__login-link" href="{{ Route('login') }}">войти</a>
                            или
                            <a class="register__login-link" href="{{ Route('register') }}">зарегистрироваться</a>
                        </p>
                    </div>

                </div>

                <div class="support__inner">

                    <form class="support__form" action="#">

                        <div class="support__form-title">
                            Опишите проблему
                        </div>

                        <div class="support__form-subtitle">
                            если проблема связана с заказом, укажите ID из
                            <span>
                                <a class="support___form-link" href="{{ Route('history') }}">истории заказов</a>
                            </span>
                        </div>

                        <div class="textarea-group">
                            <textarea class="textarea" name="textarea" placeholder="написать..."
                                style="resize: none;"></textarea>
                        </div>

                        <button class="form-btn" id="submit_support" type="submit" value="reset">Отправить
                            запрос</button>

                    </form>

                    <ul class="support__list">

                        <li class="support__list-item">

                            <div class="support__list-top">
                                <div class="support__list-top_name">
                                    Unknown
                                </div>
                                <div class="support__list-top_time">
                                    <span class="support-data">01.06.2021</span>
                                    <span class="support-time">10:35</span>
                                </div>
                            </div>

                            <div class="support__list-text">
                                <p class="support__list-message">
                                    Простой тест формы, не обращайте внимание :)
                                </p>
                            </div>

                        </li>

                        <li class="support__list-item">

                            <div class="support__list-top">
                                <div class="support__list-top_name">
                                    Unknown
                                </div>
                                <div class="support__list-top_time">
                                    <span class="support-data">01.06.2021</span>
                                    <span class="support-time">10:35</span>
                                </div>
                            </div>

                            <div class="support__list-text">
                                <p class="support__list-message">
                                    Простой тест формы, не обращайте внимание :)
                                </p>
                            </div>

                        </li>

                        <li class="support__list-item">

                            <div class="support__list-top">
                                <div class="support__list-top_name">
                                    Unknown
                                </div>
                                <div class="support__list-top_time">
                                    <span class="support-data">01.06.2021</span>
                                    <span class="support-time">10:35</span>
                                </div>
                            </div>

                            <div class="support__list-text">
                                <p class="support__list-message">
                                    Простой тест формы, не обращайте внимание :)
                                </p>
                            </div>

                        </li>

                    </ul>
                </div>
            </div>
        </div>
@endsection