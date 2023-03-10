@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1 style="color: blue; position: relative; left:260px">REGISTRO</h1></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-form-label text-md-start">{{ __('Nombre') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="firts_name" class="col-form-label text-md-start">{{ __('Apellido Paterno') }}</label>

                            <div class="col-md-12">
                                <input id="firts_name" type="text" class="form-control @error('firts_name') is-invalid @enderror" name="firts_name" value="{{ old('firts_name') }}" required autocomplete="firts_name" autofocus>

                                @error('firts_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="second_name" class="col-form-label text-md-start">{{ __('Apellido Materno') }}</label>

                            <div class="col-md-12">
                                <input id="second_name" type="text" class="form-control @error('second_name') is-invalid @enderror" name="second_name" value="{{ old('second_name') }}" required autocomplete="second_name" autofocus>

                                @error('second_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="gender_id" class="col-form-label text-md-start">{{ __('Genero') }}</label>
                            <div class="col-md-12">
                                <select id="gender_id"  class="form-control @error('gender_id') is-invalid @enderror" name="gender_id"  required >
                                    <option></option>
                                    <option value=1>Masculino</option>
                                    <option value=2>Femenino</option>
                                    </select>
                                @error('gender_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="year" class="col-form-label text-md-start">{{ __('Edad') }}</label>

                            <div class="col-md-12">
                                <input id="year" type="number" class="form-control @error('year') is-invalid @enderror" name="year" value="{{ old('year') }}" required autocomplete="year" autofocus>

                                @error('year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="civil_statuse_id" class="col-form-label text-md-start">{{ __('Estado Civil') }}</label>

                            <div class="col-md-12">
                                <select id="civil_statuse_id"  class="form-control @error('civil_statuse_id') is-invalid @enderror" name="civil_statuse_id"  required >
                                    <option></option>
                                    <option value=1>Soltero</option>
                                    <option value=2>Casado</option>
                                    <option value=3>Divorsiado</option>
                                    <option value=4>Viudo</option>
                                    </select>

                                @error('civil_statuse_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="interest_level_id" class="col-form-label text-md-start">{{ __('Nivel de Interes') }}</label>

                            <div class="col-md-12">
                                <select id="interest_level_id" onchange="selecOp(event.target.value)" class="form-control @error('interest_level_id') is-invalid @enderror" name="interest_level_id"  required >
                                    <option></option>
                                    <option value=1>Preparatoria</option>
                                    <option value=2>Licenciatura</option>
                                    <option value=3>Postgrado</option>
                                    </select>

                                    <h1 id="capa"></h1><br>
                                @error('interest_level_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <script
                        src="https://code.jquery.com/jquery-3.6.4.slim.min.js"
                        integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw="
                        crossorigin="anonymous"></script>
                        <script>
                            function selecOp(valor){
                            if(valor == 1){
                             var capa = document.getElementById("capa");
                             capa.innerHTML = "";
                             }
                             if(valor == 2){
                             var capa = document.getElementById("capa");
                             capa.innerHTML = "";
                             var h1 = document.createElement("h1");
                             h1.innerHTML = "Lic Derecho, Lic Finanzas";
                             capa.appendChild(h1);
                             }
                             if(valor == 3){
                             var capa = document.getElementById("capa");
                             capa.innerHTML = "";
                             var h1 = document.createElement("h1");
                             h1.innerHTML = "Mtria. Admon. De Negocios y Mtria. Direccion de proyectos";
                             capa.appendChild(h1);
                             }
                            }
                        </script>
                    
                        <div class="row mb-3">
                            <label for="email" class="col-form-label text-md-start">{{ __('Email Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-form-label text-md-start">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-form-label text-md-start">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" style="position: relative;  left: 100px;" class="btn btn-primary">REGISTRAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

