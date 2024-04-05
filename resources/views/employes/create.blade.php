@extends('master')
@section('Title','Ajouter un employé')
@section('Content')
<div class="container">
    <h1>Ajouter un employé</h1>
    <form action="{{ route('employes.store') }}" method="post">
        @method('POST')
        @csrf
        <div class="form-group">
            <label for="key">Clé :</label>
            <input type="text" class="form-control" id="key" name="key">
        </div>
        <div class="form-group">
            <label for="code_theme">Code Thème :</label>
            <input type="text" class="form-control" id="code_theme" name="code_theme">
        </div>
        <div class="form-group">
            <label for="Mle">Mle :</label>
            <input type="text" class="form-control" id="Mle" name="Mle">
        </div>
        <div class="form-group">
            <label for="Nom&Prenom">Nom & Prénom :</label>
            <input type="text" class="form-control" id="Nom_Prenom" name="Nom_Prenom">
        </div>
        <div class="form-group">
            <label for="JCM">JCM :</label>
            <input type="text" class="form-control" id="JCM" name="JCM">
        </div>
        <div class="form-group">
            <label for="Metier">Métier :</label>
            <input type="text" class="form-control" id="Metier" name="Metier">
        </div>
        <div class="form-group">
            <label for="Service">Service :</label>
            <input type="text" class="form-control" id="Service" name="Service">
        </div>
        <div class="form-group">
            <label for="Entite">Entité :</label>
            <input type="text" class="form-control" id="Entite" name="Entite">
        </div>
        <div class="form-group">
            <label for="duree">Durée :</label>
            <input type="text" class="form-control" id="duree" name="duree">
        </div>
        <div class="form-group">
            <label for="date_debut">Date de Début :</label>
            <input type="date" class="form-control" id="date_debut" name="date_debut">
        </div>
        <div class="form-group">
            <label for="date_fin">Date de Fin :</label>
            <input type="date" class="form-control" id="date_fin" name="date_fin">
        </div>
        <div class="form-group">
            <label for="presence">Présence :</label>
            <input type="text" class="form-control" id="presence" name="presence">
        </div>
        <div class="form-group">
            <label for="programe">Programme :</label>
            <input type="text" class="form-control" id="programe" name="programe">
        </div>
        <div class="form-group">
            <label for="groupe">Groupe :</label>
            <input type="text" class="form-control" id="groupe" name="groupe">
        </div>
        <div class="form-group">
            <label for="manager">Manager :</label>
            <select class="form-control" name="manager" id="manager">
                @foreach($managers as $manager)
                    <option value="{{ $manager->matricule }}">{{ $manager->matricule }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>
@stop
