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
    //exercicio 4 (episódio 2)
    ?>

<form method="post" action="">
        <label for="user2_2">Nome de usuário:</label>
        <input type="text" id="user2_2" name="user2_2" required><br><br>

        <label for="senha_2">Senha:</label>
        <input type="text" id="senha_2" name="senha_2" required><br><br>

        <button type="submit">Enviar</button><br><br>

    <?php

        if($_SESSION["user2"]==$_POST["user2_2"]&&$_SESSION["senha"]==$_POST["senha_2"])
        {
            $_SESSION["user2_2"] = $_POST["user2_2"];

            header('Location: session5.php');
        }

        else
        {
            print("Dados inválidos");
        }

    ?>

    <!--exercicio 5(essa aqui eu precisei do chatgpt; foi mal)-->

    <?php
        session_start();
    ?>


</body>
</html>