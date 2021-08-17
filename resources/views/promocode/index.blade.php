@extends('layouts.app')

@section('title', 'Активация промокода')
@section('description', '')

@section('styles')
@endsection

@section('content')
        <div class="promocode">
            <div class="container">

                <div class="promocode__default">

                    <p class="promocode__default-text">
                        Активируйте промокод для бесплатного пополнения баланса
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

                <div class="promocode__inner">

                    <p class="promocode__default-text">
                        Активируйте промокод для бесплатного пополнения баланса
                    </p>

                    <form class="promocode__form" id="promo" action="#" novalidate>
                        <div class="form-group">
                            <input type="text" class="form-input _promocode _req" id="promocode" name="promocode" required>
                            <label class="form-label" for="promocode">Промокод</label>
                            <div class="form-error"></div>
                        </div>

                        <button class="form-btn" id="submit_promocode" type="submit" value="reset">Активировать промокод</button>
                    </form>

                </div>

            </div>
        </div>
@endsection