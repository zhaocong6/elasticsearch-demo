<?php

require './vendor/autoload.php';

$client = \Elasticsearch\ClientBuilder::create()->build();

//创建一个索引

$params = [
    'index'=>'my_index',
    'type'=>'my_type',
    'id'=>'my_id',
    'body'=>[
        'id'=>1,
        'name'=>'tom',
        'address'=>'四川省成都市'
    ]
];

dd($params);
