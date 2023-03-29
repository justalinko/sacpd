@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h3>Semua Calon {{$filter}}</h3>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover datatable">
                        <thead>
                            <th>NIK</th><th>Nama Calon</th><th>Jabatan yang di calonkan</th><th>Kelengkapan Dokumen</th><th>Status</th><th>Keterangan</th><th>Catatan</th>
                        </thead>
                        <tbody>
                            @foreach ($calons as $calon)
                                <tr>
                                    <td>{{ $calon->nik }}</td>
                                    <td>{{ $calon->user->name }}</td>
                                    <td>{{ $calon->jabatan }}</td>
                                    <td>
                                        {!!dokumen($calon->dokumen_ktp , $calon->dokumen_kk , $calon->dokumen_ijazah_awal , $calon->dokumen_ijazah_akhir,$calon->dokumen_surat_lamaran , $calon->dokumen_surat_kesehatan , $calon->dokumen_skck , $calon->dokumen_surat_pengadilan)!!}
                                    </td>
                                    <td>{!!status($calon->status)!!}</td>
                                    <td>
                                        {{$calon->keterangan}}<br>
                                        {{$calon->hasil_test}}
                                    </td>
                                    <td>{{$calon->catatan}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection