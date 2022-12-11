<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container{
            width: 300px;
            margin: 0 auto;
        }
    </style>
    <title>Escreve e Ler Txt</title>
</head>
<body>
    <div class="container">
        <h1>Cadastrando nomes</h1>
        
        <form action="escreve.php" method="post">
            <label for="nome">
                <input type="text" name="nome" required>
            </label>
            <input type="submit" value="Gravar">
        </form>
        
        <?php  include ("./ler.php"); ?>
    </div>
</body>
</html>