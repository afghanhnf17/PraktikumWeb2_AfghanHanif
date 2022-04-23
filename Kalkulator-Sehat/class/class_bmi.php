<?php class BMICalt

{
    public $bb, $tb;
    function __construct($bb, $tb)
    {
        $this->berat = $bb;
        $this->tinggi = $tb;
    }

    function nilai()
    {
        $nilai = $this->berat / (pow($this->tinggi / 100, 2));
        return number_format($nilai, 1);
    }

    function status()
    {
        $nilai = self::nilai();

        if ($nilai >= 30.0) {
            $status = "Kegemukan (Obesitas)";
        } else if ($nilai > 25.0 && $nilai < 29.9) {
            $status = "Kelebihan berat badan";
        } else if ($nilai > 18.5 && $nilai < 25.0) {
            $status = "Normal (Ideal)";
        } else if ($nilai < 18.5) {
            $status = "Kekurangan berat badan";
        }
        return $status;
    }
}
