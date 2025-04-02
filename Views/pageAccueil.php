<h1>Liste des écoles répertoriées</h1>
        
<div class="flexible wrap space-around">
    <?php foreach($tournois as $tournoi) : ?>
        <div class="border card">
            <h2 class="center"><?= $tournoi->tournoisName ?></h2>
            <div>
                <div class="flexible blocImageTournois"><img src="../Assets/Images/chess-tournois.jpg" alt="chess position" /></div>
                <div class="center">
                    <p><span><?=$tournoi->tournoisRegles ?></span>
                    <h3><?=$tournoi->tournoisGagnantPremier?><h3></p>
                    <a href="voirTournois.php" class="btn btn-page">Voir Plus</a>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>