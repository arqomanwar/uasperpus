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
                    <form action="{{url('mahasiswa/'.$edit->id)}}" method="post">
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
                            <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-current-password">NIM</label>
                                <input type="number" name="nim" id="input-current-password" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Masukkan NIM" value="{{ $edit->nim }}" required>

                                @if ($errors->has('old_password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('old_password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-password">NAMA MAHASISWA</label>
                                <input type="text" name="nama_mhs" id="input-password" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Masukkan Nama Mahasiswa" value="{{ $edit->nama_mhs}}" required>
                            </div>
                            {{-- <div class="form-group">
                                <label class="form-control-label" for="input-password-confirmation">{{ __('FAKULTAS') }}</label>
                                <input type="text" name="fakultas" id="input-password-confirmation" class="form-control form-control-alternative {{$errors->has('password') }}" placeholder="" value="{{ $edit->fakultas}}" required>
                            </div> --}}
                            <div class="form group">
                                <label>Fakultas</label>
                                <select class="form-control" name="fakultas_id">
                                    <option value="{{ $edit->fakultas_id}}">{{ $edit->nama_fakultas}}</option>
                                    @foreach ($fakultas as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_fakultas }}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- <div class="form-group">
                                <label class="form-control-label" for="input-password-confirmation">{{ __('PRODI') }}</label>
                                <input type="text" name="prodi" id="input-password-confirmation" class="form-control form-control-alternative {{$errors->has('password') }}" placeholder="" value="{{ $edit->prodi}}" required>
                            </div> --}}
                            <div class="form group">
                                <label>Prodi</label>
                                <select class="form-control" name="prodi_id">
                                    <option value="{{ $edit->prodi_id}}">{{ $edit->nama_prodi}}</option>
                                    @foreach ($prodi as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_prodi }}</option>
                                    @endforeach
                                </select>
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
