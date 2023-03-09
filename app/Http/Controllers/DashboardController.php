<?php

namespace App\Http\Controllers;

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
        $calon->save();
        return redirect('/calon-perangkat')->with('success', 'Berhasil mengubah data');
    }
}
