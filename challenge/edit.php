<?php
include_once "config.php";

$stmt = $conn->prepare("SELECT * FROM products");
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!-- Rest of your HTML with Bootstrap table here (same as before) -->

<?php
include_once "config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM products WHERE product_id = ?");
    $stmt->execute([$id]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$product) {
        echo "Product not found!";
        exit;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $id = $_POST['id'];

    $update = $conn->prepare("UPDATE products SET name=?, description=?, price=?, quantity=? WHERE product_id=?");
    $update->execute([$name, $description, $price, $quantity, $id]);

    header("Location: challange.php");
    exit;
}
?>
<!-- Rest of your edit form HTML here (same as before) -->
