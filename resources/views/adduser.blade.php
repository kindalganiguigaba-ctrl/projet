
@extends('layouts.app')

<title>Gestions des utilisateurs</title>
<link rel="stylesheet" href="/css/inscription.css">

<style>
    
@media (max-width: 768px) {
  section h2 {
    margin-top: 100px;
    font-size: 50px;
    height: 100px;
  }

  section form {
    margin-bottom: 200px;
    height: 45%;
  }

  section form label {
    font-size: 30px;
  }

  button[type="submit"] {
    height: 80px;
    text-align: center;
    font-size: 37px;
    margin: auto;
  }

  input, select {
    width: 100%;
    height: 85px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 15px;
  }

  select option {
    font-size: 30px;
  }
  footer {
    font-size: 30px;
  }
}

</style>
@section('content')

<section>
<h2>Ajouter un utilisateur</h2>
<form>
    <label for="name">Nom :</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required><br><br>

    <label for="role">Rôle :</label>
    <select id="role" name="role">
        <option value="admin">Administrateur</option>
        <option value="manager">Gestionnaire</option>
        <option value="user">Ayant droit</option>
    </select><br><br>

    <button type="submit">Ajouter</button>
</form>
</section>

@endsection