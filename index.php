<?php
        require_once ('views/page_top.php');

/*define('IMG_PATH', 'images/images-modal/');*/
require_once(dirname(__FILE__) . '/forfaits.php');
$username = '';
$username_ok = false;

$password = '';
$password_ok = false;

$feedback_cnx = ''; // Message de validation à retrouner à l'utilisateur en cas de données mauvaises

if (array_key_exists('username', $_POST) && array_key_exists('password', $_POST)) {
    // Filtrage du username
    $username = $_POST['username'];
    $username = filter_var($username, FILTER_SANITIZE_MAGIC_QUOTES);
    $username = filter_var($username, FILTER_SANITIZE_STRING);
    // Username ne contient pas de caractères "spéciaux"
    // Validation du username avec expression rationnelle
    if (1 === preg_match('/^[a-z0-9]{4,}$/', $username)){
        $username_ok = true;
    };

    // Filtrage du password
    $password = $_POST['password'];
    $password = filter_var($password, FILTER_SANITIZE_MAGIC_QUOTES);
    $password = filter_var($password, FILTER_SANITIZE_STRING);
    // Validation du password avec expression rationnelle
    $password_ok = (1 === preg_match('/^[A-Za-z0-9%&$!*?]{4,}$/', $password));
    /*    if (1 === preg_match('/^[A-Za-z0-9%&$!*?]{8,}$/', $password)){
            $password_ok = true;
        };*/
}
if ($username_ok && $password_ok) {
    header('Location: catalog.php');
    exit;
} else {
    $feedback_cnx = "Le username et le password ne correspondent pas.";
}

?>
    <!DOCTYPE html>
    <html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Formulaire de connexion</title>
    </head>
<body>
    <h2>Formulaire de connexion</h2>
    <form id="formulaire" method="post">
        <div>
           <label for="username">Pseudo : </label>
            <input type="text" id="username" name="username"
                   value="<?= array_key_exists('username', $_POST) ? $_POST['username'] : '' ?>"
            />
        </div>
        <div>
            <label for="password">Mot de passe : </label>
            <input type="password" id="password" name="password"
                   value=""
            />
        </div>
        <div>
            <input type="submit" value="Se connecter"/>
        </div>
    </form>
<?= empty($feedback_cnx) ? '' :  '<p class="attention">' . $feedback_cnx . '</p>' ?>


<div id="slider">

        <!-- Sildes -->
        <img id="one" src="images/canada.jpg" alt="ca">
        <img id="two" src="images/Rome-wallpaper-241.jpg" alt="rome">
        <img id="three" src="images/new_york.jpg" alt="new">


        <!-- Links for the slides! -->

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