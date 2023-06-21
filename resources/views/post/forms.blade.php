@extends('layouts.app')

@section('content')

<div class="content">
    <div class="content">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    @if($isEdit)
                        Edit
                    @else
                        Tambah
                    @endif
                    Artikel
                </h5>
            </div>
            <div class="card-body">
                <form @if($isEdit) action="/post/{{$edit->id}}/edit" @else action="/post/create" @endif method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="" class="col-3">Judul</label>
                        <div class="col-9">
                            <input type="text" name="title" class="form-control" value="{{$isEdit ? $edit->title : ''}}">
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="" class="col-3">Gambar</label>
                        <div class="col-9">
                            <input type="file" name="image" accept="image/*" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="" class="col-3">Konten</label>
                        <div class="col-9">
                            <textarea name="content" id="" cols="30" rows="10" class="form-control">{{$isEdit ? $edit->content : ''}}</textarea>
                        </div>
                    </div>
    
                    <div class="form-group row mt-3">
                        <div class="col-3"></div>
                        <div class="col-9">
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="fa fa-save"></i> Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection