<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoPersonal extends Model
{
    protected $table = 'info_personal';

    protected $primarykey = 'id_user';

    public $timestamps = false;

    protected $fillable = [
    	'nombres',
    	'apellidos',
    	'fecha_nacimiento'
    ];
}
