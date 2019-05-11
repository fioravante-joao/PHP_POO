<?php

include __DIR__ . '/vendor/autoload.php';

$pagarme = new PagarMe\Client('ak_test_AStN4kWEaXluDZpynpSWQXBZIUjpRy');

$transacao =  $pagarme->transactions()->get([
    'id' => '6337487'
]);

echo $transacao->status;