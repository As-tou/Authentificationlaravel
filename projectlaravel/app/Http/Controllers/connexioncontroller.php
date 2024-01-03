<?php

namespace App\Http\Controllers;

use App\Http\Requests\createUserRequest;
use App\Http\Requests\Loginrequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Return_;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class connexioncontroller extends Controller
{

    public function accueil(){
        return view('accueil');
    }

    public function login(){
        return view('login');
    }

    public function showLoginForm(Request $request): RedirectResponse{
                //Authentification d'un utilisateur


                $credentials = $request->validate([

                    'email' => ['required', 'email'],

                    'password' => ['required'],
                ]);
                if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();

                    return redirect()->intended('/');

                }

                return back()->withErrors(['email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.',])->onlyInput('email');
    }

    public function register(){
        return view('register');
    }


    public function showRegistrationForm(User $user ,Request $request)

    {

       $user->prenom = $request->prenom;
       $user->nom = $request->nom;
       $user->telephone = $request->telephone;
       $user->email = $request->email;
       $user->password =Hash::make( $request->password);
       //dd($user);
       $user->save();

       return redirect()->route('connexion')->with('success','Vous etes bien inscrit. connecter vous');

    }
    public function Logout() {
        auth()->logout();
        return redirect('/');
    }
}
