@section('title') 
Soyuz - Tambah Customer 1
@endsection 
@extends('layout.main')
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
                    <form action="{{url('/Customer/SaveCus1')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama_cus">Nama Customer</label>
                            <input type="text" class="form-control" name="nama_cus" id="nama_cus" placeholder="Nama Customer..">
                        </div>
                        <div class="form-group">
                            <label for="Alamat">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat..">
                        </div>
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <select class="form-control select-component select-provinsi" id="" name="provinsi" required>
                                <option>Pilih Provinsi ...</option>
                                @foreach ($provinsi as $key => $name)
                                <option value="{{ $key }}">{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for=""> Kabupaten/Kota</label>
                            <select class="form-control select-component select-kota" id="" name="kota" required>
                                <option>Pilih Kota ...</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for=""> Kecamatan </label>
                            <select class="form-control select select-kecamatan" id="" name="kecamatan" required>
                                <option>Pilih Kecamatan ...</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for=""> Kelurahan</label>
                            <select class="form-control select select-kelurahan" id="" name="kelurahan" required>
                                <option>Pilih Kelurahan ...</option>
                            </select>
                        </div>
                        <div class="form-actions form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <canvas id="myCanvas2" width="480" height="480" style="border:1px solid #ffffff ;">
                                        <input type="hidden" id="foto" name="foto">
                                </div>
                                <div class="col-sm-6" text-right>
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#largeModal">Ambil Gambar</button>
                                        <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largeModalLabel">Ambil Foto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <video autoplay="" id="video-webcam" class="border w-100">
                                    Browsermu tidak mendukung bro, upgrade donk!</video>
                                </div>
                                <div class="col-sm-6" text-right>
                                    <canvas id="myCanvas" width="640" height="480" style="border:1px solid #ffffff ;"></canvas>
                                    <button type="button" class="btn btn-primary" onclick="takeSnapshot()">Ambil Foto</button>
                                </div>
                            </div>
                                
                        </div>
                        <script type="text/javascript">
                            // seleksi elemen video
                            var video = document.querySelector("#video-webcam");

                            // minta izin user
                            navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;

                            // jika user memberikan izin
                            if (navigator.getUserMedia) {
                                // jalankan fungsi handleVideo, dan videoError jika izin ditolak
                                navigator.getUserMedia({ video: true }, handleVideo, videoError);
                            }

                            // fungsi ini akan dieksekusi jika  izin telah diberikan
                            function handleVideo(stream) {
                                video.srcObject = stream;
                            }

                            // fungsi ini akan dieksekusi kalau user menolak izin
                            function videoError(e) {
                                // do something
                                alert("Izinkan menggunakan webcam untuk demo!")
                            }

                            function takeSnapshot() {
                                

                                // ambil ukuran video
                                var width = video.offsetWidth
                                        , height = video.offsetHeight;

                                // buat elemen canvas
                                canvas = document.getElementById("myCanvas");
                                canvas.width = width;
                                canvas.height = height;

                                // ambil gambar dari video dan masukan 
                                // ke dalam canvas
                                context = canvas.getContext('2d');
                                context.drawImage(video, 0, 0, width, height);
                            }

                            function saveSnapshot() {
                                var img = document.createElement('img');

                                // ambil ukuran video
                                var width = video.offsetWidth
                                        , height = video.offsetHeight;

                                // buat elemen canvas
                                canvas1 = document.getElementById("myCanvas2");
                                canvas1.width = width;
                                canvas1.height = height;
                                foto = document.getElementById("myCanvas");

                                context = canvas1.getContext('2d');
                                context.drawImage(foto, 0, 0, width, height);

                                img.src = canvas1.toDataURL('image/png');
                                document.getElementById("foto").value=img;
                            }
                        </script>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary"  data-dismiss="modal" onclick="saveSnapshot()">Simpan Foto</button>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div> <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection 
@section('script')
<script src="{{ asset('/assets/js/customer-select.js') }}"></script>
@endsection 