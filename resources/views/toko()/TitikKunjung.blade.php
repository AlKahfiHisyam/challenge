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
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Kunjungan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kunjungan Toko</li>
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
    <div class="card">
        <div class="card-body">
            <div class="row">
                <!-- Start col -->
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 style="width:400px">Lokasi Toko</h3>
                            <br>
                            <button type="button" class="btn btn-primary mr-2 mb-2" data-toggle="modal" data-target="#exampleModal">
                            Scan Barcode
                            </button>
                                <div class="modal" tabindex="-1" role="dialog" id="exampleModal">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5>Scan Barcode Toko</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">                    
                                                <div>
                                                    <a><button type="button" class="btn btn-primary" id="startButton">Start</button></a>
                                                    <a><button type="button" class="btn btn-dark" id="resetButton">Reset</button>
                                                </div>
                                                <br>
                                                    <div class="col-md-6">
                                                        <div class="card">
                                                        <video id="video" width="300" height="300" style="border: 1px solid white; background:white"></video>
                                                        </div>
                                                    </div>
                                                <div id="sourceSelectPanel" style="display:none">
                                                    <label for="sourceSelect">Change video source:</label>
                                                    <select id="sourceSelect" style="max-width:400px">
                                                    </select>                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="card">
                                <div class="form-group">
                                    <label for="input" class="col-form-label">Barcode</label>
                                    <pre><code id="result" name="barcode"></code></pre>
                                    
                                    <label for="input" class="col-form-label">Nama Toko</label>
                                    <pre><code id="nama" name="nama"></code></pre>
                        
                                    <label for="input" class=" col-form-label">Latitude</label>
                                    <pre><code id="lat" name="lat"></code></pre>
                      
                                    <label for="input" class="col-form-label">Longitude</label>
                                    <pre><code id="long" name="long"></code></pre>
                          
                                    <label for="input" class="col-form-label">Accuracy</label>
                                    <pre><code id="acc" name="acc"></code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 style="width:400px">Titik Kunjungan Toko</h3>
                            <br>
                            <form>
                            @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Latitude</label>
                                    <input type="text" style="width:400px; background:black" id="lat2" name="lat2" placeholder="Masukkan Latitude" class="form-control" readonly="">      
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Longitude</label>
                                    <input type="text" style="width:400px; background:black" id="long2" name="long2" placeholder="Masukkan Longitude" class="form-control" readonly="">   
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Accuracy</label>
                                    <input type="text" style="width:400px; background:black" id="acc2" name="acc2" placeholder="Masukkan Accuracy" class="form-control" readonly="">
                                </div>
                                    
                                <div style="text-align: right; width:400px">
                                    <button type="button" class="btn btn-success btn-xl" onClick="getLocation()">Geolocation</button>
                                    <button type="button" class="btn btn-primary btn-xl" name="result" id="result" onClick="getResult()">Konfirmasi</button>
                                </div>                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- End col -->
</div> 
    <!-- End row -->
<!-- End Contentbar -->
<script type="text/javascript" src="https://unpkg.com/@zxing/library@latest"></script>
@endsection 
@section('script')
<script src="{{ asset('/assets/js/scanner-TitiKunjung.js') }}"></script>
<script src="{{ asset('/assets/js/titik-kunjung.js') }}"></script>
@endsection 