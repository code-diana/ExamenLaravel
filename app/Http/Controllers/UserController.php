<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Primera funcion de la pagina
    public function __invoke(){
        return view('login.form');
    }

    public function login(Request $request){
        if (isset($_POST['send'])){
            if (User::where('name', $request->user )->where('password',$request->passwd)->exists()) {
                $request->session()->put('user', $request->user);
                return redirect('/startPage');
            }

            else{
                ?>
                <script>alert('Nombre de usuario o contraseña incorrectos');</script>
                <?php
                return view('login.form');
            }
        }
    }



    //Esto no deberia estar aqui
    public function start(){
        return view('Principal');
    }


    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}
