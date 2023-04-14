@extends('layouts.layout')
@section('content')
<style>
    tr, td,table{
        border:1px solid black;
        border-collapse: collapse;
    }
</style>

<h1>Página principal</h1>
<p>Benvingut/da mascota <?php if(session('user')){echo session('user');}?> </p>

<table>
    <tr>
        <td>Nom de la posible parella</td>
        <td>Edat</td>
        <td>Color</td>
        <td>Nom del seu humà</td>
        <td>Telefon</td>
        <td>Fotos</td>
    </tr>
    @foreach ($pets as $user)
    <tr>
        <td>{{$user['name']}}</td>
        <td>{{$user['age']}}</td>
        <td>{{$user['color']}}</td>
        <td>{{$user['owner']}}</td>
        <td>{{$user['telf']}}</td>
        <?php $nick=$user['nick']; ?>
        <td><a href="verfoto/{{$nick}}">Ver foto</a></td>
    </tr>
    @endforeach
</table>

<!-- <a href="listar">Listar</a><br> -->
<a href="logout">Cerrar sesión</a>

@endsection