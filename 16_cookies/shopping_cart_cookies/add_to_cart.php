<?php
// // ----------------- without using css styling ------------------------
// // Check if the cart cookie exists
// if (isset($_COOKIE['shopping_cart'])) {
//     // Decode the existing cookie data into an array
//     $cart = json_decode($_COOKIE['shopping_cart'], true);
// } else {
//     $cart = [];
// }

// // Add an item to the cart
// $item = [
//     'id' => 101,
//     'name' => 'Laptop',
//     'quantity' => 1,
//     'price' => 1200.00
// ];

// // Add item to the cart array
// $cart[] = $item;

// // Encode the cart array as a JSON string and save it in a cookie
// setcookie('shopping_cart', json_encode($cart), time() + (86400 * 7), "/"); // 7 days

// echo "Item added to cart successfully! <a href='view_cart.php'>View Cart</a>";
?>






<?php
// ----------------- using css styling ------------------------

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the cart cookie exists
    if (isset($_COOKIE['shopping_cart'])) {
        $cart = json_decode($_COOKIE['shopping_cart'], true);
    } else {
        $cart = [];
    }

    // Retrieve user input
    $item = [
        'id' => uniqid(), // Generate a unique ID for the item
        'name' => $_POST['name'],
        'quantity' => (int)$_POST['quantity'],
        'price' => (float)$_POST['price']
    ];

    // Add item to the cart array
    $cart[] = $item;

    // Encode the cart array as a JSON string and save it in a cookie
    setcookie('shopping_cart', json_encode($cart), time() + (86400 * 7), "/"); // 7 days

    echo "Item added to cart successfully! <a href='view_cart.php'>View Cart</a>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to Cart</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Add Item to Cart</h1>
    <form action="add_to_cart.php" method="POST">
        <label for="name">Item Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="quantity">Quantity:</label><br>
        <input type="number" id="quantity" name="quantity" min="1" required><br><br>

        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price" step="0.01" required><br><br>

        <button type="submit">Add to Cart</button>
    </form>
</body>
</html>
