@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Painel de sala de situação</p>
    <div class="row">
        <div class="col-lg-3 col-6">

            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>
                    <p>Meta proposta</p>
                </div>
                
                <div class="icon">
                    <i class="fa fa-thumb-tack"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-success">
                <div class="inner">
                    {{-- <h3>53<sup style="font-size: 20px">%</sup></h3> --}}
                    <h3>12</h3>
                    <p>Ótimo Desempenho</p>
                </div>
                <div class="icon">
                    <i class="fas fa-arrow-alt-circle-up"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>4</h3>
                    <p>Médio Desempenho</p>
                </div>
                <div class="icon">
                    <i class="fas fa-exclamation-circle"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>2</h3>
                    <p>Baixo Desempenho</p>
                </div>
                <div class="icon">
                    <i class="fas fa-arrow-alt-circle-down"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

    </div>

    <div class="row">

        <section class="col-lg-7 connectedSortable ui-sortable">

            <div class="card bg-gradient-light">
                <div class="card-header ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">
                        <i class="fas fa fa-map mr-1"></i>
                        Visualização em mapa
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-light btn-sm" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>

                </div>
                <div class="card-body">
                    <div class="tab-content p-0">
                        <div id="map" style="width: auto; height: 500px"></div>

                    </div>
                </div>
            </div>

        </section>


        <section class="col-lg-5 connectedSortable ui-sortable">

            <div class="card bg-gradient-light">
                <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">
                        <i class="fas fa-map-marker-alt mr-1"></i>
                        Visualização gráfica
                    </h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-light btn-sm" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>

                </div>
                <div class="card-body">
                    <div>
                        <canvas style="height:400px !important;" id="myChart"></canvas>
                    </div>
                </div>

            </div>


