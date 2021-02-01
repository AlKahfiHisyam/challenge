@section('title') 
Soyuz - Tambah Customer 1
@endsection 
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Layouts</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Customer</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Customer 1</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
            </div>                        
        </div>
    </div>          
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->    
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Tambah Customer</h5>
                </div>
                <div class="card-body">
                    <form action="{{ URL('/Toko/InputTitikAwal/Save') }}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Toko</label>
                            <input type="text" class="form-control" id="namatoko" name="namatoko" placeholder="Masukan Nama Toko">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Latitude</label>
                            <input type="text" style="background:black;" id="lat" name="lat" placeholder="Masukkan Latitude" class="form-control" readonly="">      
                      
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Longitude</label>
                            <input type="text" style="background:black;" id="long" name="long" placeholder="Masukkan Longitude" class="form-control" readonly="">       
                      
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Accuracy</label>
                            <input type="text" style="background:black;" id="acc" name="acc" placeholder="Masukkan Accuracy" class="form-control" readonly="">      
                      
                        </div>

                
                        <div class="form-actions form-group">
                                <div class="row">
                                    <div class="col-sm-6" text-right>
                                            <button type="button" class="btn btn-success btn-xl" onClick="getLocation()">Geolocation</button>
                                            <button type="submit" value="submit" class="btn btn-primary btn-xl">Submit</button>
                                    </div>
                                </div>
                        </div>                       
                    </form>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div> <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection 
@section('script')
<script src="{{ asset('assets/js/titik-awal.js') }}"></script>
<script src="{{ asset('assets/js/customer-select.js') }}"></script>
@endsection 