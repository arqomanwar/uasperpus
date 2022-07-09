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
                                <h3 class="mb-0">edit user</h3>
                            </div>
                        </div>
                    </div>
                    <form action="{{url('buku/'.$edit->id)}}" method="post">
                        @csrf
                        @method('PATCH')

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
                                <input type="text" name="judul" id="input-password" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Masukkan Judul Buku" value="{{ $edit->judul}}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-password-confirmation">{{ __('PENGARANG') }}</label>
                                <input type="text" name="pengarang" id="input-password-confirmation" class="form-control form-control-alternative {{$errors->has('password') }}" placeholder="Masukkan Pengarang buku" value="{{ $edit->pengarang}}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-password-confirmation">{{ __('PENERBIT') }}</label>
                                <input type="text" name="penerbit" id="input-password-confirmation" class="form-control form-control-alternative {{$errors->has('password') }}" placeholder="Masukkan Penerbit Buku" value="{{ $edit->penerbit}}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-password-confirmation">{{ __('TAHUN TERBIT') }}</label>
                                <input type="date" name="tahun_terbit" id="input-password-confirmation" class="form-control form-control-alternative {{$errors->has('password') }}" placeholder="Masukkan Tahum terbit Buku" value="{{ $edit->tahun_terbit}}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-password-confirmation">{{ __('Jumlah') }}</label>
                                <input type="number" name="jumlah_buku" id="input-password-confirmation" class="form-control form-control-alternative {{$errors->has('password') }}" placeholder="Masukkan Jumlah Buku" value="{{ $edit->jumlah_buku}}" required>
                            </div>
                            {{-- <div class="form-group">
                                <label class="form-control-label" for="input-password-confirmation">{{ __('LOKASI') }}</label>
                                <input type="text" name="lokasi" id="input-password-confirmation" class="form-control form-control-alternative {{$errors->has('password') }}" placeholder="" value="" required>
                            </div> --}}
                            <div class="form-group{{ $errors->has('lokasi') ? ' has-error' : '' }}">
                                <label for="lokasi" class="col-md-4 control-label">Lokasi</label>
                                <div class="col-md-6">
                                <select class="form-control" name="lokasi" required="">
                                    <option value="rak1" {{$edit->lokasi === "rak1" ? "selected" : ""}}>Rak 1</option>
                                    <option value="rak2" {{$edit->lokasi === "rak2" ? "selected" : ""}}>Rak 2</option>
                                    <option value="rak3" {{$edit->lokasi === "rak3" ? "selected" : ""}}>Rak 3</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-password-confirmation">{{ __('COVER') }}</label>
                                <input type="file" name="cover" id="input-password-confirmation" class="form-control form-control-alternative {{$errors->has('password') }}" placeholder="" value="{{ $edit->cover}}">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">{{ __('SIMPAN') }}</button>
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
