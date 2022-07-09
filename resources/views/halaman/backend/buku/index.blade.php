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
                                <h3 class="mb-0">Daftar Buku</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{url('buku/create')}}" class="btn btn-sm btn-primary">tambah</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">Judul Buku</th>
                                    <th scope="col">Pengarang</th>
                                    <th scope="col">Penerbit</th>
                                    <th scope="col">Tahun Terbit</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">COVER</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Pilihan</th>
                                </tr>
                            </thead>
                            @php
                            $NO = 1;
                            @endphp
                            <tbody>
                            @foreach ($buku as $book)
                            <tr>
                                <td scope="row">
                                    {{$NO++}}
                                </td>
                                <td>

                                    {{$book->judul}}
                                </td>
                                <td>

                                    {{$book->pengarang}}
                                </td>
                                <td>

                                    {{$book->penerbit}}
                                </td>
                                <td>

                                    {{$book->tahun_terbit}}
                                </td>
                                <td>

                                    {{$book->jumlah_buku}}
                                </td>
                                <td>
                                    <img alt="" src="{{ asset('public/image/'.$book->cover) }}" width="30px">
                                </td>
                                <td>

                                    {{$book->lokasi}}
                                </td>

                                <td>
                                    <form method="post" action="{{ url('buku/' .$book->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ url('buku/' .$book->id. '/edit') }}" class="btn btn-sm btn-success">Edit</a>

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
