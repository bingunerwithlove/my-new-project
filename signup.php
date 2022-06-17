<?php include('../controller/registration.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>新規登録</title>
	<link rel="stylesheet" href="../asset/form.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                <form method="POST" class="mx-1 mx-md-4" action="">
                  <div class="row">
                  <?php echo $success_msg; ?>
            <?php echo $email_exist; ?>

                  <div class="d-flex flex-row align-items-center mb-4 col-md-6">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0 ">
                      <input type="text" id="firstname" class="form-control" name="firstname"/>
                      <label class="form-label" for="form3Example1c">名字</label>
                      <?php echo $emptyError1; ?>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4 col-md-6">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="lastname" class="form-control" name="lastname"/>
                      <?php echo $emptyError2; ?>
                      <label class="form-label" for="form3Example1c">名前</label>
                    </div>
                  </div>
                  </div>
                  <div class="row">

                  <div class="d-flex flex-row align-items-center mb-4 col-md-6">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="email" class="form-control" name="email" />
                      <?php echo $emptyError3; ?>
                      <label class="form-label" for="form3Example3c">メール</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4 col-md-6">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="number" id="mobile" class="form-control" name="mobile" />
                      <?php echo $emptyError4; ?>
                      <label class="form-label" for="form3Example3c">電話番号</label>
                    </div>
                  </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="password" class="form-control" name="password" />
                      <label class="form-label" for="form3Example4c">パスワード</label>
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <label class="form-check-label" for="form2Example3">
                      アカウントをすでに持っています。  <button onclick="location.href='./login.php'" type="button" class="btn btn-outline-danger">ログイン</button>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" name="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">新規登録</button>
                  </div>
				  <!-- <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button" href="./">ログイン</button> -->

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="../asset/image/lotus.jpg"
                  class="img-fluid" alt="Sample image">

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