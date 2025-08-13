@extends('layouts.app')


@section('content')


    <title>Historique et Journaux</title>
    <style>
      
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 30px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        h2 {
            margin-top: 40px;
            text-align: center;
        }
        
        @media (max-width: 768px) {
            main {
                margin-top: 400px;
                font-family: 'Montserrat', sans-serif;
                margin-bottom: 200px;
            }

            main h1 {
                font-size: 45px;
                text-align: center;
            }

            main h2 {
                font-size: 40px;
                text-align: center;
            }

            main table {
                font-size: 35px;
                margin: auto;
            }

            footer {
                font-family: 'Montserrat', sans-serif;
                font-size: 45px;
                text-align:center;
            }

      }

    </style>

    <br><br><h1>🔒 Historique, Archives et Journaux</h1>

    <h2>Historique des actions</h2>
    <table>
        <tr>
            <th>Date</th>
            <th>Utilisateur</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>11/08/2025</td>
            <td>Admin</td>
            <td>Ajout d’un utilisateur</td>
        </tr>
    </table>

    <h2>Archives</h2>
    <table>
        <tr>
            <th>Nom du fichier</th>
            <th>Date</th>
        </tr>
        <tr>
            <td>NomAyantDroit.zip</td>
            <td>10/08/2025</td>
        </tr>
    </table>

    <h2>Journaux d’activité</h2>
    <table>
        <tr>
            <th>Date</th>
            <th>Événement</th>
        </tr>
        <tr>
            <td>09/08/2025</td>
            <td>Serveur redémarré</td>
        </tr>
    </table>

    @endsection