<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Genero;
use App\User;
use TheSeer\Tokenizer\Exception;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genero = Genero::all();
        
        
        return view('users.index',compact('genero'));     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        BD::beginTransaction();
        try{
            $usuario = new User();

        }catch(Exception $e){
            DB::rollback();
            return $e;
        }
        DB::commit();
        return $usuario;
    }


   
    public function show(Request $request)
    {
        
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $usuario = User::find($request -> id);

        if(is_object($usuario)){
            $usuario -> msg = "success";
            return $usuario;
        }else{
            $usuario -> msg = "error";
            return $usuario;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::beginTransaction();
        try{

        }catch(Exception $e){
            DB::rollback();
            return $e;
        }
        DB::commit();
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
