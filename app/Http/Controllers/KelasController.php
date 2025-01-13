<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    //
    function index()
    {
       // return '<h1>SAYA SISWA dari controller</h1>';
       // $data=siswa::all();
       // return $data;
       $data=kelas::orderBy('id','desc')->paginate(1);
       return view('kelas/index')->with('data',$data);
    }
    function detail($id) {
        // return "<h1>SAYA SISWA dari controller dengan ID $id</h1>";
        $data=kelas::where('id',$id)->first();
        return view('kelas/detail')->with('data',$data);
    }
}