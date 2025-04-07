<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
                'id'         => $this->id,
                'name'       => $this->name,
                'email'      => $this->email,
                'password'   => $this->password,
                'remember_token' => $this->remember_token,//no se muestra en android
                'email_verified_at' => $this->email_verified_at?->toISOString(),//no se muestra en android
                'created_at' => $this->created_at?->toISOString(),
                'updated_at' => $this->updated_at?->toISOString(),
        ];
    }

}
