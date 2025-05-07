@extends('layouts.app')

@section('title', 'Masuk ke Admin SENIMANKITA')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 80vh;">
            <div class="col-md-5">
                <div class="card border-0 shadow-lg rounded-3 overflow-hidden">
                    <div class="card-header bg-primary text-white text-center py-4">
                        <h3 class="fw-bold mb-1">
                            <i class="bi bi-palette2"></i> SENIMANKITA
                        </h3>
                        <p class="mb-0 small">Selamat datang di area admin</p>
                    </div>
                    
                    <div class="card-body p-4 p-md-5">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            
                            <div class="mb-4">
                                <label for="username" class="form-label fw-semibold">Nama Pengguna</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light">
                                        <i class="bi bi-person-fill text-primary"></i>
                                    </span>
                                    <input type="text" 
                                           class="form-control py-2" 
                                           id="username" 
                                           name="username" 
                                           placeholder="Masukkan nama pengguna Anda"
                                           autocomplete="username"
                                           required>
                                </div>
                                <small class="text-muted">Gunakan username yang terdaftar</small>
                            </div>
                            
                            <div class="mb-4">
                                <label for="password" class="form-label fw-semibold">Kata Sandi</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light">
                                        <i class="bi bi-lock-fill text-primary"></i>
                                    </span>
                                    <input type="password" 
                                           class="form-control py-2" 
                                           id="password" 
                                           name="password" 
                                           placeholder="Masukkan kata sandi Anda"
                                           autocomplete="current-password"
                                           required>
                                </div>
                                <small class="text-muted">Minimal 8 karakter</small>
                            </div>
                            
                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary py-2 fw-bold rounded-pill">
                                    <i class="bi bi-box-arrow-in-right me-2"></i> Masuk ke Sistem
                                </button>
                            </div>
                            
                            <!-- Help Links -->
                            <div class="text-center small">
                                <a href="#" class="text-decoration-none text-muted me-3">
                                    <i class="bi bi-question-circle"></i> Bantuan
                                </a>
                                <a href="#" class="text-decoration-none text-muted">
                                    <i class="bi bi-key"></i> Lupa password?
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                

                <p class="text-center text-muted small mt-4">
                    Hanya untuk staf administrasi SENIMANKITA. 
                    <br>
                </p>
            </div>
        </div>
    </div>
@endsection