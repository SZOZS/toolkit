<?php
return [
    # 连接信息
    'AMQP' => [
        [
            'host' => '192.168.0.1',
            'port' => '5672',
            'login' => 'admin',
            'password' => '123456',
            'vhost' => '/',
            'proportion' => 4
        ],
        [
            'host' => '192.168.0.2',
            'port' => '5672',
            'login' => 'admin',
            'password' => '123456',
            'vhost' => '/',
            'proportion' => 6
        ],
    ],
];
