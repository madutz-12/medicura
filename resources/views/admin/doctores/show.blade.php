@extends('layouts.app')

@section('template_title')
    {{ $doctore->name ?? __('Show') . " " . __('Doctore') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} datos del doctor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('doctores.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $doctore->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellido paterno:</strong>
                                    {{ $doctore->apellidoPaterno }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellido materno:</strong>
                                    {{ $doctore->apellidoMaterno }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cédula:</strong>
                                    {{ $doctore->Cedula }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Especialidad:</strong>
                                    {{ $doctore->especialidad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Email:</strong>
                                    {{ $doctore->email }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
