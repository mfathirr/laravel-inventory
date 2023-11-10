@extends('layouts.app')
@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <!-- card -->
            <div class="card mt-4">
                <div class="card-header">
                    Tambah Data Ruangan
                </div>
                <div class="card-body">
                    <form action="{{ route('room.store') }}" method="post">
                    @csrf
                    <div class="row">
                        
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Nama Ruangan</span>
                                </div>
                            <input type="text" class="form-control" placeholder="Nama Ruangan" name="nama_ruangan">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Ukuran Ruangan</span>
                                </div>
                                <select class="form-select" name="ukuran">
                                    <option selected>Pilih...</option>
                                    <option value="kecil">Kecil</option>
                                    <option value="sedang">Sedang</option>
                                    <option value="besar">Besar</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">PIC Ruangan</span>
                                </div>
                                <select class="form-select" name="user_id">
                                    <option selected>Pilih...</option>
                                    @foreach ($user as $item)
                        
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-secondary">
                                <i class="bi bi-plus-lg"></i>
                            </button>
                        </div>

                    </div>
                    </form>
                </div>
            </div>
            <!-- card end -->

            <!-- show data -->

            <div class="card mt-4">
                <div class="card-header">
                    Data Ruangan
                </div>
                <div class="card-body">
                    <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nomor Ruangan</th>
                            <th scope="col">Nama Ruangan</th>
                            <th scope="col">Ukuran</th>
                            <th scope="col">Penanggung Jawab</th>
                            <th>Fungsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rooms as $room)   
                        <tr>
                            <td scope="row">{{ $room->nomor_ruangan }}</td>
                            <td>{{ $room->nama_ruangan }}</td>
                            <td>
                                @if ($room->ukuran == 'kecil')
                                kecil
                                @elseif ($room->ukuran == 'sedang')
                                sedang
                                @elseif ($room->ukuran == 'besar')
                                besar
                                @endif
                            </td>
                            <td>{{ $room->users->name }}</td>
                            <td>
                                <a href="{{ route('room.show', $room  ->id) }}" type="button" class="btn btn-primary">Detail</a>
                                <a href="{{ route('room.edit', $room  ->id) }}" type="button" class="btn btn-warning">Edit</a>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus {{ $room->nama_ruangan }}?');">Hapus</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>

            <!-- show data end -->

        </div>
    </div>
@endsection