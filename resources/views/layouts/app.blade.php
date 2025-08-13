<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>


<style>
@media (max-width: 768px) {
   
 header {
  background-color: #3b5998;
  height: 300px;
  display: flex;
  align-items: center;
  padding-left: 10px;
  background-position: cover;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 1000;
 }

 header div {
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 100%;
 }

 nav #first {
 margin-left: 50px;
 }

 header a {
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  color: white;
  text-decoration: none;
  font-size: 30px;
 }

header nav {
  font-family: 'Montserrat', sans-serif;
  font-size: 16px;
  color: black;
  margin-bottom: 0;
}

#logo {
    height: 6.5rem;
    object-fit: cover;
    width: 500px;
    margin-left: 20px;
}


  footer {
    padding: 15px 10px;     /* Moins de padding horizontal */
    height: 10%;           /* Hauteur auto pour s’adapter au contenu */
    text-align: center;     /* Centrer le texte si ce n’est pas déjà fait */
    box-shadow: none;       /* Optionnel : enlever l’ombre sur mobile */
    padding-top: 50px ;
    margin-bottom: 0;
    width: 100%;
    position: fixed;
  }


   footer p {
    font-size: 30px; 
   }
a:hover {
  color: #07b5ff;
  text-decoration: underline;
}


}
</style>

<body>
  <header>
    <div>
      <img src="pictures/logo_armée.png" alt="logo de l'armée béninoise" class="logo" id="logo">
      <nav id="1">
        <a href="{{ url('/') }}" class="first">Accueil</a>
        <a href="{{ url('/signin') }}">S'inscrire</a>
        <a href="{{ url('/login') }}">Se connecter</a>
      </nav>
    </div>
  </header>

 
    <main>
        @yield('content')
    </main>


   <footer>
        <p>&copy; 2025 - Ministère de la Défense Nationale du Bénin. Tous droits réservés.</p>
    </footer>

        
</body>

</html>

