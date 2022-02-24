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
if(isset($_POST['btnMostrar'])){
    for($i = 1;$i <= $_POST['qtd'];$i++){
        echo $_POST['palavra']." ";
    }
}

?>
    <form action="" method="post">
   Insira uma palavra:
        <input type="text" name="palavra" id="palavra" value=""/><br/>
       Quantidade:
        <input type="text" name="qtd" id="qtd" value=""/><br/>

        <input type="submit" name="btnMostrar" id="btnMostrar" value="Mostrar"/>
    </form>
</body>
</html>

