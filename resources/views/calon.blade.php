@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h3>Semua Calon</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover datatable">
                            <thead>
                                <th>Nomer</th>
                                <th>NIK</th><th>Nama Calon</th><th>Jabatan yang di calonkan</th><th>Kelengkapan Dokumen</th><th>Status</th>
                                <th>Keterangan</th>
                                <th>Catatan</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($calons as $c)
                                    <tr>
                                        <td>{{str_pad($c->id ,5,0,STR_PAD_LEFT) }}</td>
                                        <td>{{ $c->nik }}</td>
                                        <td>{{ $c->user->name }}</td>
                                        <td>{{ $c->jabatan }}</td>
                                        <td>
                                            {!!dokumen($c->dokumen_ktp , $c->dokumen_kk , $c->dokumen_ijazah_awal , $c->dokumen_ijazah_akhir,$c->dokumen_surat_lamaran , $c->dokumen_surat_kesehatan , $c->dokumen_skck , $c->dokumen_surat_pengadilan)!!}
                                        </td>
                                        <td>{!!status($c->status)!!}</td>
                                        <td>
                                            {{$c->keterangan}}<br>
                                            {{$c->hasil_test}}
                                        </td>
                                        <td>{{$c->catatan}}</td>
                                        <td>
                                            <div class="btn btn-group">
                                                <a href="/calon-perangkat/{{$c->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> </a>
                                                <a href="/calon-perangkat/{{$c->id}}/delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                <a href="/d?detail={{$c->id}}" class="btn btn-success btn-sm"><i class="fa fa-file"></i></a>
                                            </div>
                                        </td>
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