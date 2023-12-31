@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambahkan Data Pendapatan</h1>
        
    </div>
    <div class="col-lg-8">
      <form method="POST" action="/dashboard/income" class="mb-5" >
        @csrf
        <div class="mb-3">
            <label for="nominal" class="form-label">Nominal</label>
            <input type="text" class="form-control @error('nominal') is-invalid @enderror" id="nominal"
                name="nominal" required value="{{ old('nominal') }}" >
            @error('nominal')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="asal_pendapatan" class="form-label">Asal Pendapatan</label>
            <input type="text" class="form-control @error('asal_pendapatan') is-invalid @enderror" id="asal_pendapatan"
                name="asal_pendapatan" required value="{{ old('asal_pendapatan') }}">
            @error('asal_pendapatan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="notes" class="form-label">Catatan <p class="d-inline text-muted">(jika tidak ada isi "-")</p></label>
            <input type="text" class="input-currency form-control @error('notes') is-invalid @enderror" id="notes"
                name="notes" required value="{{ old('notes') }}" >
            @error('notes')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection
