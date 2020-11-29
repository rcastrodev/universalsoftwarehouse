<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casos extends Model
{
    protected $connection = 'sqlsrv';
    protected $table = 'CasoUniversalWeb';
}
