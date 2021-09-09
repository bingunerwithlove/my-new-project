<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>お気に入り画面</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./css/modal.css">
</head>

<body>

    <?php require 'index.php'; ?>
    <?php
    require 'favorite.php';
    ?>
</body>

</html>