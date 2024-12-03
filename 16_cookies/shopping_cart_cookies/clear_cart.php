<?php
// // --------------- without using css styling -------------------------
// // Clear the cart by setting the cookie to expire
// setcookie('shopping_cart', '', time() - 3600, "/");
// echo "Cart cleared successfully! <a href='view_cart.php'>Go Back</a>";
?>





<?php
// --------------- using css styling -------------------------
// Clear the cart by setting the cookie to expire
setcookie('shopping_cart', '', time() - 3600, "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clear Cart</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Cart Cleared</h1>
    <div class="cart">
        <p>Your shopping cart has been cleared successfully!</p>
        <a href="view_cart.php">Go Back to Cart</a>
    </div>
</body>
</html>
