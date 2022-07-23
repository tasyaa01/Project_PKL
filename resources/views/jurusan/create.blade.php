@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Jurusan
                    </div>
                    <div class="card-body">
                        <form action="{{ route('jurusan.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Kode Mata Pelajaran</label>
                                <input type="text" class="form-control  @error('kodemapel') is-invalid @enderror"
                                    name="kodemapel">
                                @error('kodemapel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Mata Pelajaran</label>
                                <input type="text" class="form-control  @error('nama_mapel') is-invalid @enderror"
                                    name="nama_mapel">
                                @error('nama_mapel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Semester</label>
                                <input type="text" class="form-control  @error('semester') is-invalid @enderror"
                                    name="semester">
                                @error('semester')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jurusan</label>
                                <input type="text" class="form-control  @error('jurusan') is-invalid @enderror"
                                    name="jurusan">
                                @error('jurusan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="">
                                    <button class="btn btn-primary btn-sm" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection