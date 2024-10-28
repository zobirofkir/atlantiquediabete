<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InscriptionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "first_name" => $this->first_name,
            "last_name" => $this->last_name,
            "city" => $this->city,
            "speciality" => $this->speciality,
            "phone" => $this->phone,
            "email" => $this->email,
            "in_person" => $this->in_person,
            "certificate" => $this->certificate
        ];
    }
}
