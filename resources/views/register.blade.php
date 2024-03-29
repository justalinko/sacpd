
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
<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="{{url('/')}}">
                        <h1 class="text-white">{{env('APP_NAME')}}</h1>
                    </a>
                </div>
                <div class="login-form">
                    <form method="POST" method="/register">
                        @csrf
                        <div class="form-group">
                            <label>Nama </label>
                            <input type="text" name="name" class="form-control" placeholder="Nama anda">
                            <div class="alert alert-danger d-none" id="error_nik"></div>
                        </div>
                        <div class="form-group">
                            <label>NIK </label>
                            <input type="tel" name="nik" class="form-control" placeholder="NIK" minlength="16">
                        </div>
                        <div class="form-group">
                            <label>Jabatan yang di daftar </label>
                            <input type="text" name="jabatan" class="form-control" placeholder="Jabatan yang di daftar">
                        </div>
                        <div class="form-group">
                            <label>Surel</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Kata Sandi</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <div class="alert d-none" id="alert_password"></div>
                        </div>
                        <div class="form-group">
                            <label>Konfirmasi Kata Sandi</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirm">
                            <div class="alert d-none" id="alert_password2"></div>
                        </div>
                        
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Daftar</button>
                       
                        <div class="register-link m-t-15 text-center">
                            <p>Sudah Punya akun ? <a href="/login"> Masuk disini</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script>
        $(document).ready(function(){

            $('input[name="nik"]').keyup(function(){
                var nik = $(this).val();
                // check nik must 16 digit
                if(nik.length !== 16)
                {
                    $('input[name="nik"]').removeClass('is-valid').addClass('is-invalid');
                    $('#error_nik').removeClass('d-none').addClass('d-block');
                    $('#error_nik').html('NIK harus 16 digit');

                }else{
                    $('input[name="nik"]').removeClass('is-invalid').addClass('is-valid');
                    $('#error_nik').removeClass('d-block').addClass('d-none');
                }
            });

            $('input[name="password_confirmation"]').keyup(function(){
                var password = $('input[name="password"]').val();
                var password_confirmation = $(this).val();
                // check password confirmation
                if(password_confirmation !== password)
                {
                    $('input[name="password_confirmation"]').addClass('is-invalid').removeClass('is-valid');
                    $('#alert_password2').addClass('alert-danger d-block').removeClass('d-none').html('Konfirmasi password tidak sama');
                }else{
                    $('input[name="password_confirmation"]').removeClass('is-invalid').addClass('is-valid');
                    $('#alert_password2').addClass('alert-success d-block').removeClass('d-none alert-danger').html('Password valid');
                }
            });

            $('input[name="password"]').keyup(function(){
                // combine alpha num and char , min 8 digit password
                var password = $(this).val();
                var regex = /^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]{8,}$/;
                if(password.match(regex))
                {
                    $('input[name="password"]').removeClass('is-invalid').addClass('is-valid');
                    $('#alert_password').addClass('alert-success d-block').html('Password cukup kuat').removeClass('d-none alert-danger');
                }else{
                    $('input[name="password"]').addClass('is-invalid').removeClass('is-valid');
                    $('#alert_password').addClass('alert-danger d-block').html('Password harus berisi huruf Besar dan kecil , angka, minimal 8 digit').removeClass('d-none');
                }
            })
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
   


</body>
</html>
