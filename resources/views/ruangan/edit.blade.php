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
                    <form action="{{ route('room.update', $room->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Nama Ruangan</span>
                                </div>
                            <input type="text" class="form-control" placeholder="Nama Ruangan" name="nama_ruangan" value="{{ $room->nama_ruangan }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Ukuran Ruangan</span>
                                </div>
                                <select class="form-select" name="ukuran" value="{{ $room->ukuran }}">
                                    <option selected>{{ $room->ukuran }}</option>
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
                                    <option selected value="{{ $room->users->id }}">{{ $room->users->name }}</option>
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
        </div>
    </div>
@endsection