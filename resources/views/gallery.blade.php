@extends('layouts.app')

@section('title', 'Galeri Karya Seni')

@section('content')
    <div class="hero-section">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-4">Temukan Karya Seni Berkualitas</h1>
            <p class="lead mb-5">Dukung seniman lokal dengan membeli karya mereka langsung melalui platform kami</p>
            <div class="search-bar mx-auto" style="max-width: 500px;">
                <div class="input-group mb-3">
                    <input type="text" class="form-control rounded-pill" placeholder="Cari karya seni...">
                    <button class="btn btn-seniman rounded-pill px-4" type="button">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <h2 class="fw-bold">Koleksi Terbaru</h2>
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle rounded-pill" type="button" data-bs-toggle="dropdown">
                    <i class="bi bi-filter"></i> Filter Kategori
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Semua Kategori</a></li>
                    <li><a class="dropdown-item" href="#">Lukisan</a></li>
                    <li><a class="dropdown-item" href="#">Patung</a></li>
                    <li><a class="dropdown-item" href="#">Fotografi</a></li>
                    <li><a class="dropdown-item" href="#">Keramik</a></li>
                </ul>
            </div>
        </div>

        <div class="row g-4">
            @foreach($artworks as $artwork)
            <div class="col-md-3">
                <div class="art-card h-100">
                    <img src="{{ $artwork['image'] }}" class="art-img" alt="{{ $artwork['title'] }}">
                    <div class="p-3">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5 class="mb-0 fw-bold">{{ $artwork['title'] }}</h5>
                            <span class="art-price">Rp {{ number_format($artwork['price'], 0, ',', '.') }}</span>
                        </div>
                        <p class="text-muted mb-2">Oleh: {{ $artwork['artist'] }}</p>
                        <span class="art-category">{{ $artwork['category'] }}</span>
                    </div>
                    <div class="px-3 pb-3 pt-2">
                        <button class="btn btn-seniman w-100">
                            <i class="bi bi-cart-plus"></i> Beli Sekarang
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <button class="btn btn-outline-primary rounded-pill px-4">
                Lihat Lebih Banyak <i class="bi bi-arrow-right"></i>
            </button>
        </div>
    </div>
@endsection