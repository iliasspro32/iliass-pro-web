<?php
// lang.php
// Archivo de idioma simple para español e inglés
$lang = 'es';
if (isset($_GET['lang']) && $_GET['lang'] === 'en') {
    $lang = 'en';
}
$texts = [
    'es' => [
        'pay_now' => 'Pagar ahora',
        'pay_with_paypal' => 'Pagar con PayPal',
        'pay_with_stripe' => 'Pagar con Stripe',
        'or' => 'o',
        'product_example' => 'Producto ejemplo',
    ],
    'en' => [
        'pay_now' => 'Pay now',
        'pay_with_paypal' => 'Pay with PayPal',
        'pay_with_stripe' => 'Pay with Stripe',
        'or' => 'or',
        'product_example' => 'Example product',
    ]
];
