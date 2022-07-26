<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sewa;
use App\Models\Lapangan;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $nomor = 1;
        $sewa = Sewa::all();
        return view('page.sewa.index', compact('sewa','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lapangan = Lapangan::all();
        return view('page.sewa.form',compact('lapangan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sewa = new Sewa;

        $sewa->nama = $request->nama;
        $sewa->tanggal = $request->tanggal;
        $sewa->lapangans_id = $request->lapangan;
        $sewa->nohp = $request->nohp;
        $sewa->uangmuka = $request->uangmuka;
        $sewa->sisabayar = $request->sisabayar;
        $sewa->totalbayar = $request->totalbayar;
        $sewa->save();

        return redirect('/sewa');
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
        $sewa  = Sewa::find($id);
        $lapangan = Lapangan::all();
        return view('page.sewa.edit',compact('sewa','lapangan'));
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
        $sewa = Sewa::find($id);

        $sewa->nama = $request->nama;
        $sewa->tanggal = $request->tanggal;
        $sewa->lapangans_id = $request->lapangan;
        $sewa->nohp = $request->nohp;
        $sewa->uangmuka = $request->uangmuka;
        $sewa->sisabayar = $request->sisabayar;
        $sewa->totalbayar = $request->totalbayar;
        $sewa->save();

        return redirect('/sewa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sewa = Sewa::find($id);
        $sewa->delete();
        return redirect('/sewa');
    }
}
