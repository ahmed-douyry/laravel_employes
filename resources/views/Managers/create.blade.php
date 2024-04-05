@extends('master')
@section('Title','ajouter un manager')
@section('Content')
<form action="{{route('managers.store')}}" method="POST">
    @method('POST')
    @csrf
    <div>
        <input type="text" name="matricule"  placeholder="taper votre nom et prenom ...">    
    </div>    
   
        <button>submit</button>
    </div>
</form>
@endsection