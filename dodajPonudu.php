<?php
include 'init.php';

$destinacijaID = trim($_POST['destinacija']);
$cena = trim($_POST['cena']);
$datumOD = trim($_POST['datumod']);
$datumDO = trim($_POST['datumdo']);

$ponuda = new Ponuda();
$ponuda->setDatumDo($datumDO);
$ponuda->setDatumOD($datumOD);
$ponuda->setCena($cena);
$ponuda->setDestinacija($destinacijaID);

$uspesno = $ponuda->save($konekcija);


if($uspesno){
  header("Location: administracija.php?poruka=Uspesno ste uneli ponudu!!!&tip=success");
}else{
  header("Location: administracija.php?poruka=Neuspesno ste uneli ponudu!!!&tip=danger");
}
 ?>
