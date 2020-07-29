<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = $_GET['num'];
        $i = 1;
        do{
            echo $num." x ".$i." = ".$num*$i."<br>";
            $i++;
        }while($i <= 10);
    ?>
    <a href="tabuada.html">voltar</a>
</body>
</html>