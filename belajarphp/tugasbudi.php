<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duit Budi</title>
</head>
<body>
    <?php
        $Jumlah_Uang=60000;
        $Indomie=2500;
        $Saos=5000;
        $Aqua=3000;
        $Pembelian=((2*$Aqua)+(3*$Indomie)+(1*$Saos));
        $Kembalian=(($Jumlah_Uang)-(2*$Aqua)-(3*$Indomie)-(1*$Saos));

        echo"Uang yang dibayar Budi : Rp $Pembelian <br>"; 
        echo"Uang kembalian Budi : Rp $Kembalian";
    ?>


</body>
</html>