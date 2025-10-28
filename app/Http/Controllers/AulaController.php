<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;

class AulaController extends Controller
{
    public function index()
    {
        $aulas = Aula::all();
        return view('aulas.index', compact('aulas'));
    }

    public function show($id)
    {
        $aula = Aula::findOrFail($id);
        return view('aulas.show', compact('aula'));
    }
}