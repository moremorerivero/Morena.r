<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function index()
    {
        return view('reserva.index'); // Temporal - usa reserva
    }

    public function create()
    {
        return view('reserva.create'); // Temporal - usa reserva
    }

    public function store(Request $request)
    {
        return redirect()->route('tareas.index');
    }

    public function show($id)
    {
        return view('reserva.show'); // Temporal - usa reserva
    }

    public function edit($id)
    {
        return view('reserva.edit'); // Temporal - usa reserva
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('tareas.index');
    }

    public function destroy($id)
    {
        return redirect()->route('tareas.index');
    }
}