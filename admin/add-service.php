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

  <title>Adminsivusto - Palvelun otsikon lisäys</title>

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
          <h1 class="h3 mb-4 text-gray-800">Palvelun lisäys</h1>

          <form class="" action="includes/add-service.inc.php" method="post" enctype="multipart/form-data">

            <h1 class="h4 mb-4" style="color: rgb(0, 174, 255);">
              Ensin kirjoitat palvelulle otsikon, esim. "Rakennussiivous" <br><br>
              Sitten kirjoitat kuvauksen palvelulle, eli toisin sanoen pienen myyntipuheen. <br><br>
              Sen jälkeen lisäät palvelulle taustakuvan, <br>mieluusti jonkun kivan liukuvärin jonka päällä tekstit näkyvät hyvin.
              <br>Kuvan on oltava 1920x1080! <br> <span style="color: teal;"><b>Vinkki, hyviä kuvia löydät alta löytyvistä
                  linkeistä</b></span>
            </h1>
          
            <h1 class="h4 mb-4 text-gray-800">Otsikko</h1>
            <input type="text" name="text" required>
          
            <h1 class="h4 mb-4 text-gray-800" style="margin-top: 25px">Kuvaus</h1>
            <textarea name="desc" required></textarea>
          
            <h1 class="h4 mb-4 text-gray-800" style="margin-top: 25px">Taustakuva</h1>
            <a class="h5" href="https://unsplash.com/">Ilmainen kuvapalvelu 1</a><br>
            <a class="h5" href="https://pixabay.com/">Ilmainen kuvapalvelu 2</a><br>
            <input type="file" name="file" required><br><br>
          
            <button class="btn btn-success btn-icon-split" type="submit">
              <span class="icon text-white-50">
                <i class="fas fa-check"></i>
              </span>
              <span class="text">Tallenna</span>
            </button>
          
          </form>

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

  <!-- Custom scripts for all pages-->
  <script src="js/javascript.js"></script>

</body>

</html>
