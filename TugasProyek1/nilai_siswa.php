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
                <form class="form-horizontal" method="POST" action="nilai_siswa.php">
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
                            <button name="proses" type="submit" class="btn btn-success" value="simpan">Simpan</button>
                        </div>
                    </div>
                </form>
                <?php
                $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
                $nama_siswa = isset($_POST['nama']) ? $_POST['nama'] : '';
                $mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : '';
                $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
                $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
                $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';

                if (!empty($proses)) {
                    echo 'Proses &nbsp;: &nbsp;' . $proses;
                    echo '<br/>Nama &nbsp;: &nbsp;' . $nama_siswa;
                    echo '<br/>Mata Kuliah &nbsp;: &nbsp;' . $mata_kuliah;
                    echo '<br/>Nilai UTS &nbsp;: &nbsp;' . $nilai_uts;
                    echo '<br/>Nilai UAS &nbsp;: &nbsp;' . $nilai_uas;
                    echo '<br/>Nilai Tugas Praktikum &nbsp;: &nbsp;' . $nilai_tugas;

                    $persen_uts = (30 / 100) * $nilai_uts;
                    $persen_uas = (35 / 100) * $nilai_uas;
                    $persen_tugas = (35 / 100) * $nilai_tugas;
                    $total_persen_kelulusan = $persen_uts + $persen_uas + $persen_tugas;

                    if ($total_persen_kelulusan > 55) {
                        echo '<br/>Kelulusan: <b>LULUS</b>';
                    } else {
                        echo '<br/>Kelulusan: <b>TIDAK LULUS</b>';
                    }

                    if ($total_persen_kelulusan <= 35) {
                        $grade = 'E';
                        echo '<br/>Grade: <b>E</b>';
                    } else if ($total_persen_kelulusan <= 55) {
                        $grade = 'D';
                        echo '<br/>Grade: <b>D</b>';
                    } else if ($total_persen_kelulusan <= 69) {
                        $grade = 'C';
                        echo '<br/>Grade: <b>C</b>';
                    } else if ($total_persen_kelulusan <= 84) {
                        $grade = 'B';
                        echo '<br/>Grade: <b>B</b>';
                    } else if ($total_persen_kelulusan <= 100) {
                        $grade = 'A';
                        echo '<br/>Grade: <b>A</b>';
                    } else {
                        $grade = 'I';
                        echo '<br/>Grade: <b>I</b>';
                    }

                    switch ($grade) {
                        case 'E':
                            echo '<br/>Predikat: <b>Sangat Kurang</b>';
                            break;
                        case 'D':
                            echo '<br/>Predikat: <b>Kurang</b>';
                            break;
                        case 'C':
                            echo '<br/>Predikat: <b>Cukup</b>';
                            break;
                        case 'B':
                            echo '<br/>Predikat: <b>Memuaskan</b>';
                            break;
                        case 'A':
                            echo '<br/>Predikat: <b>Sangat Memuaskan</b>';
                            break;
                        case 'I':
                            echo '<br/>Predikat: <b>Tidak Ada</b>';
                            break;
                    }
                }
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