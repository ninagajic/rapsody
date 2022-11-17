<?php
include 'init.php';

$sort = $_GET['sort'];

$grad = $_GET['grad'];

$upit = 'SELECT * FROM destinacija d join ponuda p on d.destinacijaID = p.destinacijaID order by cena '.$sort;

$resultSet = $konekcija->query($upit);
$niz = [];

while($row = $resultSet->fetch_assoc()){

  if($grad == '0' || $grad == $row['destinacijaID'] ){

    $destinacija = new Destinacija();
    $destinacija->setDestinacijaID($row['destinacijaID']);
    $destinacija->setGrad($row['grad']);
    $destinacija->setOpisGrada($row['opisGrada']);

    $ponuda = new Ponuda();
    $ponuda->setPonudaID($row['ponudaID']);
    $ponuda->setDatumDo($row['datumDO']);
    $ponuda->setDatumOD($row['datumOD']);
    $ponuda->setCena($row['cena']);
    $ponuda->setDestinacija($destinacija);

    array_push($niz,$ponuda);
  }
}
echo(json_encode($niz,JSON_UNESCAPED_UNICODE));

?>
