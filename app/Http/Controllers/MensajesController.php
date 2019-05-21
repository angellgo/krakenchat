<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use TheSeer\Tokenizer\Exception;
use App\Mensaje;
use Illuminate\Support\Facades\Auth;

class MensajesController extends Controller
{
    public function escribir(Request $request)
    {
        $user = Auth() -> user();
        DB::beginTransaction();
        try{
            $mensaje = new Mensaje();
            $mensaje -> texto = $request -> mensaje;
            $mensaje -> fecha = date('Y-m-d');
            $mensaje -> hora =  date('G').":". date('i');
            $mensaje -> chat_id = $request -> idchat        ;
            $mensaje -> chat_remitente = $user -> id;
            $mensaje -> save();

        }catch(Exception $e){
            DB::rollback();
            return $e;
        }
        DB::commit();
        $mensaje -> msg = "msjsend";
        return $mensaje;

    }
}
