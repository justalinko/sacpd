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
                    <table class="table table-border table-hover datatable">
                        <thead>
                            <!--<th>Jabatan yang di calonkan</th><th>Kelengkapan Dokumen</th>-->
                            <th>Nomer</th><th>NIK</th><th>Nama Calon</th><th>Hasil Test</th><th>Status</th><th>Keterangan</th><th>Catatan</th>
                        </thead>
                        <tbody>
                            @foreach ($calons as $calon)
                                <tr>
                                    <td>{{str_pad($calon->id ,5,0,STR_PAD_LEFT) }}</td>
                                    <td>{{ $calon->nik }}</td>
                                    <td>{{ $calon->user->name }}</td>
                              
                                    <td class="table-responsive">
                                        <table class="table table-border">
                                            <thead>
                                                <th>Jenis Test</th>
                                                <th>Nilai</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Test Administrasi</td>
                                                    <td>{{$calon->hasiltest?->hasil_administrasi}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Test Pengetahuan</td>
                                                    <td>{{$calon->hasiltest?->hasil_pengetahuan}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Test Wawancara</td>
                                                    <td>{{$calon->hasiltest?->hasil_wawancara}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Test Psikologi</td>
                                                    <td>{{$calon->hasiltest?->hasil_psikologi}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
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