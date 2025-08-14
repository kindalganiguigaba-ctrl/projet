@extends('layouts.appuser')

<title>Valider ou rejeter un dossier</title>
<link rel="stylesheet" href="/css/valid_rejet.css">

@section('content')
    <section>
       
<form action="" method="post">
   <h1>⚠️ Confirmation de traitement du dossier</h1>
   <p>Ce dossier est en attente de décision. <br>
      Veuillez choisir l’action à effectuer : <br>
      ✅ Valider → Le dossier sera accepté et traité. <br>
      ❌ Rejeter → Le dossier sera refusé et archivé.<br></p>

  <button type="submit" name="action" value="valider">✅ Valider</button><br><br>
  <button type="submit" name="action" value="rejeter">❌ Rejeter</button>
</form>

 </section>

@endsection