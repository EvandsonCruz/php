<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        span{
            color: #f00;
            font-weight: bold;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro exemplo de PHP</title>
</head>
<body>
    <?php 
        $ini = $_GET['ini'];
        $fim = $_GET['fim'];
        $inc = $_GET['inc'];
        $soma = $ini;

        if ($ini < $fim){
            while($soma <= $fim){
                echo $soma." ";
                $soma += $inc;
            }
        }
        else{
            while($soma >= $fim){
                echo $soma." ";
                $soma -= $inc;
            }
        }
    ?>
    <a href="form.html">voltar</a>
</body>
</html>