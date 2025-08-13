@extends('layouts.app')

<title>Menu- Administrateur</title>
<link rel="stylesheet" href="/css/dashboard.css">


@section('content')

  <section class="dashboard"><br><br><br><br><br><br>
  <h1>Bienvenue sur votre tableau de bord</h1><br><br><br>
  <p>Choisissez une action ci-dessous :</p><br><br>
 

 <div class="dashboard-links">

    <br> <a href="{{ url('/display') }}">👥 Voir la liste des ayants droit</a><br>
    <br><a href="{{ url('/manage') }}">⚙️ Gérer les utilisateurs (comptes, accès, rôles)</a>
    <br><a href="{{ url('/alldashboards') }}">📊 Voir tous les tableaux de bord</a><br><br>
    <a href="{{ url('/history') }}">🔒 Accéder aux historiques, archivages, journaux d’activité</a><br><br><br>
 
 </div>

 </section>

@endsection