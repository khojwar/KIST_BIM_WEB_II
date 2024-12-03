<?php

// ----------------- without using css styling -----------------------
// if (isset($_COOKIE['shopping_cart'])) {
//     $cart = json_decode($_COOKIE['shopping_cart'], true);
    
//     echo "<h1>Your Shopping Cart</h1>";
//     foreach ($cart as $item) {
//         echo "<p>Item: " . $item['name'] . "<br>";
//         echo "Quantity: " . $item['quantity'] . "<br>";
//         echo "Price: $" . $item['price'] . "</p>";
//     }
//     echo "<a href='clear_cart.php'>Clear Cart</a>";
// } else {
//     echo "Your cart is empty! <a href='add_to_cart.php'>Add Items</a>";
// }
?>



<?php
// ----------------- using css styling -----------------------
if (isset($_COOKIE['shopping_cart'])) {
    $cart = json_decode($_COOKIE['shopping_cart'], true);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cart</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Your Shopping Cart</h1>
    <div class="cart">
        <?php if (!empty($cart)) : ?>
            <?php foreach ($cart as $item) : ?>
                <p>
                    <strong>Item:</strong> <?= htmlspecialchars($item['name']) ?><br>
                    <strong>Quantity:</strong> <?= htmlspecialchars($item['quantity']) ?><br>
                    <strong>Price:</strong> $<?= number_format($item['price'], 2) ?>
                </p>
                <hr>
            <?php endforeach; ?>
            <a href="clear_cart.php">Clear Cart</a>
        <?php else : ?>
            <p>Your cart is empty!</p>
            <a href="add_to_cart.php">Add Items</a>
        <?php endif; ?>
    </div>
</body>
</html>
