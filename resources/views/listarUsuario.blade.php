@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div  style="background-color:#f1f1f1">
                    <div class="row p-2">
                            <div class="col-sm-4">
                                <b>NOME</b>
                            </div>
                            <div class="col-sm-4">
                                <b>EMAIL</b>
                            </div>
                            <div class="col-sm-4">
                                <b>LEVEL</b>
                            </div>
                        </div>
                    </div>
                    @foreach($users as $usuario)
                        <div class="row p-2">
                            <div class="col-sm-4">
                            {{$usuario->name}}   
                            </div>
                            <div class="col-sm-4">
                            {{$usuario->email}}
                            </div>
                            <div class="col-sm-4">
                            @if($usuario->level == 0)
                                Administrador
                            @elseif($usuario->level == 10)
                                Proprietário
                            @elseif($usuario->level == 20)
                                Aluno
                            @elseif($usuario->level == 99)
                                Usuario Externo
                            @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            
        </div>
    </div>

@endsection
