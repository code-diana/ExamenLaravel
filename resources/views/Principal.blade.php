@extends('layouts.layout')
@section('content')
<h1>Página principal</h1>
<p>Hola <?php if(session('user')){echo session('user');}?> </p>

<a href="logout">Cerrar sesión</a>
@endsection