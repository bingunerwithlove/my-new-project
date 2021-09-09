<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ログイン画面</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/modal.css">

</head>

<body>
    <?php require 'index.php'; ?>
    <div class="login-form">
    <form action="login_output.php" method="post">
        <h1>入力してください。</h1>
        <div class="input-box">
        <i></i>
        <input type="text" name="login" placeholder="user name">
        </div>
        <div class="input-box">
        <i></i>
        <input type="password" name="password" placehoder="password">
        </div>
        <div class="btn-box">
        <input type="submit" value="確定">
        </div>
    </form>
</div>
</div>


</body>

</html>