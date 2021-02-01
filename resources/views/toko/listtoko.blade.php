@extends('layouts/app')
@section('head')
    <!-- DataTable -->
    <link rel="stylesheet" href="{{ url('assets2/vendors/dataTable/datatables.min.css') }}" type="text/css">

    <!-- Prism -->
    <link rel="stylesheet" href="{{ url('assets2/vendors/prism/prism.css') }}" type="text/css">
@endsection

@section('content')
<!-- Content -->
<div class="content ">

    <div class="page-header">
        <h4>List Data Toko</h4>
        <hr>
    </div>

    <div class="row">
        <div class="col-md-12">
<!-- 
            <div class="judul-tabel">
                <h5>Daftar Barang</h5>
            </div> -->

            <div class="card">
                <div class="card-body">
                        <table id="example2" class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <th scope="col">Barcode</th>
                                <th scope="col">Nama Toko</th>
                                <th scope="col">Latitude</th>
                                <th scope="col">Longitude</th>
                                <th scope="col">Accuracy</th>
                                <th scope="col">Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($toko as $t)
                                    <tr>
                                        <td class="text-center p-t-b-40"> 
                                            <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($t->barcode, 'C128')}}" height="60" width="180">
                                        <br>{{$t->barcode}}
                                        </td>
                                        <td>{{ $t->nama_toko}}</td>
                                        <td>{{ $t->latitude}}</td>
                                        <td>{{ $t->longitude}}</td>
                                        <td>{{ $t->accuracy}}</td>
                                        <td>
                                            <a href="/Toko/List_Toko/Cetak/{{$t->barcode}}">
                                            <button type="submit" value="submit" class="btn btn-primary btn-pulse" target="_blank">
                                                <i target="_blank" class="ti-printer mr-2"></i> Cetak PDF
                                            </button>
                                        </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- ./ Content -->
@endsection

@section('script')
<!-- DataTable -->
    <script src="{{ url('assets2/vendors/dataTable/datatables.min.js') }}"></script>
    <script src="{{ url('assets2/assets/js/examples/datatable.js') }}"></script>

    <!-- Prism -->
    <script src="{{ url('assets2/vendors/prism/prism.js') }}"></script>
@endsection