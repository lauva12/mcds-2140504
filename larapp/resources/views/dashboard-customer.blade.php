@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <img src="{{ asset('imgs/bg-dashboard.svg') }}" width="300px" class="my-2 img-top-card">
                <div class="card-header text-center">
                    <h4>
                        <i class="fa fa-clipboard-list"></i>
                        @lang('general.title-dashboard') 
                    </h4>
                </div>

                <div class="card-body row align-content-center align-items-center">
                        {{--  --}}
                        <div class="col-md-4 offset-md-4 mt-5">
                        <div class="card">
                                <img src="{{ asset('imgs/bg-games.svg') }}" width="240px" class="my-2 img-top-card" height="154px">
                                <div class="card-body">
                                    <a href="{{ route('games.index') }}" class="btn btn-block btn-larapp">
                                        <i class="fas fa-gamepad"></i>
                                        Módulo Juegos
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
