<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>

        <title>Expressões Regulares</title>
    </head>
    <body>
        <?php
            //Utilizando o operador ternario para simplificar o codigo
            echo "Seu Nome: ";
            echo ( isset($_POST['nome']) ) ? $_POST['nome'] : null;
            echo "<br/>";

            echo "Seu Usuário: ";
            echo ( isset($_POST ['usuario']) ) ? $_POST ['usuario'] : null;
            echo "<br/>";

            echo "Seu CPF: ";
            echo ( isset($_POST ['cpf']) ) ? $_POST ['cpf'] : null;
            echo "<br/>";
            
            echo "Seu Telefone: ";
            echo ( isset($_POST ['telefone']) ) ? $_POST ['telefone'] : null;
            echo "<br/>";

            echo "Seu E-mail: ";
            echo ( isset($_POST ['email']) ) ? $_POST ['email'] : null;
            echo "<br/>";

            echo "Sua Cidade: ";
            echo ( isset($_POST ['cidade']) ) ? $_POST ['cidade'] : null;
            echo "<br/>";

            echo "Sua Data de Nascimento: ";
            echo ( isset($_POST ['data']) ) ? $_POST ['data'] : null;
            echo "<br/>";
            
            echo "Sua Senha: ";
            echo ( isset($_POST ['senha']) ) ? $_POST ['senha'] : null;
            echo "<br/>";

            //Parte das Expressões Regulares (PCRE)
            //preg_filter e preg_replace
            /*
            $subject = array('1', 'a', '2', 'b', '3', 'A', 'B', '4'); 
            $pattern = array('/\d/', '/[a-z]/', '/[1a]/'); 
            $replace = array('A:$0', 'B:$0', 'C:$0'); 
            echo "preg_filter returns\n";
            print_r(preg_filter($pattern, $replace, $subject));
            echo "<br/>"; 
            echo "preg_replace returns\n";
            print_r(preg_replace($pattern, $replace, $subject));
            */

            //preg_grep
            // retorna todos os elementos do array
            // contendo números de ponto flutuante
            /*
            $fl_array = preg_grep("/^(\d+)?\.\d+$/", $array);
            */

            //preg_last_error
            /*
            preg_match('/(?:\D+|<\d+>)*[!?]/', 'foobar foobar foobar');
            if (preg_last_error() == PREG_BACKTRACK_LIMIT_ERROR) {
                print 'Backtrack limit was exhausted!';
            }
            */

            //preg_match
            /*
            preg_match('/(a)(b)*(c)/', 'ac', $matches);
            var_dump($matches);
            preg_match('/(a)(b)*(c)/', 'ac', $matches, PREG_UNMATCHED_AS_NULL);
            var_dump($matches);
            */
        ?>
    </body>
</html>