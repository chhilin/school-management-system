<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TeacherResources extends JsonResource
{
 

     /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */


     public function toArray($request)
    {
        return [
            'id' => $this->id,
            'teacher_id' => $this->teacher_id,
            'khmer_name' => $this->khmer_name,
            'english_name' => $this->english_name,
            'gender' => $this->gender,
            'date_of_birth' => $this->date_of_birth,
            'address' => $this->address,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'major' => $this->major,
            'employment_status' => $this->employment_status,
            'hire_date' => $this->hire_date,
              'created_at' => $this->created_at->format('Y-m-d'),
            'updated_at' => $this->updated_at->format('Y-m-d'),
   
            
        ];
    }
}




