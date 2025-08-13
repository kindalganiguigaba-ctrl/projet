@extends('layouts.app')

<title>Connexion</title>
<link rel="stylesheet" href="/css/connexion.css">

@section('content')


    <section>
         <h1>Bienvenu sur la page d'inscription</h1>
       
    <form action="" method="post">
        <p>
        <label for="email">Votre adresse email : </label><br>
        <input type="email" name="email" id="email" size="40" required><br><br>
        </p>

        <p>
        <label for="password">Mot de passe: </label><br>
        <input type="password" name="password" id="password" size="40" required><br><br>
        </p>

         <button type="submit">Se connecter</button>
    </form>
    
    <p class="last">
        Pas encore inscrit ?  <a href="{{ url('/signin') }}"> Créer un compte</a>
    </p>
 </section>

@endsection