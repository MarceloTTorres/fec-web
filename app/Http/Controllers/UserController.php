<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\Rule;
use Carbon\Carbon;

const MSG_ERRO_NOME = 'Nome é obrigatório.'; 
const MSG_ERRO_EMAIL = 'E-mail inválido.';

class UserController extends Controller
{
    public function AlterUser(Request $request){
        $user = User::find($request->id);  
        $user->fill($request->all());

        $rules = array(
          'name' => 'required',
          'email' => 'required|regex:/^[\w.]+@[(uniara)]+\.[(edu)]+\.([(br)]+)?$/i'
        );

        
        $validator = Validator::make($request->all(), $rules); 

        if ($validator->fails()) {
          return Redirect::back()->withErrors($validator);
        }else{
          $user->save();;
        }
        
      

        //verifica se tem foto

        //se tiver, apaga a foto atual do disco -- da update no nome da nova foto

        //se nao tiver foto, nao faz nada

        //$nome = Carbon::now()->format('Y_m_d_h_i_s') . 
          //   '.' .$request->file('imagem' . $campos->id)->getClientOriginalExtensions();

        //$campos->imagem->move(public_path('C:\Images'), $nome);
         
         

        //return response()->json($request);
    }

    public function ListarUsuario()
    {
        $usuarios = User::all()->sortBy('name');
        return view('listarUsuario')->withUsers($usuarios);
    }
}
