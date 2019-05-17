@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
        <h3>Já tenho cadastro</h3>
<form action="/Account/Login" data-ajax="true" data-ajax-begin="onFormSubmitAsync('Realizando Login, aguarde...')" data-ajax-complete="loginCandidatoCompleted" data-ajax-method="Post" id="form0" method="post" novalidate="novalidate">            <div class="form-group">
                <label for="Email">E-mail</label>
                <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <input class="form-control" data-val="true" data-val-length="O campo Email deve ter no máximo 150 caracteres" data-val-length-max="150" data-val-regex="Preencha o campo e-mail no seguinte formato: email@dominio.com.br" data-val-regex-pattern="^[a-zA-Z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$" data-val-required="O campo Email é obrigatório." id="Email" name="Email" placeholder="Email" type="text" value="">
                </div>
                <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
            </div>
            <div class="form-group">
                <label for="Senha">Senha</label>
                <input class="form-control" data-val="true" data-val-length="O campo Senha deve ter no máximo 50 caracteres" data-val-length-max="50" data-val-required="O campo Senha é obrigatório." id="Senha" name="Senha" placeholder="Senha" type="password">
                <span class="field-validation-valid" data-valmsg-for="Senha" data-valmsg-replace="true"></span>
            </div>
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <button type="submit" class="btn btn-primary">Acessar</button>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                    <nav>
                        <ul id="ul-login-menuAdicional" class="text-right list-unstyled">
                            <li><a href="/Account/RecuperarSenha">Esqueci minha senha</a></li>
                            <li><a href="/Account/RedefinirEmail">Cadastrei meu email errado</a></li>
                            <li><a href="/Account/LoginCPF">Acessar com CPF</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
</form>    </div>
</div>
@endsection
