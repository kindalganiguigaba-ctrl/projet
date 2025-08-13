@extends('layouts.app')

<title>Inscription</title>
<link rel="stylesheet" href="/css/inscription.css">



@section('content')
    <section>
        <br><br>
    
        <h1>Formulaire d'inscription : </h1>

<form action="" method="post">

        <p>
        <label for="nom">Nom :</label><br>
        <input type="text" name="nom" id="nom" size="4O" required><br><br>
        </p>

        <p>
        <label for="prenoms">Prénom(s) :</label><br>
        <input type="text" name="prenoms" id="prenoms" size="40" required><br><br>
        </p>


        <p>
        <label for="sex">Sex :</label>
        <select name="sex" id="sex">
            <option value="feminin">Féminin </option><br>
            <option value="masculin">Masculin </option><br>
        </select>
        </p>
   
        <p>
        <label for="adresse">Adresse de résidence :</label><br>
        <input type="text" name="adresse" id="adresse" size="4O" required><br><br>
        </p>

        <p>
        <label for="number">Numéro de téléphone :</label><br>
        <input type="tel" name="number" id="number" size="40" required><br><br>
        </p>

        <p>
            <label for="email">Adresse e-mail :</label><br>
            <input type="email" name="email" id="email" size="4O" required><br><br>
        </p>

         <button type="submit">Envoyer</button>

</form>

        <p class="un">Déjà inscrit ? <a href="{{ url('/login') }}">Connectez-vous ici</a></p>

    
 </section>

@endsection