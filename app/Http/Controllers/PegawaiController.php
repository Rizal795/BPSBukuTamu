<?php

namespace App\Http\Controllers;

use App\Models\Devisi;
use App\Models\Jabatan;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\Models\Tamu;
use App\Exports\PegawaiExport;
use PDF;
use Excel;
use Illuminate\Support\Facades\Validator;


class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan = Jabatan::all()->pluck('nama_jabatan','id');
        $devisi = Devisi::all()->pluck('nama_devisi', 'id');
        return view('admin.pegawai.index', compact('jabatan', 'devisi'));
    }

    public function data()
    {
        # code...
        $item = Pegawai::join('devisi', 'devisi.id', 'pegawai.devisi')
        ->leftJoin('jabatan', 'jabatan.id', 'pegawai.jabatan')
        ->select('pegawai.*','nama_devisi','nama_jabatan')
        ->get();
        
        return datatables()
        ->of($item)
        ->addIndexColumn()
        ->addColumn('aksi', function ($item){
            return '
            <div class="btn-groub">
            <a href="#" class="btn btn-warning shadow btn-xs sharp me-1 editIcon" id="'.$item->id.'" data-toggle="modal" data-target=".editRowModal"><i class="fa fa-pencil"></i></a>
            <a href="#" type="button" class="btn btn-danger shadow btn-xs sharp deleteIcon" id="'.$item->id.'"><i class="fa fa-trash"></i></a>
            </div>
            ';
        })
        ->rawColumns(['aksi'])
        ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nip' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'devisi' => 'required',
            'jabatan' => 'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
    
        $data = new Pegawai();
        $data->nip = $request->nip;
        $data->nama = $request->nama;
        $data->jk = $request->jk;
        $data->alamat = $request->alamat;
        $data->devisi = $request->devisi;
        $data->jabatan = $request->jabatan;
        $data->save();

        return response()->json([
            'status'=>200,
            'message'=>'Berhasil'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = $request->id;
		$emp = Pegawai::find($id);
        
		return response()->json($emp);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nip' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'devisi' => 'required',
            'jabatan' => 'required',

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        $emp = Pegawai::find($request->emp_id);
		$empData = [
            'nip' => $request->nip,  
            'nama' => $request->nama,  
            'jk' => $request->jk,  
            'alamat' => $request->alamat,  
            'devisi' => $request->devisi,  
            'jabatan' => $request->jabatan,  
        ];
		$emp->update($empData);
		return response()->json([
			'status' => 200,
		]);
    }

    public function cetak()
    {
        $pegawai = Pegawai::join('devisi', 'devisi.id', 'pegawai.devisi')
        ->leftJoin('jabatan', 'jabatan.id', 'pegawai.jabatan')
        ->select('pegawai.*','nama_devisi','nama_jabatan')
        ->get();
       //  $pegawai = Tamu::all();
        $no = 1;
        $pdf = PDF::loadview('admin.pegawai.cetak', ['pegawai' => $pegawai], ['no' => $no]);
        return $pdf->download('laporan-pegawai.pdf');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
		Pegawai::destroy($id);
    }
    public function export_excel()
	{
		return Excel::download(new PegawaiExport, 'pegawai.xlsx');
	}
}
