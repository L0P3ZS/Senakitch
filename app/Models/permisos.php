<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permisos extends Model
{
    use HasFactory;
    public function roles()
    {
        return $this->belongsTo(roles::class, 'idRoles', 'id');
    }
}
