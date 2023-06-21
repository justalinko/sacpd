@extends('layouts.app')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h3>Semua Artikel</h3>
                        <a href="/post/create" class="btn btn-success"><i class="fa fa-plus"></i> Tambah artikel</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover datatable">
                        <thead>
                            <th>Judul</th>
                            <th>Author</th>
                            <th>Crated date</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>
                                    {{$post->title}}
                                </td>
                                <td>
                                    {{$post->author}}
                                </td>
                                <td>
                                    {{$post->created_at}}
                                </td>
                                <td>
                                    <div class="btn btn-sm btn-group">
                                        <a href="/post/{{$post->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="/post/{{$post->id}}/delete" class="btn btn-sm btn-danger">Hapus</a>
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