<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Http\Request;

class bukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = buku::all();
        return view('halaman.backend.buku.index',['buku'=>$buku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('halaman.backend.buku.tambahbuku');
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
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'jumlah_buku' => 'required',
            'lokasi' => 'required',
            'cover' => 'required',

        ]);
        //Menganmbil data cover dari Form
        $file = $request->file('cover');
        //Lokasi Gambar akan diupload(otomatis membuat folder baru di folder public)
		$tujuan_upload = public_path('public\Image');
        //Menggabungkan alamat dari file gambar dengan nama file
        $url = $tujuan_upload."\\".date('YMD')."-".$file->getClientOriginalName();
        $cover = date('YMD')."-".$file->getClientOriginalName();
        //Anying Anying

        $file->move($tujuan_upload,$url);
        //Dahlah
        //Anying lah
        $buku = new buku();
        $buku->judul = $request->judul;
        $buku->pengarang = $request->pengarang;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->jumlah_buku = $request->jumlah_buku;
        $buku->lokasi = $request->lokasi;
        $buku->cover = $cover;

        $buku->save();

        return redirect('buku')->with('status', 'Data Berhasil Ditambah');
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
        $edit = buku::find($id);
        return view('halaman.backend.buku.editbuku', compact('edit'));
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
                if ($request->cover != null) {

                    //Menganmbil data cover dari Form
                    $file = $request->file('cover');
                    //Lokasi Gambar akan diupload(otomatis membuat folder baru di folder public)
                    $tujuan_upload = public_path('public\Image');
                    //Menggabungkan alamat dari file gambar dengan nama file
                    $url = $tujuan_upload."\\".date('YMD')."-".$file->getClientOriginalName();
                    $cover = date('YMD')."-".$file->getClientOriginalName();
                    //Anying Anying

                    $file->move($tujuan_upload,$url);
                    //Dahlah
                    //Anying lah
                }
                $buku = buku::find($id);
                $buku->judul = $request->judul;
                $buku->pengarang = $request->pengarang;
                $buku->penerbit = $request->penerbit;
                $buku->tahun_terbit = $request->tahun_terbit;
                $buku->jumlah_buku = $request->jumlah_buku;
                $buku->lokasi = $request->lokasi;
                if ($request->cover != null) {
                    $buku->cover = $cover;
                }

                $buku->save();

                return redirect('buku')->with('status', 'Data Berhasil Ditambah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = buku::find($id);
        $buku->delete();

        return redirect('buku')->with('status', 'Data Berhasil Dihapus');
    }
}
