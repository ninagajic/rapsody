<?php
include 'init.php';

$ponudaID = trim($_POST['ponuda']);

$ponuda = new Ponuda();
$ponuda->setPonudaID($ponudaID);

$uspesno = $ponuda->delete($konekcija);

if($uspesno){
  header("Location: administracija.php?porukaBrisanje=Uspesno ste obrisali ponudu!!!&tip=success");
}else{
  header("Location: administracija.php?porukaBrisanje=Neuspesno ste obrisali ponudu!!!&tip=danger");
}
 ?>
