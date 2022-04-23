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
                        <h1 class="m-0" style="font-family: poppins !important;">Nilai Mahasiswa</h1>
                    </div><!-- /.col -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="navbar-toggler-icon"></span>
                            </button> <a class="navbar-brand" href="#">WEB02</a>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Review PHP</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider">
                                            </div> <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">PHP5 OOP</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider">
                                            </div> <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </li>
                                </ul>
                                <form class="form-inline">
                                    <input class="form-control mr-sm-2" type="text" />
                                    <button class="btn btn-success my-2 my-sm-0" type="submit">
                                        Submit
                                    </button>
                                </form>
                                <ul class="navbar-nav ml-md-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Dropdown</a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider">
                                            </div> <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <div class="entries">
                            <h6>Show
                                <select>
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                </select>
                                entries
                            </h6>
                            <h6>Search : <input type="text" name="search" id="search"></h6>
                        </div>
                        <table style="margin-top: 10px;" class="table table-bordered text-center">

                            <?php
                            require_once "../Praktikum-4/nilai_mahasiswa/class_mahasiswa.php";

                            $mhs1 = new Mahasiswa("01101", "Afghan", 2021, "Sistem Informasi", 3.5);
                            $mhs2 = new Mahasiswa("01102", "Alif", 2021, "Sistem Informasi", 4.0);
                            $mhs3 = new Mahasiswa("01103", "Ilyas", 2021, "Sistem Informasi", 3.7);
                            $mhs4 = new Mahasiswa("01104", "Tirta", 2021, "Sistem Informasi", 3.4);

                            $mhsw = array($mhs1, $mhs2, $mhs3, $mhs4)
                            ?>

                            <thead class="thead-dark">
                                <tr>
                                    <th class="atas_1">No</th>
                                    <th class="atas_1">NIM</th>
                                    <th class="atas_2">Nama</th>
                                    <th class="atas_1">Program Studi</th>
                                    <th class="atas_1">Tahun Angkatan</th>
                                    <th class="atas_1">IPK</th>
                                    <th class="atas_2">Predikat</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php
                                $jml_mhs = count($mhsw);
                                $nomor = 1;

                                foreach ($mhsw as $mw) {
                                    echo "<tr>";
                                    echo "<td>$nomor</td>";
                                    $mw->cetak();
                                    echo '<td>' . $mw->predikat_ipk() . '</td>';
                                    echo "</tr>";
                                    $nomor++;
                                }

                                ?>
                            </tbody>
                        </table>

                        <div class="entries">
                            <h6>Showing 1 to 10 of 10 entries</h6>
                        </div>

                        <hr />

                        <p><strong>Lab Pemrograman Web Lanjutan</strong></p>
                        <P>Dosen: Sirojul Munir S.Si, M.Kom</P>
                        <p>STT-NF - Kampus B</p>

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