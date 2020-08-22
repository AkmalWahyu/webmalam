<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //input
        $quiz=10;
        $nilai_tugas=10;
        $nilai_UTS=5;
        $nilai_UAS=3;
        $IP="";
        $Keterangan="";
        $Nilai_Akhir=((0.1*$quiz)+(0.2*$nilai_tugas)+(0.3*$nilai_UTS)+(0.4*$nilai_UAS));

        //output
        echo"Nilai Quiz Anda : $quiz <br>;
        echo"Nilai Tugas Anda: $nilai_tugas <br>;
        echo"Nilai Quiz Anda : $quiz <br>;
        echo"Nilai Quiz Anda : $quiz <br>;




        if($Nilai_Akhir>=85){
            $IP="Grade A";
            $Keterangan="Sangat Memuaskan";
        }else if($Nilai_Akhir>=73){
            $IP="Grade B";
            $Keterangan="Memuaskan";
            
        }else if($Nilai_Akhir>=65){
            $IP="Grade C";
            $Keterangan="Cukup Baik";
        }else if($Nilai_Akhir>=55){
            $IP="Grade D";
            $Keterangan="Tidak Lulus";
        }else{
            $IP="Grade E";
            $Keterangan="Jumpai Rektor!!!";
        }

        echo"IP Anda : $Nilai_Akhir. $IP. $Keterangan";
    
    ?>
</body>
</html>