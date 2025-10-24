<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    public function index() {
        $aulas = Aula::all();
        return view('modules.aulas', compact('aulas'));
    }

    public function show($id) {
        $aula = Aula::findOrFail($id);
        return view('modules.aula-show', compact('aula'));
    }

    public function create() {
        return view('modules.aula-create');
    }

    public function store(Request $request) {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'capacidad' => 'required|integer',
            'ubicacion' => 'required|string|max:255',
            'equipamiento' => 'nullable|string'
        ]);

        Aula::create($request->all());
        return redirect()->route('aulas.index')->with('success', 'Aula creada exitosamente');
    }

    public function edit($id) {
        $aula = Aula::findOrFail($id);
        return view('modules.aula-edit', compact('aula'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'capacidad' => 'required|integer',
            'ubicacion' => 'required|string|max:255',
            'equipamiento' => 'nullable|string'
        ]);

        $aula = Aula::findOrFail($id);
        $aula->update($request->all());
        return redirect()->route('aulas.index')->with('success', 'Aula actualizada exitosamente');
    }

    public function destroy($id) {
        $aula = Aula::findOrFail($id);
        $aula->delete();
        return redirect()->route('aulas.index')->with('success', 'Aula eliminada exitosamente');
    }
}