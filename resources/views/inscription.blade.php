<?php
/**
 * Created by PhpStorm.
 * User: Corentin
 * Date: 20/12/2016
 * Time: 12:51
 */

require_once('C:\wamp64\www\Series_PHP_L3\resources\views\GlobalView.php');

$htmlHead=\biblio\vue\GlobalView::renderHead();
$htmlPresentation='
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 block">
                    <h2>Connexion</h2>
                    <form method="post" action="/">
                        <p> Nom d\'utilisateur : <input type="text" name="utilisateur"/> </p>
                        <p> Mot de passe : <input type="password" name="mdp"/> </p>
                        <p class="text-center"> <input class="btn btn-md btn-warning" type="submit" name="connexion" value="Se connecter"/></p>
                    </form>
                </div>
                <div class="col-lg-4 col-md-4 block">
                    <h2>Inscription</h2>
                    <form method="post" action="/">
                        <p> Nom d\'utilisateur : <input type="text" name="utilisateur"/> </p>
                        <p> Mot de passe : <input type="password" name="mdp"/> </p>
                        <p> Verifier mot de passe : <input type="password" name="mdp2"/> </p>
                        <p> Adresse : <input type="text" name="adresse"/> </p>
                        <p class="text-center"> <input class="btn btn-md btn-warning" type="submit" name="connexion" value="S\'inscrire"/></p>
                    </form>
                </div>
             </div>
         </div>
    </div>
';
$htmlFooter=\biblio\vue\GlobalView::renderFooter();
$html=$htmlHead.$htmlPresentation.$htmlFooter;
echo $html;