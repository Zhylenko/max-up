@extends('layouts.app')

@section('title', 'Max Up | Продвижение и накрутка в социальных сетях: SMM маркетинг, сервис PR')
@section('description', 'Сервис по накрутке Maxup предлагает качественное продвижение в социальных сетях. SMM раскрутка по низким ценам.')

@section('styles')
@endsection

@section('content')
        <div class="login__content height-content">
            <div class="container">
                <form class="login__form form" id="login__form" action="{{ Route('login') }}" method="post" novalidate>
                    <div class="lng-reg-title form__title">Заполните данные для входа</div>
    
                    <div class="form-group">
                        <input type="mail" class="form-input _login _req" id="username_reg" name="email" required>
                        <label class="lng-login-mail form-label" for="username_reg">Почта</label>
                        <div class="form-error"></div>
                    </div>
    
                    <div class="form-group">
                        <input type="password" class="form-input _password _req" id="password_reg" name="password" required>
                        <label class="lng-password form-label" for="password_reg" >Пароль <span class="password-span"></span></label>
                        <div class="form-error"></div>
                    </div>

                    <button class="lng-reg-btn form-btn" id="submit_reg" type="submit" value="reset">Войти</button>

                    <div class="register__login login__register">
                        <p class="register__login-text">
                            У меня нету аккаунта,
                            <a class="register__login-link" href="{{ Route('register') }}">зарегистрироваться</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
@endsection