
@extends('layouts.app')

<title>Accueil</title>
<link rel="stylesheet" href="/css/accueil.css">

<style>
@media (max-width: 768px) { 
    #un {
      height: 800px;
      font-size: 75px;
    }

    #deux {
      font-size: 55px;
    }

     footer {
    font-family: 'Montserrat', sans-serif;
    font-size: 32px;
    text-align: center;
  }

  }
</style>

@section('content')
  <section>

    <div>
    <h1 id="un">
      Gestion des Ayants Droit de Militaires Portés Disparus ou Décédés en Mission Commandée
    </h1>
    </div>





    <section>
    <p id="deux"> Ce portail a été conçu pour faciliter l’enregistrement, le suivi et la mise à jour des informations
      relatives aux ayants droit : conjoints, enfants, et ascendants à charge. Il permet aux gestionnaires
      autorisés de consulter les dossiers, d’ajouter de nouveaux bénéficiaires, de vérifier les pièces
      justificatives et d'assurer une prise en charge rapide et transparente. Notre objectif : garantir équité,
      traçabilité et efficacité dans le traitement des prestations sociales dues aux familles militaires.
    </p>
    </section>

    <section>
    <img src="pictures/militaires-armee-benin-01.jpg" alt="Soldats béninois" class="image-accueil">
    </section>

    <section class="demarrage">
    <p id="deux">
      Pour commencer, veuillez vous <a href="{{ url('/login') }}" >connecter</a> ou <a href="{{ url('/signin') }}">créer
      un compte</a>.
    </p>
    </section>
  </section>

@endsection
