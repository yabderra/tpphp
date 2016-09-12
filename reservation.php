<?php
require_once('views/page_top.php');// Inclusion des defines
?>
    <main>
        <h1>Accueil</h1>
    </main>
<?php

echo'<div id="wrapper">
    <div id="header">
        <div id="logo">
            <img src="images/logo.jpg" alt="logo agence voyage">
        </div>
        <ul id="menu">
            <li><a href="index.html">Accueil</a></li>
            <li><a href="catalogue.html">Catalogue</a></li>
            <li><a href="reservation.html">Réservation</a></li>

        </ul>

    </div>

    <div id="contenu">

        <form method="post " action="#" name="myform" id="myform" onsubmit="validation()">

            <div>
                <label class="labels" for="nom">Nom: </label>
                <input class="inputs" name="nom" id="nom" type="text"/>
            </div>
            <div>
                <label class="labels" for="email">Courriel:</label>
                <input class="inputs" name="email" id="email" type="text"/>
            </div>
            <div>
                <label class="labels" for="website">Site web:</label>
                <input class="inputs" name="website" id="website" type="text"/>
            </div>
            <div>
                <label class="labels" for="date_commande">Date commande:</label>
                <input class="inputs" type="text" name="date_commande" id="date_commande"/>
            </div>
            <div>
                <label class="labels" for="sexe_h">Homme:</label>
                <input type="radio" name="sexe" id="sexe_h" value="sexe_h"/>
                <br/>
                <label class="labels" for="sexe_f">Femme:</label>
                <input type="radio" name="sexe" id="sexe_f" value="sexe_f"/>
            </div>
            <div>
                <label class="labels" for="ville">Pays:</label>
                <select class="inputs" name="ville" id="ville">
                    <option value="-1">Choisir...</option>
                    <option value="mo">Canada</option>
                    <option value="qc">Tunisie</option>
                    <option value="ga">Mali</option>
                    <option value="sh">Benin</option>
                </select>

            </div>
            <div>
                <label class="labels" for="sports">Choisir Un Forfait:</label>
                <select class="inputs" name="sports" id="sports" multiple="multiple" size="5">
                    <option value="foot">Forfait_1</option>
                    <option value="tennis">Forfait_2</option>
                    <option value="danse">Forfait_3</option>
                    <option value="yoga">Forfait_4</option>
                    <option value="canape">Forfait_5</option>
                </select>

            </div>
            <div>
                <label class="labels" for="commentaire">Commentaire:</label>
                <textarea rows="10" cols="50" name="commentaire" id="commentaire"></textarea>
            </div>
            <div>
                <label class="labels" for="accepte">J\'accepte les conditions:</label>
                <input class="inputs" type="checkbox" name="accepte" id="accepte" type="text" value="accepte"/>
            </div>
            <div>
                <input type="submit" value="Réserver" />
            </div>
        </form>

    
</div>';
require_once('views/page_bottom.php');// Inclusion des defines
?>