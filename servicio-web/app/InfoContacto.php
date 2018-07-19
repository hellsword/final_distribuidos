<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoContacto extends Model
{
    protected $table = 'info_contacto';

    protected $primarykey = 'id_user';

    public $timestamps = false;

    protected $fillable = [
    	'foto',
    	'celular',
    	'fono_fijo',
    	'email',
        'facebook',
        'direccion'
    ];
}
