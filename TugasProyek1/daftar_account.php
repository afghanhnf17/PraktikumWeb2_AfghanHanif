<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php
include_once('head.php');
?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?php echo ('dist/img/AdminLTELogo.png') ?>" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php
        include_once('header.php');
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        include_once('sidebar.php');
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="col-sm-12" style="text-align: center; margin-top: 10px; margin-bottom: 15px;">
                        <h1 class="m-0" style="font-family: poppins !important;">Daftar Akun</h1>
                    </div><!-- /.col -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="container" style="font-family: poppins !important;">
                <table style="margin-top: 10px;" class="table table-bordered text-center">
                    <?php
                    require_once "../Praktikum-5/class_account.php";
                    ?>

                    <thead class="thead-dark">
                        <tr style="text-align: center;">
                            <th>No</th>
                            <th>No. Accouunt</th>
                            <th>Pemilik</th>
                            <th>Saldo</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;

                        $arrAccount = [
                            $bambang = new Account('BSI0001', 'Afghan Hanif Adiyat', 7500000),
                            $pamungkas = new Account('BSI0002', 'Alif Wijaya', 250000),
                            $abdu = new Account('BSI0003', 'Tirta Raja', 1500000)
                        ];

                        foreach ($arrAccount as $valueAccount) {
                        ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $valueAccount->getProperties('nomor'); ?></td>
                                <td><?= $valueAccount->getProperties('nama'); ?></td>
                                <td><?= number_format($valueAccount->getProperties('saldo'), 2, ',', '.'); ?></td>
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="col-sm-12" style="text-align: center; margin-top: 10px; margin-bottom: 15px;">
                        <h1 class="m-0" style="font-family: poppins !important;">Daftar Deposit Bank</h1>
                    </div><!-- /.col -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="container" style="font-family: poppins !important;">
                <?php

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
                ?>
            </div>
        </div>

        <!-- /.content-wrapper -->
        <?php
        include_once('footer.php');
        ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php
    include_once('mainjs.php');
    ?>
</body>

</html>