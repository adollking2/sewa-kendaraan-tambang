{{-- reosurce from resources/views/layouts/admin --}}
@extends('layouts.admin')
{{-- load container  --}}

@section('container')
     <!-- Content Row -->
     <div id="content mt-4">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 mt-4 text-gray-800"> Halaman Tambah kendaraan </h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Menambah kendaraan</h6>
                        </div>
                        <div class="card-body">
                            <form  action = "/admin/simpanKendaraan" method = "post" >
                              @csrf
                                <div class="form-group">
                                  <label for="nama_kendaraan">Nama Kendaraan</label>
                                  <input type="text" class="form-control" id="nama_kendaraan" name='nama_kendaraan' placeholder="ketik disini" required>
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Jenis Kendaraan</label>
                                    <select class="form-control" id="category_id" name="category_id" required>
                                      <option value="1">mobil</option>
                                      <option value="2">motor</option>
                                      <option value="3">alat berat</option>
                                    </select>
                                  </div>
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
                                </div>
                              </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

    </div>

@endsection

                   