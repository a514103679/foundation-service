<?php
return [
    'rabbitmq_queue' => env('RABBITMQ_QUEUE',''),
    'rabbitmq_host' => env('RABBITMQ_HOST','127.0.0.1'),
    'rabbitmq_port' => env('RABBITMQ_PORT','5672'),
    'rabbitmq_vhost' => env('RABBITMQ_VHOST','/'),
    'rabbitmq_login' => env('RABBITMQ_LOGIN','guest'),
    'rabbitmq_password' => env('RABBITMQ_PASSWORD','guest'),
];