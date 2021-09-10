<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>トップ画面</title>
    <link rel="stylesheet" href="style.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="./css/index.css">
    <!-- modal -->
    <link rel="stylesheet" href="./css/modal.css">

</head>

<body>

<header>
    <div class="header__content">
        <p>ORGANICA</p>
        <nav>
            <ul id="navar">
                <li><a href="product.php">商品</a></li>
                <li><a href="favorite_show.php">お気に入り</a></li>
                <li><a href="history.php">購入履歴</a></li>
                <li><a href="cart_show.php">カート</a></li>
                <li><a href="purchase_input.php">購入</a></li>
            </ul>
        </nav>
   
<div class="login">
    <ul>
        <li>
<?php //ログイン後は表示されないように処理
if (!(isset($_SESSION['customer']))) {
?>
<a href="login_input.php">ログイン</a>
<?php
}
?>
</li>
<li>
<?php //ログイン前は表示されないように処理
if (isset($_SESSION['customer'])) {
?>
    <a href="logout_input.php">ログアウト</a>
<?php
}
?>
</li>
<li>
<?php //ログイン後は表示されないように処理
if (!(isset($_SESSION['customer']))) {
?>
<a href="customer_input.php">会員登録</a>
<?php
}
?>
</li>
</ul>
</div>
</div>

</header>
</body>

</html>