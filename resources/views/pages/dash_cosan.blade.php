@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>COORDENADORIA DE SEGURANÇA ALIMENTAR E NUTRICIONAL</h1>
    <h1>AÇÃO: {{$indicador}}</h1>

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
        <h2 class="text-secondary">Série Histórica de distribuição de quentinhas {{$id}}</h2>
    <div style="display:flex; margin-bottom:30px">
        <canvas style="height:400px !important; flex-grow: 1" id="myChart"></canvas>
    </div>


{{--    <div>--}}
{{--        <h2 class="text-secondary">Distribuição de quentinhas por unidade - Mensal</h2>--}}
{{--        <p class="text-info">Filtrar por campo</p>--}}
{{--        <input class="form-control" id="myInput" type="text" placeholder="Pesquisar..">--}}
{{--        <br>--}}
{{--        <table class="table table-bordered table-striped">--}}
{{--            <thead>--}}
{{--                <tr>--}}
{{--                    <th>Mês</th>--}}
{{--                    <th>Janaína Dutra</th>--}}
{{--                    <th>Recanto Do Sagrado Coração</th>--}}
{{--                    <th>Restaurante Pop</th>--}}
{{--                    <th>CUCA</th>--}}
{{--                    <th>Bom Jardim</th>--}}
{{--                    <th>Messejana</th>--}}
{{--                    <th>Espaço Higienização - Parangaba</th>--}}
{{--                    <th>Espaço Higienização - Dom Manuel</th>--}}
{{--                    <th>Espaço Higienização - Praça da Bandeira</th>--}}
{{--                    <th>Refeitório Social</th>--}}

{{--                </tr>--}}
{{--            </thead>--}}
{{--            <tbody id="myTable">--}}
{{--                <tr>--}}
{{--                    <th scope="row">Abr</th>--}}
{{--                    <td>900</td>--}}
{{--                    <td>-</td>--}}
{{--                    <td>3106</td>--}}
{{--                    <td>900</td>--}}
{{--                    <td>810</td>--}}
{{--                    <td>300</td>--}}
{{--                    <td>6000</td>--}}
{{--                    <td>6000</td>--}}
{{--                    <td>6000</td>--}}
{{--                    <td>8800</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">Mai</th>--}}
{{--                    <td>2100</td>--}}
{{--                    <td>1120</td>--}}
{{--                    <td>7150</td>--}}
{{--                    <td>2610</td>--}}
{{--                    <td>5900</td>--}}
{{--                    <td>1420</td>--}}
{{--                    <td>6200</td>--}}
{{--                    <td>6200</td>--}}
{{--                    <td>6200</td>--}}
{{--                    <td>8400</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">Jun</th>--}}
{{--                    <td>2100</td>--}}
{{--                    <td>1260</td>--}}
{{--                    <td>6300</td>--}}
{{--                    <td>3150</td>--}}
{{--                    <td>6300</td>--}}
{{--                    <td>1980</td>--}}
{{--                    <td>6000</td>--}}
{{--                    <td>6000</td>--}}
{{--                    <td>6000</td>--}}
{{--                    <td>8800</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">Jul</th>--}}
{{--                    <td>1980</td>--}}
{{--                    <td>1540</td>--}}
{{--                    <td>6600</td>--}}
{{--                    <td>3300</td>--}}
{{--                    <td>6600</td>--}}
{{--                    <td>1980</td>--}}
{{--                    <td>6200</td>--}}
{{--                    <td>6200</td>--}}
{{--                    <td>6200</td>--}}
{{--                    <td>8800</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">Ago</th>--}}
{{--                    <td>900</td>--}}
{{--                    <td>700</td>--}}
{{--                    <td>3000</td>--}}
{{--                    <td>1500</td>--}}
{{--                    <td>3000</td>--}}
{{--                    <td>1020</td>--}}
{{--                    <td>6180</td>--}}
{{--                    <td>6180</td>--}}
{{--                    <td>6180</td>--}}
{{--                    <td>8740</td>--}}
{{--                </tr>--}}
{{--            </tbody>--}}
{{--        </table>--}}

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
                data: [

                    {{rand(100, 900)}}, {{rand(100, 900)}}, {{rand(100, 900)}}, {{rand(100, 900)}}, {{rand(100, 900)}}, {{rand(100, 900)}}, {{rand(100, 900)}}

                ],
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
