@extends('layouts.app')

@section('title', 'Max Up | Продвижение и накрутка в социальных сетях: SMM маркетинг, сервис PR')
@section('description', 'Сервис по накрутке Maxup предлагает качественное продвижение в социальных сетях. SMM раскрутка по низким ценам.')

@section('styles')
@endsection

@section('content')
        <div class="product__inner height-content">
            <div class="product__items">

                <div class="product__item">
                    <div class="product__item-block">
                        <a class="product__item-link" href="/instagram">
                            <img src="{{ asset('img/service/instagram.svg') }}" alt="instagram">
                            <div class="item__overlay">
                                <h3 class="item__overlay-title">Instagram</h3>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
@endsection