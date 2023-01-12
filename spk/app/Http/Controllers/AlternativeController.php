<?php

namespace App\Http\Controllers;

use App\Models\Komponen;
use App\Models\Criteria;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Models\Alternative;
use Illuminate\Http\Request;

class AlternativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $itemalternative = Alternative::with(relations:'criteria')->orderBy('criteria_id', 'asc')->paginate(20);
        $itemalternative = Alternative::with(relations:'komponen')->orderBy('komponen_id', 'asc')->paginate(20);
        $data = array('title' => 'Alternative',
                    'itemalternative' => $itemalternative);
        return view('alternative.index', $data)->with('no', ($request->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array('title' => 'Masukkan Alternative Baru');
        $itemkomponen = Komponen::all();
        $itemcriteria = Criteria::all();
        return view('alternative.create', compact('itemkomponen', 'itemcriteria'), $data);
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
            'code_alternative' => 'required',
            'komponen_id' => 'required',
            'criteria_id' => 'required',
            'name_alternative' => 'required',
            
        ],[
            'komponen_id.required' => 'Kriteria tidak boleh kosong'
        ]);
        $itemuser = $request->user();
        $inputan = $request->all();
        $inputan['status'] = 'publish';
        $itemalternative = Alternative::create($inputan);
        return redirect()->route('alternative.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alternative  $alternative
     * @return \Illuminate\Http\Response
     */
    public function show(Alternative $alternative, $id)
    {
        $data = array($id);
        return view('alternative.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alternative  $alternative
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $itemalternative = Alternative::findOrFail($id);
        $itemkomponen = Komponen::all();

        $data = array('title' => 'Edit Alternative',
                    'itemalternative' => $itemalternative);
        return view('alternative.edit', compact('itemkomponen'), $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alternative  $alternative
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'code_alternative' => 'required',
            'criteria_id' => 'required',
            'name_alternative' => 'required',
        ]);
        $itemalternative = Alternative::findOrFail($id);
        $slug = $request->name_alternative;
        $validasislug = Alternative::where('id', '!=', $id)
                                ->where('created_at', $slug)
                                ->first();
        if ($validasislug) {
            return back()->with('error', 'Slug sudah ada, coba yang lain');
        } else {
            $inputan = $request->all();
            $inputan['slug'] = $slug;
            $itemalternative->update($inputan);
            return redirect()->route('alternative.index')->with('success', 'Data berhasil diupdate');
    }}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @param  \App\Models\Alternative  $alternative
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itemalternative = Alternative::findOrFail($id);//cari berdasarkan id = $id, 
        if ($itemalternative->delete()) {
            return back()->with('success', 'Data berhasil dihapus');
        } else {
            return back()->with('error', 'Data gagal dihapus');
        }
    }
}
