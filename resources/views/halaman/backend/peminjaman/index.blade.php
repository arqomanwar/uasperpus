@extends('halaman.backend.app')

@section('isi')
    @include('tambahan.backend.cards')

    <div class="container-fluid mt--7">

        <div class="row mt-5">
            <div class="col-xl-15 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Daftar Transaksi</h3>
                            </div>
                            <a href="{{ route('cetakpeminjaman') }}" class="btn btn-info btn-sm my-3">
                                <i data-feather="printer"></i> Cetak PDF
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">NAMA MAHASISWA</th>
                                    <th scope="col">BUKU</th>
                                    <th scope="col">Tanggal Pinjam</th>
                                    <th scope="col">Tanggal Kembali</th>
                                    <th scope="col">STATUS</th>
                                    <th scope="col">Pilihan</th>
                                </tr>
                            </thead>
                            @php
                            $NO = 1;
                            @endphp
                            <tbody>
                            @foreach ($peminjaman as $peminjaman)
                            <tr>
                                <td scope="row">
                                    {{$NO++}}
                                </td>
                                <td>

                                    {{$peminjaman->mahasiswa->nama_mhs}}
                                </td>
                                <td>

                                    {{$peminjaman->buku->judul}}
                                </td>
                                <td>
                                    {{date('d/m/y', strtotime($peminjaman->tgl_pinjam))}}
                                </td>
                                <td>
                                     {{date('d/m/y', strtotime($peminjaman->tgl_kembali))}}
                                </td>
                                <td>
                                    @if($peminjaman->status == 'pinjam')
                                        <form method="post" action="{{ url('peminjaman'.'/'. $peminjaman->id ) }}">
                                            @method('PUT')
                                            @csrf
                                            <label class="badge badge-warning">
                                                <input type="submit" value="Pinjam" style="border:none;background:transparent;font-size:13px;cursor:pointer">
                                            </label>
                                        </form>
                                    @else
                                      <label class="badge badge-success">Kembali</label>
                                    @endif
                                </td>

                                <td>
                                    <form method="post" action="{{ url('peminjaman/' .$peminjaman->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


         @include('tambahan.backend.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
