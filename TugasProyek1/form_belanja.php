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
                    <div class="col-sm-12" style="text-align: center; margin-top: 20px;">
                        <h1 class="m-0" style="font-family: poppins !important;">Form Belanja</h1>
                    </div><!-- /.col -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div class="container">
                <div class="row" style="margin-top: 10px;">
                    <div class="col-sm">
                        <h4>Form Belanja</h4>
                        <hr>
                        <form method="POST" action="form_belanja.php">
                            <div class="form-group row">
                                <label for="customer" class="col-4 col-form-label">Customer</label>
                                <div class="col-8">
                                    <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4">Pilih Produk</label>
                                <div class="col-8">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="Tv">
                                        <label for="produk_0" class="custom-control-label">TV</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas">
                                        <label for="produk_1" class="custom-control-label">KULKAS</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci">
                                        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah" class="col-4 col-form-label">Jumlah Barang</label>
                                <div class="col-8">
                                    <input id="jumlah" name="jumlah" placeholder="Jumlah Barang" type="number" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <button name="proses" type="submit" class="btn btn-success">Kirim</button>
                                </div>
                            </div>
                        </form>
                        <?php
                        $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
                        $nama_customer = isset($_POST['customer']) ? $_POST['customer'] : '';
                        $produk = isset($_POST['produk']) ? $_POST['produk'] : '';
                        $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';
                        if ($produk === 'Tv') {
                            $total_belanja = number_format((int)$jumlah * 4200000, 0, ',', '.');
                        } else if ($produk === 'Kulkas') {
                            $total_belanja = number_format((int)$jumlah * 3100000, 0, ',', '.');
                        } else {
                            $total_belanja = number_format((int)$jumlah * 3800000, 0, ',', '.');
                        }

                        echo 'Keterangan Barang';
                        echo '<br/><strong>Nama Customer</strong> : ' . $nama_customer;
                        echo '&nbsp; <strong>Produk Pilihan</strong> : ' . $produk;
                        echo '<br/> <strong>Jumlah Beli</strong> : ' . $jumlah;
                        echo '&nbsp; <strong>Total Belanja</strong> : Rp. ' . $total_belanja . ',-';
                        ?>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr style="background-color: #1e73be; color: white;">
                                    <th scope="col">Daftar Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">TV : 4.200.000</th>
                                </tr>
                                <tr>
                                    <th scope="row">Kulkas : 3.100.000</th>
                                </tr>
                                <tr>
                                    <th scope="row">Mesin Cuci : 3.800.000</th>
                                </tr>
                                <tr style="background-color: #1e73be; color: white;">
                                    <th scope="row">*Note : Harga Dapat Berubah Setiap Saat</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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