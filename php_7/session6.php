<?php
    session_start();

// Verifica se um tema foi enviado pelo formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['theme'])) {
    $_SESSION['theme'] = $_POST['theme'];
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecione um Tema</title>
    <link rel="stylesheet" href="session.css">
</head>
<body class="<?php echo isset($_SESSION['theme']) ? $_SESSION['theme'] : 'light'; ?>">
    <h1>Escolha seu tema</h1>
    <form method="POST" action="">
        <select name="theme">
            <option value="light" <?php echo (isset($_SESSION['theme']) && $_SESSION['theme'] == 'light') ? 'selected' : ''; ?>>Claro</option>
            <option value="dark" <?php echo (isset($_SESSION['theme']) && $_SESSION['theme'] == 'dark') ? 'selected' : ''; ?>>Escuro</option>
            <option value="blue" <?php echo (isset($_SESSION['theme']) && $_SESSION['theme'] == 'blue') ? 'selected' : ''; ?>>Azul</option>
        </select>
        <button type="submit">Aplicar Tema</button>
    </form>

    

    <p>Volte para a primeira página <a href="session1.php">para ver a mudança</a>.</p>


</body>
</html>