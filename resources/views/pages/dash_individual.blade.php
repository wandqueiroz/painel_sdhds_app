@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>COORDENADORIA DE SEGURANÇA ALIMENTAR E NUTRICIONAL</h1>
@stop

@section('content')
    

    {{-- <div class="col-lg-3 col-6">

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
        </div> --}}
        <h2 class="text-secondary">Série Histórica de distribuição de quentinhas</h2>
    <div style="display:flex; margin-bottom:30px">
        <canvas style="height:400px !important; flex-grow: 1" id="myChart"></canvas>
    </div>


    <div>
        <h2 class="text-secondary">Distribuição de quentinhas por unidade - Abril</h2>
        <p class="text-info">Filtrar por campo</p>
        <input class="form-control" id="myInput" type="text" placeholder="Pesquisar..">
        <br>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Mês</th>
                    <th>Quentinhas</th>
                    <th>Sopas</th>
                    
                    
                </tr>
            </thead>
            <tbody id="myTable">
                <tr>
                    <th scope="row">01</th>
                    <td>0</td>
                    <td>0</td>
                </tr>
                
            </tbody>
        </table>

        {{-- <p>Note that we start the search in tbody, to prevent filtering the table headers.</p> --}}
    </div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">


@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>



    <script>
        const labels = ['abr', 'mai', 'jun', 'jul', 'ago', 'set', 'out'];
        const data = {
            labels: labels,
            datasets: [{
                label: 'Distribuição de Quentinhas',
                data: [32816, 47300, 47890, 49400, 37400, 26200, 27000], 
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1,
            }]
        };

        const config = {
            type: 'line',
            data: data,
        };

        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>
@stop
