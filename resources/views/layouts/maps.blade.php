@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>MAPS</h1>
@stop

@section('contents')


<div id="map" style="position: absolute; top: 0;
bottom: 0;
width: 100%;"></div>

 <script>
     console.log('oiiiiiiii');
    var map = L.map('map').setView([0, 0], 1);
    L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=UnzREsu8qEQLLAK8XZGn', {
        attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
    }).addTo(map);
</script> 

{{-- <script>
    var layoutMap = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'});
    
    var map = L.map('map', {
        //center: [-3.76838, -38.535683],
        center: [-3.783411, -38.535233],
        zoom: 12,
        layers: [layoutMap]
    });
</script> --}}

@stop