@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
             <form action="{{ route('AlterUser', ['id'=> Crypt::encrypt($user->id) ])}}" method="post">
             @csrf
             @method('PUT')
                  <div class="form-group col-md-4">
                    <label>Nome</label>
                    <input class="form-control" value="{{$user->name}}"/>

                    <label>Email</label>
                    <input class="form-control" value="{{$user->email}}"/>

                    <label>Level</label>
                    <input class="form-control" value="{{$user->level}}"/>
                    <br>
                    <input class="btn btn-primary" type="submit" value="Salvar"/>
                    <a class="btn btn-danger" href="{{ route('listarUsuarios')}}">Cancelar</a>
                </div>
             </form>
            </div>
        </div>
    </div>

@endsection
