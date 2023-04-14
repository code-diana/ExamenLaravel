@extends('layouts.layout')
@section('content')

<?php if(isset($mensaje)){
  ?><script>alert(<?php echo $mensaje?>)</script><?php
}?>

<h1>Web de mascotes</h1>
<!-- Si es la página __invoke no hace falta action(?) -->
<form action="" method="POST" accept-charset="UTF-8">
        @csrf
                  <p class="text-white-50 mb-5"></p>
                  <div class="form-outline form-white mb-4">
                    Nick de la mascota<input type="text" name="user" id="typeEmailX" class="form-control form-control-lg" placeholder="nick" required/>
                  </div>
                  <div class="form-outline form-white mb-4">
                    Password:<input type="password" name="passwd" id="typePasswordX" class="form-control form-control-lg" placeholder="Password" required/>
                  </div>
                  <p class="text-white-50 mb-5"></p>
                  <button class="btn btn-outline-light btn-lg px-5" type="submit" name="send" >Entrar</button>
      </form>

      <a href="register">Registra a teva mascota!!</a>
@endsection

<?php if(session('error')){
  echo session('error');
}?>

