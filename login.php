<?php
   require_once('../controller/validation.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ログイン</title>
	<link rel="stylesheet" href="../asset/form.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="../asset/image/lotus.jpg"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">あなたをフォローしています</h4>
                  <?php
                  if(isset($error)){
                    foreach($error as $error){
                      echo $error.'</span>';
                    }
                  }
                  ?>
                </div>

                <form method="POST" action="../controller/validation.php">
                  <p>ログインしてください</p>

                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example11" class="form-control" name="email"
                      placeholder="メール" />
                    <label class="form-label" for="form2Example11">メールアドレス</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example22" class="form-control" password="password" />
                    <label class="form-label" for="form2Example22">パスワード</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="login" name="login" href="./">ログイン</button>
                    <!-- <a class="text-muted" href="#!">パスワードを忘れた？</a> -->
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">アカウントをもっていない？</p>
					
                    <button onclick="location.href='./signup.php'" type="button" class="btn btn-outline-danger">新規登録</button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>