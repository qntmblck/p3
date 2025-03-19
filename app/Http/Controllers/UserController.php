<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Método para listar los usuarios
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    // Método para mostrar el formulario de creación de usuario
    public function create()
    {
        return view('users.create');
    }

    // Método para almacenar un nuevo usuario en la base de datos
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Asignar roles al usuario
        $roles = $request->input('roles', []);
        $user->assignRole($roles);

        return redirect()->route('users.index')->with('success', 'Usuario creado y roles asignados.');
    }

    // Método para editar un usuario y sus roles
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    // Método para actualizar un usuario y sus roles
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'] ? bcrypt($validatedData['password']) : $user->password,
        ]);

        // Sincronizar roles
        $roles = $request->input('roles', []);
        $user->syncRoles($roles);

        return redirect()->route('users.index')->with('success', 'Usuario actualizado y roles asignados.');
    }

    // Método para eliminar un usuario
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Usuario eliminado.');
    }
}

