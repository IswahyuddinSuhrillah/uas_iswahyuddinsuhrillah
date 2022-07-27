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
                            <a href="/sewa/edit/{{$item->id}}" class="btn btn-sm text-white btn-info"><i class="fa fa-pencil-alt"></i></a>
                          <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#a{{$item->id}}">
                            <i class="fa fa-trash-alt"></i>
                          </button>
                          
                          <!-- Modal -->
                          <div class="modal fade" id="a{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                                </div>
                                <div class="modal-body">
                                  Yakin ingin menghapus sewa <b>{{$item->kode}}-{{$item->nama}}</b> ?
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                  <form method="POST" action="/sewa/{{$item->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary">Hapus</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
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