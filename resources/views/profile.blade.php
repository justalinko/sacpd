@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h3>Profile</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/profile" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="" class="col-3">Nama</label>
                            <div class="col-9">
                                <input type="text" name="name" class="form-control" value="{{auth()->user()->name}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-3">Email</label>
                            <div class="col-9">
                                <input type="text" name="email" class="form-control" value="{{auth()->user()->email}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-3">Password <br> <small> Kosongkan jika tidak ingin di ubah </small> </label>
                            <div class="col-9">
                                <input type="password" name="password" class="form-control">
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