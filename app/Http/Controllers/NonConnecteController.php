<?php
/**
 * Created by PhpStorm.
 * User: Corentin
 * Date: 21/12/2016
 * Time: 21:46
 */

namespace App\Http\Controllers;


class NonConnecteController extends Controller
{

    public function accueil() {
        return view('home');
    }

    public function inscription() {
        return view('inscription');
    }

}