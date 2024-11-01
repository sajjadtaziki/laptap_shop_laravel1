<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $this->pitcherUrl !=null ? $pitcherUrl = env ('App_URL').'/'.$this->pitcherUrl :$pitcherUrl=null;
        return

        [
            'id'=> $this->id,
            'name'=>$this->name,
            'family'=>$this->family,
            'email'=>$this->email,
            'pitcherUrl'=>$this->pitcherUrl
        ];
    }
}
