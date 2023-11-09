@extends('layouts.app')
@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <!-- card -->
            <div class="card mt-4 bg-info-subtle">
                <div class="card-header">
                    Tambah Data PIC Ruangan
                </div>
                <div class="card-body">

                    <form action="{{ route('user.store') }}" method="post">
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Nama Lengkap</span>
                                </div>
                            <input type="text" class="form-control" placeholder="Nama Lengkap" name="name">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Nama Pengguna</span>
                                </div>
                            <input type="text" class="form-control" placeholder="Nama Pengguna" name="username">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Email</span>
                                </div>
                            <input type="email" class="form-control" placeholder="example@test.com" name="email">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Password</span>
                                </div>
                            <input type="password" class="form-control" placeholder="********" name="password">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <button type="  " class="btn btn-primary">
                                <i class="bi bi-plus-lg"></i>
                            </button>
                        </div>

                    </div>
                    </form>

                </div>
            </div>
            <!-- card end -->

            <!-- show data -->

            <div class="card mt-4 bg-info-subtle">
                <div class="card-header">
                    Data User
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-info">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Nama Pengguna</th>
                            <th scope="col">Email</th>
                            <th>Fungsi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($user as $item)
                        <tr>
                            <td scope="row">{{ $item->name }}</td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <form action="" method="post">
                                @csrf
                                {{-- @method('DELETE') --}}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('user.show', $item->id) }}" type="button" class="btn btn-primary">Detail</a>
                                <a href="{{ route('user.edit', $item->id) }}" type="button" class="btn btn-warning">Edit</a>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus {{ $item->name }}?');">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                    </table>
                    </div>
                </div>
            </div>

            <!-- show data end -->

        </div>
    </div> 
@endsection