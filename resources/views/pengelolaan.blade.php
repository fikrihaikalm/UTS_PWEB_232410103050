@extends('layouts.app')

@section('title', 'Pengelolaan Karya')

@section('content')
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Pengelolaan Karya Seni</h2>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahKaryaModal">
                <i class="bi bi-plus-lg"></i> Tambah Karya
            </button>
        </div>

        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Judul</th>
                                <th>Seniman</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($artworks as $artwork)
                                <tr>
                                    <td>{{ $artwork['id'] }}</td>
                                    <td>{{ $artwork['title'] }}</td>
                                    <td>{{ $artwork['artist'] }}</td>
                                    <td>{{ $artwork['category'] }}</td>
                                    <td>Rp {{ number_format($artwork['price'], 0, ',', '.') }}</td>
                                    <td>
                                        @if($artwork['status'] == 'Tersedia')
                                            <span class="badge bg-success">Tersedia</span>
                                        @elseif($artwork['status'] == 'Terjual')
                                            <span class="badge bg-danger">Terjual</span>
                                        @else
                                            <span class="badge bg-warning">Diproses</span>
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-info">Edit</button>
                                        <button class="btn btn-sm btn-danger">Hapus</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Karya -->
    <div class="modal fade" id="tambahKaryaModal" tabindex="-1" aria-labelledby="tambahKaryaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="tambahKaryaModalLabel">Tambah Karya Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Judul Karya</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Seniman</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Kategori</label>
                                <select class="form-select" required>
                                    <option value="">Pilih Kategori</option>
                                    <option value="Lukisan">Lukisan</option>
                                    <option value="Patung">Patung</option>
                                    <option value="Keramik">Keramik</option>
                                    <option value="Kaligrafi">Kaligrafi</option>
                                    <option value="Fotografi">Fotografi</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Harga (Rp)</label>
                                <input type="number" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Upload Gambar</label>
                            <input type="file" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Simpan Karya</button>
                </div>
            </div>
        </div>
    </div>
@endsection