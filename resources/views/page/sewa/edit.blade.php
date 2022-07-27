@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Form Edit Sewa</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Form Edit Sewa</li>
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
        <div class="card-body table-responsive p-0">
            <form class="form-horizontal" action="/sewa/{{$sewa->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="{{$sewa->nama}}" id="inputPassword3" name="nama">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" value="{{$sewa->tanggal}}" id="inputPassword3" name="tanggal">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Lapangan</label>
                    <div class="col-sm-10">
                        <select name="lapangan" id="" class="form-control">
                            <option value="">--Pilih Lapangan--</option>
                            @foreach ($lapangan as $item)
                                <option value="{{$item->id}}" {{$sewa->lapangans_id==$item->id ? 'selected' : ''}}>{{$item->lapangan}}</option>
                            @endforeach
                          </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor Hp</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" value="{{$sewa->nohp}}" id="inputPassword3" name="nohp">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Uang Muka</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" value="{{$sewa->uangmuka}}" id="inputPassword3" name="uangmuka">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Sisa Bayar</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" value="{{$sewa->sisabayar}}" id="inputPassword3" name="sisabayar">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Total Bayar</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" value="{{$sewa->totalbayar}}" id="inputPassword3" name="totalbayar">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Edit Data</button>
                  <a href="/sewa" class="btn btn-default float-right">Batal</a>
                </div>
                <!-- /.card-footer -->
              </form>        
        </div>
        <!-- /.card-body -->
        
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
@endsection