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
    //exercicio 1 (o resto está a partir da session3.php)

        if (!(isset($_SESSION['contador'])))
        {
            $_SESSION['contador'] = 0;
        }

        else
        {
            $_SESSION['contador']++;
        }

        printf("Página acessada %d vezes", $_SESSION['contador']);

        echo '<br>';

        echo "<button><a href='session2.php'>Próxima página</a></button>";

        echo '<br>';

        echo "<button><a href='session3.php'>Terminar sessão</a></button>";
    ?>
</body>
</html>