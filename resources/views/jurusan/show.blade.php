@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Siswa
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nomor Induk Siswa</label>
                            <input type="text" class="form-control " name="nis" value="{{ $jurusan->nis }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Siswa</label>
                            <input type="text" class="form-control " name="nama_siswa" value="{{ $jurusan->nama_siswa }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat Siswa</label>
                            <textarea class="form-control" name="alamat_siswa" readonly>{{ $jurusan->alamat_siswa }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input type="text" class="form-control" name="tgl_lahir" value="{{ $jurusan->tgl_lahir }}" readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('jurusan.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection