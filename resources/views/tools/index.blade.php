@extends('layouts.app')

@section('title', 'Инструменты')
@section('description', '')

@section('styles')
@endsection

@section('content')
        <div class="product__inner height-content">
            <div class="product__items">

                <div class="product__item">
                    <div class="product__item-block">
                        <a class="product__item-link" href="/tools-symtext">
                            <img src="{{ asset('img/tools/symb-in-text.svg') }}" alt="">
                            <div class="item__overlay">
                                <h3 class="item__overlay-title">Количество символов и слов в тексте</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="product__item">
                    <div class="product__item-block">
                        <a class="product__item-link" href="/tools-stroketext">
                            <img src="{{ asset('img/tools/symb-in-text.svg') }}" alt="">
                            <div class="item__overlay">
                                <h3 class="item__overlay-title">Количество строк в тексте</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="product__item">
                    <div class="product__item-block">
                        <a class="product__item-link" href="/tools-seotext">
                            <img src="{{ asset('img/tools/seo-text.svg') }}" alt="">
                            <div class="item__overlay">
                                <h3 class="item__overlay-title">SEO анализ текста</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="product__item">
                    <div class="product__item-block">
                        <a class="product__item-link" href="/tools-download-photo">
                            <img src="{{ asset('img/tools/photo.svg') }}" alt="">
                            <div class="item__overlay">
                                <h3 class="item__overlay-title">Скачать фото с Инстаграм</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="product__item">
                    <div class="product__item-block">
                        <a class="product__item-link" href="punycode-into-idn">
                            <img src="{{ asset('img/tools/punycode.svg') }}" alt="">
                            <div class="item__overlay">
                                <h3 class="item__overlay-title">Punycode в IDN</h3>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
@endsection