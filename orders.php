<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customerName = $_POST["customer_name"];
    $customerEmail = $_POST["customer_email"];
    $productId = $_POST["product_id"];
    $quantity = $_POST["quantity"];

    $sql = "INSERT INTO orders (customer_name, customer_email, product_id, quantity) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssii", $customerName, $customerEmail, $productId, $quantity);

    if ($stmt->execute()) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
</body>
</html>

