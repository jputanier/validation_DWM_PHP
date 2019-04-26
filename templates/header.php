<header>
    <nav>
        <ul>
            <li><a href="/">Accueil</a></li>
            <?php if(isset($_SESSION['pseudo'])): ?>
                <?php if($_SESSION['pseudo'] == "login" && $_SESSION['mdp'] == "zero"): ?>
                <li><a href="/controllers/deconnecter.php">Déconnecter</a></li>
                <?php else: ?>
                <li><a href="/public/connecter.php">Connecter</a></li>
                <?php endif ?>
            <?php else: ?>
            <li><a href="/public/connecter.php">Connecter</a></li>
            <?php endif ?>
        </ul>
    </nav>
</header>