@extends('layouts.appuser')

<title>Ajout d'un ayant droit</title>
<link rel="stylesheet" href="/css/ajouter_ayant_droit.css">
@section('content')
    <section> 
       
    <fieldset>
        <legend>Informations personnelles</legend>
        <p>
        <label for="nom">Nom :</label><br>
        <input type="text" name="nom" id="nom" size="4O" required><br><br>
        </p>

        <p>
        <label for="prenoms">Prénom(s) :</label><br>
        <input type="text" name="prenoms" id="prenoms" size="40" required><br><br>
        </p>

        <p>
        <label for="date">Date de naissance :</label><br>
        <input type="text" name="date" id="date" size="4O" required><br><br>
        </p>

        <p>
        <label for="lieu">Lieu de naissance :</label><br>
        <input type="text" name="lieu" id="lieu" size="40" required><br><br>
        </p>

        <p>
        <label for="sex">Sex :</label>
        <select name="sex" id="sex">
            <option value="feminin">Féminin :</option><br>
            <option value="masculin">Masculin :</option><br>
        </select>
        </p>

        <p>
            <label for="lien">Catégorie d'ayant droit :</label><br>
            <select name="lien" id="lien">
                <option value="conjoint">Conjoint(e)</option>
                <option value="enfant">Enfant biologique</option>
                <option value="child">Enfant adopté</option>
                <option value="ascendant">Parents/tuteur reconnus</option>
            </select>
        </p>

        <p>
            <label for="situation">Situation matrimoniale :</label><br>
            <input type="text" name="situation" id="situation" size="40" required><br><br>
        </p>

        <p>
            <label for="numero">Numero d'identité nationale/Numéro de registre civil :</label><br>
            <input type="text" name="numero" id="numero" size="4O" required><br><br>
        </p>

    </fieldset>

    <fieldset>
        <legend>Coordonnées :</legend><br>
        <p>
            <label for="adresse">Adresse de résidence :</label><br>
            <input type="text" name="adresse" id="adresse" size="4O" required><br><br>
        </p>

        <p>
            <label for="number">Numéro de téléphone :</label><br>
            <input type="tel" name="number" id="number" size="40" required><br><br>
        </p>

        <p>
            <label for="email">Adresse e-mail :</label><br>
            <input type="email" name="email" id="email" size="4O" required><br><br>
        </p>

        <p>
            <label for="local">Localité(commune/département) :</label><br>
            <input type="text" name="local" id="local" size="4O" required><br><br>
        </p>

    </fieldset>

    <fieldset>
        <legend>Informations du militaire porté décédé/disparu</legend>
        <p>
            <label for="nom2">Nom :</label><br>
            <input type="text" name="nom2" id="nom2" size="4O" required><br><br>
        </p>

        <p>
            <label for="prenom">Prénom(s) :</label><br>
            <input type="text" name="prenom" id="prenom" size="4O" required><br><br>
        </p>

        <p>
            <label for="matricule">Numéro matricule :</label><br>
            <input type="text" name="matricule" id="matricule" size="4O" required><br><br>
        </p>

        <p>
            <label for="grade">Grade :</label><br>
            <input type="text" name="grade" id="grade" size="4O" required><br><br>
        </p>

        <p>
            <label for="unité">Unité d'affectation :</label><br>
            <input type="text" name="unité" id="unité" size="4O" required><br><br>
        </p>

        <p>
            <label for="date2">Date de décès/disparition:</label><br>
            <input type="text" name="date2" id="date2" size="4O" required><br><br>
        </p>

        <p>
            <label for="lieu2">Lieu de décès/disparition :</label><br>
            <input type="text" name="lieu2" id="lieu2" size="4O" required><br><br>
        </p>

        <p>
            <label for="circonstance">Circonstances de la mission commandée :</label><br>
            <input type="text" name="circonstance" id="circonstance" size="4O" required><br><br>
        </p>


        <p>
            <label for="décision">Décision officielle de de décès/disparition :</label><br>
            <input type="text" name="décision" id="décision" size="4O" required><br><br>
        </p>

        <p>
            <label for="statut">Statut administratif post-mortem :</label><br>
            <input type="text" name="statut" id="statut" size="4O" required><br><br>
        </p>

        <p>
            <label for="matricule">Numéro matricule :</label><br>
            <input type="text" name="matricule" id="matricule" size="4O" required><br><br>
        </p>
    </fieldset>

    <fieldset>
        <legend>Données sociale et économiques</legend>
        <p>
            <label for="régime">Régime applicable:</label><br>
            <select name="régime" id="régime">
            <option value="1">Foyer</option>
            <option value="2"> Maternel/primaire/secondaire</option>
            <option value="3"> Universitaire</option> 
            <option value="4">Autre</option>
            </select>
        </p>


        <p>
            <label for="niveau">Niveau détude(pour les enfants) :</label><br>
            <input type="text" name="niveau" id="niveau" size="4O"><br><br>
        </p>

       <p>
            <label for="etat">Etablissement fréquenté(nom, loacalité) :</label><br>
            <input type="text" name="matricule" id="matricule" size="4O"><br><br>
        </p>

        <p>
            <label for="emploi">Situation d'emploi ou de revenu du conjoint survivant :</label><br>
            <input type="text" name="matricule" id="matricule" size="4O"><br><br>
        </p>

        <p>
            <label for="éco">Situation économique globale de toute la famille :</label><br>
            <input type="text" name="éco" id="éco" size="4O" ><br><br>
        </p>


        <p>
        <label for="santé">Etat de santé(le cas échéant) :</label><br>
        <input type="text" name="santé" id="santé" size="4O" value="Ex: handicapé (physique ou mental)" ><br><br>
        </p>
    </fieldset>

    <fieldset>
        <legend>Prestations sociales disponibles à gérer :</legend><br>
        <fieldset>
        <legend>Subvention détude et d'entretien</legend><br>
        <p>
        <label for="montant">Montant annuel :</label><br>
        <input type="text" name="montant" id="montant" size="4O"><br><br>
        </p>


        <p>
        <label for="période">Période de versement :</label><br>
        <input type="text" name="période" id="période" size="4O"><br><br>
        </p>
        
        <p>
        <label for="Justificatifs">Justificatifs (factures,certificat de scolarité) :</label><br>
        <input type="text" name="nom" id="nom" size="4O"><br><br>
        </p>
    </fieldset>

    <fieldset>
        <legend>Capital décès :</legend><br>
        
        <p>
        <label for="Montant">Montant forfaitaire :</label><br>
        <input type="text" name="Montant" id="Montant" size="4O"><br><br>
        </p>
        
        <p>
        <label for="mode">Mode et date de versement :</label><br>
        <input type="text" name="mode" id="mode" size="4O"><br><br>
        </p>

        <p>
        <label for="bénéficiaire">Bénéficiaire désigné :</label><br>
        <input type="text" name="bénéficiaire" id="bénéficiaire" size="4O"><br><br>
        </p>
    </fieldset>


    <fieldset>
        <legend>Assurance santé :</legend><br>
        
        <p>
        <label for="Affiliation">Affiliation à un régime :</label><br>
        <input type="text" name="Affiliation" id="Affiliation" size="4O"><br><br>
        </p>
        
        <p>
        <label for="Noms">Noms des bénéficiaires :</label><br>
        <input type="textarea" name="Noms" id="Noms" size="4O"><br><br>
        </p>
        
        <p>
        <label for="organ">Organisme assureur :</label><br>
        <input type="text" name="organ" id="organ"><br><br>
        </p>
        
        <p>
        <label for="type">Type de prise en charge (hospitlisation, consultations, médicaments) :</label><br>
        <input type="text" name="type" id="type" size="4O"><br><br>
        </p>

    </fieldset>


    <fieldset>
        <legend>Suivi scolaire :</legend><br>

        
        <p>
        <label for="sous">Soutien scolaire éventuel (tutorat, bourses) :</label><br>
        <input type="text" name="sous" id="sous" size="4O"><br><br>
        </p>
        
        <p>
        <label for="nom">Nom :</label><br>
        <input type="text" name="nom" id="nom" size="4O"><br><br>
        </p>
        
        <p>
        <label for="risk">Risque de décrochage scolaire :</label><br>
        <input type="text" name="risk" id="risk" size="4O"><br><br>
        </p>

    </fieldset>
    </fieldset>


<button type="submit">Enregistrer</button>

</form>


 </section>

@endsection