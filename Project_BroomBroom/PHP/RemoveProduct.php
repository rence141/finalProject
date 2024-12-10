<?php
// Include database connection
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the product ID
    $data = json_decode(file_get_contents('php://input'), true);
    $product_id = $data['productId'];

    // Prepare the query to delete the product
    $stmt = $db->prepare("DELETE FROM products WHERE id = ?");
    $stmt->bind_param("i", $product_id);

    // Execute the query
    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Product removed successfully.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to remove product.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>
