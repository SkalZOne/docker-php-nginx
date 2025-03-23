<?php

$client = new \Predis\Client(
    [
        ["host" => "83.222.27.169", "port" => 6379],
        ["host" => "217.114.10.239", "port" => 6379]
    ],
    ['cluster' => 'redis']
);

$client->set('foo', 'bar');

$value = $client->get('foo');

var_dump($value);