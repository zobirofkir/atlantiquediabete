<?php

namespace App\Http\Controllers;

use App\Http\Requests\AttestationRequest;
use App\Http\Resources\AttestationResource;
use App\Models\Attestation;
use Illuminate\Http\Request;

class AttestationController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(AttestationRequest $request)
    {
        Attestation::create(
            $request->validated()
        );
        return redirect()->route('attestation.index')->with('success', 'Attestation effectuée avec succès');
    }
}
