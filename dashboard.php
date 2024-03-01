<?php
session_start();

if(!isset($_SESSION['GcashNumber'])){
    header('location: index.php');
    exit();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php include 'style.php'; ?>
</head>
<body class="bg-warning-subtle">
    <?php include 'navbar.php';?>
    <div class="container">
    <a href="index.php" class = "btn btn-danger" STYLE = "margin: 20px;">LOGOUT</a>
        <h1 class="d-flex justify-content-center">Dashboard</h1>
    </div>
</body>
</html>