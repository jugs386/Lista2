<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="n1" id="n1">
        <input type="number" name="n2" id="n2">
        <input type="number" name="n3" id="n3">
        <input type="number" name="n4" id="n4">
        <input type="number" name="n5" id="n5">
        <input type="number" name="n6" id="n6">
        <input type="number" name="n7" id="n7">
        <input type="number" name="n8" id="n8">
        <input type="number" name="n9" id="n9">
        <input type="number" name="n10" id="n10">
        <input type="submit" name="btnCalcular" id="btnCalcular" value="Calcular">
    </form>
</body>
</html>

<?php

if(isset($_POST['btnCalcular'])){
$positivo = 0;
$negativo = 0;
    for($i = 1;$i<=10;$i++){
        if($_POST['n'.$i] > 0){
            $positivo += $_POST['n'.$i];
        }else{
            $negativo += $_POST['n'.$i];
        }

    }

    echo "Soma dos positivos: {$positivo}";
    echo "Soma dos negativos: {$negativo}";
}