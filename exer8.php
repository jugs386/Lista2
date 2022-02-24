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
        <input type="submit" name="btnCalcular" id="btnCalcular" value="Calcular">
    </form>
</body>
</html>

<?php


if(isset($_POST['btnCalcular'])){
    for($i = 0;$i<=10;$i++){
        if($_POST['n1'] == 5) {
            echo $_POST['n1']."X".$i."=".($_POST['n1']*$i)."<br/>";
        }else{
            if($i == 5 )
                $i++;
            echo $_POST['n1']."X".$i."=".($_POST['n1']*$i)."<br/>";
        }
    }

}