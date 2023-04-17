<?php

namespace App\Http\Controllers;

use App\Models\Calon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FileController extends Controller
{
    
    public function uploadDokumen(Request $request)
    {
        $user = $request->user();
        $calon = Calon::where('user_id' , $user->id)->first();
        $type = $request->type;
        $file = $request->file('file_'.$type);
        $allowedExt = ['jpg' , 'jpeg' , 'png' , 'heic'];
        if($request->hasFile('file_'.$type)){
       
       
            $file = $request->file('file_'.$type);
            $getExtension = $file->getClientOriginalExtension();
            if(!in_array(strtolower($getExtension) , $allowedExt)){
                return redirect()->back()->with('error', 'File tidak didukung');
            }
            $fileName = Str::slug($calon->jabatan).'-'.Str::slug($user->name).'-'.$type.'.'.$getExtension;
            $file->move(storage_path('app/public/'),$fileName);
            $calon->$type = storage_path('app/public/'.$fileName);
            $calon->save();
            return redirect()->back()->with('success', 'Berhasil mengupload dokumen');
        }else{
            return redirect()->back()->with('error', 'Gagal mengupload dokumen');
        }
      
    }
}
