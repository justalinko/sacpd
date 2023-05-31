@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h3>
                                Edit Hasil test {{$hasil?->calon?->user?->name}}                         
                            </h3>

                            <div class="alert alert-info">
                                <i class="fa fa-info"></i> Masukan nilai dari 0 sampai 100
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="/hasil-test/{{$hasil->id}}/edit" method="post">
                            @csrf
                        <div class="form-group row">
                            <label for="" class="col-3">Nilai Test Administrasi</label>
                            <div class="col-9">
                                <input type="number" name="administrasi" min="0" max="100" class="form-control" value="{{$hasil->hasil_administrasi}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-3">Nilai Test Pengetahuan</label>
                            <div class="col-9">
                                <input type="number" name="pengetahuan" min="0" max="100" class="form-control" value="{{$hasil->hasil_pengetahuan}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-3">Nilai Test Wawancara</label>
                            <div class="col-9">
                                <input type="number" name="wawancara" min="0" max="100" class="form-control" value="{{$hasil->hasil_wawancara}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-3">Nilai Test Psikologi</label>
                            <div class="col-9">
                                <input type="number" name="psikologi" min="0" max="100" class="form-control" value="{{$hasil->hasil_psikologi}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-3"></div>
                            <div class="col-9">
                                <button type="submit" class="btn btn-success w-100">
                                    <i class="fa fa-save"></i> Simpan
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


