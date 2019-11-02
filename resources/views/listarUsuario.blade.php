@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div style="background-color:#f1f1f1">
                    <div class="row p-2">
                            <div class="col-sm-3">
                                <b>NOME</b>
                            </div>
                            <div class="col-sm-3">
                                <b>EMAIL</b>
                            </div>
                            <div class="col-sm-3">
                                <b>LEVEL</b>
                            </div>
                            <div class="col-sm-3">
                                <b>AÇÕES</b>
                            </div>
                        </div>
                    </div>
                    @foreach($users as $usuario)
                        <div class="row p-2">
                            <div class="col-sm-3">
                            {{$usuario->name}}   
                            </div>
                            <div class="col-sm-3">
                            {{$usuario->email}}
                            </div>
                            <div class="col-sm-3">
                            @if($usuario->type == 5)
                                Administrador
                            @elseif($usuario->type == 10)
                                Proprietário
                            @elseif($usuario->type == 20)
                                Aluno
                            @elseif($usuario->type == 99)
                                Usuario Externo
                            @endif
                            </div>
                            <div>
                                <a id="idEditarUsuario" style="padding-right:10px" href="{{ route('editarUsuario', ['id' => $usuario->id ]) }}">
                                    <i class="fa fa-pencil fa-2x"></i>
                                </a>
                                <a id="idConsultarUsuario" style="padding-right:10px" href="{{ route('consultarUsuario', ['id' => $usuario->id ]) }}">
                                    <i class="fa fa-eye fa-2x"></i>
                                </a>
                             </div>
                        </div>
                        
                    @endforeach
                </div>
            
        </div>
    </div>

@endsection
