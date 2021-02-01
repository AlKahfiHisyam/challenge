<div class="leftbar">
    <!-- Start Sidebar -->
    <div class="sidebar">               
        <!-- Start Navigationbar -->
        <div class="navigationbar">
            <div class="vertical-menu-icon">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <div class="logobar">
                        <a href="{{url('/')}}" class="logo logo-small"><img src="assets/images/small_logo.svg" class="img-fluid" alt="logo"></a>
                    </div>
                    <a class="nav-link active" id="v-pills-crm-tab" data-toggle="pill" href="#v-pills-crm" role="tab" aria-controls="v-pills-crm" aria-selected="true"><img src="assets/images/svg-icon/dashboard.svg" class="img-fluid" alt="CRM" data-toggle="tooltip" data-placement="top" title="Dashboard"></a>

                    <!-- <a class="nav-link" id="v-pills-film-tab" data-toggle="pill" href="#v-pills-film" role="tab" aria-controls="v-pills-film" aria-selected="false"><img src="assets/images/video-camera.svg" class="img-fluid" alt="eCommerce" data-toggle="tooltip" data-placement="top" title="Film"></a>   -->

                    <a class="nav-link" id="v-pills-ecommerce-tab" data-toggle="pill" href="#v-pills-ecommerce" role="tab" aria-controls="v-pills-ecommerce" aria-selected="false"><img src="assets/images/video-camera.svg" class="img-fluid" alt="eCommerce" data-toggle="tooltip" data-placement="top" title="Film"></a>        

                    <!-- <a class="nav-link" id="v-pills-hospital-tab" data-toggle="pill" href="#v-pills-hospital" role="tab" aria-controls="v-pills-hospital" aria-selected="false"><img src="assets/images/svg-icon/hospital.svg" class="img-fluid" alt="Hospital" data-toggle="tooltip" data-placement="top" title="Barang"></a> -->

                    <!-- <a class="nav-link" id="v-pills-uikits-tab" data-toggle="pill" href="#v-pills-uikits" role="tab" aria-controls="v-pills-uikits" aria-selected="false"><img src="assets/images/svg-icon/frontend.svg" class="img-fluid" alt="UI Kits" data-toggle="tooltip" data-placement="top" title="Toko"></a> -->

                    <!--<a class="nav-link" id="v-pills-pages-tab" data-toggle="pill" href="#v-pills-pages" role="tab" aria-controls="v-pills-pages" aria-selected="false"><img src="assets/images/svg-icon/pages.svg" class="img-fluid" alt="Pages" data-toggle="tooltip" data-placement="top" title="Pages"></a>-->
                </div>
            </div>
            <div class="vertical-menu-detail">
                <div class="logobar">
                    <a href="{{url('/')}}" class="logo logo-large"><img src="assets/images/logo.svg" class="img-fluid" alt="logo"></a>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-crm" role="tabpanel" aria-labelledby="v-pills-crm-tab">
                        <ul class="vertical-menu">
                            <li><h5 class="menu-title">Dashboard</h5></li> 
                            <li><a href="{{url('/')}}"><img src="assets/images/svg-icon/dashboard.svg" class="img-fluid" alt="dashboard">Dashboard</a></li>
                        </ul>
                    </div>
                    
                    <!-- <div class="tab-pane fade" id="v-pills-film" role="tabpanel" aria-labelledby="v-pills-film-tab">
                        <ul class="vertical-menu">
                            <li><h5 class="menu-title">Film</h5></li> 
                            <li><a href="{{url('/film')}}"><img src="assets/images/video-camera.svg" class="img-fluid" alt="projects">List Film</a></li>
                        </ul>
                    </div> --> 

                    <div class="tab-pane fade" id="v-pills-ecommerce" role="tabpanel" aria-labelledby="v-pills-ecommerce-tab">
                        <ul class="vertical-menu">
                            <li><h5 class="menu-title">Film</h5></li> 
                            <li><a href="{{url('/film')}}"><img src="assets/images/video-camera.svg" class="img-fluid" alt="projects">List Film</a></li>
                        </ul>
                    </div>  

                    <!-- <div class="tab-pane fade" id="v-pills-hospital" role="tabpanel" aria-labelledby="v-pills-hospital-tab">
                        <ul class="vertical-menu">
                            <li><h5 class="menu-title">Barang</h5></li>
                            <li><a href="{{url('/Barcode')}}"><img src="assets/images/svg-icon/dashboard.svg" class="img-fluid" alt="dashboard">Cetak label TnJ 108</a></li>
                            <li><a href="{{url('/Barcode/Scanner')}}"><img src="assets/images/svg-icon/backend.svg" class="img-fluid" alt="dashboard">Barcode Scanner</a></li>
                        </ul>
                    </div> -->

                    <!-- <div class="tab-pane fade" id="v-pills-uikits" role="tabpanel" aria-labelledby="v-pills-uikits-tab">
                        <ul class="vertical-menu">
                            <li><h5 class="menu-title">Toko</h5></li>
                            <li><a href="{{url('/Toko/List_Toko')}}"><img src="assets/images/svg-icon/reports.svg" class="img-fluid" alt="projects">Halaman Toko</a></li>
                            <li><a href="{{url('/Toko/InputAwal')}}"><img src="assets/images/svg-icon/basic_page.svg" class="img-fluid" alt="clients">Tambah List Toko</a></li>
                            <li><a href="{{url('/Toko/InputKunjungan')}}"><img src="assets/images/svg-icon/basic_page.svg" class="img-fluid" alt="clients">Kunjungan</a></li>
                        </ul>                                
                    </div> -->

                    <div class="tab-pane fade" id="v-pills-pages" role="tabpanel" aria-labelledby="v-pills-pages-tab">
                        <ul class="vertical-menu">
                            <li><h5 class="menu-title">Pages</h5></li>
                            <li>
                                <a href="javaScript:void();">
                                  <img src="assets/images/svg-icon/basic_page.svg" class="img-fluid" alt="basic_page"><span>Basic</span><i class="feather icon-chevron-right"></i>
                                </a>
                                <ul class="vertical-submenu">
                                    <li><a href="{{url('/page-starter')}}">Starter</a></li>
                                    <li><a href="{{url('/page-blog')}}">Blog</a></li>
                                    <li><a href="{{url('/page-faq')}}">FAQ</a></li>
                                    <li><a href="{{url('/page-gallery')}}">Gallery</a></li>
                                    <li><a href="{{url('/page-invoice')}}">Invoice</a></li>
                                    <li><a href="{{url('/page-pricing')}}">Pricing</a></li>
                                    <li><a href="{{url('/page-timeline')}}">Timeline</a></li>
                                </ul>
                            </li> 
                            <li>
                                <a href="javaScript:void();">
                                  <img src="assets/images/svg-icon/authentication.svg" class="img-fluid" alt="authentication"><span>Authentications</span><i class="feather icon-chevron-right"></i>
                                </a>
                                <ul class="vertical-submenu">
                                    <li><a href="{{url('/user-login')}}">Login</a></li>
                                    <li><a href="{{url('/user-register')}}">Register</a></li>
                                    <li><a href="{{url('/user-forgotpsw')}}">Forgot Password</a></li>
                                    <li><a href="{{url('/user-lock-screen')}}">Lock Screen</a></li>
                                    <li><a href="{{url('/error-comingsoon')}}">Coming Soon</a></li>  
                                    <li><a href="{{url('/error-maintenance')}}">Maintenance</a></li>
                                    <li><a href="{{url('/error-404')}}">Error 404</a></li>
                                    <li><a href="{{url('/error-500')}}">Error 500</a></li>
                                </ul>
                            </li>                                   
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- End Navigationbar -->
    </div>
    <!-- End Sidebar -->
</div>