<?php

namespace App\Http\Controllers;

use App\User;


/**
 *
 */
class verPerfilUsuario extends Controller
{

  public function index($id)
  {
    $usuario = Usuario::find(id);
    return view('verPerfilUsuario', compact('Usuario'));
  }
}
