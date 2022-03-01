<?php

include './stripe-php/init.php';
//require 'vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51HVHPfK5ZUlMmDBgj1PzQwLQ7lUNdtpslitYfomlZnexjHCrGGHkHWASE9mgFZapkSq3ymigtTI71xBs5dmyStpB00YMduDStK');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost/stock/stripe/';

$checkout_session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],
  'line_items' => [[
    'price_data' => [
      'currency' => 'myr',
      'unit_amount' => 9999,
      'product_data' => [
        'name' => 'Premium Plan',
        'images' => ["https://imgur.com/OwCDDq9.png"],
      ],
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

echo json_encode(['id' => $checkout_session->id]);
