@extends('layouts.app')

<title>Connexion</title>
<style>
    /* Bouton */
button {
  display: inline-block;
  padding: 10px 25px;
  background-color: #0c2d48;
  color: white;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  border: none;
  border-radius: 8px;
  margin: 15px 0;
  cursor: pointer;
  transition: background-color 0.3s ease, transform 0.2s ease;
}

button:hover {
  background-color: #324b81; /* Bleu plus foncé */
  transform: scale(1.03); /* Légère mise en avant */
}

/* Formulaire */
form {
  margin-top: 100px;
  margin-bottom: 50px;
  align-content: center;
  max-width: 400px;
  width: 100%;
  background-color: white;
  padding: 30px 40px;
  border-radius: 10px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
}

/* Paragraphes */
p {
  margin-top: 0;
  margin-bottom: 15px;
}

/* Body */
body {
  font-family: 'Montserrat', sans-serif;
  background-color: #f2f6fa;
  color: #333;
  padding-top: 120px; /* Espace pour le header fixe */
}

/* Section */
section {
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  font-family: 'Montserrat', sans-serif;
}

section h1 {
 padding-bottom: 20px;
}

.last {
    padding-top: 20px;
}

/*Formulaire*/
form {
    margin: auto;
    width: 80%;
}

/* Champs du formulaire */
input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 6px;
  font-size: 14px;
  transition: border-color 0.3s ease;
}

input:focus {
  border-color: #3b5998;
  outline: none;
}


</style>

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