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
                        <h1 class="m-0" style="font-family: poppins !important;">Kelas Lingkaran</h1>
                    </div><!-- /.col -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="container" style="font-family: poppins !important;">
                <?php
                require_once "../Praktikum-4/lingkaran/class_lingkaran.php";
                echo "Nilai PHI " . Lingkaran::PHI;

                $lingkar1 = new Lingkaran(10);
                $lingkar2 = new Lingkaran(4);

                echo "<br/>Luas Lingkaran I " . $lingkar1->getLuas();
                echo "<br/>Luas Lingkaran II " . $lingkar2->getLuas();
                echo "<br/>Keliling Lingkaran I " . $lingkar1->getKeliling();
                echo "<br/>Keliling Lingkaran II " . $lingkar2->getKeliling(); ?>
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