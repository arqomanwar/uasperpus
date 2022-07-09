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
                                <h3 class="mb-0">Tambah Data</h3>
                            </div>
                        </div>
                    </div>
                    <form method="post" action="{{url('buku')}}" autocomplete="off" enctype="multipart/form-data">
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
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-password">JUDUL</label>
                                <input type="text" name="judul" id="input-password" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Masukkan Judul Buku" value="" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-password-confirmation">{{ __('PENGARANG') }}</label>
                                <input type="text" name="pengarang" id="input-password-confirmation" class="form-control form-control-alternative {{$errors->has('password') }}" placeholder="Masukkan Pengarang buku" value="" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-password-confirmation">{{ __('PENERBIT') }}</label>
                                <input type="text" name="penerbit" id="input-password-confirmation" class="form-control form-control-alternative {{$errors->has('password') }}" placeholder="Masukkan Penerbit Buku" value="" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-password-confirmation">{{ __('TAHUN TERBIT') }}</label>
                                <input type="date" name="tahun_terbit" id="input-password-confirmation" class="form-control form-control-alternative {{$errors->has('password') }}" placeholder="Masukkan Tahum terbit Buku" value="" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-password-confirmation">{{ __('Jumlah') }}</label>
                                <input type="number" name="jumlah_buku" id="input-password-confirmation" class="form-control form-control-alternative {{$errors->has('password') }}" placeholder="Masukkan Jumlah Buku" value="" required>
                            </div>
                            {{-- <div class="form-group">
                                <label class="form-control-label" for="input-password-confirmation">{{ __('LOKASI') }}</label>
                                <input type="text" name="lokasi" id="input-password-confirmation" class="form-control form-control-alternative {{$errors->has('password') }}" placeholder="" value="" required>
                            </div> --}}
                            <div class="form-group{{ $errors->has('lokasi') ? ' has-error' : '' }}">
                                <label for="lokasi" class="form-control-label">Lokasi</label>
                                <div class="col-md-15">
                                <select class="form-control" name="lokasi" required="">
                                    <option value=""></option>
                                    <option value="rak1">Rak 1</option>
                                    <option value="rak2">Rak 2</option>
                                    <option value="rak3">Rak 3</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-password-confirmation">{{ __('COVER') }}</label>
                                <input type="file" name="cover" id="input-password-confirmation" class="form-control form-control-alternative {{$errors->has('password') }}" placeholder="" value="" required>
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
