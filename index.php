<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>index.php</h1>
    <?php
    echo"<strong> eu estou aparecendo pelo php </strong>";
 
    $conn = " variavel de conexão";
 
    echo $conn
    ?>
    <form action= "salvarBanco.php" method="get">
 
    <input type="text" name="nome" placeholder="nome">  
    <input type="text" name="indicativa" placeholder="classificação indicativa">  
    <input type="text" name="valor" placeholder="valor ingresso">
    <input type="submit">
    </form>
</body>
</html>