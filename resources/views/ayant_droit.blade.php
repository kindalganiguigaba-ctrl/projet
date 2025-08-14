
@extends('layouts.appuser')

<title>Menu- Ayants droit</title>
<link rel="stylesheet" href="/css/dashboard.css">

@section('content')
    <section class="dashboard">

  <h1>Bienvenue sur votre tableau de bord</h1>
  <p>Choisissez une action ci-dessous :</p>

  <div class="dashboard-links">
    <a href=""> Informations personnelles (nom, lien avec le militaire, adresse, etc.)</a><br>
    <a href="">📁 Télécharger des documents (certificat, reçu, bulletin…)</a><br>
    <a href="{{ url('/demand') }}">🗨️ Faire une réclamation ou demande</a><br>
  </div>
 </section>

 
@endsection