<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Praktikum Form Nilai">
    <meta name="author" content="Afghan Hanif Adiyat">
    <title>Form Nilai Siswa</title>

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section style="margin-bottom: auto; margin-top: 3%;">
        <div class="container">
            <h4>Form Nilai Siswa</h4>
            <hr>
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