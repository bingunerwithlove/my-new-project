<?php session_start(); ?>

<?php
//customerのセッションの破棄
unset($_SESSION['customer']);
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>ログアウト画面</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="./css/modal.css">
</head>

<body>
	<?php
		require 'index.php';
		echo 'ログアウトしました。';
	?>
</body>

</html>