@extends('layouts.app')

@section('content')
    
            <!-- Content -->
            <div class="content">
                <!-- Animated -->
                <div class="animated fadeIn">
                    <!-- Widgets  -->
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="stat-widget-five">
                                        <div class="stat-icon dib flat-color-1">
                                            <i class="fa fa-users"></i>
                                        </div>
                                        <div class="stat-content">
                                            <div class="text-left dib">
                                                <div class="stat-text"><span class="count">{{$totalCalon}}</span></div>
                                                <div class="stat-heading">Total Calon</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="stat-widget-five">
                                        <div class="stat-icon dib flat-color-2">
                                            <i class="fa fa-check-circle"></i>
                                        </div>
                                        <div class="stat-content">
                                            <div class="text-left dib">
                                                <div class="stat-text"><span class="count">{{$calonLolos}}</span></div>
                                                <div class="stat-heading">Calon Lolos</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="stat-widget-five">
                                        <div class="stat-icon dib flat-color-3">
                                            <i class="fa fa-times-circle"></i>
                                        </div>
                                        <div class="stat-content">
                                            <div class="text-left dib">
                                                <div class="stat-text"><span class="count">{{$calonTidakLolos}}</span></div>
                                                <div class="stat-heading">Calon Tidak Lolos </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                      
                    </div>
                  
       
                </div>

@if(auth()->user()->level == 'admin' || auth()->user()->level == 'sekretaris')
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
@elseif(auth()->user()->level == 'calon')
@php
    $calon = App\Models\Calon::where('user_id',auth()->user()->id)->first();
    $status = $calon->status;
@endphp
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-{{status2class($status)}}">
                <div class="card-title">
                    <h3>Status Pendaftaran</h3>
                </div>
            </div>
            <div class="card-body text-center">
                {!!status2icon($status)!!} <h1>{{strtoupper($status)}}</h1>
                <p>{{$calon->keterangan}}</p>
              
                @if($calon->keterangan == 'test administrasi')
                 <p> Lengkapi dokumen administrasi untuk melanjutkan ke tahap selanjutnya</p>
                 <a href="/dokumen" class="btn btn-warning btn-sm"><i class="fa fa-file"></i> Lengkapi dokumen</a>
                @elseif($calon->keterangan == 'gagal')
                <p>Maaf , anda tidak lolos calon perangkat desa </p>
                <b>Catatan : {{$calon?->catatan}}</b>
                @elseif($calon->keterangan == 'test wawancara')
                <p>Anda lolos tahap administrasi , silahkan datang ke kantor desa untuk mengikuti wawancara</p>
                @elseif($calon->keterangan == 'test psikologi')
                <p>Anda lolos tahap wawancara , silahkan datang ke kantor desa untuk mengikuti psikotes</p>
                @elseif($calon->keterangan == 'test pengetahuan')
                <p>Anda lolos tahap psikotes , silahkan datang ke kantor desa untuk mengikuti test pengetahuan</p>
                @endif

            </div>
            <div class="card-footer bg-white text-center p-3">
                {!!dokumen($calon->dokumen_ktp , $calon->dokumen_kk , $calon->dokumen_ijazah_awal , $calon->dokumen_ijazah_akhir,$calon->dokumen_surat_lamaran , $calon->dokumen_surat_kesehatan , $calon->dokumen_skck , $calon->dokumen_surat_pengadilan)!!}

            </div>
        </div>
    </div>
</div>
@else

<h1>No data.</h1>
@endif


            </div>
            <!-- /.content -->
        
    
    
@endsection
