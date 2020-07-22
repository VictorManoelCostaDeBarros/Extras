<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Transparente</title>
</head>
<?php 
    $valor = 147;
    $valor = $valor * 100;
?>
<body>
    <form action="processar.php" method="POST">
        <input type="hidden" name="amount" value="<?php echo $valor; ?>">
        <script 
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="pk_test_51H7lRaAq7kwXdnWrtRVDqXVbOo5b46VkX7R7wggDZgaPynn1sCnLbjOodkiGsyy4fEW5b6EyCLMNeXvKkBwh6ZAQ0089b8cwlA"
        data-amount="<?php echo $valor; ?>"
        data-name="Victor Designer"
        data-label="Pagar com cartão"
        data-currency="brl"
        data-panel-label="Pagar"
        data-description="Pagamento referente ao produto da Victor Designer"
        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
        data-locale="auto">
        </script>
    </form>
</body>
</html>