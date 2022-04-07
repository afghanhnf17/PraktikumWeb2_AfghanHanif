<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Praktikum-4">
    <meta name="author" content="Afghan Hanif Adiyat">
    <title>Daftar Mahasiswa</title>

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
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
                <table border="1">

                    <?php
                    require_once "class_mahasiswa.php";

                    $mhs1 = new Mahasiswa("01101", "Afghan", 2021, "Sistem Informasi", 3.5);
                    $mhs2 = new Mahasiswa("01102", "Alif", 2021, "Sistem Informasi", 4.0);
                    $mhs3 = new Mahasiswa("01103", "Ilyas", 2021, "Sistem Informasi", 3.7);
                    $mhs4 = new Mahasiswa("01104", "Tirta", 2021, "Sistem Informasi", 3.4);

                    $mhsw = array($mhs1, $mhs2, $mhs3, $mhs4)
                    ?>

                    <thead>
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

    <style>
        html * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: "Poppins", Helvetica, sans-serif;
        }

        body {
            background: #fff;
            font-size: 14px;
            font-size: 0.875rem;
            font-family: "Poppins", Helvetica, sans-serif;
            color: #444;
        }
    </style>
</body>

</html>