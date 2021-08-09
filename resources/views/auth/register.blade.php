@extends('layouts.app')

@section('title', 'Max Up | Продвижение и накрутка в социальных сетях: SMM маркетинг, сервис PR')
@section('description', 'Сервис по накрутке Maxup предлагает качественное продвижение в социальных сетях. SMM раскрутка по низким ценам.')

@section('styles')
@endsection

@section('content')
        <div class="container">
            <div class="register__content height-content">

                <form class="reg-form form" action="{{ Route('register') }}" method="post" id="reg_form" novalidate>
    
                    <div class="lng-reg-title form__title">Заполните данные для входа</div>
                    
                    <div class="form-group">
                        <input type="text" class="form-input _login _req" id="username_reg" name="name" required>
                        <label class="lng-login form-label" for="username_reg">Логин*</label>
                        <div class="form-error"></div>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-input _email _req" id="email_reg" name="email" required>
                        <label class="lng-email form-label" for="email_reg">Почта*</label>
                        <div class="form-error"></div>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-input _password _req" id="password_reg" name="password" required>
                        <label class="lng-password form-label" for="password_reg" >Пароль* <span class="password-span"></span></label>
                        <div class="form-error"></div>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-input _password _req" id="password_confirmation" name="password_confirmation" required>
                        <label class="lng-password form-label" for="password_confirmation" >Повторите пароль* <span class="password-span"></span></label>
                        <div class="form-error"></div>
                    </div>
    
                    <div class="form-group-check">

                        <label>
                          <input class="form-control form-checkbox _req" name="checkbox" type="checkbox" required>
                          <span class="form-checkstyle"></span>
                          <span class="lng-terms form-terms">Регистрируясь, Вы принимаете <a class="lng-rules form-terms_rules" href="{{ Route('terms') }}">правила сервиса</a></span>
                          <div class="form-error"></div>
                        </label>
                        
                      </div>

                    <button class="lng-reg-btn form-btn" id="submit_reg" type="submit" value="reset">Зарегистрироваться</button>
    
                    <div class="register__login">
                        <p class="register__login-text">
                            У меня уже есть аккаунт,
                            <a class="register__login-link" href="{{ Route('login') }}">войти</a>
                        </p>
                    </div>
                      
                </form>
    
            </div>
        </div>
@endsection