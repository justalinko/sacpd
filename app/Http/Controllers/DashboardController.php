<?php

namespace App\Http\Controllers;

use App\Models\Hasiltest;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['totalCalon'] = \App\Models\Calon::count();
        $data['calonLolos'] = \App\Models\Calon::where('status','lolos')->count();
        $data['calonTidakLolos'] = \App\Models\Calon::where('status','tidak lolos')->count();
        $data['calons'] = \App\Models\Calon::all();
        return view('dashboard',$data);
    }
    public function calon()
    {
        $data['calons'] = \App\Models\Calon::all();
        return view('calon',$data);
    }
    public function dokumen()
    {
        $data['edit'] = \App\Models\Calon::where('user_id',auth()->user()->id)->first();
        return view('dokumen',$data);
    }

    public function calonDelete(Request $request)
    {
        $id = $request->id;
        $calon = \App\Models\Calon::find($id);
        $calon->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data');
    }

    public function calonEdit(Request $request)
    {
        $id = $request->id;
        $calon = \App\Models\Calon::find($id);
        $data['edit'] = $calon;
        $data['isEdit'] = true;
         return view('calon_form',$data);
    }
    public function calonEditPost(Request $request)
    {
        $id = $request->id;
        $calon = \App\Models\Calon::find($id);
        $calon->jabatan = $request->jabatan;
        $calon->nik = $request->nik;
        $calon->status = $request->status;
        $calon->keterangan = $request->keterangan;
        $calon->catatan = $request->catatan;
        $calon->save();
        return redirect('/calon-perangkat')->with('success', 'Berhasil mengubah data');
    }

    public function semuaDokumen()
    {
        $data['calons'] = \App\Models\Calon::all();
        return view('semua_dokumen',$data);
    }
    public function dokumenDetail(Request $request)
    {
        $data['c'] = \App\Models\Calon::find($request->detail);
        return view('semua_dokumen',$data);
    }
    public function hasilTest(Request $request)
    {
        $filter = $request->filter;
        switch($filter){
            case 'administrasi':
                $data['calons'] = \App\Models\Calon::where('keterangan','test administrasi')->get();
                $data['filter'] = 'Data semua calon tes administrasi';
                return view('hasil_test',$data);
            break;
            case 'psikologi':
                $data['calons'] = \App\Models\Calon::where('keterangan','test psikologi')->get();
                $data['filter'] = 'Data semua calon tes psikologi';
                return view('hasil_test',$data);
            break;
            case 'wawancara':
                $data['calons'] = \App\Models\Calon::where('keterangan','test wawancara')->get();
                $data['filter'] = 'Data semua calon tes wawancara';
                return view('hasil_test',$data);
            break;
            case 'pengetahuan':
                $data['calons'] = \App\Models\Calon::where('keterangan','test pengetahuan')->get();
                $data['filter'] = 'Data semua calon tes pengetahuan';
                return view('hasil_test',$data);
            break;
            case 'lolos':
                $data['calons'] = \App\Models\Calon::where('keterangan','lolos')->get();
                $data['filter'] = 'Data semua calon yang lolos';
                return view('hasil_test',$data);
            break;
            case 'gagal':
                $data['calons'] = \App\Models\Calon::where('keterangan','gagal')->get();
                $data['filter'] = 'Data semua calon yang gagal';
                return view('hasil_test',$data);
            break;
            default:
                $data['calons'] = \App\Models\Calon::all();
                $data['filter'] = 'Data semua calon';
                return view('hasil_test',$data);
            break;
        }
    }

    public function hasilTestEdit($id)
    {
        $data['hasil'] = Hasiltest::where('calon_id' , $id)->first();
        return view('hasil_test_form',$data);
    }
    public function hasilTestEditPost(Request $request)
    {
        $hasil = Hasiltest::where('calon_id' , $request->id)->first();
        $hasil->hasil_administrasi = $request->administrasi;
        $hasil->hasil_pengetahuan = $request->pengetahuan;
        $hasil->hasil_wawancara = $request->wawancara;
        $hasil->hasil_psikologi = $request->psikologi;

        $hasil->save();

        return redirect('/calon-perangkat')->with('success' , 'Berhasil mengubah hasil test ');
    }
}
