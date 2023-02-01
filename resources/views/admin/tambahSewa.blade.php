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
                            <form  action = "/admin/sewa" method = "post" >
                              @csrf
                                <div class="form-group">
                                    <label for="kendaraan_id">Pilih kendaran</label>
                                    <select class="form-control" id="kendaraan_id" name="kendaraan_id" required>
                                      @foreach ($kendaraan as $vehicle)
                                        <option value="{{ $vehicle->id }}">{{ $vehicle->nama_kendaraan }}</option>
                                      @endforeach
                                    </select>
                                  </div>

                                <div class="form-group">
                                    <label for="driver_id">Pilih Driver</label>
                                    <select class="form-control" id="driver_id" name="driver_id" required>
                                      @foreach ($drivers as $driver)
                                        <option value="{{ $driver->id }}">{{ $driver->nama_driver }}</option>
                                      @endforeach
                                    </select>
                                </div>
                                <div class="form-group date" data-provide="datepicker">
                                  <input type="text" class="form-control" name="tanggal_sewa" placeholder="yyyy/mm/dd/">
                                  <div class="input-group-addon">
                                      <span class="glyphicon glyphicon-th"></span>
                                  </div>
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
    <script>
      $('.datepicker').datepicker({
      format: 'yy/mm/dd'
        });
      </script>
@endsection

                   