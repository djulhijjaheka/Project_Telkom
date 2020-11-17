<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Imports\PegawaiImport;
use App\Exports\PegawaiExport;
use Maatwebsite\Excel\Facades\Excel;
use Session;

class PegawaiController extends Controller
{
    public function index()
    {
        $result_pegawai = Pegawai::orderBy('created_at','asc')
            ->paginate(30);
        return \view('dashboard.index',compact('result_pegawai'));
    }

    public function import_excel(Request $request)
	{
		$file = $request->file('file');

		$nama_file = rand().$file->getClientOriginalName();

		$file->move('file_pegawai',$nama_file);

		Excel::import(new PegawaiImport, public_path('/file_pegawai/'.$nama_file));

		Session::flash('sukses','Data Pegawai Berhasil Diimport!');

		return redirect('/')->with('alert-success', 'Data Berhasil Diimport');
    }

    public function export() 
    {
        return Excel::download(new PegawaiExport, 'pegawai.csv');
    }
}
