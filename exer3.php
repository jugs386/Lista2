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

    if($_POST['sexo'] == 'M' && $_POST['idade'] >= 18){
        echo "Fulano, você já pode realizar o seu alistamento militar";
    }elseif($_POST['sexo'] == 'M' && $_POST['idade'] < 18){
        echo "Fulano, você só pode ser alistar quando completar 18 anos";
    }elseif($_POST['sexo'] == 'F'){
        echo "Fulana, você não pode se alistar";
    }
}

?>
    <form action="" method="post">
    Nome:
        <input type="text" name="nome" id="nome" value=""/><br/>
        Sexo: <select name="sexo" id="sexo">
            <option value="0">***SELECIONE***</option>
            <option value="F">Feminino</option>
            <option value="M">Masculino</option>
        </select><br/>
        Idade:
        <input type="text" name="idade" id="idade" value=""/><br/>
        
        <input type="submit" name="btnCalcular" id="btnCalcular" value="Calcular"/>
    </form>
</body>
</html>

