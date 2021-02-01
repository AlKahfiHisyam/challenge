@extends('layouts/app')

@section('head')

@endsection

@section('content')

            <!-- Content -->
            <div class="content ">
                
    <div class="page-header">
        <div>
            <h3>Titik Awal</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Forms</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Titik Awal</li>
                </ol>
            </nav>
        </div>
    </div>
    <form action="{{ URL('/Toko/InputTitikAwal/Save') }}" method="POST">
        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Toko</label>
                            <input type="text" class="form-control" id="namatoko" name="namatoko" placeholder="Masukan Nama Toko" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Latitude</label>
                            <input type="text" id="lat" name="lat" placeholder="Masukkan Latitude" class="form-control" required="">		
                      
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Longitude</label>
                            <input type="text" id="long" name="long" placeholder="Masukkan Longitude" class="form-control" required="">		
                      
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Accuracy</label>
                            <input type="text" id="acc" name="acc" placeholder="Masukkan Accuracy" class="form-control" required="" >		
                      
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
            <!-- ./ Content -->
@endsection

            
@section('script')
<script src="{{ asset('assets2/assets/js/titik-awal.js') }}"></script>
<script src="{{ asset('assets2/assets/js/customer-select.js') }}"></script>
@endsection