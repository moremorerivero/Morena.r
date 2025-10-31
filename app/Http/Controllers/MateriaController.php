<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index()
    {
        return view('MAteria.index');
    }

    public function create()
    {
        return view('MAteria.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('materias.index');
    }

    public function show($id)
    {
        return view('MAteria.show');
    }

    public function edit($id)
    {
        return view('MAteria.edit');
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('materias.index');
    }

    public function destroy($id)
    {
        return redirect()->route('materias.index');
    }
}