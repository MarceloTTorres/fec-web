@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-12 col-md-18 col-lg-18">
        <div class="col-md-18">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Você está logado!
                </div>
            </div>
        </div>
    </div>
    
@endsection
