<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    public function pagos()
    {
        return $this->belongsTo(pagos::class, 'idPagos', 'id');
    }
}
