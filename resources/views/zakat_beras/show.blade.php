@extends('layouts.user_type.auth')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h5 class="mb-0">Detail Zakat Beras</h5>
                    </div>
                    <hr class="horizontal dark mt-0">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Muzakki</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $zakatBeras->muzakki->name }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="alamat_rt" class="form-label">RT/Alamat</label>
                            <input type="text" class="form-control" id="alamat_rt" name="alamat_rt" value="{{ $zakatBeras->muzakki->alamat_rt }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="jumlah_keluarga" class="form-label">Jumlah Jiwa</label>
                            <input type="text" class="form-control" id="jumlah_keluarga" name="jumlah_keluarga" value="{{ $zakatBeras->jumlah_keluarga }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="jumlah_kg" class="form-label">Jumlah (Kg)</label>
                            <input type="text" class="form-control" id="jumlah_kg" name="jumlah_kg" value="{{ $zakatBeras->jumlah_kg }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_penerimaan" class="form-label">Tanggal Penerimaan:</label>
                            <input type="text" class="form-control" id="tanggal_penerimaan" name="tanggal_penerimaan" value="{{ $zakatBeras->tanggal_penerimaan }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan:</label>
                            <textarea class="form-control" id="keterangan" name="keterangan" rows="4" readonly>{{ $zakatBeras->keterangan }}</textarea>
                        </div>
                        <div class="text-end">
                            <a href="{{ route('beras.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection