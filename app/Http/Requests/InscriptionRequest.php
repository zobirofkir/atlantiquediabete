<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InscriptionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "first_name" => "required|string",
            "last_name" => "required|string",
            "city" => "required|string",
            "speciality" => "required|string|in:Endocrinologue,Médecin généraliste,Cardiologue,Néphrologue,Ophtalmologue,Neurologue,Urologue,autre",
            "phone" => "required|string",
            "email" => "required|email",
            "in_person" => "required|string|in:oui,non", 
            "certificate" => "required|string|in:oui,non",
        ];
    }
}
