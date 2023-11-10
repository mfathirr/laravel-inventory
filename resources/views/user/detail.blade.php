@extends('layouts.app')
@section('main')
    <div class="container">
        <a href="{{ url('user') }}" type="button" class="btn btn-warning mt-4"><i class="bi bi-arrow-left"></i></a>
        <div class="row justify-content-center">
            <!-- card -->
            <div class="card mt-4">
                <div class="card-header">
                    Detail User
                </div>
                <div class="card-body">
                    <table class="table">

                        <tr>
                            <th scope="row">Nama Lengkap</th>
                            <td>:</td>
                            <td>{{ $user->name }}</td>
                        </tr>

                        <tr>
                            <th scope="row">Nama Pengguna</th>
                            <td>:</td>
                            <td>{{ $user->username }}</td>
                        </tr>

                        <tr>
                            <th scope="row">Email</th>
                            <td>:</td>
                            <td>{{ $user->email }}</td>
                        </tr>

                    </table>
                </div>
            </div>
            <!-- card end -->

            <!-- card 2 -->
            <div class="card mt-4">
                <div class="card-header">
                    Detail Ruangan
                </div>
                <div class="card-body">
                    <table class="table">
                            @if ($room)
                            <tr>
                                <th scope="row">Nama Ruangan</th>
                                <th>Nomor Ruangan</th>
                            </tr>
                            @foreach ($room as $item)
                            <tr>
                                <td scope="row">{{ $item->nama_ruangan }}</td>
                                <td>{{ $item->nomor_ruangan }}</td>
                            </tr>
                            @endforeach
                        </table>  
                    @else  
                        <div class="alert alert-danger">
                            Petugas Belum Menjadi PIC Ruangan
                        </div>
                    @endif
                </div>
            </div>
            <!-- card 2 end -->
            
        </div>
    </div>
@endsection