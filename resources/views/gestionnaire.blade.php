@extends('layouts.appuser')

<title>Menu- Gestionnaire</title>
<link rel="stylesheet" href="/css/dashboard.css">




@section('content')
    <section class="dashboard">
       
  <h1>Bienvenue sur votre tableau de bord</h1>
  <p>Choisissez une action ci-dessous :</p>
 
  <div class="dashboard-links">
    <a href="{{ url('/display') }}">👥 Voir la liste des ayants droit</a><br>
    <a href="{{ url('/add') }}">➕ Ajouter un nouvel ayant droit</a><br>
    <a href="{{ url('/search') }}">🔍 Rechercher / modifier / supprimer un ayant droit</a><br>
    <a href="{{ url('/valid_reject') }}">📤 Valider ou rejeter un dossier</a><br>
  </div>
  
 </section>

@endsection