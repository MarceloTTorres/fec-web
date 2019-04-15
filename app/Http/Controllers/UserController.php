<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;

class UserController extends Controller
{
    public function AlterUser(Request $request){
        $campos = $request->all();
        $user = User::find($campos->id);
        $user->fill($campos);

        // $nome = Carbon::now()->format('Y_m_d_h_i_s') . 
        //     '.' .$campos->file('imagem')->getClientOriginalExtensions();

        // $campos->imagem->move(public_path('images\\' . $campos->id), $nome);
         
        $user->save();
    }
}
