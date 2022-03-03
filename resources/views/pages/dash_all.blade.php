@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Bem vind<strong>x</strong> ao painel de sala de situação</p>
    <div class="row">
        <div class="col-lg-3 col-6">

            <div class="small-box bg-gradient-info">
                <div class="inner">
                    <h3>150</h3>
                    <p>Total de Demandas</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <a href="#" class="small-box-footer">Mais info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

      
             

        


    </div>



    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
        
       
    @stop

    @section('js')
       
    @stop

