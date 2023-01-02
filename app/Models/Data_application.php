<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use App\Models\Status_lookup;

class Data_application extends Model
{
    use HasFactory;

    public function status()
    {
        return $this->hasOne(Status_lookup::class,'status','application_status');
    }
}
