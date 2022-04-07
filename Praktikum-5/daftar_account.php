<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Praktikum 5">
    <meta name="author" content="Afghan Hanif Adiyat">
    <title>Daftar Account Bank</title>

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>

<body>

    <section style="margin: 5%;">
        <table border="1">
            <?php
            require_once "class_account.php";
            ?>

            <thead>
                <tr style="text-align: center;">
                    <th>No</th>
                    <th>No. Accouunt</th>
                    <th>Pemilik</th>
                    <th>Saldo</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $no = 1;

                $arrAccount = [
                    $bambang = new Account('BSI0001', 'Afghan Hanif Adiyat', 7500000),
                    $pamungkas = new Account('BSI0002', 'Alif Wijaya', 250000),
                    $abdu = new Account('BSI0003', 'Tirta Raja', 1500000)
                ];

                foreach ($arrAccount as $valueAccount) {
                ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $valueAccount->getProperties('nomor'); ?></td>
                        <td><?= $valueAccount->getProperties('nama'); ?></td>
                        <td><?= number_format($valueAccount->getProperties('saldo'), 2, ',', '.'); ?></td>
                    </tr>
                <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>
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

        .atas_1 {
            padding: 5px 60px;
        }

        .atas_2 {
            padding: 10px 60px;
        }

        table td {
            padding: 10px 10px;
            text-align: center;
        }
    </style>
</body>

</html>