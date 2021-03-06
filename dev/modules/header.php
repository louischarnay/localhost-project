<div class="indexHeaderDiv">
        <div class="indexLogo">
            <a href="index.php">
                <ion-icon name="diamond-outline"></ion-icon>
            </a>
        </div>
        <div class="indexTitre">
            <a href="index.php">
                <h1>LocalHost</h1>
            </a>
        </div>
        <div class="indexDivBoutons">
            <?php if(isset($_SESSION["connectedId"])):?>
                <a href="/profil.php" class="indexBoutonMenu">Profil</a>
            <a href="/deconnexion.php" class="indexBoutonMenu">Déconnexion</a>
            <?php else:?>
                <a href="/inscription.php" class="indexBoutonMenu">Inscription</a>
            <a href="/connexion.php" class="indexBoutonMenu">Connexion</a>
            <?php endif?>
        </div>
    </div>
    <div class="indexInput">
        <form class="formRecherche" action="../index.php" method="get" enctype="multipart/form-data">
            <input type="text" placeholder="Rechercher" name="searchedMovie">
            <button type="submit">Rechercher</button>
        </form>
    </div>