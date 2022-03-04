<!DOCTYPE html>
<html lang="en">

<body>

    <?php
    $team = ["Afghan", "Alip", "Ilyash", "Tirta"];
    array_pop($team);
    foreach ($team as $orang) {
        echo $orang . '<br/>';
    }
    ?>

</body>

</html>