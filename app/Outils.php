<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outils extends Model
{
    protected $table = 'outils';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}
