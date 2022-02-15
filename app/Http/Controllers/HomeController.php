<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasterBarangModel;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = MasterBarangModel::all();
        return view('index',compact('datas'));
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

        // dd($request->all());
        $request->validate([
            'kode_brg' => 'required|numeric',
            'nama_brg' => 'required',
            'harga_brg' => 'required',
            'stock_brg' => 'required|numeric',
        ]);

        $kode_brg = $request->kode_brg;
        $nama_brg = $request->nama_brg;
        $harga_brg = $request->harga_brg;
        $stock_brg = $request->stock_brg;

        $input = new MasterBarangModel();
        $input->kode_brg = $kode_brg;
        $input->nama_brg = $nama_brg;
        $input->harga_brg = $harga_brg;
        $input->stock_brg = $stock_brg;
        $input->save();

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
        $data = MasterBarangModel::find($id);
        return view('edit', compact('data'));
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
        
        $data = MasterBarangModel::find($request->id);

        $categori_data = [
            'kode_brg' => $request->kode_brg,
            'nama_brg' => $request->nama_brg,
            'harga_brg' => $request->harga_brg,
            'stock_brg' => $request->stock_brg,
           
        ];

        $data->update($categori_data);

        return redirect()->route('cat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = MasterBarangModel::find($id);
        $data->delete();
        return redirect()->route('cat.index');
    }
}
