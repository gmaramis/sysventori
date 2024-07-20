@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Data Barang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Tambah Barang Barang</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
              <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Data Barang</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('barang.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="nama barang">Nama Barang</label>
                      <input type="text" class="form-control" id="nm_barang" name="nm_barang" placeholder="Masukkan Nama Barang">
                    </div>
                    <div class="form-group">
                      <label for="spesifikasi">Spesifikasi / Tipe</label>
                      <input type="text" class="form-control" id="spec" name="spec" placeholder="Masukkan Spesifikasi / Tipe / Kode Barang">
                    </div>
                    <div class="form-group">
                        <label for="departemen">Departemen / Bidang</label>
                        <input type="text" class="form-control" id="departemen" name="departemen" placeholder="Masukkan Departemen yang memiliki barang ini">
                    </div>
                    <div class="form-group">      
                        <div class="form-group">
                            <label for="sumber_barang">Sumber Barang</label>
                            <select id="sumber" name="sumber" class="form-control" required>
                                <option value="">Pilih Sumber Barang</option>
                                <option value="Pembelian Gereja">Pembelian Dana Gereja</option>
                                <option value="Donasi Jemaat">Sumbangan / Donasi Jemaat</option>
                                <option value="Pinjaman Jemaat">Pinjaman Jemaat</option>
                                <option value="Pembelian Dana Pembangunan">Pembelian Dana Pembangunan</option>
                                <option value="Pembelian Dana HBG">Pembelian Dana HBG</option>
                            </select>
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="jumlah_barang">Jumlah Barang</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" placeholder="Jumlah Barang" required>
                      </div>
                    <div class="form-group">
                      <label for="foto">Foto Barang</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="foto" name="foto" accept="image/*" required>
                          <label class="custom-file-label" for="foto">Pilih Foto</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Submit</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-4">
                <div class="card card-success">
                    <div class="card-header">
                      <h3 class="card-title">Foto Barang</h3>
                    </div>
                </div>
                <div class="card-body">
                    Ini tempat foto
                </div>
            </div>

              <!-- /.card -->
@endsection