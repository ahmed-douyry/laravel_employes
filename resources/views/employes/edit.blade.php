@extends('master')
@section('Title','modifier un employee')
@section('Content')
<div class="container">
    <h2>Modifier Employé</h2>
    <form action="{{ route('employes.update', $employe->key) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="key">Key:</label>
            <input type="text" class="form-control" id="key" name="key" value="{{ $employe->key }}">
        </div>
        <div class="form-group">
            <label for="code_theme">Code Theme:</label>
            <input type="text" class="form-control" id="code_theme" name="code_theme" value="{{ $employe->code_theme }}">
        </div>
        <div class="form-group">
            <label for="Mle">Mle:</label>
            <input type="text" class="form-control" id="Mle" name="Mle" value="{{ $employe->Mle }}">
        </div>
        <div class="form-group">
            <label for="nom_prenom">Nom & Prenom:</label>
            <input type="text" class="form-control" id="nom_prenom" name="nom_prenom" value="{{ $employe->manager }}">
        </div>
        <div class="form-group">
            <label for="JCM">JCM:</label>
            <input type="text" class="form-control" id="JCM" name="JCM" value="{{ $employe->JCM }}">
        </div>
        <div class="form-group">
            <label for="Metier">Metier:</label>
            <input type="text" class="form-control" id="Metier" name="Metier" value="{{ $employe->Metier }}">
        </div>
        <div class="form-group">
            <label for="Service">Service:</label>
            <input type="text" class="form-control" id="Service" name="Service" value="{{ $employe->Service }}">
        </div>
        <div class="form-group">
            <label for="Entite">Entite:</label>
            <input type="text" class="form-control" id="Entite" name="Entite" value="{{ $employe->Entite }}">
        </div>
        <div class="form-group">
            <label for="manager">Manager:</label>
            <input type="text" class="form-control" id="manager" name="manager" value="{{ $employe->manager }}">
        </div>
        <div class="form-group">
            <label for="duree">Duree:</label>
            <input type="text" class="form-control" id="duree" name="duree" value="{{ $employe->duree }}">
        </div>
        <div class="form-group">
            <label for="date_debut">Date Début:</label>
            <input type="date" class="form-control" id="date_debut" name="date_debut" value="{{ $employe->date_debut }}">
        </div>
        <div class="form-group">
            <label for="date_fin">Date Fin:</label>
            <input type="date" class="form-control" id="date_fin" name="date_fin" value="{{ $employe->date_fin }}">
        </div>
        <div class="form-group">
            <label for="presence">Presence:</label>
            <input type="text" class="form-control" id="presence" name="presence" value="{{ $employe->presence }}">
        </div>
        <div class="form-group">
            <label for="programe">Programme:</label>
            <input type="text" class="form-control" id="programe" name="programe" value="{{ $employe->programe }}">
        </div>
        <div class="form-group">
            <label for="groupe">Groupe:</label>
            <input type="text" class="form-control" id="groupe" name="groupe" value="{{ $employe->groupe }}">
        </div>
        <select name="manager" id="">
            @foreach($managers as $manager)
            <option value="{{$manager->matricule}}">{{$manager->matricule}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
@endsection