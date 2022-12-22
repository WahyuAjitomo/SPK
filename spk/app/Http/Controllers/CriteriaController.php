<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Criteria;

class CriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $itemcriteria = Criteria::orderby('code', 'asc')->paginate(20);
        $data = array('title' => 'Criteria',
                    'itemcriteria' => $itemcriteria);
        return view('criteria.index', $data)->with('no', ($request->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array('title' => 'Form Kriteria Baru');
        return view('criteria.create', $data);
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
            'code' => 'required',
            'name' => 'required',
            'bobot' => 'required',
            'slug_criteria' => 'required'
        ]);
        $itemuser = $request->user();
        $slug = $request->slug_criteria;
        $inputan = $request->all();
        $inputan['slug_criteria'] = $slug;
        $inputan['status'] = 'publish';
        $itemcriteria = Criteria::create($inputan);
        return redirect()->route('criteria.index')->with('success', 'Data berhasil disimpan');
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
        return view('criteria.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $itemcriteria = Criteria::findOrFail($id);
        
        $data = array('title' => 'Form Edit Criteria',
                'itemcriteria' => $itemcriteria);
        return view('criteria.edit', $data);

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
        $this->validate($request,[
            'code' => 'required',
            'name' => 'required',
            'bobot' => 'required',
            'slug_criteria' => 'required'
        ]);
        $itemcriteria = Criteria::findOrFail($id);
        $slug = $request->slug_criteria;
        $validasislug = Criteria::where('id', '!=', $id)
                                ->where('slug_Criteria', $slug)
                                ->first();
        if ($validasislug) {
            return back()->with('error', 'Slug sudah ada, coba yang lain');
        } else {
            $inputan = $request->all();
            $inputan['slug'] = $slug;
            $itemcriteria->update($inputan);
            return redirect()->route('criteria.index')->with('success', 'Data berhasil diupdate');
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
        $itemcriteria = Criteria::findOrFail($id);//cari berdasarkan id = $id, 
        if ($itemcriteria->delete()) {
            return back()->with('success', 'Data berhasil dihapus');
        } else {
            return back()->with('error', 'Data gagal dihapus');
        }

    }
}
