<?php
        require_once ('views/page_top.php');

/*define('IMG_PATH', 'images/images-modal/');*/
require_once(dirname(__FILE__) . '/forfaits.php');

?>
<div id="slider">

        <!-- Sildes -->
        <img id="one" src="images/canada.jpg" alt="ca">
        <img id="two" src="images/Rome-wallpaper-241.jpg" alt="rome">
        <img id="three" src="images/new_york.jpg" alt="new">


        <!-- Links for the slides! -->
        <ul>
                <li>
                        <a href="#one"></a>
                </li>
                <li>
                        <a href="#two"></a>
                </li>
                <li>
                        <a href="#three"></a>
                </li>

        </ul>
</div>
<?php
foreach (get_categories() as $categorie) { // Boucle sur les 3 categories
        ?>
        <div class="col-sm-4">
        <div class="categorie">
        <h2><?= $categorie ?></h2>
        <?php
        foreach ($forfaits_data as $id => $forfait) {
                // On affiche le forfait si il n'y a pas de categorie de page
                // ou bien si le forfait appartient à la categorie demandée
                if ($forfait[FORF_CATEGORY] == $categorie) {
                        ?>
                        <p><?= $forfait[FORF_NOM] ?></p>
                        <p>
                                <img style="width: 50px;" src="<?= IMG_PATH . $forfait[FORF_PHOTO1] ?>" alt=""/>
                        </p>
                        </div>
                        </div>
                        <?php
                } // if
        }; // foreach forfait
        ?>


        <?php
}; // foreach categories
?>