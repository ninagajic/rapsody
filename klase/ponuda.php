<?php
class Ponuda {

    public $ponudaID;

    public $cena;

    public $datumOD;

    public $datumDo;

    public $destinacija;

    public function getPonudaID() {
        return $this->ponudaID;
    }

    public function setPonudaID($ponudaID) {
        $this->ponudaID = $ponudaID;
    }

    public function getCena() {
        return $this->cena;
    }

    public function setCena($cena) {
        $this->cena = $cena;
    }

    public function getDatumOD() {
        return $this->datumOD;
    }

    public function setDatumOD($datumOD) {
        $this->datumOD = $datumOD;
    }

    public function getDatumDo() {
        return $this->datumDo;
    }

    public function setDatumDo($datumDo) {
        $this->datumDo = $datumDo;
    }

    public function getDestinacija() {
        return $this->destinacija;
    }

    public function setDestinacija($destinacija) {
        $this->destinacija = $destinacija;
    }

    public function save($konekcija){

      $upit = "INSERT INTO ponuda VALUES (null,$this->cena,'$this->datumOD','$this->datumDo',$this->destinacija)";

      if($konekcija->query($upit)){
        return true;
      }else{
        return false;
      }

    }

    public function change($konekcija){

      $upit = "UPDATE ponuda set cena = $this->cena WHERE ponudaID = $this->ponudaID";

      if($konekcija->query($upit)){
        return true;
      }else{
        return false;
      }

    }

    public function delete($konekcija){

      $upit = "DELETE FROM ponuda WHERE ponudaID = $this->ponudaID";

      if($konekcija->query($upit)){
        return true;
      }else{
        return false;
      }

    }
}
