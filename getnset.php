<?php

class MataKuliah {
    private $nama;

    //geter for name
    public function getNama() {
        return $this->nama;
    }

    //setter for name
    public function setNama($nama) {
        $this->nama = $nama;
    }
}

$matkul = new MataKuliah();
$matkul->setNama('Pemrograman Web');

echo $matkul->getNama();
