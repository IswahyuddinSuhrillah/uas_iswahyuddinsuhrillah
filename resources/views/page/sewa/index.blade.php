@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Data Sewa</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Sewa</li>
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
        <a href="/sewa/form" class="btn btn-primary">Tambah Sewa</a>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Lapangan</th>
                        <th scope="col">Nomor HP</th>
                        <th scope="col">Uang Muka</th>
                        <th scope="col">Sisa Bayar</th>
                        <th scope="col">Total Bayar</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($sewa as $item)
                    <tr>
                        <th scope="row">{{$nomor++}}</th>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->tanggal}}</td>
                        <td>{{$item->lapangans->lapangan}}</td>
                        <td>{{$item->nohp}}</td>
                        <td>{{$item->uangmuka}}</td>
                        <td>{{$item->sisabayar}}</td>
                        <td>{{$item->totalbayar}}</td>
                        <td>
                            <a href="/" class="btn btn-info btn-sm">edit</a>
                            <a href="/" class="btn btn-danger btn-sm">hapus</a>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="4">Belum Ada Data</td>
                        </tr>
                    @endforelse
                    
                </tbody>
                </table>
            </div>
        <!-- /.card-body -->
       
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
@endsection