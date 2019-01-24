<?php
/**
 *  ==================================================================
 *        文 件 名: index.php
 *        概    要: API文档 By ApiResultUI
 *        作    者: 火离
 *        创建时间: 2019/1/5 9:48
 *        修改时间:
 *        copyright (c) 2019 toolzone@163.com
 *  ==================================================================
 */
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/test1.php'; // 加载测试API类1
require_once __DIR__ . '/test2.php'; // 加载测试API类2
$config = [
    'class'         => ['Test1', 'Test2'], // 要生成文档的类
    'filter_method' => ['__construct'], // 要过滤的方法名称
];
$api = new \ApiResult\BootstrapApiResult($config);
$doc = $api->getHtml();
exit($doc);

