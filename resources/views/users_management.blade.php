@extends('layouts.appuser')

<title>Gestions des utilisateurs</title>
<link rel="stylesheet" href="/css/dashboard.css">

<style>
    main {
        font-family: 'Montserrat', sans-serif;
        text-align: center;
        margin: auto;
        width: 75%;
        border-radius: 100px;
    }

    main h1 {
        margin-top: 0;
        padding-top: 0;
        font-size: 60px ;
        margin-bottom: 50px;
    }

    main p {
        font-size: 28px;
    }

    main p a {
        display: block;
        background-color: white;
        margin: 10px auto;
        padding: 15px 20px;
        text-align: left;
        border-radius: 8px;
        text-decoration: none;
        color: #0c2d48;
        font-weight: 500;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        transition: background-color 0.2s, transform 0.2s;
        max-width: 600px;
        text-align: center;
    }

</style>

@section('content')

<section >

   <strong> <h1>⚙️ Gérer les utilisateurs</h1></strong><br><br>

<p>Ajoutez, modifiez ou supprimez des comptes. Définissez leurs accès et rôles.</p>

<p>
<a href="{{ url('/addusers') }}">Ajouter un utilisateur</a><br>
<a href="{{ url('/valid_reject') }}">Supprimer un utilisateur</a><br>
<a href="{{ url('/') }}">Modifier un utilisateur</a><br>
</p>

</section>

@endsection