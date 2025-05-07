@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
    <div class="container py-4">
        <div class="welcome-card bg-white p-4 rounded-3 shadow-sm mb-4">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="fw-bold mb-1">Selamat datang, {{ $username }}!</h4>
                    <p class="text-muted mb-0">Berikut ringkasan aktivitas terakhir di SENIMANKITA</p>
                </div>
                <div class="badge bg-primary rounded-pill px-3 py-2">
                    <i class="bi bi-calendar-check me-1"></i> {{ date('d F Y') }}
                </div>
            </div>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-md-3">
                <div class="stat-card" style="background: linear-gradient(135deg, #6C4AB6, #8D72E1);">
                    <i class="bi bi-brush fs-1"></i>
                    <h3>{{ $stats['total_artworks'] }}</h3>
                    <p class="mb-0">Total Karya</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card" style="background: linear-gradient(135deg, #4FAF44, #8BC34A);">
                    <i class="bi bi-currency-dollar fs-1"></i>
                    <h3>{{ $stats['artworks_sold'] }}</h3>
                    <p class="mb-0">Karya Terjual</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card" style="background: linear-gradient(135deg, #FF9800, #FFC107);">
                    <i class="bi bi-cart-check fs-1"></i>
                    <h3>{{ $stats['new_orders'] }}</h3>
                    <p class="mb-0">Pesanan Baru</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card" style="background: linear-gradient(135deg, #2196F3, #03A9F4);">
                    <i class="bi bi-people fs-1"></i>
                    <h3>{{ $stats['total_artists'] }}</h3>
                    <p class="mb-0">Seniman</p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-7">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-white border-0 py-3">
                        <h5 class="fw-bold mb-0">Aktivitas Terakhir</h5>
                    </div>
                    <div class="card-body">
                        <div class="activity-timeline">
                            <div class="activity-item d-flex mb-3">
                                <div class="activity-icon me-3">
                                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-2">
                                        <i class="bi bi-cart-check"></i>
                                    </div>
                                </div>
                                <div class="activity-content">
                                    <h6 class="fw-bold mb-1">Karya "Lukisan Jawa" terjual</h6>
                                    <p class="text-muted mb-0">Rp 1.250.000 • 2 jam yang lalu</p>
                                </div>
                            </div>
                            <div class="activity-item d-flex mb-3">
                                <div class="activity-icon me-3">
                                    <div class="bg-success bg-opacity-10 text-success rounded-circle p-2">
                                        <i class="bi bi-person-plus"></i>
                                    </div>
                                </div>
                                <div class="activity-content">
                                    <h6 class="fw-bold mb-1">Seniman baru bergabung</h6>
                                    <p class="text-muted mb-0">Haikal • Kemarin</p>
                                </div>
                            </div>
                            <div class="activity-item d-flex mb-3">
                                <div class="activity-icon me-3">
                                    <div class="bg-warning bg-opacity-10 text-warning rounded-circle p-2">
                                        <i class="bi bi-exclamation-triangle"></i>
                                    </div>
                                </div>
                                <div class="activity-content">
                                    <h6 class="fw-bold mb-1">Pesanan perlu konfirmasi</h6>
                                    <p class="text-muted mb-0">#2025-05-06-A • Kemarin</p>
                                </div>
                            </div>
                            <div class="activity-item d-flex">
                                <div class="activity-icon me-3">
                                    <div class="bg-info bg-opacity-10 text-info rounded-circle p-2">
                                        <i class="bi bi-plus-circle"></i>
                                    </div>
                                </div>
                                <div class="activity-content">
                                    <h6 class="fw-bold mb-1">Karya baru ditambahkan</h6>
                                    <p class="text-muted mb-0">"Abstraksi Kota" • 2 hari lalu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-white border-0 py-3">
                        <h5 class="fw-bold mb-0">Statistik Kategori</h5>
                    </div>
                    <div class="card-body">
                        <div class="chart-placeholder" style="height: 200px; background-color: #f8f9fa; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                            <p class="text-muted mb-0">Grafik Statistik Kategori</p>
                        </div>
                        <div class="mt-3">
                            <div class="d-flex align-items-center mb-2">
                                <div class="color-dot me-2" style="background-color: #6C4AB6; width: 12px; height: 12px; border-radius: 3px;"></div>
                                <span class="me-auto">Lukisan</span>
                                <span class="fw-bold">45%</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div class="color-dot me-2" style="background-color: #4FAF44; width: 12px; height: 12px; border-radius: 3px;"></div>
                                <span class="me-auto">Patung</span>
                                <span class="fw-bold">25%</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div class="color-dot me-2" style="background-color: #FF9800; width: 12px; height: 12px; border-radius: 3px;"></div>
                                <span class="me-auto">Fotografi</span>
                                <span class="fw-bold">15%</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="color-dot me-2" style="background-color: #2196F3; width: 12px; height: 12px; border-radius: 3px;"></div>
                                <span class="me-auto">Keramik</span>
                                <span class="fw-bold">15%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection