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
        <p>AMADUONG</p>
        <nav>
            <ul id=mainNav>
                <li><a href="product.php"><i class="fas fa-cookie-bite">商品</a></li>
                <li><a href="favorite_show.php"><i class="fab fa-gratipay">お気に入り</a></li>
                <li><a href="history.php"><i class="fas fa-history">購入履歴</a></li>
                <li><a href="cart_show.php"><i class="fas fa-apple-crate">カート</a></li>
                <li><a href="purchase_input.php"><i class="fas fa-shopping-cart">購入</a></li>
            </ul>
        </nav>
    </div>

<?php //ログイン後は表示されないように処理
if (!(isset($_SESSION['customer']))) {
?>
<a href="login_input.php"><i class="fas fa-sign-in-alt">ログイン</a>
<?php
}
?>

<?php //ログイン前は表示されないように処理
if (isset($_SESSION['customer'])) {
?>
    <a href="logout_input.php"><i class="fas fa-sign-out-alt">ログアウト</a>
<?php
}
?>

<?php //ログイン後は表示されないように処理
if (!(isset($_SESSION['customer']))) {
?>
<a href="customer_input.php"><i class="fas fa-user-circle">会員登録</a>
<?php
}
?>
<hr>
</header>
</body>

</html>