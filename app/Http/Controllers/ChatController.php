<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;
use Illuminate\Support\Facades\Auth;
use TheSeer\Tokenizer\Exception;
use Illuminate\Support\Facades\DB;

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
        $idUsuario=Auth()-> user()-> id;
        $contactos = Chat::where('id_remitente','=',$idUsuario)->orwhere('destinatario','=',$idUsuario)
        ->orderBy('id','DESC')->get();
        $contactos -> mostrar = "";
        $data = [];
        foreach($contactos as $contacto){
          
            if($contacto -> destinatario == $idUsuario){
                $data [] =[
                    'destinatario'=>$contacto ->destinatario,
                    'remitente' => $contacto -> id_remitente,
                    'mostrar' => $contacto -> id_remitente
                ];
             
            }else{
                $data [] =[
                    'destinatario'=>$contacto ->destinatario,
                    'remitente' => $contacto -> id_remitente,
                    'mostrar' => $contacto ->destinatario
                ];
            }
        }
        
        
        return view('chats.chat2',compact('data'));
       
        
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
