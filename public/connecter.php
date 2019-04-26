<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connection</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php require_once '../templates/header.php' ?>
    <main>
        <form method="POST" action="../controllers/form.php">
            <label for="pseudo">Pseudo:</label>
            <input type="text" name="pseudo" id="pseudo" required>

            <label for="mdp">Mot de passe:</label>
            <input type="password" name="mdp" id="mdp" required>
            
            <input type="submit" value="Valider" id="valider">
        </form>
    </main>

    <?php require_once '../templates/footer.html' ?>
</body>
</html>