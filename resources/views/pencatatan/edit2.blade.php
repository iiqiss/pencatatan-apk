@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Data</h3>
    <form action="{{ route('pencatatan.update2', $data->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="tahun_pengumpulan">Tahun Pengumpulan</label>
            <input type="number" class="form-control" id="tahun_pengumpulan" name="tahun_pengumpulan" value="{{ $data->tahun_pengumpulan }}" required>
        </div>

        <div class="form-group">
            <label for="judul_publikasi">Judul Publikasi</label>
            <input type="text" class="form-control" id="judul_publikasi" name="judul_publikasi" value="{{ $data->judul_publikasi }}" required>
        </div>

        <div class="form-group">
            <label for="link_publikasi">Link Publikasi</label>
            <input type="url" class="form-control" id="link_publikasi" name="link_publikasi" value="{{ $data->link_publikasi }}">
        </div>

        <div class="form-group">
            <label for="link_metadata">Link Metadata</label>
            <input type="url" class="form-control" id="link_metadata" name="link_metadata" value="{{ $data->link_metadata }}">
        </div>

        <div class="form-group">
            <label for="link_rekomendasi">Link Rekomendasi</label>
            <input type="url" class="form-control" id="link_rekomendasi" name="link_rekomendasi" value="{{ $data->link_rekomendasi }}">
        </div>

        <div class="form-group">
            <label for="status_pengumpulan">Status</label>
            <select class="form-control" id="status_pengumpulan" name="status_pengumpulan" required>
                <option value="sudah" {{ $data->status_pengumpulan == 'sudah' ? 'selected' : '' }}>Lengkap</option>
                <option value="belum_lengkap" {{ $data->status_pengumpulan == 'belum_lengkap' ? 'selected' : '' }}>Belum Lengkap</option>
                <option value="belum" {{ $data->status_pengumpulan == 'belum' ? 'selected' : '' }}>Belum</option>
            </select>
        </div>

        <div class="form-group">
            <label for="keterangan_pengumpulan">Keterangan</label>
            <textarea class="form-control" id="keterangan_pengumpulan" name="keterangan_pengumpulan">{{ $data->keterangan_pengumpulan }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
