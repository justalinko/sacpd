<?php

function status($status)
{
    switch ($status) {
        case 'menunggu':
            return '<span class="badge bg-warning">Menunggu</span>';
        case 'diterima':
            return '<span class="badge bg-success">Diterima</span>';
        case 'ditolak':
            return '<span class="badge bg-danger">Ditolak</span>';
    }
}

function status2class($status)
{
    switch ($status) {
        case 'menunggu':
            return 'warning';
        case 'diterima':
            return 'success';
        case 'ditolak':
            return 'danger';
    }
}

function status2icon($status)
{
    switch ($status) {
        case 'menunggu':
            return '<i class="fa fa-4x fa-clock-o text-warning"></i>';
        case 'diterima':
            return '<i class="fa fa-4x fa-check-circle text-success"></i>';
        case 'ditolak':
            return '<i class="fa fa-4x fa-times-circle text-danger"></i>';
    }
}

function dokumen( $ktp ,  $kk ,  $ijazah_1 ,  $ijazah_2,  $surat_lamaran ,  $surat_kesehatan,  $skck ,  $surat_pengadilan )
{
    $html = '';
    if($ktp == null){
        $html.= '<i class="fa fa-times-circle text-danger"></i> KTP &nbsp;';
    }else{
        $html.= '<i class="fa fa-check-circle text-success"></i> KTP &nbsp;';
    }

    if($kk == null){
        $html.= '<i class="fa fa-times-circle text-danger"></i> KK &nbsp;';
    }else{
        $html.= '<i class="fa fa-check-circle text-success"></i> KK &nbsp;';
    }

    if($ijazah_1 == null){
        $html.= '<i class="fa fa-times-circle text-danger"></i> Ijazah Awal &nbsp;';
    }else{
        $html.= '<i class="fa fa-check-circle text-success"></i> Ijazah Awal &nbsp;';
    }

    if($ijazah_2 == null){
        $html.= '<i class="fa fa-times-circle text-danger"></i> Ijazah Akhir &nbsp;';
    }else{
        $html.= '<i class="fa fa-check-circle text-success"></i> Ijazah Akhir &nbsp;';
    }

    if($surat_lamaran == null){
        $html.= '<i class="fa fa-times-circle text-danger"></i> Surat Lamaran &nbsp;';
    }else{
        $html.= '<i class="fa fa-check-circle text-success"></i> Surat Lamaran &nbsp;';
    }

    if($surat_kesehatan == null){
        $html.= '<i class="fa fa-times-circle text-danger"></i> Surat Kesehatan &nbsp;';
    }else{
        $html.= '<i class="fa fa-check-circle text-success"></i> Surat Kesehatan &nbsp;';
    }

    if($skck == null){
        $html.= '<i class="fa fa-times-circle text-danger"></i> SKCK &nbsp;';
    }else{
        $html.= '<i class="fa fa-check-circle text-success"></i> SKCK &nbsp;';
    }

    if($surat_pengadilan == null){
        $html.= '<i class="fa fa-times-circle text-danger"></i> Surat Pengadilan &nbsp;';
    }else{
        $html.= '<i class="fa fa-check-circle text-success"></i> Surat Pengadilan &nbsp;';
    }

    return $html;
}

function imagebase64($path)
{
   if(substr_count($path, 'http') > 0){
       return $path;
   }else{
    $type = pathinfo($path, PATHINFO_EXTENSION);
    if(file_exists($path) == false){
        $path = storage_path('app/public/' . $path);
    }
    if(is_file($path)){
    ob_start();
    $data = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ob_end_clean();
    }else{
        return 'https://via.placeholder.com/640x480.png/dddddd?text=dokumen+tidak+ditemukan';
    }
    return $base64;
   }
}
function pdfpreview($path)
{
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:application/' . $type . ';base64,' . base64_encode($data);
    return $base64;
}