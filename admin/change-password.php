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

  <title>Adminsivusto - Salasanan vaihto</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/style.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php require_once "includes/sidebar.inc.php"; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php require_once "includes/topbar.inc.php"; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Salasanan vaihto</h1>

          <h1 style="margin-top: 25px;" class="h4 mb-4 text-gray-800">Nykyinen salasana</h1>
          <input type="password" id="old_password">
          <h1 style="margin-top: 25px;" class="h4 mb-4 text-gray-800">Uusi salasana</h1>
          <input type="password" id="new_password0">
          <h1 style="margin-top: 25px;" class="h4 mb-4 text-gray-800">Uusi salasana uudelleen</h1>
          <input type="password" id="new_password1"><br><br>

          <button class="btn btn-success btn-icon-split" id="but_submit">
            <span class="icon text-white-50">
              <i class="fas fa-check"></i>
            </span>
            <span class="text">Tallenna</span>
          </button>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Valmiina lähtemään?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
          </div>
          <div class="modal-body">Jos olet valmis lopettamaan tämän hetkisen session, paina "Kirjaudu ulos"</div>
          <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Peruuta</button>
          <a class="btn btn-primary" href="includes/logout.inc.php">Kirjaudu ulos</a>
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
    $(document).ready(function () {
      $("#but_submit").click(function () {
        var password1 = $("#old_password").val().trim();
        var password2 = $("#new_password0").val().trim();
        var password3 = $("#new_password1").val().trim();

        if (password1 != "" && password2 != "" && password3 != "" ) {
          $.ajax({
            url: 'includes/password-change.inc.php',
            type: 'post',
            data: { password1:password1, password2:password2, password3:password3 },
            success: function (response) {
              if (response == 2) {
                if (alert("Salasana on vaihdettu")) { }
                else window.location = "index.php";
              } else if (response == 1){
                alert("Uudet salasanat eivät täsmää");
              }
              else if (response == 0) {
                alert("Vanha salasana väärin");
              }
              else {
                alert("Jokin meni pieleen :(");
              }
            }
          });
        }
      });
    });
  </script>

</body>

</html>
