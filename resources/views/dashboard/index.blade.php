@extends('dashboard.layouts.main')

@section('container')
    <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
        Selamat Datang <strong>{{ auth()->user()->name }}</strong>, Tetap kelola keuangan dengan baik <i
            class="bi bi-emoji-smile"></i>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="row mt-4">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Total Pendapatan</h5>
              <p class="card-text">Rp. #######</p>
              <p class="card-text text-muted">This Features Will Be Update Soon</p>
              <a href="/dashboard/income" class="btn btn-primary">Detail Pendapatan</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Total Pengeluaran</h5>
              <p class="card-text">Rp. #######</p>
              <p class="card-text text-muted">This Features Will Be Update Soon</p>
              <a href="/dashboard/expense" class="btn btn-primary">Detail Pengeluaran</a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
