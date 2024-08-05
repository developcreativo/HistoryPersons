<?php

namespace Developcreativo\HistoryPersons\Traits;

use Developcreativo\HistoryPersons\Models\PersonsUpdates;
use Illuminate\Database\Eloquent\Model;

trait RelationsPersons
{
    public function person_updates()
    {
        return $this->hasMany(PersonsUpdates::class, 'id_usuario');
    }
}