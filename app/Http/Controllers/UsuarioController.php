<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        return Usuario::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'usuario' => 'required|string|unique:usuarios',
            'contraseña' => 'required|string|min:4',
        ]);

        $usuario = Usuario::create($request->only('usuario', 'contraseña'));

        return response()->json($usuario, 201);
    }

    public function show(Usuario $usuario)
    {
        return $usuario;
    }

    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'usuario' => 'sometimes|string|unique:usuarios,usuario,'.$usuario->id,
            'contraseña' => 'sometimes|string|min:4',
        ]);

        $usuario->update($request->only('usuario', 'contraseña'));

        return response()->json($usuario);
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return response()->json(null, 204);
    }

    public function login(Request $request)
    {
        $request->validate([
            'usuario' => 'required|string',
            'contraseña' => 'required|string',
        ]);

        $usuario = \App\Models\Usuario::where('usuario', $request->usuario)
            ->where('contraseña', $request->contraseña)
            ->first();

        if (!$usuario) {
            return response()->json(['message' => 'Credenciales incorrectas'], 401);
        }

        // Aquí podrías generar un token si usas algún sistema de tokens
        return response()->json(['message' => 'Login exitoso', 'usuario' => $usuario]);
    }
}
