<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        return view('alumnos.index');
    }

    public function create()
    {
        return view('alumnos.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('alumnos.index');
    }

    public function show($id)
    {
        return view('alumnos.show');
    }

    public function edit($id)
    {
        return view('alumnos.edit');
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('alumnos.index');
    }

    public function destroy($id)
    {
        return redirect()->route('alumnos.index');
    }
}