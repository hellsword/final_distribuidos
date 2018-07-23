<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\InfoContacto;
use App\InfoEgreso;
use App\InfoPersonal;
use Input;



use Illuminate\Contracts\Auth\Guard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Support\Facades\Redirect;
use DB;
use Image; 
use PDF;
class PdfController extends Controller
{
    public function generarpdf(Request $request)
    {
        
        
        $inicial =$request->get('rango_in');
        $fin =$request->get('rango_fn');
        
        $usuarios =DB::table('users')
        ->join ('info_personal', 'users.id', '=' , 'info_personal.id')
        ->join('info_egreso','users.id','=','info_egreso.id')
        ->whereDate('info_egreso.fecha_examen','>=',$inicial)
        ->whereDate('info_egreso.fecha_examen','<=',$fin)
        ->select('users.id as id',
        'info_personal.rut as rut',
        'info_personal.nombres as nombres',
        'info_personal.apellidos as apellidos',
        'info_egreso.titulo as titulo',
        'info_egreso.año_egreso as año_egreso',
        'info_egreso.fecha_examen as fecha_examen')
        ->get();
        //return $usuarios;
        $pdf =PDF::loadView('vistapdf',['usuarios'=>$usuarios]);
        return $pdf->download('archivo.pdf');
        
    }
}
