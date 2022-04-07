<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Praktikum Form Belanja">
    <meta name="author" content="Afghan Hanif Adiyat">
    <title>Persegi Panjang</title>

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section style="margin-bottom: 10%; margin-top: 10%;">
        <div class="container">
            <?php
            require_once "class_PersegiPanjang.php";

            $persegipanjang1 = new persegiPanjang(6, 12);
            $persegipanjang2 = new persegiPanjang(3, 7);

            echo "<br/>Luas Persegi Panjang I adalah " . $persegipanjang1->getLuas();
            echo "<br/>Luas Persegi Panjang II adalah " . $persegipanjang2->getLuas();
            echo "<br/>Keliling Persegi Panjang I adalah " . $persegipanjang1->getKeliling();
            echo "<br/>Keliling Persegi Panjang II adalah " . $persegipanjang2->getKeliling();

            ?>
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