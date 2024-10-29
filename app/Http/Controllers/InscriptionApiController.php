<?php

namespace App\Http\Controllers;

use App\Http\Resources\InscriptionResource;
use App\Models\Inscription;
use Illuminate\Http\Request;

class InscriptionApiController extends Controller
{
    public function index()
    {
        return InscriptionResource::collection(
            Inscription::Orderby('created_at', 'desc')->get()
        );
    }
}
