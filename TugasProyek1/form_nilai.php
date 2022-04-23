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
                        <h1 class="m-0" style="font-family: poppins !important;">Form Nilai Mahasiswa</h1>
                    </div><!-- /.col -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div class="container" style="margin-top: 20px;">
                <form method="GET" action="form_nilai.php">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                        <div class="col-8">
                            <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="select" class="col-4 col-form-label">Mata Kuliah</label>
                        <div class="col-8">
                            <select id="select" name="matkul" class="custom-select">
                                <option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                                <option value="Basis Data">Basis Data</option>
                                <option value="Pemrograman Web">Pemrograman Web</option>
                                <option value="Pemrograman Web">Jaringan Komputer</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                        <div class="col-8">
                            <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                        <div class="col-8">
                            <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label>
                        <div class="col-8">
                            <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas/Praktikum" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="proses" type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </form>
                <?php
                $proses = isset($_GET['proses']) ? $_GET['proses'] : '';
                $nama_siswa = isset($_GET['nama']) ? $_GET['nama'] : '';
                $mata_kuliah = isset($_GET['matkul']) ? $_GET['matkul'] : '';
                $nilai_uts = isset($_GET['nilai_uts']) ? $_GET['nilai_uts'] : '';
                $nilai_uas = isset($_GET['nilai_uas']) ? $_GET['nilai_uas'] : '';
                $nilai_tugas = isset($_GET['nilai_tugas']) ? $_GET['nilai_tugas'] : '';

                echo 'Proses Nilai' . $proses;
                echo '<br/>Nama &nbsp;: ' . $nama_siswa;
                echo '<br/>Mata Kuliah &nbsp;: ' . $mata_kuliah;
                echo '<br/>Nilai UTS &nbsp;: ' . $nilai_uts;
                echo '<br/>Nilai UAS &nbsp;: ' . $nilai_uas;
                echo '<br/>Nilai Tugas Praktikum &nbsp;: ' . $nilai_tugas;
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