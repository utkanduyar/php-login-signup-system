<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="includes/login.inc.php">
              <h1>Kullanıcı Girişi</h1>
              <div>
                <input type="text" class="form-control" name="uid" placeholder="Kullanıcı Adı" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="upass" placeholder="Şifre" required="" />
              </div>
              <div>
                <button type="submit" name="new_login" class="btn btn-success">Giriş Yap</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Henüz üye değil misiniz?
                  <a href="#signup" class="to_register"> Kayıt Oluştur </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Giriş Sistemi!</h1>
                  <p>©<?php echo date('Y'); ?> Her hakkı saklıdır. Bu Site! bir Bootstrap 3 şablonudur. Gizlilik ve Şartlar</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="POST" action="includes/signup.inc.php">
              <h1>Hesap Oluştur</h1>
              <div>
                <input type="text" class="form-control" name="uid" placeholder="Kullanıcı Adı" required="" />
              </div>
              <div>
                <input type="email" class="form-control" name="uemail" placeholder="E-posta" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="upass" placeholder="Şifre" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="upass2" placeholder="Şifre Tekrar" required="" />
              </div>
              <div>
                <button type="submit" name="new_register" class="btn btn-success">Kayıt Ol</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Zaten bir üye misiniz ?
                  <a href="#signin" class="to_register"> Giriş Yap </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Kayıt Sistemi!</h1>
                  <p>©<?php echo date('Y'); ?> Her hakkı saklıdır. Bu Site! bir Bootstrap 3 şablonudur. Gizlilik ve Şartlar</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
