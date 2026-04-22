<?php
// pago.php
require_once 'includes/lang.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $texts[$lang]['pay_now']; ?></title>
    <link rel="stylesheet" href="assets/styles.css">
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; }
        .container { max-width: 400px; margin: 40px auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px #0001; }
        h2 { text-align: center; }
        .pay-btn { width: 100%; margin: 10px 0; padding: 12px; font-size: 16px; border: none; border-radius: 4px; cursor: pointer; }
        .paypal { background: #ffc439; color: #111; }
        .stripe { background: #635bff; color: #fff; }
        .or { text-align: center; margin: 20px 0; color: #888; }
    </style>
</head>
<body>
    <div class="container">
        <h2><?php echo $texts[$lang]['pay_now']; ?></h2>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
            <input type="hidden" name="cmd" value="_xclick">
            <input type="hidden" name="business" value="TU_CORREO_PAYPAL">
            <input type="hidden" name="item_name" value="<?php echo $texts[$lang]['product_example']; ?>">
            <input type="hidden" name="amount" value="10.00">
            <input type="hidden" name="currency_code" value="USD">
            <button type="submit" class="pay-btn paypal"><?php echo $texts[$lang]['pay_with_paypal']; ?></button>
        </form>
        <div class="or"><?php echo $texts[$lang]['or']; ?></div>
        <form action="stripe_checkout.php" method="post">
            <input type="hidden" name="item_name" value="<?php echo $texts[$lang]['product_example']; ?>">
            <input type="hidden" name="amount" value="10.00">
            <button type="submit" class="pay-btn stripe"><?php echo $texts[$lang]['pay_with_stripe']; ?></button>
        </form>
        <div style="text-align:center; margin-top:20px;">
            <a href="?lang=es">Español</a> | <a href="?lang=en">English</a>
        </div>
    </div>
</body>
</html>
