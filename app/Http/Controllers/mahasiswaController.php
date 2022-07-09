<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = mahasiswa::all();
        return view('halaman.backend.mahasiswa.index',['mahasiswa'=>$mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fakultas = fakultas::all();
        $prodi = prodi::all();
        return view('halaman.backend.mahasiswa.tambahmahasiswa',[
            'fakultas' => $fakultas,
            'prodi' => $prodi
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|min:3',
            'nama_mhs' => 'required',
            'prodi_id' => 'required',
            'fakultas_id' => 'required',
        ]);
        $mahasiswa = new Mahasiswa();
        $mahasiswa->user_id = auth()->user()->id;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama_mhs = $request->nama_mhs;
        $mahasiswa->fakultas_id = $request->fakultas_id;
        $mahasiswa->prodi_id = $request->prodi_id;
        $mahasiswa->save();

        return redirect('mahasiswa')->with('status', 'Data Berhasil Ditambah');
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
        $edit = mahasiswa::find($id);
        $fakultas = fakultas::all();
        $prodi = prodi::all();
        return view('halaman.backend.mahasiswa.editmahasiswa', compact('edit', 'fakultas', 'prodi'));
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
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->user_id = auth()->user()->id;
        $mahasiswa->nim = $request->get('nim');
        $mahasiswa->nama_mhs = $request->get('nama_mhs');
        $mahasiswa->fakultas_id = $request->fakultas_id;
        $mahasiswa->prodi_id = $request->fakultas_id;
        $mahasiswa->save();
    return redirect('mahasiswa')->with('status', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->delete();

        return redirect('mahasiswa')->with('status', 'Data Berhasil Dihapus');
    }
}
