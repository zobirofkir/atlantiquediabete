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
        $inscription = Inscription::create(
            $request->validated()
        );

        return view('welcome', [
            'inscription' => $inscription
        ]);
    }
}
