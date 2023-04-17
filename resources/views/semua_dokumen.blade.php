@extends('layouts.app')

@section('content')

    @if (Request::has('detail'))
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body">
                        <h1>Dokumen {{ $c->user->name }}</h1>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ imagebase64($c->dokumen_ktp) }}" class="img-card-top" alt="KTP : {{ $c->user->name }}">
                        <div class="card-body">
                            <div class="card-title">
                                <h3>{{ $c->user->name }}</h3>
                            </div>
                            <div class="card-text">
                                <b>Dokumen Tipe : KTP</b>
                                <p>NIK : {{ $c->nik }}</p>
                                <p>Jabatan : {{ $c->jabatan }}</p>
                                <p>Status : <span class="text-white">{!! status($c->status) !!}</span></p>
                                <p>Keterangan : {{ $c->keterangan }}</p>
                                <p>Hasil Test : {{ $c->hasil_test }}</p>
                                <p>Catatan : {{ $c->catatan }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ imagebase64($c->dokumen_kk) }}" alt="Kartu Keluarga : {{ $c->user->name }}"
                            class="img-card-top">
                        <div class="card-body">
                            <div class="card-title">
                                <h3>{{ $c->user->name }}</h3>
                            </div>
                            <div class="card-text">
                                <b>Dokumen Tipe : Kartu Keluarga</b>
                                <p>NIK : {{ $c->nik }}</p>
                                <p>Jabatan : {{ $c->jabatan }}</p>
                                <p>Status : <span class="text-white">{!! status($c->status) !!}</span></p>
                                <p>Keterangan : {{ $c->keterangan }}</p>
                                <p>Hasil Test : {{ $c->hasil_test }}</p>
                                <p>Catatan : {{ $c->catatan }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ imagebase64($c->dokumen_ijazah_awal) }}" alt="Kartu Keluarga : {{ $c->user->name }}"
                            class="img-card-top">
                        <div class="card-body">
                            <div class="card-title">
                                <h3>{{ $c->user->name }}</h3>
                            </div>
                            <div class="card-text">
                                <b>Dokumen Tipe : Ijazah Awal</b>
                                <p>NIK : {{ $c->nik }}</p>
                                <p>Jabatan : {{ $c->jabatan }}</p>
                                <p>Status : <span class="text-white">{!! status($c->status) !!}</span></p>
                                <p>Keterangan : {{ $c->keterangan }}</p>
                                <p>Hasil Test : {{ $c->hasil_test }}</p>
                                <p>Catatan : {{ $c->catatan }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ imagebase64($c->dokumen_ijazah_akhir) }}" alt="Kartu Keluarga : {{ $c->user->name }}"
                            class="img-card-top">
                        <div class="card-body">
                            <div class="card-title">
                                <h3>{{ $c->user->name }}</h3>
                            </div>
                            <div class="card-text">
                                <b>Dokumen Tipe : Ijazah Akhir</b>
                                <p>NIK : {{ $c->nik }}</p>
                                <p>Jabatan : {{ $c->jabatan }}</p>
                                <p>Status : <span class="text-white">{!! status($c->status) !!}</span></p>
                                <p>Keterangan : {{ $c->keterangan }}</p>
                                <p>Hasil Test : {{ $c->hasil_test }}</p>
                                <p>Catatan : {{ $c->catatan }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ imagebase64($c->dokumen_surat_lamaran) }}"
                            alt="Kartu Keluarga : {{ $c->user->name }}" class="img-card-top">
                        <div class="card-body">
                            <div class="card-title">
                                <h3>{{ $c->user->name }}</h3>
                            </div>
                            <div class="card-text">
                                <b>Dokumen Tipe : Surat Lamaran</b>
                                <p>NIK : {{ $c->nik }}</p>
                                <p>Jabatan : {{ $c->jabatan }}</p>
                                <p>Status : <span class="text-white">{!! status($c->status) !!}</span></p>
                                <p>Keterangan : {{ $c->keterangan }}</p>
                                <p>Hasil Test : {{ $c->hasil_test }}</p>
                                <p>Catatan : {{ $c->catatan }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ imagebase64($c->dokumen_surat_kesehatan) }}"
                            alt="Kartu Keluarga : {{ $c->user->name }}" class="img-card-top">
                        <div class="card-body">
                            <div class="card-title">
                                <h3>{{ $c->user->name }}</h3>
                            </div>
                            <div class="card-text">
                                <b>Dokumen Tipe : Surat Kesehatan</b>
                                <p>NIK : {{ $c->nik }}</p>
                                <p>Jabatan : {{ $c->jabatan }}</p>
                                <p>Status : <span class="text-white">{!! status($c->status) !!}</span></p>
                                <p>Keterangan : {{ $c->keterangan }}</p>
                                <p>Hasil Test : {{ $c->hasil_test }}</p>
                                <p>Catatan : {{ $c->catatan }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ imagebase64($c->dokumen_skck) }}" alt="Kartu Keluarga : {{ $c->user->name }}"
                            class="img-card-top">
                        <div class="card-body">
                            <div class="card-title">
                                <h3>{{ $c->user->name }}</h3>
                            </div>
                            <div class="card-text">
                                <b>Dokumen Tipe : SKCK</b>
                                <p>NIK : {{ $c->nik }}</p>
                                <p>Jabatan : {{ $c->jabatan }}</p>
                                <p>Status : <span class="text-white">{!! status($c->status) !!}</span></p>
                                <p>Keterangan : {{ $c->keterangan }}</p>
                                <p>Hasil Test : {{ $c->hasil_test }}</p>
                                <p>Catatan : {{ $c->catatan }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ imagebase64($c->dokumen_surat_pengadilan) }}"
                            alt="Kartu Keluarga : {{ $c->user->name }}" class="img-card-top">
                        <div class="card-body">
                            <div class="card-title">
                                <h3>{{ $c->user->name }}</h3>
                            </div>
                            <div class="card-text">
                                <b>Dokumen Tipe : Surat Pengadilan</b>
                                <p>NIK : {{ $c->nik }}</p>
                                <p>Jabatan : {{ $c->jabatan }}</p>
                                <p>Status : <span class="text-white">{!! status($c->status) !!}</span></p>
                                <p>Keterangan : {{ $c->keterangan }}</p>
                                <p>Hasil Test : {{ $c->hasil_test }}</p>
                                <p>Catatan : {{ $c->catatan }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="content">
            <ul class="list-group mb-5">
                @foreach ($calons as $v)
                    <li class="list-group-item">{{ $v->user->name }} &nbsp;&nbsp;<a href="#" data-toggle="modal"
                            data-target="#showDoc_{{ $v->id }}">Lihat Dokumen</a></li>
                @endforeach
            </ul>
            @foreach ($calons as $c)
                <!-- Modal -->
                <div class="modal fade" id="showDoc_{{$c->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog" style="max-width:1140px">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Dokumen {{ $c->user->name }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="row ">
                                    <div class="col-md-12">
                                        <div class="card-body">
                                            <h1>Dokumen {{ $c->user->name }}</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="{{ imagebase64($c->dokumen_ktp) }}" class="img-card-top"
                                                alt="KTP : {{ $c->user->name }}">
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <h3>{{ $c->user->name }}</h3>
                                                </div>
                                                <div class="card-text">
                                                    <b>Dokumen Tipe : KTP</b>
                                                    <p>NIK : {{ $c->nik }}</p>
                                                    <p>Jabatan : {{ $c->jabatan }}</p>
                                                    <p>Status : <span class="text-white">{!! status($c->status) !!}</span></p>
                                                    <p>Keterangan : {{ $c->keterangan }}</p>
                                                    <p>Hasil Test : {{ $c->hasil_test }}</p>
                                                    <p>Catatan : {{ $c->catatan }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="{{ imagebase64($c->dokumen_kk) }}"
                                                alt="Kartu Keluarga : {{ $c->user->name }}" class="img-card-top">
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <h3>{{ $c->user->name }}</h3>
                                                </div>
                                                <div class="card-text">
                                                    <b>Dokumen Tipe : Kartu Keluarga</b>
                                                    <p>NIK : {{ $c->nik }}</p>
                                                    <p>Jabatan : {{ $c->jabatan }}</p>
                                                    <p>Status : <span class="text-white">{!! status($c->status) !!}</span></p>
                                                    <p>Keterangan : {{ $c->keterangan }}</p>
                                                    <p>Hasil Test : {{ $c->hasil_test }}</p>
                                                    <p>Catatan : {{ $c->catatan }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="{{ imagebase64($c->dokumen_ijazah_awal) }}"
                                                alt="Kartu Keluarga : {{ $c->user->name }}" class="img-card-top">
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <h3>{{ $c->user->name }}</h3>
                                                </div>
                                                <div class="card-text">
                                                    <b>Dokumen Tipe : Ijazah Awal</b>
                                                    <p>NIK : {{ $c->nik }}</p>
                                                    <p>Jabatan : {{ $c->jabatan }}</p>
                                                    <p>Status : <span class="text-white">{!! status($c->status) !!}</span>
                                                    </p>
                                                    <p>Keterangan : {{ $c->keterangan }}</p>
                                                    <p>Hasil Test : {{ $c->hasil_test }}</p>
                                                    <p>Catatan : {{ $c->catatan }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="{{ imagebase64($c->dokumen_ijazah_akhir) }}"
                                                alt="Kartu Keluarga : {{ $c->user->name }}" class="img-card-top">
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <h3>{{ $c->user->name }}</h3>
                                                </div>
                                                <div class="card-text">
                                                    <b>Dokumen Tipe : Ijazah Akhir</b>
                                                    <p>NIK : {{ $c->nik }}</p>
                                                    <p>Jabatan : {{ $c->jabatan }}</p>
                                                    <p>Status : <span class="text-white">{!! status($c->status) !!}</span>
                                                    </p>
                                                    <p>Keterangan : {{ $c->keterangan }}</p>
                                                    <p>Hasil Test : {{ $c->hasil_test }}</p>
                                                    <p>Catatan : {{ $c->catatan }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="{{ imagebase64($c->dokumen_surat_lamaran) }}"
                                                alt="Kartu Keluarga : {{ $c->user->name }}" class="img-card-top">
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <h3>{{ $c->user->name }}</h3>
                                                </div>
                                                <div class="card-text">
                                                    <b>Dokumen Tipe : Surat Lamaran</b>
                                                    <p>NIK : {{ $c->nik }}</p>
                                                    <p>Jabatan : {{ $c->jabatan }}</p>
                                                    <p>Status : <span class="text-white">{!! status($c->status) !!}</span>
                                                    </p>
                                                    <p>Keterangan : {{ $c->keterangan }}</p>
                                                    <p>Hasil Test : {{ $c->hasil_test }}</p>
                                                    <p>Catatan : {{ $c->catatan }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="{{ imagebase64($c->dokumen_surat_kesehatan) }}"
                                                alt="Kartu Keluarga : {{ $c->user->name }}" class="img-card-top">
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <h3>{{ $c->user->name }}</h3>
                                                </div>
                                                <div class="card-text">
                                                    <b>Dokumen Tipe : Surat Kesehatan</b>
                                                    <p>NIK : {{ $c->nik }}</p>
                                                    <p>Jabatan : {{ $c->jabatan }}</p>
                                                    <p>Status : <span class="text-white">{!! status($c->status) !!}</span>
                                                    </p>
                                                    <p>Keterangan : {{ $c->keterangan }}</p>
                                                    <p>Hasil Test : {{ $c->hasil_test }}</p>
                                                    <p>Catatan : {{ $c->catatan }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="{{ imagebase64($c->dokumen_skck) }}"
                                                alt="Kartu Keluarga : {{ $c->user->name }}" class="img-card-top">
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <h3>{{ $c->user->name }}</h3>
                                                </div>
                                                <div class="card-text">
                                                    <b>Dokumen Tipe : SKCK</b>
                                                    <p>NIK : {{ $c->nik }}</p>
                                                    <p>Jabatan : {{ $c->jabatan }}</p>
                                                    <p>Status : <span class="text-white">{!! status($c->status) !!}</span>
                                                    </p>
                                                    <p>Keterangan : {{ $c->keterangan }}</p>
                                                    <p>Hasil Test : {{ $c->hasil_test }}</p>
                                                    <p>Catatan : {{ $c->catatan }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="{{ imagebase64($c->dokumen_surat_pengadilan) }}"
                                                alt="Kartu Keluarga : {{ $c->user->name }}" class="img-card-top">
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <h3>{{ $c->user->name }}</h3>
                                                </div>
                                                <div class="card-text">
                                                    <b>Dokumen Tipe : Surat Pengadilan</b>
                                                    <p>NIK : {{ $c->nik }}</p>
                                                    <p>Jabatan : {{ $c->jabatan }}</p>
                                                    <p>Status : <span class="text-white">{!! status($c->status) !!}</span>
                                                    </p>
                                                    <p>Keterangan : {{ $c->keterangan }}</p>
                                                    <p>Hasil Test : {{ $c->hasil_test }}</p>
                                                    <p>Catatan : {{ $c->catatan }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    @endif
@endsection
