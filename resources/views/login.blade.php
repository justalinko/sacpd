
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{env('APP_NAME')}}</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body >

    <div class="m-4 p-4">
    
            <div class="row">
                
                <div class="col-md-8">
                    @foreach(\App\Models\Post::all() as $new)
                    <div class="card mb-3" >
                        <div class="row g-0">
                          <div class="col-md-4" style="max-width: 200px;">
                            <img src="{{imagebase64($new->image,'images/' , 'Tidak ada gambar')}}" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">{{$new->title}}</h5>
                              <p class="card-text">
                                    {!!substr($new->content,0,100)!!} ... <a href="#" data-toggle="modal" data-target="#post_{{$new->id}}" class="btn btn-link">Selengkapnya</a>
                              </p>
                              <p class="card-text"><small class="text-body-secondary">
                            {{$new->created_at->diffForHumans()}}    
                            </small></p>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Modal -->
<div class="modal fade" id="post_{{$new->id}}" tabindex="-1" role="dialog" aria-labelledby="post_{{$new->id}}label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="post_{{$new->id}}label">{{$new->title}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="{{imagebase64($new->image , 'images/' , 'tidak ada gambar')}}" class="img img-thumbnail img-responsive" alt="{{$new->title}}">
            <p class="mt-3">
            {!! $new->content !!}
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>
                    @endforeach
                      
                </div>
                <div class="col-md-4">
                    <div >
                        <div class="login-logo">
                            <a href="{{url('/')}}">
                                <img src="{{asset('images/kab-pati.png')}}" style="width:100px;height:auto">
                                <h1 class="text-dark">{{env('APP_NAME')}}</h1>
                            </a>
                        </div>
                        <div class="login-form">
                            @if(session('error'))
                                <div class="alert alert-danger">{{session('error')}}</div>
                                @endif
                            <form method="POST" method="/login">
                                @csrf
                                <div class="form-group">
                                    <label>Surel</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Kata Sandi</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Masuk</button>
                               
                                <div class="register-link m-t-15 text-center">
                                    <p>Tidak Punya akun ? <a href="/register"> Daftar disini</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
       
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
