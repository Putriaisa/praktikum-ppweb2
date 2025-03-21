<?php
  class lingkaran {
    public $jari;
    public const PHI = 3,14;

    public function __construct($r) {
        $this->jari = $jari;
        }

    public function getluas() {
        $luas = self::PHI * $this->jari * $this->jari;
        return $luas;
        }

    public function getkeliling() {
        $keliling = 2 * self::PHI * $this->jari;
        return $keliling;
    }

    public function getcetak() {
        echo "Lingkaran dengan jari2".$this->jari;
        echo "<br>Luas = ".$this->getluas();
        echo "<br>Keliling = ".$this->getkeliling();
  }
}
?>

