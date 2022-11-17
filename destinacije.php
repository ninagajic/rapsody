<?php

include 'init.php';
 ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rapsody Travel</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body id="page-top">
    <?php include 'header.php'; ?>

    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Destinacije</h2>
        <br>
        <div class="row">
            <div class="col-lg-5 mx-auto">
              <label for="grad">Pretraga po imenu</label>
              <input type="text" class="form-control" id="pretraga" />
            </div>

            <div class="col-lg-2 mx-auto">
              <label for="dugme">Pretrazi</label>
              <button id="dugme" type="button" onclick="pretrazi()" class="btn btn-dark form-control">Pretrazi</button>
            </div>
        </div>
        <hr>
        <div class="row">
          <div id="tabela" class="col-lg-12 mx-auto"></div>
        </div>

      </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>

    <script src="js/main.js"></script>

    <script>
      function pretrazi(){
        $.ajax({
          url: 'destinacijePretraga.php',
          data: {pretraga: $("#pretraga").val()},
          success: function(data){
            var html = '';
            html+= '<table class="table table-hover">';
            html+= '<thead>';
            html+= '<tr>';
            html+= '<th>Grad</th>';
            html+= '<th>Opis grada</th>';
            html+= '</tr>';
            html+= '</thead>';
            html+= '<tbody>';

            $.each(JSON.parse(data),function(kljuc,destinacija){
              html+= '<tr>';
              html+= '<td>'+destinacija.grad+'</td>';
              html+= '<td>'+destinacija.opisGrada+'</td>';
              html+= '</tr>';
            })

            html+= '</tbody>';
            html+= '</table>';

            $("#tabela").html(html);
          }
        });
      }

      pretrazi();
    </script>

  </body>

</html>
