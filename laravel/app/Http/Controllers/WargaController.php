<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class WargaController extends Controller
{
    public function index(){
        //mengambil data dari database
        $warga = DB::table('data_warga')->get();
        return view('list-warga',['data_warga' => $warga]);
    }public function tambah(){
        return view('daftar');
    }public function simpan(Request $request){  
        //kelola foto
        if($request->hasFile('image')){
            $request -> validate([
                'image' => 'image|nullable|mimes:jpg,png,jpeg|file|max:1024',
            ]);
            $namaFoto = time().'.'.$request->image->extension();
            $request->image->move(public_path('img'), $namaFoto);
        }else{
            if($request->jk == 'l'){     
                $namaFoto='nopic-male.jpg';
            }elseif($request->jk == 'p'){
                $namaFoto='nopic-female.jpg';
            }
        }
        if($request->nama == '' || $request->nik == '' || $request->jk == '' || $request->agama == '...' || $request->lahir == ''){
            Session::flash('kurang','Lengkapi data terlebih dahulu');
            return redirect('daftar');
        }else{
            //insert data ke dalam tabel
            DB::table('data_warga')->insert([
                'nama' => $request->nama,
                'nik' => $request->nik,
                'jk' => $request->jk,
                'agama' => $request->agama,
                'lahir' => $request->lahir,
                'foto' => $namaFoto,
            ]);
            return redirect('list-warga');
        }
    }public function edit($nik){
        $warga = DB::table('data_warga')->where('nik',$nik)->get();
        return view('edit',['data_warga' => $warga]);
    }public function update(Request $request){

        $warga = DB::table('data_warga')->where('nik',$request->nik)->get();
        if($request->nama == '' || $request->jk == '' || $request->agama == '...' || $request->lahir == ''){
            Session::flash('kurang','Lengkapi data terlebih dahulu');
            return view('edit',['data_warga' => $warga]);
        }

        if($request->hasFile('image')){
           
            $request -> validate([
                'image' => 'image|mimes:jpg,png,jpeg|file|max:1024',
            ]);
            $namaFoto = time().'.'.$request->image->extension();
            $request->image->move(public_path('img'), $namaFoto);       
            
            foreach($warga as $w){
                if($w->foto == 'nopic-male.jpg' || $w->foto == 'nopic-female.jpg'){
                }else{
                    File::delete(public_path('img').'\\'.$w->foto);
                }
            }

            
        }else{
            if($request->jk == 'l'){
                $namaFoto = 'nopic-male.jpg';
            }elseif($request->jk == 'p'){
                $namaFoto = 'nopic-female.jpg';
            }
        }
        DB::table('data_warga')->where('nik',$request->nik)->update([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'agama' => $request->agama,
            'lahir' => $request->lahir,
            'foto' => $namaFoto
        ]);

        return redirect('list-warga');
    }public function hapus($nik){
        $warga = DB::table('data_warga')->where('nik',$nik)->get();

        foreach($warga as $w){
            if($w->foto == 'nopic-male.jpg' || $w->foto == 'nopic-female.jpg'){
            }else{
                File::delete(public_path('img').'\\'.$w->foto);
            }
            DB::table('data_warga')->where('nik',$nik)->delete();
    
            return redirect('list-warga');
        }
    }

        
}