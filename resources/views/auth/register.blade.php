@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('register') }}">
                        <div class="row">
                            @csrf
                            <div class="col-sm-12 col-md-6 col-lg-7" style="border-right: solid 1px #ccc;">
                                <div class="form-group row">
                                    <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Name') }}</label>

                                    <div class="col-md-8">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                    <div class="col-md-8">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="ra" class="col-md-3 col-form-label text-md-right">{{ __('RA') }}</label>

                                    <div class="col-md-8">
                                        <input id="ra" type="text" maxlength="8" class="form-control{{ $errors->has('ra') ? ' is-invalid' : '' }}" name="ra" value="{{ old('ra') }}" required>

                                        @if ($errors->has('ra'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ra') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="course" class="col-md-3 col-form-label text-md-right">{{ __('Course') }}</label>

                                    <div class="col-md-8">

                                        <select id="course_id" class="form-control{{ $errors->has('course_id') ? ' is-invalid' : '' }}" name="course_id" required>
                                            <option value="0">-- Select an course --</option>
                                            @foreach(\App\Course::all() as $course)
                                            <option value="{{$course->id}}">{{$course->name}}</option>
                                            @endforeach
                                        </select>

                                        @if ($errors->has('ra'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('course_id') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-8">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-8">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col md-10">
                                <div class="col-md-10 col-md-offset-1 col-lg-12 col-lg-offset-1">
                                    <div class="row col-md-10 col-md-offset-1 col-lg-offset-1 col-lg-11 d-flex justify-content-center">                               
                                        <h4>Imagem de perfil</h4>
                                        <img src="/images/avatar/profile_default.png" class="mt-2" style="width:150px; height:150px; float: left; border-radius:50%; margin-right:25px;">
                                        <label class="btn btn-link">Selecine a imagem de perfil
                                            <input type='file' id="photo" name="photo" accept="image/*" />
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-success col-sm-12 col-md-2 mt-4">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
