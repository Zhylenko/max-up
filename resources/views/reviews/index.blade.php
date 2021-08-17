@extends('layouts.app')

@section('title', 'Отзывы')
@section('description', '')

@section('styles')
@endsection

@section('content')
        <div class="support">
            <div class="container">

                <div class="promocode__default" id="reviews-default" style="display: block;">

                    <form class="support__form" id="reviews-form" action="#">

                        <div class="support__form-title">
                            Оставь свой отзыв
                        </div>

                        <div class="textarea-group">
                            <textarea class="textarea review-textarea" name="textarea" placeholder="написать..."
                                style="resize: none;"></textarea>
                        </div>

                        <button class="form-btn" id="submit_review" type="submit" value="reset">Опубликовать
                            отзыв</button>

                        <div class="form-error" style="display: none;"></div>

                    </form>

                </div>

                <div class="support__inner review__inner">

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
                                    Большое спасибо
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
                                    Пару часов назад заказал 1000 подписчиков на ютуб.
                                    Накрутка долгая, как по мне, но идут стабильно.
                                    Менеджер в тех поддержке оказался чуваком общительным, это порадовало)
                                    Жду когда закончится накрутка, наверное 5К ещё закажу
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