<?php

define('PHI', 3.14);
define('DBNAME', 'inventori');
define('DBSERVER', 'localhost');

$jari = 8;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI * $jari;

echo 'Luas Lingkaran dengan Jari-Jari &nbsp;' . $jari . '&nbsp; = &nbsp; ' . $luas;
echo '<br/>Kelilingnya = &nbsp;' . $keliling;
?>
<hr />
<?php
echo 'Nama databasenya : ' . DBNAME;
echo '<br/>Lokasi databasenya ada di ' . DBSERVER;
?>