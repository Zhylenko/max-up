@extends('layouts.app')

@section('title', 'Бесплатное продвижение')
@section('description', '')

@section('styles')
@endsection

@section('content')
        <div class="getfree">
            <div class="container">

                <div class="partnership__inner">

                    <div class="partnership__inner-title">
                        Бесплатное продвижение и накрутка
                    </div>

                    <div class="partnership__inner-images">
                        <img class="partnership__inner-img" src="{{ asset('img/header.webp') }}" alt="">
                    </div>

                    <div class="partnership__inner-text">
                        <dl class="public__table">
                            <dt class="public__table-title" id="no-radius">
                                Ниже представлен список всех способов бесплатной накрутки
                            </dt>
                            <dd class="public__table-info">
                                Накрутить
                                <span>
                                    <a class="getfree__table-link" href="{{ asset('getfree/getfree-instagram-likes') }}">
                                        бесплатные лайки в Инстаграм.
                                    </a>
                                </span>
                            </dd>
                            <dd class="public__table-info">
                                Накрутить
                                <span>
                                    <a class="getfree__table-link" href="{{ asset('getfree/getfree-instagram-followers') }}">
                                        бесплатных подписчиков в Инстаграм.
                                    </a>
                                </span>
                            </dd>
                            <dd class="public__table-info">
                                Накрутить
                                <span>
                                    <a class="getfree__table-link" href="{{ asset('getfree/getfree-tt-followers') }}">
                                        бесплатных подписчиков в TT.
                                    </a>
                                </span>
                            </dd>
                            <dd class="public__table-info">
                                Накрутить
                                <span>
                                    <a class="getfree__table-link" href="{{ asset('getfree/getfree-tt-views') }}">
                                        бесплатные просмотры в TT.
                                    </a>
                                </span>
                            </dd>
                            <dd class="public__table-info">
                                Накрутить
                                <span>
                                    <a class="getfree__table-link" href="{{ asset('getfree/getfree-tt-likes') }}">
                                        бесплатные лайки в TT.
                                    </a>
                                </span>
                            </dd>
                            <dd class="public__table-info">
                                Накрутить
                                <span>
                                    <a class="getfree__table-link" href="{{ asset('getfree/getfree-vk-followers') }}">
                                        бесплатных подписчиков ВКонтакте.
                                    </a>
                                </span>
                            </dd>
                            <dd class="public__table-info">
                                Накрутить
                                <span>
                                    <a class="getfree__table-link" href="{{ asset('getfree/getfree-vk-views') }}">
                                        бесплатные просмотры ВКонтакте.
                                    </a>
                                </span>
                            </dd>
                            <dd class="public__table-info">
                                Накрутить
                                <span>
                                    <a class="getfree__table-link" href="{{ asset('getfree/getfree-vk-likes') }}">
                                        бесплатные лайки ВКонтакте.
                                    </a>
                                </span>
                            </dd>
                            <dd class="public__table-info">
                                Накрутить
                                <span>
                                    <a class="getfree__table-link" href="{{ asset('getfree/getfree-tg-followers') }}">
                                        бесплатных подписчиков в Telegram.
                                    </a>
                                </span>
                            </dd>
                            <dd class="public__table-info">
                                Получить
                                <span>
                                    <a class="getfree__table-link" href="{{ asset('getfree/getfree-smm-boost') }}">
                                        бесплатное продвижение
                                    </a>
                                </span>
                                за рекламу нашего сервиса.
                            </dd>
                        </dl>
                    </div>

                </div>

                <div class="partnership__inner-materials">
                    <a class="partnership__inner-link" href="https://maxup.com.ua/MaxUp.zip">
                        Рекламные материалы
                    </a>
                </div>

            </div>
        </div>
@endsection