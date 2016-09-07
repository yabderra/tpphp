<?php
	require_once('views/page_top.php');// Inclusion des defines
?>
<main>
    <h1>Catalogue</h1>
</main>
<?php
echo '
<div id="wrapper">
    <div id="header">
        <div id="logo">
            <img src="images/logo.jpg" alt="logo agence voyage">
        </div>
        <ul id="menu">
            <li><a href="index.php">Accueil </a></li>
            <li><a href="contact.php">contact </a></li>
            <li><a href="catalogue.php">catalogue </a></li>

        </ul>

    </div>
    <div id="contents">
        <div id="catalogue">
            <ul>
                <li><a href="#tabs-plage">plage</a></li>
                <li><a href="#tabs-desert">desert</a></li>
                <li><a href="#tabs-monument">monument</a></li>
                <li><a href="#tabs-meige">neige</a></li>
            </ul>
            <div id="tabs-plage">
                <ul class="forfaits"></ul>
            </div>
            <div id="tabs-desert">
                <ul class="forfaits"></ul>
            </div>
            <div id="tabs-monument">
                <ul class="forfaits"></ul>
            </div>
            <div id="tabs-neige">
                <ul class="forfaits"></ul>
            </div>
        </div>
        <div id="detail_produit">
            <h3></h3>
            <img src="" />
            <p></p>
            <a class="catalogue" href="#">catalogue</a>
        </div>';
	require_once('views/page_bottom.php');// Inclusion des defines
?>
