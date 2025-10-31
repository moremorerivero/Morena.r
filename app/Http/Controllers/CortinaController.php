<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CortinaController extends Controller
{
    public function index()
    {
        return view('Cortina.index');
    }

    public function create()
    {
        return view('Cortina.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('cortinas.index');
    }

    public function show($id)
    {
        return view('Cortina.show');
    }

    public function edit($id)
    {
        return view('Cortina.edit');
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('cortinas.index');
    }

    public function destroy($id)
    {
        return redirect()->route('cortinas.index');
    }
}