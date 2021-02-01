@extends('layouts/app')
@section('head')
    <!-- DataTable -->
    <link rel="stylesheet" href="{{ url('assets2/vendors/dataTable/datatables.min.css') }}" type="text/css">

    <!-- Prism -->
    <link rel="stylesheet" href="{{ url('assets2/vendors/prism/prism.css') }}" type="text/css">

    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="1073446404452-kfet300f5ke6dc0vppb0tfqspa4ng7il.apps.googleusercontent.com">
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<!-- Content -->
<div class="content ">

    <div class="page-header">
        <h4>Login Google</h4>
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
                    <div class="g-signin2" data-onsuccess="onSignIn"></div>
                    <a href="/logingoogle" onclick="signOut();">Sign out</a>
                    <div class="alert alert-secondary" style="width:400px" role="alert" id="hasil" name="hasil"></div> <br>
                    <div class="alert alert-secondary" style="width:400px" role="alert" id="id" name="id"></div><br>
                    <div class="alert alert-secondary" hidden="" style="width:400px" role="alert" id="nama" name="nama"></div><br>
                    <div id="img" hidden="" name="img"></div><br>
                    <div class="alert alert-secondary" hidden="" style="width:400px" role="alert" id="email" name="email"></div><br>

                    <script>
                        function onSignIn(googleUser) {
                            // Useful data for your client-side scripts:
                            var profile = googleUser.getBasicProfile();

                            var hasil = document.getElementById('hasil');
                            hasil.innerHTML = "<h3> My Google Info </h3>";

                            var id = document.getElementById('id');
                            id.innerHTML = profile.getId();

                            var nama = document.getElementById('nama');
                            nama.innerHTML = profile.getName();
                            
                            var myImage = new Image(300, 300);
                            myImage.src = profile.getImageUrl();
                            x = document.getElementById("img");
                            x.appendChild(myImage);

                            var email = document.getElementById('email');
                            email.innerHTML = profile.getEmail();

                            console.log("ID: " + profile.getId()); // Don't send this directly to your server!
                            console.log('Full Name: ' + profile.getName());
                            console.log('Given Name: ' + profile.getGivenName());
                            console.log('Family Name: ' + profile.getFamilyName());
                            console.log("Image URL: " + profile.getImageUrl());
                            console.log("Email: " + profile.getEmail());

                            // The ID token you need to pass to your backend:
                            var id_token = googleUser.getAuthResponse().id_token;
                            console.log("ID Token: " + id_token);
                        }

                        function signOut() {
                            var auth2 = gapi.auth2.getAuthInstance();
                            auth2.signOut().then(function () {
                              console.log('User signed out.');
                            });

                        }
                    </script>
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