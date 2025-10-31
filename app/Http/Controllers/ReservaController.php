<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function index()
    {
        return view('reserva.index');
    }

    public function create()
    {
        return view('reserva.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('reservas.index');
    }

    public function show($id)
    {
        return view('reserva.show');
    }

    public function edit($id)
    {
        return view('reserva.edit');
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('reservas.index');
    }

    public function destroy($id)
    {
        return redirect()->route('reservas.index');
    }
}