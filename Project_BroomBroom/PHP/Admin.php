<?php
session_start(); // Start the session to track the admin's login status
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="CSS/admin.css"> <!-- Link to your CSS file -->
    <script src="JS/admin.js"></script> <!-- Link to your JS file -->
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <a href="#" class="logo">Admin Panel</a>
        <div class="navbar-links">
            <a href="#">Dashboard</a>
            <a href="#">Orders</a>
            <a href="#">Reports</a>
        </div>
        <div class="user-info">
            <button id="account-btn">Sign In</button>
            <ul id="account-menu" style="display:none;"></ul> <!-- Dropdown menu -->
        </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <button class="close-btn" onclick="toggleSidebar()">X</button>
        <a href="#">Add Product</a>
        <a href="#">Edit Product</a>
        <a href="#">Remove Product</a>
    </div>

    <!-- Sidebar Toggle Button -->
    <button class="sidebar-toggle-btn" onclick="toggleSidebar()">☰ Open Sidebar</button>

    <!-- Main Content -->
    <div class="content">
        <h1>Welcome to Admin Panel</h1>
        <div class="form-container">
            <h2>Manage Products</h2>
            <!-- Product Management Forms -->
            <form action="add_product.php" method="POST">
                <label for="product-name">Product Name</label>
                <input type="text" name="product-name" id="product-name" required>
                <label for="product-description">Description</label>
                <textarea name="product-description" id="product-description" required></textarea>
                <button type="submit">Add Product</button>
            </form>
        </div>
    </div>
</body>
</html>
