<div class="col-md-3 mb-4">
    <div class="card h-100 shadow-sm">
        <img src="{{ $artwork['image'] }}" class="card-img-top artwork-img" alt="{{ $artwork['title'] }}">
        <div class="card-body">
            <h5 class="card-title">{{ $artwork['title'] }}</h5>
            <p class="card-text text-muted">{{ $artwork['artist'] }}</p>
            <p class="card-text">{{ $artwork['category'] }}</p>
        </div>
        <div class="card-footer bg-white d-flex justify-content-between align-items-center">
            <span class="price-tag">Rp {{ number_format($artwork['price'], 0, ',', '.') }}</span>
            <button class="btn btn-sm btn-outline-primary">Detail</button>
        </div>
    </div>
</div>