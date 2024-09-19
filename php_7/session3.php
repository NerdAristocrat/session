<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="session.css">
</head>
<body class="<?php echo isset($_SESSION['theme']) ? $_SESSION['theme'] : 'light'; ?>">
    <?php
    //exercicio 1(o retorno)

        echo $_SESSION['contador'] . "<br>";

        session_destroy();

        echo "Sessão acabada. Todos os dados foram eliminados.";

        echo '<br>';

        echo "<button><a href='session1.php'>Pressione aqui para reiniciar a contagem</a></button>";

        echo '<br><br><br><br>';

    ?>

    <!--exercicio 2-->
<form method="post" action="">
        <label for="user">Nome:</label>
        <input type="text" id="user" name="user" required><br><br>

        <label for="year">Ano de nascimento:</label>
        <input type="number" id="year" name="year" required><br><br>

        <label for="bday">Já fez aniversário? sim ou não?</label>
        <input type="text" id="bday" name="bday" required><br><br>

        <button type="submit">Enviar</button><br><br>

    <?php

        $user = $_POST["user"];

        $year = $_POST["year"];

        $bday = $_POST["bday"];
        
        $age = 0;

        if($bday=='sim')
        {
            $age = 2024-$year;
        }

        elseif($bday=='não')
        {
            $age = 2023-$year;
        }

        printf("Bem-vindo, %s", $user);

        echo '<br>';

        printf("Idade: %d", $age);

        echo '<br><br><br><br>';
    ?>

    <!--exercicio 3-->
<form method="post" action="">
        <label for="user2">Nome de usuário:</label>
        <input type="text" id="user2" name="user2" required><br><br>

        <label for="senha">Senha:</label>
        <input type="text" id="senha" name="senha" required><br><br>

        <button type="submit">Enviar</button><br><br>

    <?php
        session_start();

        $usuario = array($_POST["user2"], $_POST["senha"]);

        $_SESSION["user2"] = $_POST["user2"];

        $_SESSION["senha"] = $_POST["senha"];

        echo "$usuario[0] cadastrado com sucesso!";

        echo '<br><br><br><br>';
    ?>

    <!--exercicio 4-->
    <?php
        echo "<button><a href='session4.php'>Pressione aqui para fazer seu login</a></button>";
    ?>
</body>
</html>