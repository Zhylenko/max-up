@extends('layouts.app')

@section('title', 'Reseller API')
@section('description', '')

@section('styles')
@endsection

@section('content')
        <div class="reseller">
            <div class="container">

                <div class="public__inner">

                    <div class="public__inner-info">
                        To activate the Reseller API, write to the
                        <span>
                            <a class="public__inner-link" href="{{ Route('support') }}">support service.</a>
                        </span>
                        You must have at least $1,000 on your balance.
                    </div>

                    <ul class="public__list">

                        <li class="public__list-item">

                            <div class="public__inner-title">
                                API documentation
                            </div>

                            <dl class="public__table">
                                <dt class="public__table-title title-none">
                                    URL
                                </dt>
                                <dd class="public__table-info">
                                    https://mrpopular.net/api/v3.php
                                </dd>
                                <dt class="public__table-title">
                                    Request
                                </dt>
                                <dd class="public__table-info">
                                    POST / GET / JSON
                                </dd>
                                <dt class="public__table-title">
                                    Response
                                </dt>
                                <dd class="public__table-info">
                                    JSON
                                </dd>
                            </dl>

                        </li>

                        <li class="public__list-item">

                            <dl class="public__table">
                                <dt class="public__table-title">
                                    Authorisation
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
                                    Get balance
                                </dt>
                                <dd class="public__table-info">
                                    action = balance
                                </dd>
                                <dd class="public__table-info">
                                    {"balance":123.456}
                                </dd>
                            </dl>

                        </li>

                        <li class="public__list-item">

                            <dl class="public__table">
                                <dt class="public__table-title">
                                    Get order status
                                </dt>
                                <dd class="public__table-info">
                                    action = status
                                </dd>
                                <dd class="public__table-info">
                                    order = (Order id)
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
                                    Get service list
                                </dt>
                                <dd class="public__table-info">
                                    action = service
                                </dd>
                                <dd class="public__table-info">
                                    {"service":{"1":{"social_network":"Facebook","service":"page
                                    likes","quality":"medium
                                    quality","id":"1","price":0.0149,"currency":"USD","min":"100","max":"900000","start":"30
                                    min.","speed":"100/day","description":"HQ never drop"},...}}
                                </dd>
                            </dl>

                        </li>

                        <li class="public__list-item">

                            <dl class="public__table">
                                <dt class="public__table-title">
                                    Order status decryption
                                </dt>
                                <dd class="public__table-info">
                                    0 : Pending/Processing
                                </dd>

                                <dd class="public__table-info">
                                    1 : Processing
                                </dd>

                                <dd class="public__table-info">
                                    2 : Completed
                                </dd>

                                <dd class="public__table-info">
                                    3 : Error
                                </dd>

                                <dd class="public__table-info">
                                    4 : In queue
                                </dd>

                                <dd class="public__table-info">
                                    5 : Returned
                                </dd>

                            </dl>

                        </li>

                        <li class="public__list-item">

                            <dl class="public__table">
                                <dt class="public__table-title">
                                    New order
                                </dt>
                                <dd class="public__table-info">
                                    action = order
                                </dd>

                                <dd class="public__table-info">
                                    service = (Service ID)
                                </dd>

                                <dd class="public__table-info">
                                    quantity
                                </dd>

                                <dd class="public__table-info">
                                    option
                                </dd>

                                <dd class="public__table-info">
                                    comment
                                </dd>

                                <dd class="public__table-info">
                                    link
                                </dd>

                                <dd class="public__table-info">
                                    {"order":"142058"}
                                </dd>

                            </dl>

                        </li>

                        <li class="public__list-item">

                            <dl class="public__table">
                                <dt class="public__table-title">
                                    Errors
                                </dt>
                                <dd class="public__table-info">
                                    {"errorcode":0} API is not activated
                                </dd>

                                <dd class="public__table-info">
                                    {"errorcode":1} USERNAME or PASSWORD is empty
                                </dd>

                                <dd class="public__table-info">
                                    {"errorcode":2} ACTION is empty
                                </dd>

                                <dd class="public__table-info">
                                    {"errorcode":4} ORDER is empty
                                </dd>

                                <dd class="public__table-info">
                                    {"errorcode":5} wrong ORDER
                                </dd>

                                <dd class="public__table-info">
                                    {"errorcode":6} SERVICE is empty
                                </dd>

                                <dd class="public__table-info">
                                    {"errorcode":7} QUANTITY is empty
                                </dd>

                                <dd class="public__table-info">
                                    {"errorcode":8} LINK is empty
                                </dd>

                                <dd class="public__table-info">
                                    {"errorcode":9} Not enough funds on balance
                                </dd>

                                <dd class="public__table-info">
                                    {"errorcode":10} Quantity less than minimum
                                </dd>

                            </dl>

                        </li>

                        <li class="public__list-item">

                            <dl class="public__table">
                                <dt class="public__table-title">
                                    Examples of php code
                                </dt>
                                <dd class="public__table-code">
                                    <pre>
                                    class Api
                                    {
                                      //config
                                      public $api_url = 'https://mrpopular.net/api/v3.php'; // API URL
                                      public $username = ''; //your username
                                      public $password = ''; //your password
                        
                                        public function order($data) { // add order
                                            $post = array_merge(array(
                                              'username' => $this->username, 
                                              'password' => $this->password,
                                              'action' => 'order'
                                            ), $data);
                                            return json_decode($this->connect($post));
                                        }
                        
                                        public function status($order) { // get order status
                                            return json_decode($this->connect(array(
                                                'username' => $this->username, 
                                                'password' => $this->password,
                                                'action' => 'status',
                                                'order' => $order
                                            )));
                                        }
                        
                                        public function service() { // get service list
                                            return json_decode($this->connect(array(
                                                'username' => $this->username, 
                                                'password' => $this->password,
                                                'action' => 'service',
                                            )));
                                        }
                        
                                        public function balance() { // get balance
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
                        
                                    //start API
                                    $api = new Api();
                        
                                    //check balance
                                    /*$balance = $api->balance();
                                    print_r($balance);*/
                        
                                    //new order
                                    /*$order = $api->order(array(
                                      'service' => 462, 
                                      'quantity' => $qnty, 
                                      'link' => $src
                                    ));
                                    print_r($order);*/
                        
                                    //order status
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