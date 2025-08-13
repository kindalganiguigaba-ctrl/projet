<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('accueil');
});

Route::get('/login', function () {
    return view('connexion');
});

Route::get('/signin', function () {
    return view('inscription');
});


Route::get('/demand', function () {
    return view('réclamation');
});

Route::get('/add', function () {
    return view('ajouter_ayant_droit');
});

Route::get('/display', function () {
    return view('afficher_liste_ayant_droit');
});

Route::get('/valid_reject', function () {
    return view('valid_rejet');
});

Route::get('/search', function () {
    return view('rechercher_ayant_droit');
});

Route::get('/delete', function () {
    return view('supprimer');
});

Route::get('/alldashboards', function () {
    return view('alldashboards');
});

Route::get('/users', function () {
    return view('ayant_droit');
});

Route::get('/administrator', function () {
    return view('admin');
});

Route::get('/gestion', function () {
    return view('gestionnaire');
});

Route::get('/history', function () {
    return view('historique');
});

Route::get('/manage', function () {
    return view('users_management');
});

Route::get('/addusers', function () {
    return view('adduser');
});