@extends('layouts.admin')

@section('title', 'Data Pegawai')

@section('content_header')
    <h1>Data Pegawai</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Grafik Pegawai Berdasarkan Divisi</h3>
        </div>
        <div class="card-body">
            <canvas id="pegawaiChart"></canvas>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('pegawaiChart').getContext('2d');
        const data = {
            labels: @json($pegawai->pluck('divisi')),
            datasets: [{
                label: 'Jumlah Pegawai',
                data: @json($pegawai->pluck('jumlah')),
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        };

        new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
