<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pet;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PetController extends Controller
{
    //
    public function __invoke(){
        return view('login.form');
    }

    public function register(Request $request){
        if(isset($_POST['send'])){
            if(Pet::where('nick',$request->nick)->count()==0){
                Pet::create([
                    'nick'=>request('nick'),
                    'password'=>request('passwd'),
                    'name'=>request('nommascota'),
                    'color'=>request('color'),
                    'raza'=>request('raza'),
                    'sex'=>request('sexo'),
                    'age'=>request('edat'),
                    'owner'=>request('nomhuma'),
                    'telf'=>request('telefon'),
                    'image'=>request('foto')
                ]);  

                //subir la imagen
                if($request->hasFile('foto')){
                    // $imagen = $request->file('image');
                    $promotion = $request->file('foto');

                    // //aquí le asignamos el nombre
                    // $nombreimagen = Str::slug($request->file('image')).".".$imagen->guessExtension();
                    $nombreprom = Str::slug($request->file('foto')).".".$promotion->guessExtension();

                    //y la ruta
                    $ruta = public_path("../resources/img/");
        
                    //$imagen->move($ruta,$nombreimagen);
                    // copy($imagen->getRealPath(),$ruta.$nombreimagen);     
                    copy($promotion->getRealPath(),$ruta.$nombreprom);     
                    
                }

                ?><script>alert('Mascota registrada')</script><?php

                return redirect()->route('login',[
                    'mensaje' => "Mascota registrada"
                ]);  
            }else{
                ?><script>alert('Esta mascota ya está registrada')</script><?php

                return redirect()->route('login',[
                    'mensaje' => "Esta mascota ya esta registrada"
                ]); 
            }
        }
        else{
            return view('register');
        }
    }

    public function login(Request $request){
        if (isset($_POST['send'])){
            if (Pet::where('nick', $request->user )->where('password',$request->passwd)->exists()) {
                $request->session()->put('user', $request->user);
                return redirect('/startPage');
            }

            else{
                ?>
                <script>alert('No tens permisos per entrar a la intranet');</script>
                <?php
                return view('login.form');
            }
        }
    }



    //Esto no deberia estar aqui
    public function start(){
        $pet=Pet::where('nick',session('user'))->first();
        $nick=$pet['nick'];
        $sexo=$pet['sex'];
        $raza=$pet['raza'];
        $query=Pet::where('sex','!=', $sexo)->where('raza',$raza)->where('nick','!=',$nick)->get();
        return view('Principal',[
            'pets' => $query,
        ]);
    }

    public function listar(){
        $user=Pet::all();

        return view('funciones.listar' ,[
            'listado' => $user
        ]);
    }


    public function verfoto(Request $request){
        $pet=Pet::where('nick',$request->id)->first();
        $image=$pet['image'];

        return view('verfoto' ,[
            'img' => $image
        ]);
    }

    //logout
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}
