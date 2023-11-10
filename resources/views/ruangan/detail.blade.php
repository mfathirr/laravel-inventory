@extends('layouts.app')
@section('main')
    <div class="container">
        <a href="{{ url('room') }}" type="button" class="btn btn-dark mt-4"><i class="bi bi-arrow-left"></i></a>
        <div class="row justify-content-center">
            <!-- card -->
            <div class="card mt-4">
                <div class="card-header">
                    Detail Ruangan
                </div>
                <div class="card-body ">
                    <table class="table ">

                        <tr>
                            <th scope="row">Nama Ruangan</th>
                            <td>:</td>
                            <td>{{ $room->nama_ruangan }}</td>
                        </tr>

                        <tr>
                            <th scope="row">Nomor Ruangan</th>
                            <td>:</td>
                            <td>{{ $room->nomor_ruangan }}</td>
                        </tr>

                        <tr>
                            <th scope="row">PIC Ruangan</th>
                            <td>:</td>
                            <td>{{ $room->users->name }}</td>
                        </tr>

                    </table>
                </div>
            </div>
            <!-- card end -->
            
        </div>
    </div>
@endsection