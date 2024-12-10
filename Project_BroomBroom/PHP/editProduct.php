<?php
// Include database connection
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get data from the form
    $product_id = $_POST['product-id'];
    $new_name = $_POST['new-product-name'];
    $new_price = $_POST['new-product-price'];
    $new_description = $_POST['new-product-description'];
    $new_image = $_FILES['new-product-image'];

    // Prepare the query
    $query = "UPDATE products SET name = ?, price = ?, description = ? WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param("ssss", $new_name, $new_price, $new_description, $product_id);

    // Update the product in the database
    if ($stmt->execute()) {
        if ($new_image['error'] == UPLOAD_ERR_OK) {
            // Move uploaded image
            $upload_dir = 'uploads/';
            $upload_file = $upload_dir . basename($new_image['name']);
            if (move_uploaded_file($new_image['tmp_name'], $upload_file)) {
                $update_image = $db->prepare("UPDATE products SET image = ? WHERE id = ?");
                $update_image->bind_param("si", $upload_file, $product_id);
                $update_image->execute();
            }
        }
        echo json_encode(['success' => true, 'message' => 'Product updated successfully.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to update product.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>
