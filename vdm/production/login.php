<?php
ob_start();
session_start();
include '../vst/baglan.php';

$ayarsor=$db->prepare("select * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $ayarcek['ayar_author']; ?> | Yönetim Paneli</title>

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
          <form action="../vst/islem.php" method="POST">
            <h1>Yönetim Paneli</h1>
            <div>
              <input style="border-radius: 25px;" type="text" name="kullanici_ad" class="form-control" placeholder="Kullanıcı Adınız" required="" />
            </div>
            <div>
              <input style="border-radius: 25px;" type="password" name="kullanici_password" class="form-control" placeholder="Şifreniz" required="" />
            </div>
            <div>
              <button style="width: 100%; border-radius: 25px; background-color: #73879C; color: #FFFFFF;" type="submit" name="loggin" class="btn btn-default">Giriş Yap</button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">

                <?php 
                if ($_GET['durum']=="no") {

                  echo "Kullanıcı Bulunamadı!";

                } elseif ($_GET['durum']=="exit") {

                  echo "Çıkış İşlemi Başarılı...";

                }

                ?>

              </p>

              <div class="clearfix"></div>

              <br>

              <div>
                <h1><i class="fa fa-vimeo"></i> Vipot Reklam</h1>
                <p>©2023 Vipot Reklam tarafından kodlanmıştır.</p>
              </div>
            </div>
          </form>
        </section>
      </div>

      <div id="register" class="animate form registration_form">
        <section class="login_content">
          <form>
            <h1>Create Account</h1>
            <div>
              <input type="text" class="form-control" placeholder="Username" required="" />
            </div>
            <div>
              <input type="email" class="form-control" placeholder="Email" required="" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Password" required="" />
            </div>
            <div>
              <a class="btn btn-default submit" href="index.html">Submit</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Already a member ?
                <a href="#signin" class="to_register"> Log in </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>
</html>