<?php
/**
 * Created by PhpStorm.
 * User: aping
 * Date: 2017/6/14
 * Time: 17:03
 */

require '../vendor/autoload.php';

$alisms = new \Palisms\Alisms([
    'app_key' => '23471566',
]);

$send = new \Palisms\Request\Sms\Send();
$send->setSmsFreeSignName('测试');
$send->setRecNum(['18870887449', '18870887449']);
$send->setSmsTemplateCode('sms_65464');

$alisms->request($send);

print_r($alisms->currentRequest()->data());