{{--             <div class="card bg-gradient-primary">
                <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">
                        <i class="fas fa-th mr-1"></i>
                        Sales Graph
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn bg-primary btn-sm" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn bg-primary btn-sm" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">


                </div>

            </div> --}}

        </section>

        <div class="container">
            <h2>Filtrar por campo</h2>
            <input class="form-control" id="myInput" type="text" placeholder="Pesquisar..">
            <br>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>UNIDADE</th>
                        <th>META</th>
                        <th>CAMPO 1</th>
                        <th>CAMPO 2</th>
                        <th>CAMPO 3</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                        <td>john@example.com</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@mail.com</td>
                        <td>john@example.com</td>
                        <td>john@example.com</td>
                    </tr>
                    <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@greatstuff.com</td>
                        <td>john@example.com</td>
                        <td>john@example.com</td>
                    </tr>
                    <tr>
                        <td>Anja</td>
                        <td>Ravendale</td>
                        <td>a_r@test.com</td>
                        <td>john@example.com</td>
                        <td>john@example.com</td>
                    </tr>
                </tbody>
            </table>

            <p>Note that we start the search in tbody, to prevent filtering the table headers.</p>
        </div>


    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
            integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
            crossorigin="" />

    @stop

    @section('js')
    <script src="https://kit.fontawesome.com/d8e2fcabdf.js" crossorigin="anonymous"></script>

        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
                integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
                crossorigin="">
        </script>

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
            const data = {
                labels: [
                    'Baixo',
                    'Alto',
                    'Médio'
                ],
                datasets: [{
                    data: [2, 12, 4],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(96, 209, 120)',
                        'rgb(255, 205, 86)'
                    ],
                    hoverOffset: 20
                }]
            };

            const config = {
                type: 'pie',
                data: data,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    layout: {
                        padding: 20
                    },
                    plugins: {
                        legend: {
                            display: true,
                            fontSize: 30
                        }

                    }

                }

            };

            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
        </script>

        <script>
            console.log('Hi!');

            var greenIcon = new L.Icon({
                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });

            var orangeIcon = new L.Icon({
                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-orange.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });

            var redIcon = new L.Icon({
                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });

            var barra = L.marker([-3.7084337, -38.5800338], {
                    icon: greenIcon
                }).bindPopup('CRAS BARRA DO CEARÁ'),
                jacarecanga = L.marker([-3.7212433, -38.5389852], {
                    icon: greenIcon
                }).bindPopup('CRAS JACARECANGA'),
                lagamar = L.marker([-3.7613805, -38.5112225], {
                    icon: greenIcon
                }).bindPopup('CRAS LAGAMAR'),
                futuro = L.marker([-3.7644719, -38.4403997], {
                    icon: greenIcon
                }).bindPopup('CRAS PRAIA DO FUTURO'),
                mucuripe = L.marker([-3.7268639, -38.4778337], {
                    icon: greenIcon
                }).bindPopup('CRAS MUCURIPE'),
                serviluz = L.marker([-3.7163742, -38.4651728], {
                    icon: greenIcon
                }).bindPopup('CRAS SERVILUZ'),
                bela_vista = L.marker([-3.7519851, -38.5639419], {
                    icon: greenIcon
                }).bindPopup('CRAS BELA VISTA'),
                quintino_cunha = L.marker([-3.7318696, -38.6008863], {
                    icon: greenIcon
                }).bindPopup('CRAS QUINTINO CUNHA'),
                ant_bezerra = L.marker([-3.7374242, -38.5902629], {
                    icon: greenIcon
                }).bindPopup('CRAS ANTONIO BEZERRA'),
                pres_kennedy = L.marker([-3.7291766, -38.5705202], {
                    icon: greenIcon
                }).bindPopup('CRAS PRESIDENTE KENNEDY'),
                joao_23 = L.marker([-3.7746614, -38.580733], {
                    icon: greenIcon
                }).bindPopup('CRAS JOAO XXIII'),
                messejana = L.marker([-3.8306437, -38.4676208], {
                    icon: greenIcon
                }).bindPopup('CRAS MESSEJANA'),
                pres_kennedy = L.marker([-3.7291766, -38.5705202], {
                    icon: greenIcon
                }).bindPopup('CRAS PRESIDENTE KENNEDY'),
                pres_kennedy = L.marker([-3.7291766, -38.5705202], {
                    icon: greenIcon
                }).bindPopup('CRAS PRESIDENTE KENNEDY'),
                pres_kennedy = L.marker([-3.7291766, -38.5705202], {
                    icon: greenIcon
                }).bindPopup('CRAS PRESIDENTE KENNEDY');

            var cras = L.layerGroup([barra, jacarecanga, lagamar, futuro, mucuripe, serviluz, bela_vista, quintino_cunha,
                ant_bezerra, pres_kennedy, joao_23, messejana
            ]);

            var refeitorio1 = L.marker([-3.7227971, -38.5368819], {
                icon: redIcon
            }).bindPopup('REFEITORIO SOCIAL');
            var refeitorios = L.layerGroup([refeitorio1]);

            var nucad1 = L.marker([-3.7320829, -38.5460421], {
                icon: orangeIcon
            }).bindPopup('NUCAD I');
            var nucad2 = L.marker([-3.75865, -38.4820032], {
                icon: orangeIcon
            }).bindPopup('NUCAD II');
            var nucad3 = L.marker([-3.7396156, -38.5563457], {
                icon: orangeIcon
            }).bindPopup('NUCAD III');
            var nucad4 = L.marker([-3.79057, -38.5403766], {
                icon: orangeIcon
            }).bindPopup('NUCAD IV');
            var nucads = L.layerGroup([nucad1, nucad2, nucad3, nucad4]);

            var vapt_antoniob = L.marker([-3.7372669, -38.5851197], {
                icon: redIcon
            }).bindPopup('VAPT VUPT ANT BEZERRA');
            var vapt_vupts = L.layerGroup([vapt_antoniob]);

            var layoutMap = L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=UnzREsu8qEQLLAK8XZGn', {
                attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
            });

            var map = L.map('map', {
                //center: [-3.76838, -38.535683],
                center: [-3.771421, -38.538151],
                zoom: 12,
                layers: [layoutMap, cras, refeitorios, nucads, vapt_vupts]
            });



            var baseMaps = {
                "OpenStreetMap": layoutMap

            };

            var overlayMaps = {
                "<strong>CRAS</strong>": cras,
                "<strong>REFEITORIOS</strong>": refeitorios,
                "<strong>NUCADS</strong>": nucads,
                "<strong>NUCADS</strong>": vapt_vupts
            };

            L.control.layers(baseMaps, overlayMaps).addTo(map);
        </script>
    @stop


    {{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
