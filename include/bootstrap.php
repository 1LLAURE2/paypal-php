<?php
    require __DIR__  . '/vendor/autoload.php';

    use PayPal\Rest\ApiContext;
    use PayPal\Auth\OAuthTokenCredential;

    $clienteIdPaypal ="AclrqJmCqjfM8ci18L3WG3UXBbR6eXe1_zJVm8Oo1zYYpamouLFyx7yQZyc1k4Tg0RW9bGjpf5T24opW";
    $llaveSecretaPaypal = "ELOfsvh7iXfdIo_v1tHshoVX4EgBWu7Pl_a2AJ48LRWsxGEz6wZ-GxQBT5qVUjJ_nUS851yTqSaxpNcg";

    $apiContext = new ApiContext(
        new OAuthTokenCredential(
            $clienteIdPaypal,
            $llaveSecretaPaypal
        )
    );

    $apiContext->setConfig(
        array(
            'mode' => 'sandbox',
            'log.LogEnabled' => true,
            'log.FileName' => 'PayPal.log',
            'log.LogLevel' => 'DEBUG',
            'http.CURLOPT_CONNECTTIMEOUT' => 30
        )
    );
?>
