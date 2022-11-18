<?php
class Destinacija {

    public $destinacijaID;

    public $grad;

    public $opisGrada;

    public function getDestinacijaID() {
        return $this->destinacijaID;
    }

    public function setDestinacijaID($destinacijaID) {
        $this->destinacijaID = $destinacijaID;
    }

    public function getGrad() {
        return $this->grad;
    }

    public function setGrad($grad) {
        $this->grad = $grad;
    }

    public function getOpisGrada() {
        return $this->opisGrada;
    }

    public function setOpisGrada($opisGrada) {
        $this->opisGrada = $opisGrada;
    }
}
