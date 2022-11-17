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
        <h2 class="text-center text-uppercase text-secondary mb-0">Ponuda</h2>
        <br>
        <div class="row">
            <div class="col-lg-5 mx-auto">
              <label for="grad">Destinacija</label>
              <select name="destinacija" class="form-control" id="grad">
                <option value="0">Skup destinacija </option>
                <?php
                  $upit = 'SELECT * FROM destinacija';

                  $resultSet = $konekcija->query($upit);

                  while($row = $resultSet->fetch_assoc()){
                    ?>
                      <option value="<?= $row['destinacijaID'] ?>"><?= $row['grad'] ?> </option>

                    <?php
                  }

                  ?>
              </select>
            </div>
            <div class="col-lg-5 mx-auto">
              <label for="sort">Sortiraj</label>
              <select name="sort" class="form-control" id=sort>
                  <option value="asc">Rastuc redosled </option>
                  <option value="desc">Opadajuc redosled</option>
              </select>
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
          url: 'pretrazi.php',
          data: {grad: $("#grad").val(), sort: $("#sort").val()},
          success: function(data){
            var html = '';
            html+= '<table class="table table-hover">';
            html+= '<thead>';
            html+= '<tr>';
            html+= '<th>Grad</th>';
            html+= '<th>Datum od</th>';
            html+= '<th>Datum do</th>';
            html+= '<th>Cena</th>';
            html+= '</tr>';
            html+= '</thead>';
            html+= '<tbody>';

            $.each(JSON.parse(data),function(kljuc,ponuda){
              html+= '<tr>';
              html+= '<td>'+ponuda.destinacija.grad+'</td>';
              html+= '<td>'+ponuda.datumOD+'</td>';
              html+= '<td>'+ponuda.datumDo+'</td>';
              html+= '<td>'+ponuda.cena+' eura</td>';
              html+= '</tr>';
            })

            html+= '</tbody>';
            html+= '</table>';

            $("#tabela").html(html);
          }
        });
      }


    </script>

  </body>

</html>
