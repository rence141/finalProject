<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="/CSS/ecommerce.css">
</head>
<body>

    <!-- Navbar with User Account Logic -->
    <header class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#home">
                <img src="/img/imgs/download.png" alt="BroomBroom Logo" class="img-fluid logo-img" />
                BroomBroom
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/Project_BroomBroom/HTML/website.html">Official Website</a>
                    </li>
                    <!-- Check if the user is logged in -->
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/Project_BroomBroom/redirect/user_account.php">User Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Project_BroomBroom/redirect/logout.php">Log Out</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/Project_BroomBroom/redirect/signup.php">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Project_BroomBroom/redirect/signin.php">Sign In</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </header>

    <!-- Main Content (Product List) -->
    <div class="container">
        <div class="listProduct">
            <!-- Product items will be dynamically added here -->
        </div>
    </div>

    <!-- Cart Sidebar -->
    <div class="cartTab">
        <h1>Shopping Cart</h1>
        <div class="listCart">
            <!-- Cart items will be dynamically added here -->
        </div>
        <div class="btn">
            <button class="close">CLOSE</button>
            <button class="checkOut">Check Out</button>
        </div>
    </div>

    <script src="/JS/cart.js"></script>
</body>
</html>
