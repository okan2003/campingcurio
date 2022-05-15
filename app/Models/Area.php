<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Areatype;

class Area extends Model
{
    use HasFactory;
    protected $table = 'plaatsen';

    public function areatype(){
        return $this->belongsTo(Areatype::class);
    }
}
