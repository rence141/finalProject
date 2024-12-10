<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['name']; ?></h1>
    <p>You are logged in as a <?php echo $_SESSION['user_type']; ?>.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
