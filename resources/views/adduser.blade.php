
@extends('layouts.appuser')

<title>Gestions des utilisateurs</title>
<link rel="stylesheet" href="/css/inscription.css">


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