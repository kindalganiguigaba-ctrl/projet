@extends('layouts.app')


<title>Accueil</title>
<style>
  /* Body */
  .deux {
    text-align: center;
  }

  section {
    font-family: 'Montserrat', sans-serif;
    background-color: #f0f5fa;
    color: #333;
    padding-top: 130px;
    /* espace pour header fixe */
  }

  /* Hero / H1 */
  h1 {
    color: #ffffffff;
    font-weight: 900;
    text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.5);
    background-image: url("../pictures/gouv.jpg");
    background-size: cover;
    background-position: center;
    padding: 100px 20px;
    text-align: center;
    font-family: 'Montserrat', sans-serif;
    width: 90%;
    margin: auto;
  }


  /* Paragraphes */

  p {
    font-size: 1.30rem;
    /* 20px approx */
    margin-bottom: 20px;
  }

  /* Liens boutons */
  a {
    display: inline-block;
    color: #3b5998;
    text-decoration: none;
    border-radius: 8px;
    margin: 10px 5px;
    font-weight: 450;
    transition: background-color 0.3s, transform 0.2s;
  }


  /* Image d’accueil */
  .image-accueil {
    width: 80%;
    max-width: 800px;
    display: block;
    margin: 10px auto;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  }
</style>

@section('content')
  <section>

    <div id="un">
    <h1 class="text-light">
      Gestion des Ayants Droit de Militaires Portés Disparus ou Décédés en Mission Commandée
    </h1>
    </div>
    <section>
    <p class="deux"> Ce portail a été spécialement conçu pour centraliser et simplifier la gestion des ayants droit des
      militaires portés disparus ou décédés en mission commandée. Il permet un enregistrement précis et sécurisé des
      informations concernant les bénéficiaires, qu’il s’agisse de conjoints, d’enfants ou d’ascendants à charge. Les
      gestionnaires autorisés peuvent consulter les dossiers détaillés, ajouter de nouveaux bénéficiaires, vérifier les
      pièces justificatives et mettre à jour les informations en temps réel. Grâce à cet outil, le traitement des
      prestations sociales est rendu plus rapide, transparent et fiable, garantissant ainsi l’équité et la traçabilité
      dans la prise en charge des familles des militaires. Notre objectif est de fournir un accompagnement efficace,
      tout en assurant le respect strict des droits et des procédures, afin que chaque famille puisse recevoir le
      soutien auquel elle a droit de manière claire et organisée.
    </p>
    </section>

    <section>
    <img src="pictures/militaires-armee-benin-01.jpg" alt="Soldats béninois" class="image-accueil">
    </section>

    <section class="demarrage">
    <p class="deux">
      Pour commencer, veuillez vous <a href="{{ url('/login') }}">connecter</a> ou <a href="{{ url('/signin') }}">créer
      un compte.</a>
    </p>
    </section>
  </section>

@endsection