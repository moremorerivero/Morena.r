<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AireAcondicionadoController extends Controller
{
    public function index()
    {
        return view('HistorialUsoAire.index');
    }

    public function create()
    {
        return view('HistorialUsoAire.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('aire.index');
    }

    public function show($id)
    {
        return view('HistorialUsoAire.show');
    }

    public function edit($id)
    {
        return view('HistorialUsoAire.edit');
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('aire.index');
    }

    public function destroy($id)
    {
        return redirect()->route('aire.index');
    }
}