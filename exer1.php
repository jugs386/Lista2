<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 1</title>
</head>
<body>
<?php
if(isset($_POST['btnCalcular'])){

    $altura1 = $_POST['altura1'];
    $altura2 = $_POST['altura2'];
    $ano = 0;

    while($altura1>=$altura2){
        $altura1 = $altura1 + 0.02;
        $altura2+=0.03;
        $ano++;
    }

    echo "A criança ".$_POST['crianca2']." ultrapassou a altura da criança ".$_POST['crianca1']."em {$ano} anos";
    echo "<br/> Altura1:  {$altura1} e Altura2: {$altura2}";

}

?>
    <form action="" method="post">
    Nome da criança1:
        <input type="text" name="crianca1" id="crianca1" value=""/><br/>
        Altura da criança1:
        <input type="number" step="0.1" name="altura1" id="altura1" value=""/><br/>
        Nome da criança2:
        <input type="text" name="crianca2" id="crianca2" value=""/><br/>
        Altura da criança2:
        <input type="number" step="0.1" name="altura2" id="altura2" value=""/><br/>
        <input type="submit" name="btnCalcular" id="btnCalcular" value="Calcular"/>
    </form>
</body>
</html>

