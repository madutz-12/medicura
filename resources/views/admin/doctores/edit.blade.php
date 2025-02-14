@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Doctore
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar') }} información del doctor</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('doctores.update', $doctore->id) }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $doctore?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellido_paterno" class="form-label">{{ __('Apellido paterno') }}</label>
            <input type="text" name="apellidoPaterno" class="form-control @error('apellidoPaterno') is-invalid @enderror" value="{{ old('apellidoPaterno', $doctore?->apellidoPaterno) }}" id="apellido_paterno" placeholder="Apellido paterno">
            {!! $errors->first('apellidoPaterno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellido_materno" class="form-label">{{ __('Apellido materno') }}</label>
            <input type="text" name="apellidoMaterno" class="form-control @error('apellidoMaterno') is-invalid @enderror" value="{{ old('apellidoMaterno', $doctore?->apellidoMaterno) }}" id="apellido_materno" placeholder="Apellido materno">
            {!! $errors->first('apellidoMaterno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cedula" class="form-label">{{ __('Cédula') }}</label>
            <input type="text" name="Cedula" class="form-control @error('Cedula') is-invalid @enderror" value="{{ old('Cedula', $doctore?->Cedula) }}" id="cedula" placeholder="Cédula">
            {!! $errors->first('Cedula', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="especialidad" class="form-label">{{ __('Especialidad') }}</label>
            <input type="text" name="especialidad" class="form-control @error('especialidad') is-invalid @enderror" value="{{ old('especialidad', $doctore?->especialidad) }}" id="especialidad" placeholder="Especialidad">
            {!! $errors->first('especialidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $doctore?->email) }}" id="email" placeholder="Email">
            {!! $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
