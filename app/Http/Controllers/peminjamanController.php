<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Mahasiswa;
use App\Models\Peminjaman;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;

class peminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = peminjaman::where(['status'=> 'kembali'])->get();
        return view('halaman.backend.peminjaman.index',['peminjaman'=>$peminjaman]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mahasiswa = mahasiswa::all();
        $buku = buku::all();
        return view('halaman.backend.peminjaman.tambahpeminjaman',[
            'mahasiswa' => $mahasiswa,
            'buku' => $buku
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
        $peminjaman = new peminjaman;
        $peminjaman->mahasiswa_id = $request->mahasiswa_id;
        $peminjaman->buku_id = $request->buku_id;
        $peminjaman->tgl_pinjam = $request->tgl_pinjam;
        $peminjaman->tgl_kembali = $request->tgl_kembali;
        $peminjaman->status = $request->status;
        $peminjaman->save();

    $buku = Buku::where(['id'=> $request->buku_id])->first();
    $kurangi = $buku->jumlah_buku - 1;
    Buku::where(['id' => $request->buku_id])->update(['jumlah_buku' => $kurangi]);
    return redirect('admin')->with('status','data berhasil ditambahkan');
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
        // $edit = peminjaman::find($id);
        // return view('halaman.backend.p.editmahasiswa', compact('edit'));
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
            $ambil = Peminjaman::where(['id'=> $id])->first();
            $buku = Buku::where(['id'=> $ambil->id])->first();
            $plus = $buku->jumlah_buku +1;
            $buku = Buku::where(['id' => $ambil->id])->update(['jumlah_buku' => $plus]);
            $ambil->update(['status'=>'kembali']);
            if ($buku) {
                return redirect('/peminjaman');
            }else{
                return 'Eror';
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
        $peminjaman = peminjaman::find($id);
        $peminjaman->delete();

        return redirect('peminjaman')->with('status', 'Data Berhasil Dihapus');
    }

    public function cetakpeminjaman()
    {
        $peminjaman = Peminjaman::get();
        $pdf = FacadePdf::loadView('halaman.backend.peminjaman.cetakpeminjaman', ['peminjaman' => $peminjaman]);
        return $pdf->download('data_posting' . time() . rand('99', '8888') . '.pdf');
    }
}
