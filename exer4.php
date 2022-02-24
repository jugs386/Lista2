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
    $preco1 = $_POST['preco1'];
    $preco2 = $_POST['preco2'];

    $preco1 = $preco1 - ($preco1*0.08);
    $preco2 = $preco2 - ($preco2*0.11);

    echo "O novo valor do preço1: {$_POST['preco1']} será {$preco1}<br/>";
    echo "O novo valor do preço1: {$_POST['preco2']} será {$preco2}<br/>";

}

?>
    <form action="" method="post">
    Nome do produto1:
        <input type="text" name="produto1" id="produto1" value=""/><br/>
        Preço do produto1:
        <input type="text" name="preco1" id="preco1" value=""/><br/>
        Nome do produto1:
        <input type="text" name="produto2" id="produto2" value=""/><br/>
        Preço do produto2:
        <input type="text" name="preco2" id="preco2" value=""/><br/>
        <input type="submit" name="btnCalcular" id="btnCalcular" value="Calcular"/>
    </form>
</body>
</html>

