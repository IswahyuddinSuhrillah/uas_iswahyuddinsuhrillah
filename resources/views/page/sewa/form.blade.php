@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Form Tambah Sewa</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Form Tambah Sewa</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <form method="POST" action="/sewa/store">
            @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="nama">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" name="tanggal">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Lapangan</label>
                    <select name="lapangan" id="" class="form-control">
                        <option value="">--Pilih Lapangan--</option>
                        @foreach ($lapangan as $item)
                            <option value="{{$item->id}}">{{$item->lapangan}}</option>
                        @endforeach
                      </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nomor HP</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="nohp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Uanga Muka</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="uangmuka">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Sisa Bayar</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="sisabayar">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Total Bayar</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="totalbayar">
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <a href="/sewa"class="btn btn-secondary">Batal</a>
                </div>
            </form>
    </div>
    <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
@endsection