@extends('layouts.app')

@section('title', 'Public API')
@section('description', '')

@section('styles')
@endsection

@section('content')
        <div class="public">
            <div class="container">

                <div class="public__inner">

                    <ul class="public__list">

                        <li class="public__list-item">

                            <div class="public__inner-title">
                                Документация API
                            </div>

                            <dl class="public__table">
                                <dt class="public__table-title title-none">
                                    Ссылка
                                </dt>
                                <dd class="public__table-info">
                                    https://mrpopular.net/api/v2.php
                                </dd>
                                <dt class="public__table-title">
                                    Запросы
                                </dt>
                                <dd class="public__table-info">
                                    POST / GET / JSON
                                </dd>
                                <dt class="public__table-title">
                                    Ответы
                                </dt>
                                <dd class="public__table-info">
                                    JSON
                                </dd>
                            </dl>

                        </li>

                        <li class="public__list-item">

                            <dl class="public__table">
                                <dt class="public__table-title">
                                    Авторизация
                                </dt>
                                <dd class="public__table-info">
                                    username
                                </dd>
                                <dd class="public__table-info">
                                    password
                                </dd>
                            </dl>

                        </li>

                        <li class="public__list-item">

                            <dl class="public__table">
                                <dt class="public__table-title">
                                    Узнать баланс
                                </dt>
                                <dd class="public__table-info">
                                    action = balance
                                </dd>
                                <dd class="public__table-info">
                                    currency = USD
                                </dd>
                                <dd class="public__table-info">
                                    {"balance":123.456}
                                </dd>
                            </dl>

                        </li>

                        <li class="public__list-item">

                            <dl class="public__table">
                                <dt class="public__table-title">
                                    Узнать статус заказа
                                </dt>
                                <dd class="public__table-info">
                                    action = status
                                </dd>
                                <dd class="public__table-info">
                                    order = (номер заказа)
                                </dd>
                                <dd class="public__table-info">
                                    {"order":{"status":"2","completed":"0","quantity":"250","date":"2018-09-27
                                    17:34:49"}}
                                </dd>
                            </dl>

                        </li>

                        <li class="public__list-item">

                            <dl class="public__table">
                                <dt class="public__table-title">
                                    Получить список услуг
                                </dt>
                                <dd class="public__table-info">
                                    action = service
                                </dd>
                                <dd class="public__table-info">
                                    {"service":{"1":{"social_network":"Facebook","service":"page
                                    likes","quality":"medium
                                    quality","id":"1","price":0.0149,"currency":"USD","min":"100"},...}}
                                </dd>
                            </dl>

                        </li>

                        <li class="public__list-item">

                            <dl class="public__table">
                                <dt class="public__table-title">
                                    Статусы заказа
                                </dt>
                                <dd class="public__table-info">
                                    0 : выполняется, нет статистики
                                </dd>

                                <dd class="public__table-info">
                                    1 : выполняется, есть статистика
                                </dd>

                                <dd class="public__table-info">
                                    2 : выполнен
                                </dd>

                                <dd class="public__table-info">
                                    3 : ошибка
                                </dd>

                                <dd class="public__table-info">
                                    4 : в очереди
                                </dd>

                                <dd class="public__table-info">
                                    5 : возвращен
                                </dd>

                            </dl>

                        </li>

                        <li class="public__list-item">

                            <dl class="public__table">
                                <dt class="public__table-title">
                                    Новый заказ
                                </dt>
                                <dd class="public__table-info">
                                    action = order
                                </dd>

                                <dd class="public__table-info">
                                    service = (ID услуги)
                                </dd>

                                <dd class="public__table-info">
                                    quantity = количество
                                </dd>

                                <dd class="public__table-info">
                                    option = вариант (в опросе и т.п.)
                                </dd>

                                <dd class="public__table-info">
                                    comment
                                </dd>

                                <dd class="public__table-info">
                                    link = ссылка
                                </dd>

                                <dd class="public__table-info">
                                    {"order":"142058"}
                                </dd>

                            </dl>

                        </li>

                        <li class="public__list-item">

                            <dl class="public__table">
                                <dt class="public__table-title">
                                    Ошибки
                                </dt>
                                <dd class="public__table-info">
                                    {"errorcode":1} USERNAME или PASSWORD не отправлен
                                </dd>

                                <dd class="public__table-info">
                                    {"errorcode":2} ACTION не отправлен
                                </dd>

                                <dd class="public__table-info">
                                    {"errorcode":3} Выбранная валюта недоступна
                                </dd>

                                <dd class="public__table-info">
                                    {"errorcode":4} Не отправлен номер заказа
                                </dd>

                                <dd class="public__table-info">
                                    {"errorcode":5} Неверный номер заказа
                                </dd>

                                <dd class="public__table-info">
                                    {"errorcode":6} SERVICE не отправлен
                                </dd>

                                <dd class="public__table-info">
                                    {"errorcode":7} Не отправлено количество
                                </dd>

                                <dd class="public__table-info">
                                    {"errorcode":8} Не отправлена ссылка
                                </dd>

                                <dd class="public__table-info">
                                    {"errorcode":9} Не хватает средств на балансе
                                </dd>

                                <dd class="public__table-info">
                                    {"errorcode":10} Количество меньше минимального
                                </dd>

                            </dl>

                        </li>

                        <li class="public__list-item">

                            <dl class="public__table">
                                <dt class="public__table-title">
                                    Пример кода php
                                </dt>
                                <dd class="public__table-code">
                                    <pre>
                                            class Api
                                            {
                                            //настройки
                                            public $api_url = 'https://mrpopular.net/api/v2.php'; // ссылка для API
                                            public $username = ''; //ваш username
                                            public $password = ''; //ваш password
                                            public $currency = 'USD';
                                
                                                public function order($data) { // добавить заказ
                                                    $post = array_merge(array(
                                                    'username' => $this->username, 
                                                    'password' => $this->password,
                                                    'action' => 'order'
                                                    ), $data);
                                                    return json_decode($this->connect($post));
                                                }
                                
                                                public function status($order) { // получить статус заказа
                                                    return json_decode($this->connect(array(
                                                        'username' => $this->username, 
                                                        'password' => $this->password,
                                                        'action' => 'status',
                                                        'order' => $order
                                                    )));
                                                }
                                
                                                public function service() { // получить список услуг
                                                    return json_decode($this->connect(array(
                                                        'username' => $this->username, 
                                                        'password' => $this->password,
                                                        'action' => 'service',
                                                    )));
                                                }
                                
                                                public function balance() { // получить баланс
                                                    return json_decode($this->connect(array(
                                                        'username' => $this->username, 
                                                    'password' => $this->password,
                                                        'action' => 'balance',
                                                    )));
                                                }
                                
                                
                                                function connect($post) {
                                                    $_post = Array();
                                                    if (is_array($post)) {
                                                        foreach ($post as $name => $value) {
                                                            $_post[] = $name.'='.urlencode($value);
                                                        }
                                                    }
                                
                                                    $ch = curl_init($this->api_url);
                                                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                                    curl_setopt($ch, CURLOPT_POST, 1);
                                                    curl_setopt($ch, CURLOPT_HEADER, 0);
                                                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                                                    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                                                    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                                                    if (is_array($post)) {
                                                        curl_setopt($ch, CURLOPT_POSTFIELDS, join('&', $_post));
                                                    }
                                                    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');
                                                    $result = curl_exec($ch);
                                                    if (curl_errno($ch) != 0 && empty($result)) {
                                                        $result = false;
                                                    }
                                                    curl_close($ch);
                                                    return $result;
                                                }
                                            }
                                
                                            //запускаем API
                                            $api = new Api();
                                
                                            //проверить баланс
                                            /*$balance = $api->balance();
                                            print_r($balance);*/
                                
                                            //новый заказ
                                            /*$order = $api->order(array(
                                            'service' => 462, 
                                            'quantity' => $qnty, 
                                            'link' => $src
                                            ));
                                            print_r($order);*/
                                
                                            //статус заказа
                                            /*$status = $api->status(12232);
                                            print_r($status);*/
                                
                                            //service list
                                            /*$service = $api->service();
                                            print_r($service);*/
                                        
                                        </pre>
                                </dd>
                            </dl>

                        </li>


                    </ul>

                </div>

            </div>
        </div>
@endsection