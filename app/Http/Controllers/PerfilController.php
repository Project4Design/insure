<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class PerfilController extends Controller
{
    public function perfil()
    {
    	$perfil = User::findOrFail(Auth::user()->id);

    	return view('perfil.perfil', ['perfil' => $perfil]);
    }

    public function update(Request $request)
    {

    	
    	$perfil = new User;
    	$perfil->name = $request->input('name');
    	$perfil->name = $request->input('email');
    	if ($request->input('checkbox') == "Yes")
    	{
    		$request->password = bcrypt($request->input('password_new'));
    	}
    	$perfil->update();

    	return "modificado";
    	
    	


    }
}