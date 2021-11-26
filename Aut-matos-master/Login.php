<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>

        <title>Expressões Regulares</title>
    </head>
    <body>
        <?php
            //Utilizando o operador ternario para simplificar o codigo
            echo "Seu Usuário: ";
            echo ( isset($_POST ['usuario']) ) ? $_POST ['usuario'] : null;
            echo "<br/>";

            echo "Sua Senha: ";
            echo ( isset($_POST ['senha']) ) ? $_POST ['senha'] : null;
            echo "<br/>";
        ?>
    </body>
</html>