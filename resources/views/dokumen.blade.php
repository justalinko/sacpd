@extends('layouts.app')

@section('content')
  <div class="content">
    <div class="row">
        <div class="col-12">
           <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h3>Perlengkapan Dokumen Administrasi</h3>
                </div>
                <div class="alert alert-info">
                    <i class="fa fa-info"></i>
                    Upload dokumen berformat gambar <b>jpeg,jpg,png,heic</b>
                </div>
            </div>
            <div class="card-body">
               @php
                    $filesRequiredForm = [
            'dokumen_ktp','dokumen_kk','dokumen_skck','dokumen_ijazah_awal','dokumen_ijazah_akhir','dokumen_surat_lamaran','dokumen_surat_kesehatan','dokumen_surat_pengadilan'
        ];
               @endphp
               @if(session('error'))
                <div class="alert alert-danger">
                     {{session('error')}}
                </div>
                @endif

                @if(session('success'))
                <div class="alert alert-success">
                     {{session('success')}}
                </div>
                @endif
               <table class="table table-striped mt-3">
                @foreach ($filesRequiredForm as $input)
                    <tr>
                        <td class="align-right">{{ucwords(str_replace('_',' ',$input))}}</td>
                        <td>
                            @if ($edit->$input != null)
                                <a href="#" data-toggle="modal" data-target="#upload{{$input}}" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Sudah Upload</a>
                            @else
                                <a href="#" data-toggle="modal" data-target="#upload{{$input}}" class="btn btn-primary btn-sm"><i class="fa fa-upload"></i> Upload</a>
                            @endif
                        </td>
                    </tr>


                    <div class="modal fade" id="upload{{$input}}" tabindex="-1" aria-labelledby="upload{{$input}}Label" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="upload{{$input}}Label">Upload {{ucwords(str_replace('_',' ',$input))}}</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                @if($edit->$input != null)
                                    <img src="{{imagebase64($edit->$input)}}" alt="">
                                @endif
                                <img src="" id="preview{{$input}}" alt="" style="display:none">
                                <form action="/upload-dokumen" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="type" value="{{$input}}">
                                    <div class="form-group">
                                        <label for="">Upload {{ucwords(str_replace('_',' ',$input))}}</label>
                                        <input type="file" name="file_{{$input}}" class="form-control"
                                        accept="image/png, image/jpeg, image/jpg"
                                        onchange="document.getElementById('preview{{$input}}').style.display='block';document.getElementById('preview{{$input}}').src = window.URL.createObjectURL(this.files[0])"
                                        >
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100"><i class="fa fa-upload"></i> Upload</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
               @endforeach
               </table>
            </div>
           </div>
        </div>
    </div>
  </div>

  {{-- <form method="post" action="/upload-dokumen" id="formUpload" enctype="multipart/form-data">
    @csrf
    <small class="text-info p-3">* Upload dokumen foto ( jpg,jpeg , png ) atau pdf </small>
    <div class="form-group row">
        <label for="" class="col-3 text-right">Dokumen KTP</label>
        <div class="col-9">
            <input type="file" class="filepond" name="ktp">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-3 text-right">Dokumen Kartu Keluarga</label>
        <div class="col-9">
            <input type="file" class="filepond" name="kk">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-3 text-right">Ijazah Awal</label>
        <div class="col-9">
            <input type="file" class="filepond" name="ijazah_awal">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-3 text-right">Ijazah Akhir</label>
        <div class="col-9">
            <input type="file" class="filepond" name="ijazah_akhir">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-3 text-right">Surat Lamaran</label>
        <div class="col-9">
            <input type="file" class="filepond" name="surat_lamaran">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-3 text-right">Surat Kesehatan</label>
        <div class="col-9">
            <input type="file" class="filepond" name="surat_kesehatan">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-3 text-right">Dokumen SKCK</label>
        <div class="col-9">
            <input type="file" class="filepond" name="skck">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-3 text-right">Surat Pengadilan
            <br>
            <small> Surat pengadilan negri yang meliputi tidak pernah dijatuhi tindak pidana/sedang menjalankan hukuman</small>
        </label>
      
        <div class="col-9">
            <input type="file" class="filepond" name="surat_pengadilan">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-3">

        </div>
        <div class="col-9">
            <button type="submit" id="uploadBtn" class="btn btn-primary w-100"><i class="fa fa-upload"></i> Upload dokumen</button>
        </div>
    </div>

</form> --}}
@endsection

