@extends('layouts.app')
@section('main')
    <div class="container">
        <a href="{{ url('user') }}" type="button" class="btn btn-warning mt-4"><i class="bi bi-arrow-left"></i></a>
        <div class="row justify-content-center">
            <!-- card -->
            <div class="card mt-4">
                <div class="card-header">
                    Tambah Data PIC Ruangan
                </div>
                <div class="card-body">

                    <form action="{{ route('user.update', $user->id) }}" method="post">
                    @csrf
                    @method('put')
                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Nama Lengkap</span>
                                    </div>
                                <input type="text" class="form-control" placeholder="Nama Lengkap" name="name" value="{{ $user->name }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Nama Pengguna</span>
                                    </div>
                                <input type="text" class="form-control" placeholder="Nama Pengguna" name="username" value="{{ $user->username }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Email</span>
                                    </div>
                                <input type="email" class="form-control" placeholder="example@test.com" name="email" value="{{ $user->email }}">
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
                                <button type="submit" class="btn btn-success">
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