<?php
include_once (dirname(__FILE__) . '/forfaits.php');
var_dump($_POST);
    //var_dump($_POST);
    // Initialiser des variables de données de formulaire

/**
 * Fomulaire à valider
 */
//var_dump($_POST);

define ('AGE_MIN', 18);
define ('AGE_MAX', 70);
$nom = '';
$nom_ok = false;
$prenom = '';
$prenom_ok = false;
// Par défaut, je mets tous les champs à NON VALIDE jusqu'à vérification du contraire


// Champ lastname
if (array_key_exists('nom', $_POST)) {
    // Filtrage du username
    $nom = $_POST['nom'];
    $nom = filter_var($nom, FILTER_SANITIZE_MAGIC_QUOTES);
    $nom = filter_var($nom, FILTER_SANITIZE_STRING);
    // Username ne contient pas de caractères "spéciaux"
    // Validation du username avec expression rationnelle
    if (1 === preg_match('/^[a-z0-9]{4,}$/', $nom)){
        $nom_ok = true;
    };}

    if (array_key_exists('prenom', $_POST)) {
        // Filtrage du username
        $prenom = $_POST['prenom'];
        $prenom = filter_var($prenom, FILTER_SANITIZE_MAGIC_QUOTES);
        $prenom = filter_var($prenom, FILTER_SANITIZE_STRING);
        // Username ne contient pas de caractères "spéciaux"
        // Validation du username avec expression rationnelle
        if (1 === preg_match('/^[a-z0-9]{4,}$/', $prenom)){
            $prenom_ok = true;
        };
        if ($nom_ok && $prenom_ok) {
            header('Location: catalog.php');
            exit;
        } else {
            $feedback_cnx = "Le nom et le prenom ne correspondent pas.";
            echo $feedback_cnx;
        };}

session_start();
function afficheform(){
    if(isset($_SESSION['nom'])) $nom = $_SESSION['nom'];
else $nom = '';
    if(isset($_SESSION['prenom'])) $prenom = $_SESSION['prenom'];
    else $prenom = '';
}
    $forfaits_data =get_forfaits();
if (array_key_exists('forfait_id',$_GET)){
    $id = $_GET['forfait_id'];
    $forfait_id = $_GET['forfait_id' ];
}else  {
    header('Location: catalog.php');
}

require_once('views/page_top.php');
?>

<?php
$forfait= $forfaits_data[$forfait_id]  ;
if ($forfait)
echo  '<div>',
$forfait[ FORF_NOM] ;
'</div>';

echo '<div>',
$forfait[ FORF_CATEGORY];
'</div>';
echo '<div>',
$forfait[ FORF_MAX_ANIMAUX];
'</div>';
?>
    <div>
        <img class="img-rounded" src="<?= IMG_PATH . $forfait['photo1'] ?>" alt=""/>
    </div>

<main>
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
        <form method="post"  name="myform" id="myform" >

            <div>
                <label class="labels" for="nom">Nom: </label>
                <input class="inputs" name="nom" id="nom" type="text"/><?php $nom ?>


            </div>
            <div>
                <label class="labels" for="prenom">Courriel:</label>
                <input class="inputs" name="prenom" id="prenom" type="text"/><?php $prenom ?>


            </div>
            <div>
                <label class="labels" for="email">Courriel:</label>
                <input class="inputs" name="email" id="email" type="text"/><?php $email ?>


            </div>
            <div>
                <label class="labels" for="age">age:</label>
                <input class="inputs" name="age" id="age" type="text"/><?php $age ?>
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

<?php
        require_once('views/page_bottom.php');
