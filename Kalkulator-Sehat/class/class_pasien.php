<?php class Pasien
{
    public $id,
        $kode,
        $nama,
        $gender;

    public function __construct($id, $kode, $nama, $gender)
    {
        $this->id = $id;
        $this->kode = $kode;
        $this->nama = $nama;
        $this->gender = $gender;
    }
}
