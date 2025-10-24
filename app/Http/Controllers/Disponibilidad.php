<?php

namespace App\Http\Controllers;

use App\Models\Disponibilidad;
use App\Models\Aula;
use Illuminate\Http\Request;

class DisponibilidadController extends Controller
{
    public function index(Request $request)
    {
        $query = Disponibilidad::with('aula');
        
        // Filtros
        if ($request->has('aula_id') && $request->aula_id != '') {
            $query->where('aula_id', $request->aula_id);
        }
        
        if ($request->has('estado') && $request->estado != '') {
            $query->where('estado', $request->estado);
        }
        
        if ($request->has('fecha') && $request->fecha != '') {
            $query->where('fecha', $request->fecha);
        }
        
        $disponibilidades = $query->latest()->paginate(10);
        $aulas = Aula::all();
        
        return view('disponibilidades.index', compact('disponibilidades', 'aulas'));
    }

    public function create()
    {
        $aulas = Aula::where('estado', 'activa')->get();
        return view('disponibilidades.create', compact('aulas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'aula_id' => 'required|exists:aulas,id',
            'fecha' => 'required|date|after_or_equal:today',
            'hora' => 'required',
            'estado' => 'required|in:disponible,ocupada,mantenimiento',
            'identificacion' => 'nullable|string|max:255'
        ]);

        // Verificar si ya existe una disponibilidad para el mismo aula, fecha y hora
        $existente = Disponibilidad::where('aula_id', $request->aula_id)
            ->where('fecha', $request->fecha)
            ->where('hora', $request->hora)
            ->exists();

        if ($existente) {
            return back()->withErrors([
                'hora' => 'Ya existe una disponibilidad para esta aula en la misma fecha y hora.'
            ])->withInput();
        }

        Disponibilidad::create($request->all());

        return redirect()->route('disponibilidades.index')
            ->with('success', 'Disponibilidad creada correctamente.');
    }

    public function show(Disponibilidad $disponibilidad)
    {
        $disponibilidad->load('aula');
        return view('disponibilidades.show', compact('disponibilidad'));
    }

    public function edit(Disponibilidad $disponibilidad)
    {
        $aulas = Aula::where('estado', 'activa')->get();
        return view('disponibilidades.edit', compact('disponibilidad', 'aulas'));
    }

    public function update(Request $request, Disponibilidad $disponibilidad)
    {
        $request->validate([
            'fecha' => 'required|date|after_or_equal:today',
            'hora' => 'required',
            'estado' => 'required|in:disponible,ocupada,mantenimiento',
            'identificacion' => 'nullable|string|max:255'
        ]);

        // Verificar conflicto (excluyendo el registro actual)
        $existente = Disponibilidad::where('aula_id', $disponibilidad->aula_id)
            ->where('fecha', $request->fecha)
            ->where('hora', $request->hora)
            ->where('id', '!=', $disponibilidad->id)
            ->exists();

        if ($existente) {
            return back()->withErrors([
                'hora' => 'Ya existe otra disponibilidad para esta aula en la misma fecha y hora.'
            ])->withInput();
        }

        $disponibilidad->update($request->all());

        return redirect()->route('disponibilidades.index')
            ->with('success', 'Disponibilidad actualizada correctamente.');
    }

    public function destroy(Disponibilidad $disponibilidad)
    {
        $disponibilidad->delete();

        return redirect()->route('disponibilidades.index')
            ->with('success', 'Disponibilidad eliminada correctamente.');
    }
}