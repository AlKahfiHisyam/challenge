<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Soyuz is a bootstrap 4x + laravel admin dashboard template">
        <meta name="keywords" content="admin, admin dashboard, admin panel, admin template, analytics, bootstrap 4, laravel, clean, crm, ecommerce, hospital, responsive, rtl, sass support, ui kits">
        <meta name="author" content="Themesbox17">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> @yield('title') </title>
        <!-- Fevicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
        <!-- Start CSS -->   
        @yield('style')
        <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
        <!-- End CSS -->
    </head>
    <body class="vertical-layout">
        <!-- Start Infobar Setting Sidebar -->
        <div id="infobar-settings-sidebar" class="infobar-settings-sidebar">
            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                <h4>Settings</h4><a href="javascript:void(0)" id="infobar-settings-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
            </div>
            <div class="infobar-settings-sidebar-body">
                <div class="custom-mode-setting">
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">New Order Notification</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-first" checked /></div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">Low Stock Alerts</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-second" checked /></div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">Vacation Mode</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-third" /></div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">Order Tracking</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fourth" checked /></div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">Newsletter Subscription</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fifth" checked /></div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">Show Review</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-sixth" /></div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">Enable Wallet</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-seventh" checked /></div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-8"><h6 class="mb-0">Sales Report</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-eightth" checked /></div>
                    </div>
                </div>
                <div class="custom-layout-setting">
                    <div class="row align-items-center pb-3">
                        <div class="col-12">
                            <h6 class="mb-3">Select Account</h6>
                        </div>
                        <div class="col-6">
                            <div class="account-box active">
                                <img src="assets/images/users/boy.svg" class="img-fluid" alt="user">
                                <h5>John</h5>
                                <p>CEO</p>
                            </div>                        
                        </div>
                        <div class="col-6">
                            <div class="account-box">
                                <img src="assets/images/users/women.svg" class="img-fluid" alt="user">
                                <h5>Kate</h5>
                                <p>COO</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="account-box">
                                <img src="assets/images/users/men.svg" class="img-fluid" alt="user">
                                <h5>Mark</h5>
                                <p>MD</p>
                            </div>                        
                        </div>
                        <div class="col-6">
                            <div class="account-box">
                                <p class="dash-analytic-icon"><i class="feather icon-plus font-35"></i></p>
                                <h5>Add</h5>
                                <p>ACCOUNT</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="infobar-settings-sidebar-overlay"></div>
        <!-- End Infobar Setting Sidebar -->
        <!-- Start Containerbar -->
        <div id="containerbar">     
            <!-- Start Leftbar -->
            @include('layout.leftbar')
            <!-- End Leftbar -->
            <!-- Start Rightbar -->
            @include('layout.rightbar')
            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Waktu Telah Berakhir</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="text-muted">Sesi akan berakhir, apakah anda ingin memperpanjang sesi?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary tidak" data-dismiss="modal">Tidak</button>
                                    <button type="button" class="btn btn-primary ok">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>            
            @yield('content')            
            <!-- End Rightbar --> 
        </div>        
        <!-- End Containerbar -->
        <!-- Start JS -->        
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('assets/js/detect.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/js/vertical-menu.js') }}"></script> 
        <script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script> 
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('/assets/js/jquery.idle.js') }}"></script>
        <script>
            $(document).idle({
                onIdle: function(){
                    $('#modal').modal('show');
                    $(document).idle({
                        onIdle: function(){
                            alert('Waktu sesi anda telah habis');
                            $('#modal').modal('hide');
                        },
                        events: 'mouseover mouseout',
                        idle: 1800000
                    });
                },
                idle: 10000
            });

            $('.ok').on('click', function(){
                $('#modal').modal('hide');
                $(document).idle({
                    idle: 10000
                });
            });

            $('.tidak').on('click', function(){
                $('#modal').modal('hide');
                alert('Waktu sesi anda telah habis');
            });

        </script>
        @yield('script')
        <!-- Core JS -->
        <script src="{{ asset('assets/js/core.js') }}"></script>
        <!-- End JS -->
    </body>
</html>    