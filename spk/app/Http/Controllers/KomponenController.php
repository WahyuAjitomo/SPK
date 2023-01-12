<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Models\Komponen;
use App\Models\Criteria;

class KomponenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $itemkomponen = Komponen::with(relations:'criteria')->orderBy('criteria_id', 'asc')->orderBy('nilai', 'desc')->paginate(20);
        $data = array('title' => 'Komponen',
                    'itemkomponen' => $itemkomponen);
        return view('komponen.index', $data)->with('no', ($request->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array('title' => 'Masukkan Komponen Baru');
        $itemcriteria = Criteria::all();
        return view('komponen.create', compact('itemcriteria'), $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_komponen' => 'required',
            'criteria_id' => 'required',
            'nilai' => 'required',
        ],[
            'criteria_id.required' => 'Kriteria tidak boleh kosong'
        ]);
        $itemuser = $request->user();
        $inputan = $request->all();
        $inputan['status'] = 'publish';
        $itemkomponen = Komponen::create($inputan);
        return redirect()->route('komponen.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array($id);
        return view('komponen.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $itemkomponen = Komponen::findOrFail($id);
        $itemcriteria = Criteria::all();

        $data = array('title' => 'Edit Komponen',
                    'itemkomponen' => $itemkomponen);
        return view('komponen.edit', compact('itemcriteria'), $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Komponen $komponen)
    {
        $this->validate($request,[
            'nama_komponen' => 'required',
            'criteria_id' => 'required',
            'nilai' => 'required',
        ]);
        $itemkomponen = Komponen::findOrFail($id);
        $slug = $request->nama_komponen;
        $validasislug = Komponen::where('id', '!=', $id)
                                ->where('created_at', $slug)
                                ->first();
        if ($validasislug) {
            return back()->with('error', 'Slug sudah ada, coba yang lain');
        } else {
            $inputan = $request->all();
            $inputan['slug'] = $slug;
            $itemkomponen->update($inputan);
            return redirect()->route('komponen.index')->with('success', 'Data berhasil diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itemkomponen = Komponen::findOrFail($id);//cari berdasarkan id = $id, 
        if ($itemkomponen->delete()) {
            return back()->with('success', 'Data berhasil dihapus');
        } else {
            return back()->with('error', 'Data gagal dihapus');
        }
    }
}
