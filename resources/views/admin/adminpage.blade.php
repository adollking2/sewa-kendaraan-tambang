{{-- reosurce from resources/views/layouts/admin --}}
@extends('layouts.admin')
{{-- load container  --}}

@section('container')
     <!-- Content Row -->
     <div id="content mt-4">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 mt-4 text-gray-800"> Kendaraan </h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Menampilkan semua kendaraan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama kendaran</th>
                                            <th>jenis kendaraan</th>
                                            <th>status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($kendaraan as $item)
                                        <tr>
                                            <td>{{ $item->nama_kendaraan }}</td>
                                            <td>{{ $item->jenis_kendaraan }}</td>
                                            <td>{{ $item->status }}</td>
                                        </tr>    
                                        @endforeach
                                        
                 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

    </div>

@endsection

                   