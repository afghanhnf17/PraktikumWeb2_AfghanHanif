<?php
require_once './class_account.php';

class AccountBank extends Account
{
    public function doTransfer($destination, $uangTranfer)
    {
        Account::withdraw($uangTranfer, false);
        $destination->deposit($uangTranfer, false);

        echo "Transfer sejumlah " .  number_format($uangTranfer, 2, ',', '.') . " dari $this->nama - $this->nomor ke $destination->nama - $destination->nomor sukses! </br>";
    }
}

$afghan = new AccountBank('BSI0001', 'Afghan Hanif Adiyat', 3450000);
$alif = new AccountBank('BSI0002', 'Alif Wijaya', 45000);
$tirta = new AccountBank('BSI0003', 'Tirta Raja', 235000);

$afghan->deposit(1000000);
$afghan->cetak();

$afghan->doTransfer($alif, 1000000);
$afghan->cetak();

$afghan->doTransfer($tirta, 500000);
$afghan->cetak();

$alif->cetak();
$tirta->cetak();
