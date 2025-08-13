@extends('layouts.app')

<title>Réclamations des utilisateurs</title>
<link rel="stylesheet" href="/css/réclamation.css">

@section('content')
    <section>
       
    <div class="reclamation-message">
  <p>
    <h1>Vous rencontrez un problème ?<br></h1>
    Ce formulaire est à votre disposition pour signaler toute difficulté, faire une réclamation ou soumettre une demande particulière concernant votre situation.  
    <br><br>
    Notre équipe s'engage à traiter chaque message avec sérieux, confidentialité et dans les meilleurs délais.
  </p>
</div>

    <form action="" method="post">
        <textarea name="reclamation" id="reclamation" rows="15" cols="80" required></textarea><br>
        <button type="submit">Envoyer</button>
    </form>
  

 </section>

@endsection