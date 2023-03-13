<?php

require_once __DIR__.'/../vendor/autoload.php';

$token = new \Payconn\Nestpay\Token('100100000', 'AKTESTAPI', 'AKBANK01');
$refund = new \Payconn\Nestpay\Model\Refund();
$refund->setTestMode(true);
$refund->setOrderId('ORDER-19151V8FE19458');
$refund->setAmount('1');
$response = (new \Payconn\AkBank($token))->refund($refund);
print_r([
    'isSuccessful' => $response->isSuccessful(),
    'message' => $response->getResponseMessage(),
    'code' => $response->getResponseCode(),
]);
