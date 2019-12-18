<!doctype html>
<html lang="fi">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">  <!-- ä,ö,å -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Meta tägejä -->
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">

    <!-- Google fontit -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900|Ubuntu:400,500,700&display=swap&subset=latin-ext" rel="stylesheet">

    <!-- CSS tiedostot -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/result-light.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Kirjastot -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <title>Hämeen Siivous & Saneeraus Oy</title>
</head>

<body>

  <div style="display: none" id="hideAll">&nbsp;</div> <!-- Piilottaa sivulta kaiken kunnes latautunut -->

  <!-- Navi alkaa -->
  <header id="header" style="display: none;">
      <div class="container">
          <div id="logo" class="pull-left">  <!-- logon paikka -->
              <a href="#start"><img src="img/logo1.png" alt="logo" title="" /></img></a> <!-- logo -->
          </div>
          <nav id="nav-menu-container">
              <ul class="nav-menu"> <!-- Navien listaus -->
                  <li><a href="#start">Aloitus</a></li>
                  <li><a href="#services">Palvelut</a></li>
                  <li><a href="#about">Keitä olemme</a></li>
                  <li><a href="#references">Referenssit</a></li>
                  <li><a href="#contact">Yhteystiedot</a></li>
              </ul>
          </nav><!-- #nav-menu-container -->
      </div>
  </header><!-- #header -->
  <!-- Navi loppuu -->

  <!-- Alkuosio alkaa-->
  <section id="start" class="start-section">
      <div class="start-section">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                      <div class="start-text">
                          <h1><span id="start-text" class="start"></span></h1> <!-- Teksti -->
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Alkuosio loppuu-->

  <!-- Palvelut osio alkaa -->
  <section id="services" class="services-section">
    <?php include_once 'admin/includes/get-frontpage-services.inc.php' ?> <!-- Hakee tietokannasta -->
  </section>
  <!-- Palvelut osio loppuu -->


  <!-- Meistä osio alkaa -->
  <section id="about" class="about-section">
    <div class="about-section">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="about-text">
             <h1 class="about-heading text-center">Keitä olemme</h1>
             <p class="about-text" id="about-text"></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Meistä osio loppuu -->

  <!-- Referenssit alkaa -->
  <section id="references" class="references-section">
    <?php include_once 'admin/includes/get-frontpage-refs.inc.php' ?> <!-- Hakee tietokannasta -->
  </section>
  <!-- Referenssit loppuu -->

  <!-- Yhteystiedot alkaa -->
  <section id="contact" class="contact-section">

          <h1 class=""> Yhteystiedot </h1><br>
          <div class="row">
            <div class="col-xl-1 col-lg-1 hidden-lg-down">
            </div>

            <div class="col-xl-3 col-lg-3 col-md-4 hidden-sm-down">
              <h4 class="contact-heading"> Työmaa </h4> <!-- Vasen puoli -->
              <p>Sähköposti: liisa@hamss.fi<br>
              Puhelin: 050-557 8784</p>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
              <h4 class="contact-heading">  Hämeen Siivous & Saneeraus Oy </h4>
              <p>Yhteyshenkilö: Liisa Isomäki<br>
              Puhelin: 050-557 8784<br>
              Sähköposti: liisa@hamss.fi</p>

              <b><a id="job-open" style="color: #f4f4f4; display: none;">Haemme työntekijöitä</a></b> <!-- Kun työntekijöitä haetaan -->
              <p id="job-closed" style="color: #f4f4f4; display: none;">Emme tällä hetkellä hae työntekijöitä</p> <!-- Kun työntekijöitä ei haeta -->
            </div>

            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12"> <!-- Oikea puoli -->
              <h4 class="contact-heading"> Toimisto </h4>
              <p>Sähköposti: toimisto@hamss.fi<br>
              Puhelin: 050-557 8782<br>
              Tarjouspyynnöt: toimisto@hamss.fi</p>
            </div>
          </div>

  </section>
  <!-- Yhteystiedot loppuu -->

  <!-- Footer alkaa -->
  <section class="footer-section">
      <div class="copyright text-center">
          <span>Copyright &copy; Hämeen Siivous & Saneeraus Oy 2019</span>
      </div>
  </section>
  <!-- Footer loppuu -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> <!-- Nappi ylös -->

  </body>

</html>

  <!-- Javascript kirjastot -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <script type="text/javascript" src="/js/lib/dummy.js"></script> <!-- Sliderit :) -->

  <!-- Pää Javascript tiedosto -->
  <script src="js/main.js"></script>

  <!-- In file script sliderille -->
  <script>
    // tell the embed parent frame the height of the content
    if (window.parent && window.parent.parent) {
      window.parent.parent.postMessage(["resultsFrame", {
        height: document.body.getBoundingClientRect().height,
        slug: "yezxdwv3"
      }], "*")
    }

    // always overwrite window.name, in case users try to set it manually
    window.name = "result"
  </script>

  <script type="text/javascript">
    document.getElementById("header").style.display = "none";
    document.getElementById("hideAll").style.display = "block";
  </script>

  <script type="text/javascript">
    $(window).load(function () {
      $.get("admin/includes/get-start-title.inc.php", function (data) {
        $("#start-text").html(data);
      });
    });
  </script>

  <script type="text/javascript">
    $(window).load(function () {
      $.get("admin/includes/get-about-text.inc.php", function (data) {
        $("#about-text").html(data);
      });
    });
  </script>

  <script type="text/javascript">
    $(window).load(function () {
      $.get("admin/includes/get-job-open.inc.php", function (data) {
        if (data[0] != 0) {
          $("#job-open").attr("href", data);
          document.getElementById("job-closed").style.display = "none";
          document.getElementById("job-open").style.display = "block";
        }
        else {
          document.getElementById("job-closed").style.display = "block";
          document.getElementById("job-open").style.display = "none";
        }
      });
    });
  </script>

  <script type="text/javascript">
    $(window).load(function () { document.getElementById("hideAll").style.display = "none"; });
    $(window).load(function () { document.getElementById("header").style.display = "block"; });
  </script>
