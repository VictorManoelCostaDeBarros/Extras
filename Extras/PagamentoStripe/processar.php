<?php 
    require('vendor/autoload.php');

    $stripe = array(
        "secret_key"=>"sk_test_51H7lRaAq7kwXdnWrzwpiYJvJIzAUga2qkvsHnraOM4u0nNVoaUf0i1sDgx27uJlqMLA59hS7J09wvvRD9YYWgWw8007u6m6OJ0",
        "publishable_key"=>"pk_test_51H7lRaAq7kwXdnWrtRVDqXVbOo5b46VkX7R7wggDZgaPynn1sCnLbjOodkiGsyy4fEW5b6EyCLMNeXvKkBwh6ZAQ0089b8cwlA"
    );

    \Stripe\Stripe::setApiKey($stripe['secret_key']);

    $token = $_POST['stripeToken'];
    $email = $_POST['stripeEmail'];

    $customer = \Stripe\Customer::create(array(
        'email' => $email,
        'source' => $token
    ));

    $charge = \Stripe\Charge::create(array(
        'customer' => $customer->id,
        'amount' => $_POST['amount'],
        'currency' => 'brl'
    ));

    echo '<h1>Cobrança feita com sucesso!</h1>';
?>