@section('title') 
Daftar Film
@endsection 
@extends('layout.main')
@section('style')
<!-- DataTables css -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Responsive Datatable css -->
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Daftar Film</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="#">Tabel</a></li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <a data-toggle="modal" data-target=".tambahFilm">
                    <button class="btn btn-primary"><i class="fa fa-plus-circle mr-2"></i>Tambah Film</button>
                </a>
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
                    <h5 class="card-title">Daftar Film</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Daftar Film dan Review Masing-Masing Film</h6>
                    <div class="table-responsive">
                        <table id="datatable1" class="display table table-striped table-bordered">
                            <thead class="thead-dark text-center">
                                <tr>
                                    <th>ID Film</th>
                                    <th>Poster</th>
                                    <th>Judul</th>
                                    <th>Pemeran</th>
                                    <th>Sutradara</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach($film as $f)
                                <tr>
                                    <td> {{ $f->ID_FILM }} </td>
                                    <td><img width="150px" src="{{ url('/storage/'.$f->POSTER) }}"></td>
                                    <td> {{ $f->JUDUL }} </td>
                                    <td style="width: 30%;"> {{ $f->PEMERAN }} </td>
                                    <td style="width: 20%;"> {{ $f->SUTRADARA }} </td>
                                    <td>                                        
                                        <a href="#detail{{ $f-> ID_FILM }}" class="" data-toggle="modal"><i class="feather icon-file"></i></a> 
                                        <a href="#edit{{ $f-> ID_FILM }}" class="" data-toggle="modal"><i class="feather icon-edit-2"></i></a>    
                                        <a data-toggle="modal" class=""  data-target=".tambahReview"><i class="fa fa-plus-circle mr-2"></i></a>   
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->        
    </div>
    <!-- End row -->
</div>

<!-- Modal Detail Data-->
@foreach($film as $flm)
<div class="modal fade" id="detail{{ $flm-> ID_FILM }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Review Penonton</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
              <div class="modal-body">
                  <div class="basic-form">
                      <div class="form-row d-flex justify-content-center">
                          <div class="form-group col-md-12">
                              <label>Judul Film</label>
                              <input type="text" class="form-control" disabled="" required="" placeholder="Nama Jenis Obat" value="{{ $flm-> JUDUL }}">
                          </div>                          
                          <div class="d-flex justify-content-center">
                              <h4 class="page-title d-flex justify-content-center">Review Film</h4>                            
                          </div>
                          <div class="table-responsive"> 
                            <div class="form-group">  
                              <table class="table table-striped" id="keranjang" width="100%">
                                <thead>
                                    <tr style="text-align:center">
                                    <th>ID Review</th>
                                    <th>Reviewer</th>                                   
                                    <th>Review / Ulasan</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @foreach($review as $rev)
                                        <tr id="col{{ $loop->iteration }}" style="text-align:center">
                                        @if (($flm->ID_FILM) == ($rev->ID_FILM))
                                            <td style="width: 10%;">{{ $rev->ID_REVIEW }} </td>  
                                            <td style="width: 15%;">{{ $rev->NAMA_REVIEWER }}</td>    
                                            <td style="width: 75%;">{{ $rev->REVIEW }}</td>
                                            <td>
                                                <a href="#myModal{{ $rev-> ID_REVIEW }}" class="text-danger" data-toggle="modal"><i class="feather icon-trash"></i></a>
                                            </td>
                                        @endif
                                        </tr>
                                        @endforeach                                    
                                </tbody>
                              </table>
                            </div>
                        </div>
                      </div>
                  </div>
              </div>
        </div>
    </div>
</div>
@endforeach
<!-- End Modal Detail Data -->

<!-- Modal Tambah Data-->
<div class="modal fade tambahReview" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Review Film</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form action="addreview" method="post">
            {{ @csrf_field() }}
                <div class="modal-body">
                    <div class="basic-form">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="namafilm">Nama Film</label>
                                    <select class="form-control" required="" id="namafilm" name="namafilm">
                                        <option disabled="" selected>Pilih Judul Film</option>
                                        @foreach($film as $row)
                                            <option value="{{$row->ID_FILM}}" name="id_film">{{$row->JUDUL}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Nama Reviewer</label>
                                <input type="text" class="form-control" id="reviewer" name="reviewer" placeholder="Nama Reviewer" requiried>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Review</label>
                                <textarea oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="230" class="form-control" rows="4" name="review" id="review" placeholder="Review Film" requiried></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                    <input type="submit" value="Save changes" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal Tambah Data -->

<!-- Modal Tambah Film-->
<div class="modal fade tambahFilm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Film</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form action="addfilm" method="post" enctype="multipart/form-data">
            {{ @csrf_field() }}
                <div class="modal-body">
                    <div class="basic-form">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Judul Film</label>
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Film" requiried>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Pemeran</label>
                                <input type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="100" class="form-control" name="pemeran" id="pemeran" placeholder="Pemeran" requiried>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Sutradara</label>
                                <input type="text" class="form-control" id="sutradara" name="sutradara" placeholder="Sutradara" requiried>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Poster</label>
                                <input type="file" class="form-control" id="poster" name="poster" placeholder="Add File Poster" requiried>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                    <input type="submit" value="Save changes" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal Tambah Film -->

<!-- Modal Edit Film-->
@foreach($film as $flm)
<div class="modal fade" id="edit{{ $flm-> ID_FILM }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Film</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form action="/editfilm/{{ $flm-> ID_FILM }}" class="form-horizontal form-label-left" method="post">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="basic-form">
                        <div class="basic-form">

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Judul Film</label>
                                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Film" value="{{ $flm-> JUDUL }}" requiried>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Pemeran</label>
                                    <input type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="100" class="form-control" name="pemeran" id="pemeran" placeholder="Pemeran" value="{{ $flm-> PEMERAN }}" requiried>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Sutradara</label>
                                    <input type="text" class="form-control" id="sutradara" name="sutradara" placeholder="Sutradara" requiried value="{{ $flm-> SUTRADARA }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Poster</label>
                                    <input type="file" class="form-control" id="poster" name="poster" placeholder="Add File Poster" value="{{ $flm-> POSTER }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
<!-- End Modal Edit Film -->

<!-- Modal Delete Data Review-->
@foreach($review as $rev)
<div class="modal small fade" id="myModal{{ $rev-> ID_REVIEW }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>

            </div>
            <div class="modal-body">
                <p class="error-text"><i class="fa fa-warning modal-icon"></i> Anda Yakin Ingin Menghapus Data?
                    <br>Data Tidak Akan Dapat Dikembalikan!</p>
            </div>
            <div class="modal-footer">
                <form action="/deletereview/{{ $rev->ID_REVIEW }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" type="submit">Hapus</button>
                </form>
                    <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button> 
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- End Modal Delete Data Review-->

<!-- End Contentbar -->
@endsection 
@section('script')
<!-- Datatable js -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

<script>
    $(document).ready(function(){
        var table1 = $('#datatable1').DataTable({
            //"order": [[ 0, "asc" ]],
            "searching" : true,
            responsive: true
        });

    });
</script>
@endsection 