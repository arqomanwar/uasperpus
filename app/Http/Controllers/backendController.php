<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Mahasiswa;
use App\Models\Peminjaman;

class backendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = peminjaman::where(['status'=> 'pinjam'])->get();
        return view('halaman.backend.utama',['peminjaman'=>$peminjaman]);
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
        //
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

    public function user()
    {
        $user = DB::table('users')->get();
        return view('halaman.backend.user.index',compact('user'));
    }

    public function tambahuser()
    {
        return view('halaman.backend.user.tambahuser');
    }

    public function simpantambahuser(Request $request)
    {

        $saring = $request->validate([
            'name' => 'required|',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $saring['password'] = bcrypt($saring['password']);
        $db = DB::table('users')->insert($saring);
        if ($db) {
            return redirect('/user');
        }
    }

    public function hapususer($user_id)
    {
        DB::table('users')->where('id', $user_id)->delete();
        return redirect('/user');
    }

    public function ubahuser($user_id)
    {
        $edit = DB::table('users')->find($user_id);
        return view('halaman.backend.user.edituser', compact('edit'));
    }

    public function simpanubahuser(Request $request, $user_id)
    {
        $data = $request->validate([
            'name' => 'required|',
            'email' => 'required|email',
            'password' => 'required',
        ]);
       // cek jika password dilakukan pengubahan
        if ($request['password']) {
            $data['password'] = bcrypt($request['password']);
            DB::table('users')->where('id', $user_id)->update($data);
            return redirect('/user');
        } else {
            DB::table('users')->where('id', $user_id)->update($data);
            return redirect('/user'); ;
        }
    }

}
