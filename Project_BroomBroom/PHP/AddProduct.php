<?php
// Connect to the database (adjust connection settings as necessary)
$host = 'localhost';
$db = 'sample';
$user = 'root';
$pass = '';

$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Handle form submission for adding a product
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST['product-name'];
    $productDescription = $_POST['product-description'];

    // Insert product into the database
    $stmt = $pdo->prepare("INSERT INTO items (name, description) VALUES (:name, :description)");
    $stmt->bindParam(':name', $productName);
    $stmt->bindParam(':description', $productDescription);
    $stmt->execute();

    echo "Product added successfully!";
}
?>
