<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Praktikum Form Nilai">
    <meta name="author" content="Afghan Hanif Adiyat">
    <title>Form Nilai Mahasiswa</title>

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section style="margin-bottom: auto; margin-top: 5%;">
        <div class="container">
            <h4>Form Nilai Mahasiswa</h4>
            <hr>
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
    </section>

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