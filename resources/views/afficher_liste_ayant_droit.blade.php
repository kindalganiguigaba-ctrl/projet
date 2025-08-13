@extends('layouts.app')

<title>Liste des ayants droit</title>
<link rel="stylesheet" href="/css/liste_ayants.css">

@section('content')
   


    <section>
      <h1>Liste des ayants droit</h1>
  <table> 
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prénom(s)</th>
        <th>Sexe</th>
        <th>Catégorie</th>
        <th>Téléphone</th>
        <th>Adresse</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>GABA SEKE</td>
        <td>Kindal</td>
        <td>F</td>
        <td>Enfant</td>
        <td>96 00 00 00</td>
        <td>Cotonou</td>
        <td><a href="">🔍 Voir</a></td>
      </tr>
      <!-- Ligne suivante à ajouter dynamiquement plus tard -->
    </tbody>
  </table>
</main>
 </section>

@endsection