@extends('layouts.admin')

@section('title', 'Data Produk')

@section('content_header')
    <h1>Data Produk</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Grafik Produk</h3>
        </div>
        <div class="card-body">
            <canvas id="productChart"></canvas>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('productChart').getContext('2d');
        const data = {
            labels: @json($groupedProducts->pluck('nama')),  // Nama produk
            datasets: [{
                label: 'Jumlah Produk',
                data: @json($groupedProducts->pluck('total')), // Jumlah produk
                fill: false,
                borderColor: 'rgba(75, 192, 192, 1)',
                tension: 0.1
            }]
        };

        new Chart(ctx, {
            type: 'line',
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
