<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rapsody travel</title>

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
        <h2 class="text-center text-uppercase text-secondary mb-0">O nama</h2>
       <p>   



       </p>
        <div class="row">
          <div class="col-lg-4 mx-auto">
            <h3>KANCELARIJA BEOGRAD</h3>
	           <p><strong>Adresa:</strong><br>Vojvode Stepe 19</p>
             <p><strong>Radno vreme:</strong><br>ponedeljak - petak: 10h - 16h<br>subota: 09h - 15h<br>nedelja: ne radimo</p>
             <p><strong>Kontakt:</strong><br>telefon: +381694445059 <br>e-mail: kancelarija.rapsody@rapsodytravel.com</p>
          </div>
          <div class="col-lg-4 mx-auto">
            <h3>KANCELARIJA NOVI SAD</h3>
              <p><strong>Adresa:</strong><br>Milana Legica 15/6</p>
              <p><strong>Radno vreme:</strong><br>ponedeljak - petak: 010h9h - 16h<br>subota: 09 - 15h<br>nedelja: ne radimo</p>
              <p><strong>Kontakt:</strong><br>telefon:+38165485978<br>e-mail: novisadkancelarija@rapsodytravel.com</p>
          </div>
        </div>
        <div class="row" id="bio">

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
      function bio(){
        $.ajax({
          url: 'bio.json',
          success: function(data){

            var html = '<div class="col-md-12 text-center">';
            html+= '<img class="img img-thumbnail" src="' + data.slika +'">';
            html+= '<h1>' + data.ime +' ' + data.prezime + '</h1>';
            html+= '<p>' + data.bio +'</p>';
            html+= '<h3>' + data.godinaRodjenja + '</h3>';

            html+= '</div>';

            $("#bio").html(html);
          }
        });
      }
      bio();
    </script>

  </body>

</html>
