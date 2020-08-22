<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
    //    if (condition) {
    //        # code...
    //    }else {
    //        # code...
    //    }
        
        
    //     switch ($bulan) {
    //         case 'you':
    //             //statement
    //             echo"Anda memeilih Bulan Januari";
    //             break;
            
    //     case "dia">
    //         echo"Anda memilihn Bulan Februari";
    //         break

    //         default:
                
    //         //
    //         echo"Anda belum memilih nama bulan";
    //     break;
    //     }
    ?> -->


    <?php
        $username="operator";
        $password="1111";

        switch ($username=="admin" && $password=="1234") {
            case "admin" && "1234":
                echo"selamat datang $username";
            break;
        }

        switch ($username=="operator" && $password=="1111") {
            case "operator"&&"1111":

            echo"selamat datang $username";
        break;
        }
    ?>



</body>
</html>