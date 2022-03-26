@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card pt-3 border-0 pb-5">
                <div class="card text-center border-0">
                    <div class="card-header border-0">
                    <h4 class="font-weight-bold text-info">
                    {{ __('Register') }}
                    </h4>
                    <img class="card-img-top w-50 h-50" src="{{ asset('images/register.jpg') }}" alt="Card image cap">
                </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <div class="form-group ">

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="input-group-text" style="height: 35px" id="basic-addon1">
                                        <i class="fa fa-user" aria-hidden="true"></i> 
                                    </span>
                                    </div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <div class="form-group ">

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="input-group-text" style="height: 35px" id="basic-addon1">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </span>
                                        </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>
                        </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="pais" class="col-md-4 col-form-label text-md-end">{{ __('Pais') }}</label>

                            <div class="col-md-6">
                                <div class="form-group ">

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="input-group-text" style="height: 35px" id="basic-addon1">
                                                <i class="fa fa-flag" aria-hidden="true"></i>
                                        </span>
                                        </div>
                                <input id="pais" type="text" class="form-control @error('pais') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>
                        </div>
                                @error('pais')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="edad" class="col-md-4 col-form-label text-md-end">{{ __('Edad') }}</label>

                            <div class="col-md-6">
                                <div class="form-group ">

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="input-group-text" style="height: 35px" id="basic-addon1">
                                                <i class="fa fa-sort-numeric-desc" aria-hidden="true"></i>
                                        </span>
                                        </div>
                                <input id="edad" type="text" class="form-control @error('edad') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>
                        </div>
                                @error('edad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <div class="form-group ">

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="input-group-text" style="height: 35px" id="basic-addon1">
                                                <i class="fa fa-key" aria-hidden="true"></i>
                                        </span>
                                        </div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            </div>
                        </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <div class="form-group ">

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="input-group-text" style="height: 35px" id="basic-addon1">
                                                <i class="fa fa-key" aria-hidden="true"></i>
                                        </span>
                                        </div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="comentario" class="col-md-4 col-form-label text-md-end">{{ __('Comentario') }}</label>

                            <div class="col-md-6">
                                <div class="form-group ">

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="input-group-text" style="height: 35px" id="basic-addon1">
                                                <i class="fa fa-align-justify" aria-hidden="true"></i>
                                        </span>
                                        </div>
                                <textarea id="comentario" type="text"  rows="3" class="form-control @error('edad') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"></textarea>
                            </div>
                        </div>
                                @error('comentario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
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
