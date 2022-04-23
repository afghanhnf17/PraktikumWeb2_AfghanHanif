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
            $ns1 = ['id' => 1, 'nim' => '01101', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
            $ns2 = ['id' => 2, 'nim' => '01121', 'uts' => 70, 'uas' => 50, 'tugas' => 68];
            $ns3 = ['id' => 3, 'nim' => '01130', 'uts' => 60, 'uas' => 86, 'tugas' => 70];
            $ns4 = ['id' => 4, 'nim' => '01134', 'uts' => 90, 'uas' => 91, 'tugas' => 82];

            $ar_nilai = [$ns1, $ns2, $ns3, $ns4];
            ?>

            <style>
                table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                }

                td,
                th {
                    border: 1px solid #dddddd;
                    text-align: center;
                    padding: 8px;
                }

                tr:nth-child(even) {
                    background-color: #dddddd;
                }
            </style>

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="col-sm-12" style="text-align: center; margin-top: 20px;">
                        <h1 class="m-0" style="font-family: poppins !important;">Daftar Nilai Siswa</h1>
                    </div><!-- /.col -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="container">
                <table style="margin-top: 10px;" class="table table-bordered text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>UTS</th>
                            <th>UAS</th>
                            <th>Tugas</th>
                            <th>Nilai Akhir</th>
                        </tr>
                    </thead>
                    <tbody style="background-color: white;">
                        <tr>
                            <?php
                            $nomor = 1;
                            foreach ($ar_nilai as $ns) {
                                echo '<tr><td>' . $nomor . '</td>';
                                echo '<td>' . $ns['nim'] . '</td>';
                                echo '<td>' . $ns['uts'] . '</td>';
                                echo '<td>' . $ns['uas'] . '</td>';
                                echo '<td>' . $ns['tugas'] . '</td>';
                                $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
                                echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
                                echo '<tr/>';
                                $nomor++;
                            }
                            ?>
                        </tr>
                    </tbody>
                </table>
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