@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
             <form action="{{ route('AlterUser', ['id'=> Crypt::encrypt($user->id) ])}}" method="post">
             @csrf
             @method('PUT')
                  <div class="form-group">
                    <div class="col-md-12">
                        <label>Nome</label>
                        <input class="form-control" name="name" value="{{$user->name}}"/>
                    </div>
                    <div class="col-md-12">
                        <label>Email</label>
                        <input  class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{$user->email}}" readonly/>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label>Level</label>
                        <input class="form-control" name="level" value="{{$user->level}}"/>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <input class="btn btn-primary" type="submit" value="Salvar"/>
                        <a class="btn btn-danger" href="{{ route('listarUsuarios')}}">Cancelar</a>
                    </div>
                </div>
             </form>
            </div>
        </div>
    </div>

@endsection
