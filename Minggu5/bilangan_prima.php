<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Prima</title>
</head>
<body>
    <h4>Bilangan PRIMA</h4>

    <?php 
    echo "Bilangan Prima 1-50 <br><br>";

        function bil_prima(){
            for($i=1;$i<=50;$i++){ 
                $a = 0; 
                for($j=1;$j<=$i;$j++){ 
                    if($i % $j == 0){ 
                        $a++; 
                    }
                }
            if($a == 2){ 
                echo $i." , " ;
                    }
                }
            }
        $bil_prima = bil_prima();
    ?>

</body>
</html>