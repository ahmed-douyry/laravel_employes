@extends('master')
@section('Title', 'Liste des managers')
@section('Content')
<div class="container">
    <h1>Liste des managers</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nom et prénom</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($managers as $manager)
            <tr>
                <td>{{$manager->matricule}}</td>
                <td>
                    <form action="{{ route('managers.destroy', $manager->matricule) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce manager ?')">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
