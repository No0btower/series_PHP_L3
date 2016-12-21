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
                <div class="col-lg-6 col-md-6">
                    <div class="block">
                        <h3>Connexion</h3>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="block">
                        <h3>Inscription</h3>
                    </div>
                </div>
             </div>
         </div>
    </div>
';
$htmlFooter=\biblio\vue\GlobalView::renderFooter();
$html=$htmlHead.$htmlPresentation.$htmlFooter;
echo $html;