<?php
$motor = 'Honda Metik';

switch($motor){
    case "motor metik":
        echo "sa punya motor honda metik";
    case "Yamaha Beat":
        echo "Sa punya Motor Yamaha Beat";
        break;
    case "Zusuki":
        echo "Sa punya Motor Zusuki";
        break;
    default :
        echo "Sa belum punya motor";
        break;

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="get">
        <select name="motor" id=""></select>
        <option value="Honda Metik"></option>
        <option value="Yamaha Beat"></option>
        <option value="Zusuki"></option>
        <option value="Belum Ada"></option>

        <button type="submit">Cek Motor</button>
    </form>

</body>

</html>