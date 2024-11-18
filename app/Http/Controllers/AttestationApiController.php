<?php

namespace App\Http\Controllers;

use App\Http\Resources\AttestationResource;
use App\Models\Attestation;
use Illuminate\Http\Request;

class AttestationApiController extends Controller
{
    public function index()
    {
        return AttestationResource::collection(
            Attestation::Orderby('created_at', 'desc')->get()
        );
    }
}
