@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h3>
                                Edit Calon                                
                            </h3>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="/calon-perangkat/{{$edit->id}}/edit" method="post">
                            @csrf
                        <div class="form-group row">
                            <label for="" class="col-3">Nama</label>
                            <div class="col-9">
                                <input type="text" name="name" class="form-control" value="{{$edit->user->name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-3">NIK</label>
                            <div class="col-9">
                                <input type="text" name="nik" class="form-control" value="{{$edit->nik}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-3">Jabatan yang di daftar</label>
                            <div class="col-9">
                                <input type="text" name="jabatan" value="{{$edit->jabatan}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-3">Kelengkapan Dokumen</label>
                            <div class="col-9">
                                {!!dokumen($edit->dokumen_ktp , $edit->dokumen_kk , $edit->dokumen_ijazah_awal , $edit->dokumen_ijazah_akhir,$edit->dokumen_surat_lamaran , $edit->dokumen_surat_kesehatan , $edit->dokumen_skck , $edit->dokumen_surat_pengadilan)!!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-3">Status</label>
                            <div class="col-9">
                                <select name="status" id="" class="form-control">
                                    <option value="menunggu" @if($edit->status == 'menunggu') selected @endif>Menunggu</option>
                                    <option value="diterima" @if($edit->status == 'diterima') selected @endif>Di terima</option>
                                    <option value="ditolak" @if($edit->status == 'ditolak') selected @endif>Di Tolak</option>
                                </select>
                        </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-3">Keterangan / Langkah Selanjutnya</label>
                            <div class="col-9">
                                @php
                                    $ket =  ['test psikologi' , 'test wawancara' , 'test pengetahuan' , 'test administrasi' , 'gagal', 'lolos'];
                                @endphp
                                <select name="keterangan" class="form-control" id="">
                                    @foreach ($ket as $item)
                                        <option value="{{$item}}" @if($edit->keterangan == $item) selected @endif>{{$item}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-3">Catatan</label>
                            <div class="col-9">
                                <textarea name="catatan" id="" cols="30" rows="10" class="form-control">{{$edit->catatan}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-3">Hasil Test</label>
                            <div class="col-9">
                                <input type="text" name="hasil_test" class="form-control" value="{{$edit->hasil_test}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-3"></div>
                            <div class="col-9">
                                <button type="submit" class="btn btn-primary w-100"><i class="fa fa-save"></i> Simpan</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection