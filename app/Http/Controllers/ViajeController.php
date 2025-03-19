<?php

namespace App\Http\Controllers;

use App\Models\Viaje;
use Illuminate\Http\Request;

class ViajeController extends Controller
{
    // Método para listar los viajes
    public function index()
    {
        $viajes = Viaje::all();
        return view('viajes.index', compact('viajes'));
    }

    // Método para mostrar el formulario de creación de un viaje
    public function create()
    {
        if (auth()->user()->can('crear viajes')) {
            return view('viajes.create');
        } else {
            abort(403, 'No tienes permiso para realizar esta acción.');
        }
    }

    // Método para almacenar un nuevo viaje en la base de datos
    public function store(Request $request)
    {
        if (auth()->user()->can('crear viajes')) {
            $validatedData = $request->validate([
                'destino' => 'required|string|max:255',
                'fecha_salida' => 'required|date',
                'conductor_id' => 'required|exists:users,id',
            ]);

            Viaje::create($validatedData);

            return redirect()->route('viajes.index')->with('success', 'Viaje creado con éxito.');
        } else {
            abort(403, 'No tienes permiso para realizar esta acción.');
        }
    }

    // Método para iniciar un viaje
    public function iniciar(Viaje $viaje)
    {
        if (auth()->user()->can('iniciar viajes')) {
            $viaje->estado = 'iniciado';
            $viaje->save();

            return redirect()->route('viajes.index')->with('success', 'Viaje iniciado.');
        } else {
            abort(403, 'No tienes permiso para realizar esta acción.');
        }
    }

    // Método para entregar un viaje
    public function entregar(Viaje $viaje)
    {
        if (auth()->user()->can('entregar viajes')) {
            $viaje->estado = 'entregado';
            $viaje->save();

            return redirect()->route('viajes.index')->with('success', 'Viaje entregado.');
        } else {
            abort(403, 'No tienes permiso para realizar esta acción.');
        }
    }

    // Método para rendir un viaje
    public function rendir(Viaje $viaje)
    {
        if (auth()->user()->can('rendir viajes')) {
            $viaje->estado = 'rendido';
            $viaje->save();

            return redirect()->route('viajes.index')->with('success', 'Viaje rendido.');
        } else {
            abort(403, 'No tienes permiso para realizar esta acción.');
        }
    }

    // Método para cerrar un viaje
    public function cerrar(Viaje $viaje)
    {
        if (auth()->user()->can('cerrar viajes')) {
            $viaje->estado = 'cerrado';
            $viaje->save();

            return redirect()->route('viajes.index')->with('success', 'Viaje cerrado.');
        } else {
            abort(403, 'No tienes permiso para realizar esta acción.');
        }
    }
}
