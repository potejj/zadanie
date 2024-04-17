<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div>
<input type="text" value="" id="">
<button id=""><a href="register.php">register</a></button>
<button id=""><a href="orders.php">see orders</a></button>
<button id=""><a href="">login</a></button>
<button id=""><a href="">basket</a></button>

</div>

<?php

include 'connect.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='product'>";
        echo "<img src='images/".$row["image"] . "'class='image' alt='" . $row["name"] . "'>";
        echo "<button class=\"button\">+</button>";
        echo "<h2 class='name'>" . $row["name"] . "</h2>";
        echo "<p>Price: $" . $row["price"] . "</p>";
        echo "<p>" . $row["description"] . "</p>";
        echo "</div>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>
<script>
let cart = [];

function addToCart(productId) {
    // Find the product in the database
    // For simplicity, we'll assume the product ID matches the index in the products array
    const product = products[productId];
    cart.push(product);
    alert("Product added to cart!");
}
</script>

    
</body>
</html>