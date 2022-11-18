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

    <title>Rapsody</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="vendor/jquery-ui/jquery-ui.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body id="page-top">
    <?php include 'header.php'; ?>

    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Administracija</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <h3>Unos ponude</h3>
	           <form method="POST" action="dodajPonudu.php">
               <label for="grad">Destinacija</label>
               <select name="destinacija" class="form-control" id="grad">
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
               <label for="cena">Cena</label>
               <input type="number" name="cena" id="cena" class="form-control">
               <label for="datumod">Datum od</label>
               <input type="text" name="datumod" id="datumod" class="form-control datepicker">
               <label for="datumdo">Datum do</label>
               <input type="text" name="datumdo" id="datumdo" class="form-control datepicker">
               <hr>
               <input type="submit" name="submit" value="Unesi ponudu" class="form-control btn-dark">
             </form>
             <hr>
             <?php
                  if(isset($_GET['poruka'])){
                    ?>
                    <div class="alert alert-<?= $_GET['tip'] ?>" role="alert">
                        <?= $_GET['poruka'] ?>
                    </div>
                    <?php
                  }
              ?>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <h3>Izmena cene ponude</h3>
	           <form method="POST" action="izmeniPonudu.php">
               <label for="ponuda">Ponuda</label>
               <select name="ponuda" class="form-control" id="grad">
                 <?php
                   $upit = 'SELECT * FROM destinacija d join ponuda p on d.destinacijaID = p.destinacijaID';

                   $resultSet = $konekcija->query($upit);

                   while($row = $resultSet->fetch_assoc()){
                     ?>
                       <option value="<?= $row['ponudaID'] ?>"><?= $row['grad'] ?> : <?= $row['datumOD'] ?> - <?= $row['datumDO'] ?> </option>

                     <?php
                   }

                   ?>
               </select>
               <label for="cena">Cena</label>
               <input type="number" name="cena" id="cena" class="form-control">
               <hr>
               <input type="submit" name="submit" value="Izmeni ponudu" class="form-control btn-dark">
             </form>
             <hr>
             <?php
                  if(isset($_GET['porukaIzmena'])){
                    ?>
                    <div class="alert alert-<?= $_GET['tip'] ?>" role="alert">
                        <?= $_GET['porukaIzmena'] ?>
                    </div>
                    <?php
                  }
              ?>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 mx-auto">
            <h3>Obrisi ponudu</h3>
	           <form method="POST" action="obrisiPonudu.php">
               <label for="ponuda">Ponuda</label>
               <select name="ponuda" class="form-control" id="grad">
                 <?php
                   $upit = 'SELECT * FROM destinacija d join ponuda p on d.destinacijaID = p.destinacijaID';

                   $resultSet = $konekcija->query($upit);

                   while($row = $resultSet->fetch_assoc()){
                     ?>
                       <option value="<?= $row['ponudaID'] ?>"><?= $row['grad'] ?> : <?= $row['datumOD'] ?> - <?= $row['datumDO'] ?> </option>

                     <?php
                   }

                   ?>
               </select>
               <hr>
               <input type="submit" name="submit" value="Obrisi ponudu" class="form-control btn-dark">
             </form>
             <hr>
             <?php
                  if(isset($_GET['porukaBrisanje'])){
                    ?>
                    <div class="alert alert-<?= $_GET['tip'] ?>" role="alert">
                        <?= $_GET['porukaBrisanje'] ?>
                    </div>
                    <?php
                  }
              ?>
          </div>
        </div>
      </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="vendor/jquery-ui/jquery-ui.js"></script>

    <script src="js/main.js"></script>
    <script>
      $( function() {
        $( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
      } );
      </script>

  </body>

</html>
