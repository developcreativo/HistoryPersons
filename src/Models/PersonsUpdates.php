<?php

namespace Developcreativo\HistoryPersons\Models;

use App\Cliente;
use App\Puesto;
use App\Ubicacion;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PersonsUpdates extends Model
{
    protected $fillable = [
        'id_usuario',
        'user_id',
        'initial_date',
        'final_date',
        'id_cliente',
        'id_ubicacion',
        'id_puesto',
    ];

    protected $casts = [
        'initial_date' => 'datetime',
        'final_date' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id');
    }

    public function ubicacion()
    {
        return $this->belongsTo(Ubicacion::class, 'id_ubicacion', 'id');
    }

    public function puesto()
    {
        return $this->belongsTo(Puesto::class, 'id_puesto', 'id');
    }
}
