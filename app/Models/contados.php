<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contados extends Model
{
    use HasFactory;
    public function contados()
    {
        return $this->belongsTo(contados::class, 'idContados', 'id');
    }

}
