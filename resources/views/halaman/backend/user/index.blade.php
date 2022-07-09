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
                                <h3 class="mb-0">daftar user</h3>
                            </div>
                            <div class="col text-right">
                                <a href="/user/tambah" class="btn btn-sm btn-primary">tambah</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Pasword</th>
                                    <th scope="col">Pilihan</th>
                                </tr>
                            </thead>
                            @php
                            $NO = 1;    
                            @endphp
                            <tbody>
                            @foreach ($user as $aurelarqompuji)
                            <tr>
                                <td scope="row">
                                    {{$NO++}}
                                </td>
                                <td>
                     
                                    {{$aurelarqompuji->name}}
                                </td>
                                <td>
                                   
                                    {{$aurelarqompuji->email}}
                                </td>
                                <td>
                                
                                    {{$aurelarqompuji->password}}
                                </td>
                                <td>
                                    <a href="{{ url('/user/edit/' . $aurelarqompuji->id) }}" class="btn btn-sm btn-success">Edit</a>
                                    <a href="{{ url('/user/hapus/' . $aurelarqompuji->id) }} "class="btn btn-sm btn-danger">Hapus</a>
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
