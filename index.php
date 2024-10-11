<?php
    include_once __DIR__ . '/controller/baseController.php';
    include_once __DIR__ . '/template/header.inc.php'
?>
<body>
    <!-- En-tête de la page -->
    <header>
        <h1>
            <span aria-hidden="true">🤡</span><?php print $newtitle->title ?>
        </h1>
    </header>

    <!-- Contenu principal -->
    <main>
        <!-- Section Affiche du film -->
        <section class="movie-poster">
            <img src="https://wave.fr/images/1916/07/joker-3-bonnes-raisons-aller-voir-film-cinema-aujourdhui.jpg" alt="Affiche du film Le Joker">
        </section>

        <!-- Section Storyline -->
        <section class="storyline">
            <?php
             $story = $instance_utilisateur->storyline(); 
             ?>
            <h2><?= $story['title'] ?></h2>
            <p>
                <?= $story['storyline'] ?>
            </p>
        </section>

        <!-- Section Cast -->
        <section class="cast">
            <h2>Cast Principal</h2>
           
            <ul>
                <?php
                include_once __DIR__ . '/model/model.php'
                ?>
           </ul>
        </section>

        <!-- Section Date de Sortie -->
        <section class="release-date">
            <h2>Date de Sortie</h2>
            <p>9 octobre <time datetime="<?= $_date ?>"><?= $_years->format('d/m/Y') ?></time></p>
        </section>

        <!-- Bouton vers AlloCiné -->
        <section class="trailer-button">
            <a href="https://www.allocine.fr/video/player_gen_cmedia=19582354&cfilm=255710.html" target="blank">
                <span class="material-symbols-outlined" aria-hidden="true">
                    video_file
                </span>Voir la bande-annonce
            </a>
        </section>
    </main>

    <!-- footer -->
    <?php
        include_once __DIR__ . '/template/footer.inc.php'
    ?>

   <!--  <pre>
        <?php 
           //print_r($_SERVER)
        ?>
    </pre> -->

</body>
</html>
