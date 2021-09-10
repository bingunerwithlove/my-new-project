<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>商品一覧画面</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="./css/modal.css">
</head>

<body>

	<?php require 'index.php'; ?>
	<form action="product.php" method="post">
		<div class="input-group rounded">
        <input type="search" class="form-control rounded" name="keyword" placeholder="Search" aria-label="Search"
        aria-describedby="search-addon" />
       <span class="input-group-text border-0" id="search-addon">
    <i class="fas fa-search"></i>
  </span>
</div>
	</form>
	<hr>
	<table>
		<?php
		//MySQLデータベースに接続する
		require 'db_connect.php';
		//検索の判断
		if (isset($_POST['keyword'])) {
			//SQL文を作る（プレースホルダを使った式）
			$sql = "select * from product where name like :keyword";
			//プリペアードステートメントを作る
			$stm = $pdo->prepare($sql);
			//プリペアードステートメントに値をバインドする
			$stm->bindValue(':keyword', '%' . $_POST['keyword'] . '%', PDO::PARAM_STR);
			//SQL文を実行する
			$stm->execute();
			//結果の取得（連想配列で受け取る）
			$result = $stm->fetchAll(PDO::FETCH_ASSOC);
		} else {
			//SQL文を作る
			$sql = "select * from product";
			//プリペアードステートメントを作る
			$stm = $pdo->prepare($sql);
			//SQL文を実行する
			$stm->execute();
			//結果の取得（連想配列で受け取る）
			$result = $stm->fetchAll(PDO::FETCH_ASSOC);
		}
		foreach ($result as $row) {
			$id = $row['id'];
			
		?>
<div class="container-fluid">
    <div class="row">
        <aside class="col-lg-9">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-borderless table-shopping-cart">
                        <thead class="text-muted">
                            <tr class="small text-uppercase">
                       
							    <th scope="col" name="name">商品</th>
                                <th scope="col" width="120">数</th>
                                <th scope="col" width="120" name="price">値段</th>
                                <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
							
                                <td>
                                    <figure class="itemside align-items-center">
										
                                        <div class="aside"><p width="50"><img src="image/<?= $row['id'] ?>.jpg"></p><class="img-sm"></div>
										
                                        <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true"><?$row['name']?></a>
                                            <p class="text-muted small">状態:Fresh(10個以上買ったら割引30％)</p>
                                        </figcaption>
										
                                    </figure>
                                </td>
                                <td> <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
				
                                    </select> </td>
                                
									<td>
									
                                    <div class="price-wrap"> <var class="price"><?= $row['price'] ?></var></div>
								
                                </td>
                                <td class="text-right d-none d-md-block"> <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" name="" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i>気になる</a> <a href="" class="btn btn-light" data-abc="true">買う</a> </td>
                            </tr>
                            
                    <hr> 
                </div>
            </div>
        </aside>
    </div>
</div>
<?php
		
		?>
	</table>
</body>

</html>