<?php
// stripe_checkout.php
// Procesa el pago con Stripe (versión básica, requiere configuración de claves)

// Configura tus claves de Stripe
$stripeSecretKey = 'TU_CLAVE_SECRETA_STRIPE';

require_once 'vendor/autoload.php'; // Asegúrate de instalar stripe/stripe-php

\Stripe\Stripe::setApiKey($stripeSecretKey);

$amount = isset($_POST['amount']) ? floatval($_POST['amount']) : 0;
$item_name = isset($_POST['item_name']) ? $_POST['item_name'] : 'Producto';

if ($amount <= 0) {
    die('Cantidad inválida.');
}

try {
    $session = \Stripe\Checkout\Session::create([
        'payment_method_types' => ['card'],
        'line_items' => [[
            'price_data' => [
                'currency' => 'usd',
                'product_data' => [
                    'name' => $item_name,
                ],
                'unit_amount' => $amount * 100, // en centavos
            ],
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => 'https://tusitio.com/exito',
        'cancel_url' => 'https://tusitio.com/cancelado',
    ]);
    header('Location: ' . $session->url);
    exit;
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
