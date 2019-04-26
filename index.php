<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evaluation php</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php require_once './templates/header.php' ?>
    <?php if(isset($_SESSION['pseudo'], $_SESSION['mdp'])): ?>
        <?php if($_SESSION['pseudo'] == "login" && $_SESSION['mdp'] == "zero"): ?>
        <h1>Choisissez ce que vous souhaitez afficher sur la page:</h1>
        <form method="POST" action="./controllers/formulaire.php" >
            <label for="lorem">Un lorem:</label>
            <input type="checkbox" name="lorem" id="lorem">

            <label for="img1"><img src="">Une icone</label>
            <input type="checkbox" name="img1" id="img1">

            <label for="img2"><img src="">Une photo</label>
            <input type="checkbox" name="img2" id="img2">

            <input type="submit" id="envoyer" value="Envoyer">
        </form>
            <?php if(isset($_SESSION['lorem'])): ?>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi voluptatum temporibus, laborum maxime saepe quisquam ratione harum expedita sit, labore facilis doloremque nostrum deserunt! Esse dolor laudantium corporis ex facilis.</p>
            <?php endif ?>
            <?php if(isset($_SESSION['img1'])): ?>
                <img src="./img/icone.jpg">
            <?php endif ?>
            <?php if(isset($_SESSION['img2'])): ?>
                <img src="./img/photo.jpg">
            <?php endif ?>
        <?php else: ?>
        <p>Mot de passe incorrect</p>
        <?php endif ?>
    <?php endif ?>
    <?php require_once './templates/footer.html' ?>
</body>
</html>