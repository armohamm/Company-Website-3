<?php

require_once "includes/session.inc.php";
require_once "includes/reference-orderlist.inc.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Adminsivusto - Referenssien lisäys</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/style.css" rel="stylesheet">
  <link href="vendor/jquery-ui/jquery-ui.min.css">
  <link href="css/sortable.css" rel="stylesheet">

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
          <h1 class="h3 mb-4 text-gray-800">Referenssien lisäys</h1>

              <h1 class="h4 mb-4" style="color: rgb(0, 174, 255);">Valitse ensin minkä referenssi otsikon alle haluat referenssin lisätä <br>
              sen jälkeen kirjoita alle referenssi kohteen esim. "Esimerkkilän lukio"</h1>
    
              <h1 class="h4 mb-4 text-gray-800;">Referenssi otsikko</h1>
              <?php makeSelector($array);?>
    
              <h1 class="h4 mb-4 text-gray-800;" style="margin-top: 25px;">Lisättävä referenssi</h1>
              <input id="text" type="text" name="text"><br><br>
    
              <button class="btn btn-success btn-icon-split" onclick="sendValues();">
                <span class="icon text-white-50">
                  <i class="fas fa-check"></i>
                </span>
                <span class="text">Lisää</span>
              </button>
    
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

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

  <!-- jQuery ui -->
  <script src="vendor/jquery-ui/jquery-ui.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/javascript.js"></script>

  <script type="text/javascript">
    function sendValues() {
      var selectedHeading = $("select#titleselector option:checked").val();
      var text = $("input#text").val();
      $.post("includes/add-reference.inc.php", { id: selectedHeading, text: text})
        .done(function (result) {
          if(alert(result)){}
          else window.location.reload(true);
        })
        .fail(function (data) {
          alert("Error: " + data);
        });
    }
  </script>

</body>

</html>
