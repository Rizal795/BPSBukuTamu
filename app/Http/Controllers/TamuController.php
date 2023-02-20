<?php

namespace App\Http\Controllers;

use App\Models\Devisi;
use App\Models\Tamu;
use Illuminate\Http\Request;
Use Alert;
use Carbon\Carbon;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devisi = Devisi::all()->pluck('nama_devisi','id');
        return view('welcome', compact('devisi'));
    }

    public function data()
    {
        # code...
        // $item = Tamu::orderBy('id', 'desc')->get();
        $item = Tamu::leftJoin('devisi', 'devisi.id', 'tamu.tujuan')
        ->select('tamu.*','nama_devisi')->get();
        
        return datatables()
        ->of($item)
        ->addIndexColumn()
        ->addColumn('hari', function ($item){
            // return Carbon::now()->isoFormat('dddd, D MMMM Y');
            return $item->created_at->isoFormat('dddd, D MMM Y');
        })
        ->addColumn('aksi', function ($item){
            return '
            <div class="btn-groub">
            <a href="#" class="btn btn-warning shadow btn-xs sharp me-1 editIcon" id="'.$item->id.'" data-toggle="modal" data-target=".editRowModal"><i class="fa fa-pencil"></i></a>
            <a href="#" type="button" class="btn btn-danger shadow btn-xs sharp deleteIcon" id="'.$item->id.'"><i class="fa fa-trash"></i></a>
            </div>
            ';
        })
        ->rawColumns(['aksi','hari'])
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
        $data = new Tamu();
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->keperluan = $request->keperluan;
        $data->tujuan = $request->tujuan;
        $data->kontak = $request->kontak;
        $data->save();
        Alert::success('Data Tamu Berhasil Disimpan', 'Success Message');
        return redirect()->back();

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
