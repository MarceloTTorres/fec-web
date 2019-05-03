<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;

class UserController extends Controller
{
    public function AlterUser(Request $request){
        $user = User::find($request->id);  
        $user->fill($request->all());

        $rules['email'] = ['email|required', 'regex:/^[\w.]+@[(uniara)]+\.[(edu)]+\.([(br)]+)?$/i'];

        $request->validate([
          'name' => 'required'
      ]);

        //'^[a-z0-9.]+@[(uniara)]+\.[(edu)]+\.([(br)]+)?$/i'
        
      

        //verifica se tem foto

        //se tiver, apaga a foto atual do disco -- da update no nome da nova foto

        //se nao tiver foto, nao faz nada

        //$nome = Carbon::now()->format('Y_m_d_h_i_s') . 
          //   '.' .$request->file('imagem' . $campos->id)->getClientOriginalExtensions();

        //$campos->imagem->move(public_path('C:\Images'), $nome);
         
         $user->save();

        return response()->json($request);
    }
}
