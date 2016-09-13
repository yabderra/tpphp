<?php
require_once('views/page_top.php');// Inclusion des defines

    //var_dump($_POST);
    // Initialiser des variables de données de formulaire
    $nom = '';
    $nom_ok = false;

    $email = '';
    $email_ok = false;

    $feedback_cnx = ''; // Message de validation à retrouner à l'utilisateur en cas de données mauvaises

    if (array_key_exists('nom', $_POST) && array_key_exists('password', $_POST)) {
    // Filtrage du username
    $nom = $_POST['username'];
    $nom = filter_var($nom, FILTER_SANITIZE_MAGIC_QUOTES);
    $nom = filter_var($nom, FILTER_SANITIZE_STRING);
    // Username ne contient pas de caractères "spéciaux"
    // Validation du username avec expression rationnelle
    if (1 === preg_match('/^[a-z]{6,}$/', $nom)){
    $nom_ok = true;
    };

    // Filtrage du password
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_MAGIC_QUOTES);
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    // Validation du password avec expression rationnelle
    $email_ok = (1 === preg_match('/^[A-Za-z0-9%&$!*?]{8,}$/', $email));
    /*    if (1 === preg_match('/^[A-Za-z0-9%&$!*?]{8,}$/', $password)){
    $password_ok = true;
    };*/
    }
    if ($nom_ok && $email_ok) {
    header('Location: page_suivante.php');
    exit;
    } else {
    $feedback_cnx = "Les champs ne correspondent pas.";
    }

?>

<?php

echo'<main>
        <h1><br>Accueil</br></h1>
    </main>
    <div id="wrapper">
    <div id="header">
        <div id="logo">
            <img src="images/logo.jpg" alt="logo agence voyage">
        </div>
      

    </div>

    <div id="contenu">
<br><br><br><br>
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
                <label class="labels" for="sports">Forfait choisi :</label>
             
                
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