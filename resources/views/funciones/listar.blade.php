@extends('layouts.layout')
@section('content')
<table style="border:1px solid black">
    <tr>
        <td>Nombre</td>
        <td>Contraseña</td>
    </tr>
    @foreach ($listado as $user)
    <tr>
        <td>{{$user['name']}}</td>
        <td>{{$user['password']}}</td>
    </tr>
    @endforeach
</table>

<a href="startPage">Volver</a>
@endsection