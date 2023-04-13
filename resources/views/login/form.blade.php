@extends('layouts.layout')
@section('content')
<h1>Login</h1>
<!-- Si es la página __invoke no hace falta action(?) -->
<form action="" method="POST" accept-charset="UTF-8">
        @csrf
                  <p class="text-white-50 mb-5"></p>
                  <div class="form-outline form-white mb-4">
                    <input type="text" name="user" id="typeEmailX" class="form-control form-control-lg" placeholder="Nombre de usuario" required/>
                  </div>
                  <div class="form-outline form-white mb-4">
                    <input type="password" name="passwd" id="typePasswordX" class="form-control form-control-lg" placeholder="Contraseña" required/>
                  </div>
                  <p class="text-white-50 mb-5"></p>
                  <button class="btn btn-outline-light btn-lg px-5" type="submit" name="send" >Iniciar sesión</button>
      </form>
@endsection

<?php if(session('error')){
  echo session('error');
}?>