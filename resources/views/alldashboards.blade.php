@extends('layouts.app')

<title>Tous les tableax de bord</title>
<link rel="stylesheet" href="/css/dashboard.css">
@section('content')
       <section >
    <h1>📊 Tous les tableaux de bord</h1>

    <div class="dashboard-preview">
    <a href="{{ url('/users') }}">
        <h2>Ayants droit</h2>
        <p>Version destinée aux ayants droit.</p>
    </a>
    </div>

    <div class="dashboard-preview">
    <a href="{{ url('/gestion') }}">
        <h2>Gestionnaires</h2>
        <p>Version destinée aux gestionnaires.</p>
    </a>
    </div>

    <div class="dashboard-preview">
    <a href="{{ url('/administrator') }}">
        <h2>Administrateurs</h2>
        <p>Version destinée aux administrateurs.</p>
    </a>
    </div>

</section>
<style>

        h1 {
            padding-top: 0px;
            font-size: 50px;
        }
        section {
            margin: center;
        }
        
        div.dashboard-preview {
            border: 1px solid #ccc;
            border-radius: 25px;
            margin-top: 5px;
            margin-left: 90px;
            display: inline-block;
            width: 300px;
            height: 150px;
            text-align: center;
            background-color: #3b5998;
            margin-bottom: 150px;
        }
        .dashboard-preview a {
            text-decoration: none;
            color: white;
            text-align: center;
            margin: auto;
        }
        
        @media (max-width: 768px) {
        section {
    font-size: 30px;
    display: flex;
    flex-direction: column;
    align-items: center;
      }

  .dashboard-preview h2 {
    text-align: center;
  }

  .dashboard-preview {
   
    margin-bottom: 30px;
    padding-bottom: 100px;
    padding-left: 50px;
    padding-right: 100px;
    border-radius: 15px;
    
  }
}

    </style>
@endsection

