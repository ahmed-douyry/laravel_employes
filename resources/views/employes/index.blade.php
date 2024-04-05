@extends('master')
@section('Title','Liste des employes')
@section('Content')
<table>
    <div class="container">
        <h2>Liste des Employés</h2>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>Key</th>
                    <th>Code Theme</th>
                    <th>Mle</th>
                    <th>Nom & Prenom</th>
                    <th>JCM</th>
                    <th>Metier</th>
                    <th>Service</th>
                    <th>Entite</th>
                    <th>Manager</th>
                    <th>Duree</th>
                    <th>Date Début</th>
                    <th>Date Fin</th>
                    <th>Presence</th>
                    <th>Programme</th>
                    <th>Groupe</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employes as $employe)
                    <tr>
                        <td>{{ $employe->key }}</td>
                        <td>{{ $employe->code_theme }}</td>
                        <td>{{ $employe->Mle }}</td>
                        <td>{{ $employe->Nom_Prenom }}</td>
                        <td>{{ $employe->JCM }}</td>
                        <td>{{ $employe->Metier }}</td>
                        <td>{{ $employe->Service }}</td>
                        <td>{{ $employe->Entite }}</td>
                        <td>{{ $employe->manager }}</td>
                        <td>{{ $employe->duree }}</td>
                        <td>{{ $employe->date_debut }}</td>
                        <td>{{ $employe->date_fin }}</td>
                        <td>{{ $employe->presence }}</td>
                        <td>{{ $employe->programe }}</td>
                        <td>{{ $employe->groupe }}</td>
                        <td> <a href="{{ route('employes.edit', $employe->key) }}" class="btn btn-primary">Éditer</a></td>
                        <td>
                           
                            <form action="{{ route('employes.destroy', $employe->key) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet employé ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</table>
@stop