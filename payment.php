<?php

use PayPal\Api\Payment;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

require 'vendor/autoload.php';
$ids = require('paypal.php');

$apiContext = new ApiContext(
    new OAuthTokenCredential(
        $ids['id'],
        $ids['secret']
    )
);

$payment = new Payment('');
$payment->create($apiContext);
echo $payment->getApprovalLink();