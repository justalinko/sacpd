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
                                <th>
                                    Hasil Test
                                </th>
                                <th>Catatan</th>
                                
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($calons as $c)
                                    <tr>
                                        <td>{{$c->id}}</td>
                                        <td>{{ $c->nik }}</td>
                                        <td>{{ $c->user->name }}</td>
                                        <td>{{ $c->jabatan }}</td>
                                        <td>
                                            {!!dokumen($c->dokumen_ktp , $c->dokumen_kk , $c->dokumen_ijazah_awal , $c->dokumen_ijazah_akhir,$c->dokumen_surat_lamaran , $c->dokumen_surat_kesehatan , $c->dokumen_skck , $c->dokumen_surat_pengadilan)!!}
                                        </td>
                                        <td>{!!status($c->status)!!}</td>
                                        <td>
                                            {{$c->keterangan}}
                                        </td>
                                        <td>
                                            <table class="table table-border">
                                                <thead>
                                                    <th>Jenis Test</th>
                                                    <th>Nilai</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Test Administrasi</td>
                                                        <td>{{$c->hasiltest?->hasil_administrasi}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Test Pengetahuan</td>
                                                        <td>{{$c->hasiltest?->hasil_pengetahuan}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Test Wawancara</td>
                                                        <td>{{$c->hasiltest?->hasil_wawancara}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Test Psikologi</td>
                                                        <td>{{$c->hasiltest?->hasil_psikologi}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <a href="/hasil-test/{{$c->id}}/edit" class="btn btn-warning w-100"><i class="fa fa-pencil"></i> Edit hasil test</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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