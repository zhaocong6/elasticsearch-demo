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

$response = $client->index($params);
dump($response);


//获取一个文档
$params = [
    'index'=>'my_index',
    'type'=>'my_type',
    'id'=>'my_id',
];

$response = $client->get($params);
dump($response);

//搜索一个文档
$params = [
    'index'=>'my_index',
    'type'=>'my_type',
    'body'=>[
        'query'=>[
            'match'=>[
                'address'=>'成都'
            ]
        ]
    ]
];

$response = $client->search($params);
dump($response);


//删除一个文档
$params = [
    'index'=>'my_index',
    'type'=>'my_type',
    'id'=>'my_id'
];

$response = $client->delete($params);
dump($response);

//删除索引
$params = [
    'index'=>'my_index'
];
//$response = $client->indices()->delete($params);
//dump($response);