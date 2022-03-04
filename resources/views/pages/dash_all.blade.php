@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{$indicador}}</h1>
@stop

@section('content')
    <p>Painel de sala de situação</p>
    <div class="row">


        @if (isset($equipamentos))
            @foreach($equipamentos as $key => $value )

                    <div class="col-lg-3 col-6">
                        @if($value >= 700)

                            <div class="small-box bg-gradient-green">
                                <div class="inner">
                                    <h3>{{ $key }}</h3>
                                    <p>Total de Quentinhas Distribuídas</p>
                                    <h3>{{ $value }}</h3>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-magnifying-glass">{{ ($value / 1000)*100 . "%"  }}</i>
                                </div>
                                <a href="/cosan" class="small-box-footer">Mais info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>

                        @elseif ($value >= 300)

                            <div class="small-box bg-gradient-yellow">
                                <div class="inner">
                                    <h3>{{ $key }}</h3>
                                    <p>Total de Quentinhas Distribuídas</p>
                                    <h3>{{ $value }}</h3>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-magnifying-glass">{{ ($value / 1000)*100 . "%"  }}</i>
                                </div>
                                <a href="/cosan" class="small-box-footer">Mais info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>

                        @else

                            <div class="small-box bg-gradient-red">
                                <div class="inner">
                                    <h3>{{ $key }}</h3>
                                    <p>Total de Quentinhas Distribuídas</p>
                                    <h3>{{ $value }}</h3>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-magnifying-glass"> {{ ($value / 1000)*100 . "%"  }}</i>
                                </div>
                                <a href="/cosan" class="small-box-footer">Mais info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>

                        @endif
                    </div>
            @endforeach
        @endif

    </div>






    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">


    @stop

    @section('js')

    @stop

