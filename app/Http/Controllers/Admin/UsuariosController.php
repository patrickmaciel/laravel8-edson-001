<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('admin.usuarios.index', compact(
            'usuarios'
        ));
    }
}
