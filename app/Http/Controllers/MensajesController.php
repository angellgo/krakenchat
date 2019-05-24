<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use TheSeer\Tokenizer\Exception;
use App\Mensaje;
use Illuminate\Support\Facades\Auth;
use phpseclib\Crypt\RSA;

class MensajesController extends Controller
{

    // public function __construct()
    // {
    //     $rsa = new RSA();
    //     $keys = $rsa -> createKey(256);
    //     file_put_contents('private.key',$keys['privatekey']);
    //     file_put_contents('public.key',$keys['publickey']);

    // }

    public function escribir(Request $request)
    {
        $user = Auth() -> user();
       
        $rsa = new RSA();
        $publickey = file_get_contents('public.key');
    
        $rsa -> loadKey($publickey);
        $rsa -> setEncryptionMode(CRYPT_RSA_MODE);
        $ciphertext = base64_encode($rsa -> encrypt($request -> mensaje));

        // dd($ciphertext);
        DB::beginTransaction();
        try{
            $mensaje = new Mensaje();
            $mensaje -> texto = $ciphertext;
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

    public function decifrar(Request $request)
    {
        $rsa = new RSA();
        $mensaje = Mensaje::find($request -> id);
        $texto =  base64_decode($mensaje -> texto);
    
        $privatekey = file_get_contents('private.key');
        // dd($privatekey);
        $rsa -> loadKey($privatekey);
        $rsa -> setEncryptionMode(CRYPT_RSA_MODE);
        // dd($rsa);
        $decifrar = $rsa -> decrypt($texto);

        // dd($decifrar);
        return $decifrar;

    }
    
}
