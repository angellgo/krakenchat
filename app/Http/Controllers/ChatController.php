<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;
use Illuminate\Support\Facades\Auth;
use TheSeer\Tokenizer\Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Foundation\Auth\User;
use App\Mensaje;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $idUsuario=Auth()-> user();
        $contactos = Chat::where('id_remitente','=',$idUsuario -> id)->orwhere('destinatario','=',$idUsuario -> username)
        ->orderBy('id','DESC')->get();

        return view('chats.chat2',compact('contactos'));
    }


    public function CargarConversacion($idchat)
    {
        $idUsuario=Auth()-> user();
        $contactos = Chat::where('id_remitente','=',$idUsuario -> id)->orwhere('destinatario','=',$idUsuario -> username)
        ->orderBy('id','DESC')->get();
        //dd($contactos);
        $conversacion = Mensaje::where('chat_id','=',$idchat)->orderBy('id','ASC')->get();
    
        return view('chats.mensajes2',compact('contactos'),compact('conversacion'));
    }

    public function escribir(Request $request)
    {
        dd($request -> mensaje);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $hora = date('G').":". date('i');
        $usuario = Auth() -> user();
        $contacto = User::where("username","=",$request -> contacto)->get()->first();
        
       if(is_object($contacto)){
        if($request -> contacto == $usuario -> username){
            $contacto -> msg = "eselmismo";
            return $contacto;
        }else{
            $comprobar = Chat::where("id_remitente","=",$usuario -> id)->where("destinatario","=",$request->contacto)
            ->get()->first();
            $comprobar2 = Chat::where("id_remitente","=",$contacto -> id)->where("destinatario","=",$usuario -> username)
            ->get()->first();
            if(is_object($comprobar) || is_object($comprobar2)){
                return "object";
            }

            DB::beginTransaction();
           try{
             $nuevochat = new Chat();
             $nuevochat -> id_remitente = $usuario -> id;
             $nuevochat -> destinatario = $request -> contacto;
             $nuevochat -> fecha = date('Y-m-d');
             $nuevochat -> hora = $hora;
             $nuevochat -> save();

           }catch(Exception $e){
               DB::rollback();
                return $e;
           }
           DB::commit();
           $nuevochat -> msg = "success";
           return $nuevochat;

        }
       }else{
           $msg = "noexiste";
           return $msg;
       }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mensaje -> msg = "existe";
        return $mensaje;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
