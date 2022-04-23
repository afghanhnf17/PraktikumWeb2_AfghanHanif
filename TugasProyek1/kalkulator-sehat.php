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
            <?php
            include "../Kalkulator-Sehat/class/class_pasien.php";
            include "../Kalkulator-Sehat/class/class_bmi.php";
            include "../Kalkulator-Sehat/class/class_BMIPasien.php";

            $dataPasien = [];

            $pasien = new Pasien("1", "P001", "Afghan Hanif", "L");
            $BMIPasien = new BMICalt(45, 150);

            // $pasien2 = new Pasien("2", "P002", "Tirta Raja", "L");
            // $BMIPasien2 = new BMICalt(60, 155);

            $pasien3 = new Pasien("2", "P002", "Alif Wijaya", "L");
            $BMIPasien3 = new BMICalt(45.2, 171);

            $dataPasien1 = new BMIPasien("20/12/2021", $pasien, $BMIPasien);
            $dataPasien3 = new BMIPasien("20/02/2022", $pasien3, $BMIPasien3);
            array_push($dataPasien, $dataPasien1, $dataPasien3);


            if (isset($_POST["tambah"])) {
                $tgl_periksa = $_POST["tgl_periksa"];
                $nama = $_POST["nama"];
                $gender = $_POST["gender"];
                $berat = $_POST["berat"];
                $tinggi = $_POST["tinggi"];

                $pasienew = new Pasien(count($dataPasien) + 1, "P003", $nama, $gender);
                $BMIPasienew = new BMICalt($berat, $tinggi);
                $dataPasienew = new BMIPasien($tgl_periksa, $pasienew, $BMIPasienew);
                array_push($dataPasien, $dataPasienew);
            }

            ?>

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

            <div class="container d-flex justify-content-center">
                <div class="card mt-4" style="width:30rem">
                    <div class="card-header">Kalkulator BMI Kesehatan</div>
                    <div class="card-body">
                        <form action="kalkulator-sehat.php" method="post">
                            <input id="tgl_periksa" name="tgl_periksa" value="<?= date('Y-m-d'); ?>" type="hidden" class="form-control">

                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input id="nama" name="nama" placeholder="Nama Pasien" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="laki-laki" value="L">
                                    <label class="form-check-label" for="laki-laki">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="perempuan" value="P">
                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tinggi Badan (Cm)</label>
                                <input id="tinggi" name="tinggi" placeholder="Tinggi Badan Pasien (Cm)" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Berat Badan (Kg)</label>
                                <input id="berat" name="berat" placeholder="Berat Badan Pasien (Kg)" type="text" class="form-control">
                            </div>
                            <button type="submit" name="tambah" class="btn btn-primary btn-sm">Hitung & Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <table class="table table-bordered text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal Periksa</th>
                            <th scope="col">Kode Pasien</th>
                            <th scope="col">Nama Pasien</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Berat Badan (Kg)</th>
                            <th scope="col">Tinggi Badan (Cm)</th>
                            <th scope="col">Nilai BMI</th>
                            <th scope="col">Status BMI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($dataPasien as $data) : ?>
                            <tr>
                                <th scope="row"><?= $data->pasien->id; ?></th>
                                <td><?= $data->tanggal; ?></td>
                                <td><?= $data->pasien->kode; ?></td>
                                <td><?= $data->pasien->nama; ?></td>
                                <td><?= $data->pasien->gender; ?></td>
                                <td><?= $data->BMI->berat; ?></td>
                                <td><?= $data->BMI->tinggi; ?></td>
                                <td><?= $data->BMI->nilai(); ?></td>
                                <td><?= $data->BMI->status() ?></td>
                            </tr>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

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