@extends('layouts/app')

@section('content')
<div class="content ">
                
                <div class="page-header">
                    <div>
                        <h3>Titik Kunjungan Toko </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <!-- <li class="breadcrumb-item">
                                    <a href="#">Barcode</a>
                                </li> -->
                                <li class="breadcrumb-item active" aria-current="page">Titik Kunjungan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="card">
                        <div class="card-body">
<div class="row">

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
                        <h5>Scan Barcode Titik Awal</h5>
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
                <div class="alert alert-secondary" style="width:400px" role="alert" id="result" name="barcode"></div>

                <label for="input" class="col-form-label">Nama Toko</label>
                <div class="alert alert-secondary" style="width:400px" role="alert" id="nama" name="nama"></div>
    
                <label for="input" class=" col-form-label">Latitude</label>
                <div class="alert alert-secondary" style="width:400px" role="alert" id="lat" name="lat"></div>
  
                <label for="input" class="col-form-label">Longitude</label>
                <div class="alert alert-secondary" style="width:400px" role="alert" id="long" name="long"></div>
      
                <label for="input" class="col-form-label">Accuracy</label>
                <div class="alert alert-secondary" style="width:400px" role="alert" id="acc" name="acc"></div>
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
                            <input type="text" style="width:400px; background:black" id="lat2" name="lat2" placeholder="Masukkan Latitude" class="form-control" readonly="" required="">		
                      
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Longitude</label>
                            <input type="text" style="width:400px; background:black" id="long2" name="long2" placeholder="Masukkan Longitude" class="form-control" readonly="" required="">		
                      
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Accuracy</label>
                            <input type="text" style="width:400px; background:black" id="acc2" name="acc2" placeholder="Masukkan Accuracy" class="form-control" readonly="" required="">		
                      
                        </div>
                
                        <div style="text-align: right; width:400px">
                            <button type="button" class="btn btn-success btn-xl" onClick="getLocation()">Geolocation</button>
                            <button type="button" class="btn btn-primary btn-xl" name="result" id="result" onClick="getResult()">Konfirmasi</button>
                        </div>
                       
        </form>

      </div>
    </div>
  </div>
       
                        <!-- <pre>
                            <input type="text" class="form-control" name="barcode" id="result">
                            <input type="text" class="form-control" name="nama" id="nama">
                        </pre> -->
                        </div>
                </div>
</div>

@endsection

@section('script')
<script type="text/javascript" src="https://unpkg.com/@zxing/library@latest"></script>
<script src="{{ asset('assets2/assets/js/scanner-TitiKunjung.js') }}"></script>
<script src="{{ asset('assets2/assets/js/titik-kunjung.js') }}"></script>
@endsection