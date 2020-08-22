<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a=1;

        for($a-3; $a<=14; $a++){
            
            echo"Hallo <br>";
        }
    ?>





<?php
/* contoh 1*/
for ($i = 1; $i <= 10; $i++) {
    echo "$i";
}
echo "<br><br>";

/* contoh 2*/
for ($i = 1; ; $i++) {
    if ($i > 10) {
    break;
    }
    echo "$i";
}
echo "<br><br>";

/* contoh 3*/
$i = 1;
for (; ;) {
    if ($i > 10) {
    break;
    }
    echo "$i";
    $i++;
} echo "<br><br>";

//contoh 4
for ($i = 1; $i <=10; print "$i", $i++);


?>

<?php
    $hewan=array(
        "ayam",
        "kambing",
        "kucing",
        "sapi"
    );
    foreach ($hewan as $key => $value) {
        echo"".$value[3];
    }
?>
<br>


<!-- tugas1&2 -->
<?php  
    for ($i=2; $i<=20; $i+=2){
            echo "$i";
    }
?>
<br>


<?php
    for ($ganjil=1; $ganjil<=20; $ganjil++){
        if($ganjil%2==1){
            echo "".$ganjil;
        }
    }
?>
<br>


<?php
    for ($i=2; $i <=64; $i*=2){
        echo"$i";
    }
    
?>
<br>
<?php
    for ($i=3; $i<=18; $i+=3){
        echo"$i";
    }

?>

<br>
<?php
$nlai=1;
    for ($i=3; $i<128; $i*=2){
        echo"$i"-"$nilai";
    }

?>
</body>
</html>