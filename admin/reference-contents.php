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

    <title>Adminsivusto - Tyhjä</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

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
                    <h1 class="h3 mb-4 text-gray-800">Referenssit</h1>

                    <h1 class="h4 mb-4" style="color: rgb(0, 174, 255);">Vaihda järjestystä vetämällä otsikoita!<br>
                        Tehtyäsi muutokset paina "Tallenna järjestys" nappia!<br>
                        Muista tallentaa muutokset heti tehtyäsi ne!
                    </h1>

                    <a href="add-reference.html" class="h5" target="">Lisää uusi referenssi</a>

                    <br><br>
                    
                    <select id="titleselector">
                        <option value="0"></option>
                        <option value="1">referenssiotsikko 1</option>
                        <option value="2">referenssiotsikko 2</option>
                        <option value="3">referenssiotsikko 3</option>
                        <option value="4">referenssiotsikko 4</option>
                    </select>
                    
                    <br>
                    <div class="list-container" id="0" style="margin-top: 25px; display:block;">
                        <h1 class="h3 mb-4 text-gray-800">Valitse minkä referenssiotsikon referenssejä haluat muokata</h1>
                    </div>
                    
                    <div class="list-container" id="1" style="margin-top: 25px; display:none;">

                        <h1 class="h3 mb-4 text-gray-800">Referenssiotsikko 1 referenssit</h1>

                        <ul id="sortable1">
                            <li id="1" reference-id="1" class="bg-gray-100 border-bottom-info ui-state-default">
                                Referenssi 1_1 <br>
                                <a href="edit-reference.html" style="color: rgb(230, 149, 0);">Muokkaa</a>
                                <a href="#" style="color: red;"> Poista</a>
                            </li>

                            <li id="1" reference-id="2" class="bg-gray-100 border-bottom-info ui-state-default">
                                Referenssi 1_2 <br>
                                <a href="edit-reference.html" style="color: rgb(230, 149, 0);">Muokkaa</a>
                                <a href="#" style="color: red;"> Poista</a>
                            </li>

                            <li id="1" reference-id="3" class="bg-gray-100 border-bottom-info ui-state-default">
                                Referenssi 1_3 <br>
                                <a href="edit-reference.html" style="color: rgb(230, 149, 0);">Muokkaa</a>
                                <a href="#" style="color: red;"> Poista</a>
                            </li>

                            <li id="1" reference-id="4" class="bg-gray-100 border-bottom-info ui-state-default">
                                Referenssi 1_4 <br>
                                <a href="edit-reference.html" style="color: rgb(230, 149, 0);">Muokkaa</a>
                                <a href="#" style="color: red;"> Poista</a>
                            </li>

                        </ul>

                        <button class="btn btn-success btn-icon-split" onclick="saveOrder1();">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Tallenna järjestys</span>
                        </button>
                        
                        <button class="btn btn-danger btn-icon-split" onclick="location.reload(true);">
                            <span class="icon text-white-50">
                                <i class="fas fa-trash"></i>
                            </span>
                            <span class="text">Hylkää muutokset</span>
                        </button>
                    </div>

                    <div class="list-container" id="2" style="margin-top: 25px; display:none;">

                        <h1 class="h3 mb-4 text-gray-800">Referenssiotsikko 2 referenssit</h1>

                        <ul id="sortable2">
                            <li id="2" reference-id="5" class="bg-gray-100 border-bottom-info ui-state-default">
                                Referenssi 2_1 <br>
                                <a href="edit-reference.html" style="color: rgb(230, 149, 0);">Muokkaa</a>
                                <a href="#" style="color: red;"> Poista</a>
                            </li>
                    
                            <li id="2" reference-id="6" class="bg-gray-100 border-bottom-info ui-state-default">
                                Referenssi 2_2 <br>
                                <a href="edit-reference.html" style="color: rgb(230, 149, 0);">Muokkaa</a>
                                <a href="#" style="color: red;"> Poista</a>
                            </li>
                    
                            <li id="2" reference-id="7" class="bg-gray-100 border-bottom-info ui-state-default">
                                Referenssi 2_3 <br>
                                <a href="edit-reference.html" style="color: rgb(230, 149, 0);">Muokkaa</a>
                                <a href="#" style="color: red;"> Poista</a>
                            </li>
                    
                            <li id="2" reference-id="8" class="bg-gray-100 border-bottom-info ui-state-default">
                                Referenssi 2_4 <br>
                                <a href="edit-reference.html" style="color: rgb(230, 149, 0);">Muokkaa</a>
                                <a href="#" style="color: red;"> Poista</a>
                            </li>
                            
                        </ul>

                        <button class="btn btn-success btn-icon-split" onclick="saveOrder2();">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Tallenna järjestys</span>
                        </button>
                        
                        <button class="btn btn-danger btn-icon-split" onclick="location.reload(true);">
                            <span class="icon text-white-50">
                                <i class="fas fa-trash"></i>
                            </span>
                            <span class="text">Hylkää muutokset</span>
                        </button>
                    </div>

                    <div class="list-container" id="3" style="margin-top: 25px; display:none;">

                        <h1 class="h3 mb-4 text-gray-800">Referenssiotsikko 3 referenssit</h1>

                        <ul id="sortable3">
                            <li id="3" reference-id="9" class="bg-gray-100 border-bottom-info ui-state-default">
                                Referenssi 3_1 <br>
                                <a href="edit-reference.html" style="color: rgb(230, 149, 0);">Muokkaa</a>
                                <a href="#" style="color: red;"> Poista</a>
                            </li>
                    
                            <li id="3" reference-id="10" class="bg-gray-100 border-bottom-info ui-state-default">
                                Referenssi 3_2 <br>
                                <a href="edit-reference.html" style="color: rgb(230, 149, 0);">Muokkaa</a>
                                <a href="#" style="color: red;"> Poista</a>
                            </li>
                    
                            <li id="3" reference-id="11" class="bg-gray-100 border-bottom-info ui-state-default">
                                Referenssi 3_3 <br>
                                <a href="edit-reference.html" style="color: rgb(230, 149, 0);">Muokkaa</a>
                                <a href="#" style="color: red;"> Poista</a>
                            </li>
                    
                            <li id="3" reference-id="12" class="bg-gray-100 border-bottom-info ui-state-default">
                                Referenssi 3_4 <br>
                                <a href="edit-reference.html" style="color: rgb(230, 149, 0);">Muokkaa</a>
                                <a href="#" style="color: red;"> Poista</a>
                            </li>
                    
                        </ul>

                        <button class="btn btn-success btn-icon-split" onclick="saveOrder3();">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Tallenna järjestys</span>
                        </button>
                        
                        <button class="btn btn-danger btn-icon-split" onclick="location.reload(true);">
                            <span class="icon text-white-50">
                                <i class="fas fa-trash"></i>
                            </span>
                            <span class="text">Hylkää muutokset</span>
                        </button>
                    </div>

                    <div class="list-container" id="4" style="margin-top: 25px; display:none;">

                        <h1 class="h3 mb-4 text-gray-800">Referenssiotsikko 4 referenssit</h1>

                        <ul id="sortable4">
                            <li id="4" reference-id="13" class="bg-gray-100 border-bottom-info ui-state-default">
                                Referenssi 4_1 <br>
                                <a href="edit-reference.html" style="color: rgb(230, 149, 0);">Muokkaa</a>
                                <a href="#" style="color: red;"> Poista</a>
                            </li>
                    
                            <li id="4" reference-id="14" class="bg-gray-100 border-bottom-info ui-state-default">
                                Referenssi 4_2 <br>
                                <a href="edit-reference.html" style="color: rgb(230, 149, 0);">Muokkaa</a>
                                <a href="#" style="color: red;"> Poista</a>
                            </li>
                    
                            <li id="4" reference-id="15" class="bg-gray-100 border-bottom-info ui-state-default">
                                Referenssi 4_3 <br>
                                <a href="edit-reference.html" style="color: rgb(230, 149, 0);">Muokkaa</a>
                                <a href="#" style="color: red;"> Poista</a>
                            </li>
                    
                            <li id="4" reference-id="16" class="bg-gray-100 border-bottom-info ui-state-default">
                                Referenssi 4_4 <br>
                                <a href="edit-reference.html" style="color: rgb(230, 149, 0);">Muokkaa</a>
                                <a href="#" style="color: red;"> Poista</a>
                            </li>
                    
                        </ul>

                        <button class="btn btn-success btn-icon-split" onclick="saveOrder4();">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Tallenna järjestys</span>
                        </button>
                        
                        <button class="btn btn-danger btn-icon-split" onclick="location.reload(true);">
                            <span class="icon text-white-50">
                                <i class="fas fa-trash"></i>
                            </span>
                            <span class="text">Hylkää muutokset</span>
                        </button>
                    </div>
                    
                    

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

    <!-- Tulevaisuudessa php:n automatisoimaa scriptiä tiedostoon -->
    <script>
        $(function () {
            $("#sortable1").sortable();
            $("#sortable1").disableSelection();
        });
    </script>

    <script>
        $(function () {
            $("#sortable2").sortable();
            $("#sortable2").disableSelection();
        });
    </script>

    <script>
        $(function () {
            $("#sortable3").sortable();
            $("#sortable3").disableSelection();
        });
    </script>

    <script>
        $(function () {
            $("#sortable4").sortable();
            $("#sortable4").disableSelection();
        });
    </script>

    <!-- Tulevaisuudessa php:n automatisoimaa scriptiä tiedostoon -->
    <script type="text/javascript">
        function saveOrder1() {
            var referenceorder1 = "";
            var otsikko = "otsikko 1"

            $("#sortable1 li#1").each(function (i) {
                if (referenceorder1 == '')
                    referenceorder1 = $(this).attr('reference-id');
                else
                    referenceorder1 += "," + $(this).attr('reference-id');
            });
            
            $.post('saveorder.php?reforder=1', { order: referenceorder1 })
            .done(function(result) {
                alert('Järjestys otsikolle "' + otsikko + '" on tallennettu \nTallennetut tiedot: ' + result + "\nKoodissa laskeminen alkaa nollasta, eli 0 = ensimmäinen");
            })
            .fail(function(data) { 
                alert('Error: ' + data); 
            }); 
            
        }
    </script>

    <script type="text/javascript">
        function saveOrder2() {
            var referenceorder2 = "";
            var otsikko = "otsikko 2"

            $("#sortable2 li#2").each(function (i) {
                if (referenceorder2 == '')
                    referenceorder2 = $(this).attr('reference-id');
                else
                    referenceorder2 += "," + $(this).attr('reference-id');
            });

            $.post('saveorder.php?reforder=2', { order: referenceorder2 })
                .done(function (result) {
                    alert('Järjestys otsikolle "' + otsikko + '" on tallennettu \nTallennetut tiedot: ' + result + "\nKoodissa laskeminen alkaa nollasta, eli 0 = ensimmäinen");
            })
                .fail(function (data) {
                    alert('Error: ' + data);
            }); 

        }
    </script>

    <script type="text/javascript">
        function saveOrder3() {
            var referenceorder3 = "";
            var otsikko = "otsikko 3"

            $("#sortable3 li#3").each(function (i) {
                if (referenceorder3 == '')
                    referenceorder3 = $(this).attr('reference-id');
                else
                    referenceorder3 += "," + $(this).attr('reference-id');
            });

            $.post('saveorder.php?reforder=3', { order: referenceorder3 })
                .done(function (result) {
                    alert('Järjestys otsikolle "' + otsikko + '" on tallennettu \nTallennetut tiedot: ' + result + "\nKoodissa laskeminen alkaa nollasta, eli 0 = ensimmäinen");
            })
                .fail(function (data) {
                    alert('Error: ' + data);
            }); 

        }
    </script>

    <script type="text/javascript">
        function saveOrder4() {
            var referenceorder4 = "";
            var otsikko = "otsikko 4"

            $("#sortable4 li#4").each(function (i) {
                if (referenceorder4 == '')
                    referenceorder4 = $(this).attr('reference-id');
                else
                    referenceorder4 += "," + $(this).attr('reference-id');
            });

            $.post('saveorder.php?reforder=4', { order: referenceorder4 })
                .done(function (result) {
                    alert('Järjestys otsikolle "' + otsikko + '" on tallennettu \nTallennetut tiedot: ' + result + "\nKoodissa laskeminen alkaa nollasta, eli 0 = ensimmäinen");
            })
                .fail(function (data) {
                    alert('Error: ' + data);
            }); 

        }
    </script>

    <!-- Infile scripti -->
    <script type="text/javascript">
        $(function () {
            $('#titleselector').change(function () {
                $('.list-container').hide();
                $('#' + $(this).val()).show();
            });
        });
    </script>

</body>

</html>