@extends('halaman.backend.app')

@section('isi')
    @include('tambahan.backend.cards')

    <div class="container-fluid mt--7">

        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0 pl-3">
                <div class="card shadow">
                    <div class="card-header border-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Tambah Transaksi</h3>
                            </div>
                        </div>
                    </div>
                    <form method="post" action="{{url('peminjaman')}}" autocomplete="off">
                        @csrf



                        @if (session('password_status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('password_status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="pl-lg-4">
                            <div class="form group">
                                <label>NAMA MAHASISWA</label>
                                <select class="form-control" name="mahasiswa_id">
                                    <option value=""> -Pilihan- </option>
                                    @foreach ($mahasiswa as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_mhs }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form group">
                                <label>JUDUL BUKU</label>
                                <select class="form-control" name="buku_id">
                                    <option value=""> -Pilihan- </option>
                                    @foreach ($buku as $data)
                                        <option value="{{ $data->id }}">{{ $data->judul }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-password">Tanggal Pinjam</label>
                                <input type="date" name="tgl_pinjam" id="input-password" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Masukkan Nama Mahasiswa" value="" required>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-password">Tanggal Kembali</label>
                                <input type="date" name="tgl_kembali" id="input-password" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Masukkan Nama Mahasiswa" value="" required>
                            </div>
                            <div class="form-group{{ $errors->has('lokasi') ? ' has-error' : '' }}">
                                <label for="pinjam" class="form-control-label">Lokasi</label>
                                <div class="col-md-15">
                                <select class="form-control" name="status" required="">
                                    <option value="pinjam">PINJAM</option>
                                </select>
                                </div>
                            </div>


                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">{{ __('Tambahkan') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        <!-- @include('tambahan.backend.auth') -->
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
