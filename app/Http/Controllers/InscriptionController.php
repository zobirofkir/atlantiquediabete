<?php

namespace App\Http\Controllers;

use App\Http\Requests\InscriptionRequest;
use App\Models\Inscription;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function index()
    {
        return view('welcome');
    }


    public function store(InscriptionRequest $request)
    {
        Inscription::create($request->validated());
        return redirect()->route('inscription.index')->with('success', 'Inscription effectuée avec succès');
    }
}
