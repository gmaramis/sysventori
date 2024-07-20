@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Master Barang</a></li>
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
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12">
            <a href="/tambah-barang" class="btn btn-info mb-3">Tambah Data Barang</a>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Master Data Barang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Spesifikasi / Tipe</th>
                    <th>Departemen / Bidang</th>
                    <th>Sumber Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Foto </th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Komputer </td>
                    <td>Ryzen 3</td>
                    <td>Multimedia</td>
                    <td>Pembelian Dana Gereja</td>
                    <td>1</td>
                    <td>Foto</td>
                    <td>
                      <a href="" class="btn btn-success">Edit</a>
                      <a href="" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Spesifikasi / Tipe</th>
                    <th>Departemen / Bidang</th>
                    <th>Sumber Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Foto </th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          
            
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>  
@endsection

