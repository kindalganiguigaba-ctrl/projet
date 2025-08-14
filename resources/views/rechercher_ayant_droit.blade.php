@extends('layouts.appuser')

<title>Rechercher un ayant droit</title>
<link rel="stylesheet" href="/css/recherche.css">

@section('content')
    <section>

    <h1>🔍 Rechercher un Ayant Droit</h1>
    <form class="recherche-form">
      <input type="text" placeholder="Entrez un nom, prénom ou numéro..." required>
      <button type="submit">Rechercher</button>
    </form>

    <section class="resultats">
      <h2>Résultats simulés</h2>
      <table>
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénoms</th>
            <th>Téléphone</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr> 
            <td>Gaba</td>
            <td>Kendal</td>
            <td>96000000</td>
            <td>
              <a href="">✏️ Modifier</a> |
              <a href="{{ url('/delete') }}">🗑️ Supprimer</a>
            </td>
          </tr>
        </tbody>
      </table>
    </section>
   </section>

@endsection