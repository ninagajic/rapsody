<?php
include 'init.php';

$pretraga = $_GET['pretraga'];

$upit = "SELECT * FROM destinacija WHERE grad LIKE '%$pretraga%'";

$resultSet = $konekcija->query($upit);
$niz = [];

while($row = $resultSet->fetch_assoc()){

    $destinacija = new Destinacija();
    $destinacija->setDestinacijaID($row['destinacijaID']);
    $destinacija->setGrad($row['grad']);
    $destinacija->setOpisGrada($row['opisGrada']);

    array_push($niz,$destinacija);
  
}
echo(json_encode($niz,JSON_UNESCAPED_UNICODE));

?>
