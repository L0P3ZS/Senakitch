<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function aprendiz()
    {
        return $this->belongsTo(aprendiz::class, 'idAprendiz', 'id');
    }

    public function users()
    {
        return $this->belongsTo(users::class, 'idUser', 'id');
    }

    public function administrador()
    {
        return $this->belongsTo(administrador::class, 'idAdministrador', 'id');
    }

}

