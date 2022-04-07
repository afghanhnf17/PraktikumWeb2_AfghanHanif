<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Praktikum Form Belanja">
    <meta name="author" content="Afghan Hanif Adiyat">
    <title>Praktikum Form Belanja</title>

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section style="margin-bottom: 10%; margin-top: 10%;">
        <div class="container">
            <div class="row">
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
    </section>
</body>

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

</html>