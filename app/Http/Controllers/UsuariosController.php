<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class UsuariosController extends Controller
{
    // Funcion para mostrar todos los datos en un formulario
    public function index()
    {
        // Hacemos la consulta a la base de datos para que traiga todos los usuarios
        $usuarios = Usuarios::all();
        // Llamamos a la vista y le pasamos los datos que consultamos por medio de la variable
        return view ('IndexUsuarios', compact('usuarios'));
    }

    // Funcion para mostrar el formulario para registrar usuarios
    public function create()
    {
        // Retornamos la vista para crear usuarios
        return view ('CreateUsuarios');
    }

    // Funcion para guardar usuarios en la base de datos
    public function store(Request $request)
    {
        // Validacion de los datos que llegan desde el formulario
        $validacion = $request -> validate ([
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'correo' => 'required|email|unique:usuarios,correo',
            'telefono' => 'required|unique:usuarios,telefono',
            'CURP' => 'required|string|uppercase|unique:usuarios,CURP',
            'username' => 'required|string|unique:usuarios,username'
        ]);
        // Usamos el modelo que creamos para guardar los usuarios
        Usuarios::create($validacion);

        // Y nos redirigimos al index de los usuarios
        return redirect() -> route('usuarios.index') -> with('success', 'Usuario registrado correctamente');
    }

    public function show(string $id)
    {

    }

    // Funcion para mostrar los datos del usuario en el formulario para editar
    public function edit(string $id)
    {
        // Consultamos un registro unico por medio del id
        $usuario = Usuarios::findOrFail($id);

        // Igual le pasamos los datos por medio de la variable al formulario
        return view ('EditUsuarios', compact('usuario'));
    }

    // Funcion para modificar el registro de un usuario
    public function update(Request $request, string $id)
    {
        // Lo mismo hacemos una consulta de un solo dato en especifico
        $usuario = Usuarios::findOrFail($id);

        // Validamos todos los datos que vienen de el formulario
        $validacion = $request->validate([
            'nombre'    => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'correo'    => 'required|email|unique:usuarios,correo,' . $id,
            'telefono'  => 'required|unique:usuarios,telefono,' . $id,
            'CURP'      => 'required|string|uppercase|unique:usuarios,CURP,' . $id,
            'username'  => 'required|string|unique:usuarios,username,' . $id,
        ]);

        // Y actualizamos los datos
        $usuario -> update($validacion);

        // Y nos redirigmos al index
        return redirect() -> route('usuarios.index');
    }

    // Funcion para borrar un registro
    public function destroy(string $id)
    {
        // Igual hacemos la consulta de un solo registro
        $usuario = Usuarios::findOrFail($id);

        // Y lo borramos
        $usuario -> delete();

        // Nos redirigimos al index
        return redirect() -> route('usuarios.index');
    }
}
