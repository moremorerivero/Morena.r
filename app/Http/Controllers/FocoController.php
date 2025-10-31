<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FocoController extends Controller
{
    public function index()
    {
        return view('foco.index');
    }

    public function create()
    {
        return view('foco.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('focos.index');
    }

    public function show($id)
    {
        return view('foco.show');
    }

    public function edit($id)
    {
        return view('foco.edit');
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('focos.index');
    }

    public function destroy($id)
    {
        return redirect()->route('focos.index');
    }
}