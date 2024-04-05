<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}">
    <title>@yield('Title')</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <ul class="navbar-nav mr-auto ">
                <li>
                    <img src="{{asset('ocp.png')}}" alt="" width="50px" height="50px" class="p-3">
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('managers.create') }}">Ajouter Manager</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('employes.create') }}">Ajouter Employé</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('employes.index') }}">Liste des Employés</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('managers.index') }}">Liste des managers</a>
                </li>
            </ul>
        </nav>
        
    </header>
    <main>
        @yield('Content')
    </main>
</body>
</html>