<?php
include 'init.php';

$ponudaID = trim($_POST['ponuda']);
$cena = trim($_POST['cena']);


$ponuda = new Ponuda();

$ponuda->setCena($cena);
$ponuda->setPonudaID($ponudaID);

$uspesno = $ponuda->change($konekcija);

if($uspesno){
  header("Location: administracija.php?porukaIzmena=Uspesno ste izmenili ponudu!!!&tip=success");
}else{
  header("Location: administracija.php?porukaIzmena=Neuspesno ste izmenili ponudu!!!&tip=danger");
}
 ?>
