@extends('layouts.app')

<title>Confirmer la suppression</title>
<link rel="stylesheet" href="/css/supprimer.css">
@section('content')
    <section>
       
    <h1>🗑️ Supprimer un Ayant Droit</h1>
    <p>Êtes-vous sûr(e) de vouloir supprimer cet ayant droit ?</p>
    <button type="submit">✅ Oui, supprimer</button><br><br>
    <button onclick="window.history.back()" class="annul">❌Annuler</button>
</main>

 </section>


@endsection