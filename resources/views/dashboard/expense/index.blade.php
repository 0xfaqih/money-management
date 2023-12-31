@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pengeluaran {{ auth()->user()->name }}</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            <div class="spinner-grow text-success spinner-grow-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has('success'))
        <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('success') }}
                </div>
                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    @endif





    <div class="table-responsive col-lg-12">
        <a href="/dashboard/expense/create" class="btn btn-primary mb-3 postition-relative"><i
                class="bi bi-file-earmark-plus"></i> Tambahkan
            data</a>
        <a href="/dashboard/expense-pdf" class="btn btn-success mb-3" target="_blank"><i
                class="bi bi-printer-fill"></i> Cetak</a>

        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nominal</th>
                    <th scope="col">Keperluan</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Catatan</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($expenses as $expense)
                    <tr>
                        <td>{{ $loop->iteration }} </td>
                        <td>@currency($expense->nominal)</td>
                        <td>{{ $expense->keperluan }}</td>
                        <td>{{ $expense->tanggal }}</td>
                        <td>{{ $expense->notes }}</td>
                        <td>
                            <a href="/dashboard/expense/{{ $expense->id }}/edit"
                                class="btn btn-outline-warning btn-sm border-0"><i class="bi bi-pencil-fill"></i></a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-danger btn-sm border-0" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <i class="bi bi-trash"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah anda yakin ingin menghapus?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <form action="/dashboard/expense/{{ $expense->id }}" method="POST"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-primary">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{ $expenses->links() }} --}}
    </div>
@endsection
