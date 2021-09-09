<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>新規登録</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./css/modal.css">
    <link rel="stylesheet" href="./css/kaiintouroku">
</head>

<body>
    <?php require 'index.php'; ?>
    <form action="customer_output.php" method="post">
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <header class="head-form mb-0">
                    <h2 id="header-title">会員登録</h2>
                </header>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                                <input type="text" name="name" class="form-control input-sm" placeholder="お名前" />
                            </div>
                        </div>
            
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-address-book"></i></span>
                                </div>
                                <input type="text" name="address" class="form-control input-sm" placeholder="ご住所" />
                            </div>
                        </div>
            
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                </div>
                                <input type="text" name="login" class="form-control input-sm" placeholder="ログイン名" />
                            </div>
                        </div>
            
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control input-sm" placeholder="パスワード" />
                            </div>
                        </div>
            
                        <button type="submit">確定</button>
                    </form>
                </div>
               
            </div>
        </div>
    </div>
</form>
</body>

</html>
