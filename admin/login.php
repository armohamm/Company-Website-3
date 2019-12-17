<?php

require_once "includes/session.inc.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Adminsivusto - Kirjautuminen</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/style.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Tervetuloa takaisin!</h1>
                  </div>
                  <div id="message" class="h5 text-center" style="color: red;"></div>
                  <div class="user">
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="txt_pwd" placeholder="Password">
                    </div>
                    <a id="but_submit" class="btn btn-primary btn-user btn-block" style="color: white;">
                      Kirjaudu sisään
                    </a>
                    <a href="../index.html" class="btn btn-secondary btn-user btn-block">
                      Takaisin
                    </a>
                  </div>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/javascript.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $("#but_submit").click(function(){
          var password = $("#txt_pwd").val().trim();

          if( password != "" ){
              $.ajax({
                  url:'includes/login.inc.php',
                  type:'post',
                  data:{password:password},
                  success:function(response){
                      var msg = "";
                      if(response == 1){
                          window.location = "index.php";
                      }else{
                          msg = "Virheellinen salasana";
                      }
                      $("#message").html(msg);
                  }
              });
            }
        });
    });
  </script>


</body>

</html>
