<!-- productpurchase.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Product Purchase</title>
</head>
<body>

<h2>Product Purchase</h2>

<form method="post">
    Customer Name: <input type="text" name="customer"><br><br>
    Quantity: <input type="number" name="quantity"><br><br>
    Price per Item: <input type="number" name="price"><br><br>

    <p>Optional Add-ons:</p>
    <input type="checkbox" name="addons[]" value="50"> Gift Wrap (+₱50)<br>
    <input type="checkbox" name="addons[]" value="100"> Express Shipping (+₱100)<br>
    <input type="checkbox" name="addons[]" value="200"> Warranty (+₱200)<br><br>

    <input type="submit" value="Compute Total">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer = $_POST['customer'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    // If addons are selected, sum them up
    if (isset($_POST['addons'])) {
        $addons = array_sum($_POST['addons']);
    } else {
        $addons = 0;
    }

    $subtotal = $quantity * $price;
    $total = $subtotal + $addons;

    echo "<h3>Purchase Summary</h3>";
    echo "Customer Name: $customer <br>";
    echo "Subtotal: ₱$subtotal <br>";
    echo "Add-ons: ₱$addons <br>";
    echo "Total Amount: ₱$total <br>";
}
?>

</body>
</html>