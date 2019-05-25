<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Introdução a formulários</title>
</head>
<body>
    <div>
        <form method="get" action="Cadastro.php">
            Nome: <input type="text" name="nome"/>
            Ano de Nascimento: <input type="number" name="ano"/>
            <fieldset><legend>Sexo</legend>
                <input type="radio" name="sexo" id="m" value="homem"/>
                <label for="m">Masculino</label><br>
                <input type="radio" name="sexo" id="f" value="mulher"/>
                <label for="f">Feminino</label><br>
            </fieldset>
            <input type="submit" value="Enviar"/>
        </form>
    </div> 
</body>
</html>