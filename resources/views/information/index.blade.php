@extends('layouts.app')

@section('title', 'Информация')
@section('description', '')

@section('styles')
@endsection

@section('content')
        <div class="info">
            <div class="container">

                <div class="info__inner">

                    <div class="info__about">

                        <div class="info__about-title" id="info-titles">
                            О компании
                        </div>

                        <div class="info__about-text">
                            <p class="info__about-p">
                                Вы нашли нас, и читаете этот текст. Не этого ли вы хотите и для себя? Мы поможем вам добиться этого ;)
                            </p>
                            <p class="info__about-p">
                                Наш дружный коллектив решит любую Вашу задачу. Мы любим рекламу. Мы делаем рекламу интересной. Такой, чтобы ее читали до конца.
                            </p>
                        </div>

                    </div>

                    <div class="info__docs">

                        <div class="info__docs-title" id="info-titles">
                            Документы
                        </div>

                        <ul class="info__docs-list" id="info-list">

                            <li class="info__docs-item" id="info-item">
                                <a class="info__docs-link" href="https://maxup.com.ua/docs/ru_offer.pdf">
                                    Публичная оферта
                                </a>
                            </li>

                            <li class="info__docs-item" id="info-item">
                                <a class="info__docs-link" href="https://maxup.com.ua/docs/ru_agreement.pdf">
                                    Пользовательское соглашение
                                </a>
                            </li>

                            <li class="info__docs-item" id="info-item">
                                <a class="info__docs-link" href="https://maxup.com.ua/docs/ru_privacy.pdf">
                                    Политика конфиденциальности
                                </a>
                            </li>

                        </ul>

                    </div>

                    <div class="info__socials">

                        <div class="info__socials-title" id="info-titles">
                            Мы в соцсетях
                        </div>

                        <ul class="info__socials-list" id="info-list">

                            <li class="info__socials-item" id="info-item">
                                <a class="info__socials-link" href="https://t.me/maxupcomua">
                                    Telegram
                                </a>
                            </li>

                            <li class="info__socials-item" id="info-item">
                                <a class="info__socials-link" href="mailto:support@maxup.com.ua">
                                    Email
                                </a>
                            </li>

                            <li class="info__socials-item" id="info-item">
                                <a class="info__socials-link" href="https://www.instagram.com/maxup.com.ua">
                                    Instagram
                                </a>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>
        </div>
@endsection