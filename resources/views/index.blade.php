<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Trator</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@400;500;600;700;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.html"><img src="{{ asset('images/logo.png') }}"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  






               <ul class="navbar-nav ml-auto">

    <!-- Home -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">
            Home
        </a>
    </li>


    <!-- About -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/about') }}">
            About
        </a>
    </li>


    @if(Auth::check())

        <!-- ========================= -->
        <!-- LOGGED IN USER -->
        <!-- ========================= -->


        <!-- Vehicles -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/cars') }}">
                Vehicles
            </a>
        </li>


        <!-- My Bookings -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/my-bookings') }}">
                My Bookings
            </a>
        </li>


        <!-- Profile -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/profile') }}">
                Profile
            </a>
        </li>


        <!-- Admin Panel ONLY for action 1 -->
        @if(Auth::user()->action == 1)

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin') }}">
                    Admin Panel
                </a>
            </li>

        @endif


        <!-- Logout -->
        <li class="nav-item">

            <form
                action="{{ url('/logout') }}"
                method="POST"
                style="margin: 0;">

                @csrf

                <button
                    type="submit"
                    class="nav-link"
                    style="
                        border: none;
                        background: none;
                        cursor: pointer;
                    ">

                    Logout

                </button>

            </form>

        </li>


    @else

        <!-- ========================= -->
        <!-- LOGGED OUT USER -->
        <!-- ========================= -->


        <!-- Login -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/login') }}">
                Login
            </a>
        </li>


        <!-- Signup -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/signup') }}">
                Signup
            </a>
        </li>


    @endif

</ul>






                  <form class="form-inline my-2 my-lg-0">
                  </form>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <div class="call_text_main">
         <div class="container">
            <div class="call_taital">
               <div class="call_text"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_15">Location</span></a></div>
               <div class="call_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_15">(+92) 318-8985862</span></a></div>
               <div class="call_text"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_15">mainemail11sep@gmail.com</span></a></div>
            </div>
         </div>
      </div>
      <!-- banner section start --> 
      <div class="banner_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div id="banner_slider" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">Car Rent <br><span style="color: #fe5b29;">For You</span></h1>
                              <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority</p>
                  
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">Car Rent <br><span style="color: #fe5b29;">For You</span></h1>
                              <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority</p>
                        
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">Car Rent <br><span style="color: #fe5b29;">For You</span></h1>
                              <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority</p>
                             
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                     </a>
                     <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                     </a>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="banner_img"><img src="{{ asset('images/banner-img.png') }}"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end -->
      <!-- about section start -->
    <!--  <div class="about_section layout_padding">
         <div class="container">
            <div class="about_section_2">
               <div class="row">
                  <div class="col-md-6"> 
                     <div class="image_iman"><img src="{{ asset('images/about-img.png') }}" class="about_img"></div>
                  </div>
                  <div class="col-md-6"> 
                     <div class="about_taital_box">
                        <h1 class="about_taital">About <span style="color: #fe5b29;">Us</span></h1>
                        <p class="about_text">going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined </p>
                        <div class="readmore_btn"><a href="#">Read More</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>  -->
      <!-- about section end -->
  <!--    <div class="search_section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="search_taital">Search Your Best Cars</h1>
                  <p class="search_text">Using 'Content here, content here', making it look like readable</p>
                  <div class="container">
                     <div class="select_box_section">
                        <div class="select_box_main">
                           <div class="row">
                              <div class="col-md-3 select-outline">
                                 <select class="mdb-select md-form md-outline colorful-select dropdown-primary">
                                    <option value="" disabled selected>Any Brand</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                 </select>
                              </div>
                              <div class="col-md-3 select-outline">
                                 <select class="mdb-select md-form md-outline colorful-select dropdown-primary">
                                    <option value="" disabled selected>Any type</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                 </select>
                              </div>
                              <div class="col-md-3 select-outline">
                                 <select class="mdb-select md-form md-outline colorful-select dropdown-primary">
                                    <option value="" disabled selected>Price</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                 </select>
                              </div>
                              <div class="col-md-3">
                                 <div class="search_btn"><a href="#">Search Now</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>   -->
      <!-- gallery section start -->
     








                <div class="gallery_section layout_padding">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1 class="gallery_taital">Our best offers</h1>
            </div>
        </div>

        <div class="gallery_section_2">
            <div class="row">

                @foreach($cars as $car)

                    <div class="col-md-4">
                        <div class="gallery_box">

                            <div class="gallery_img">
                                @if($car->image)
                                    <img src="{{ asset('images/' . $car->image) }}"
                                         alt="{{ $car->name }}">
                                @else
                                    <img src="{{ asset('images/img-1.png') }}"
                                         alt="{{ $car->name }}">
                                @endif
                            </div>

                            <h3 class="types_text">
                                {{ $car->name }}
                            </h3>

                            <p class="looking_text">
                                Start per day ${{ $car->price_per_day }}
                            </p>

                            <div class="read_bt">
                                <a href="/car/{{ $car->id }}">Book Now</a>
                            </div>

                        </div>
                    </div>

                @endforeach

            </div>
        </div>

    </div>
</div>











      <!-- gallery section end -->
      <!-- choose section start -->
      <div class="choose_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="choose_taital">WHY CHOOSE US</h1>
               </div>
            </div>
            <div class="choose_section_2">
               <div class="row">
                  <div class="col-sm-4">
                     <div class="icon_1"><img src="{{ asset('images/icon-1.png') }}"></div>
                     <h4 class="safety_text">SAFETY & SECURITY</h4>
                     <p class="ipsum_text">variations of passages of Lorem Ipsum available, but the majority have </p>
                  </div>
                  <div class="col-sm-4">
                     <div class="icon_1"><img src="{{ asset('images/icon-2.png') }}"></div>
                     <h4 class="safety_text">Online Booking</h4>
                     <p class="ipsum_text">variations of passages of Lorem Ipsum available, but the majority have </p>
                  </div>
                  <div class="col-sm-4">
                     <div class="icon_1"><img src="{{ asset('images/icon-3.png') }}"></div>
                     <h4 class="safety_text">Best Drivers</h4>
                     <p class="ipsum_text">variations of passages of Lorem Ipsum available, but the majority have </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- choose section end -->
      <!-- client section start -->
      <div class="client_section layout_padding">
         <div class="container">
            <div id="custom_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="client_taital">What Says Customers</h1>
                        </div>
                     </div>
                     <div class="client_section_2">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="client_taital_box">
                                 <div class="client_img"><img src="{{ asset('images/1.png') }}"></div>
                                 <h3 class="moark_text">Hannery</h3>
                                 <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page</p>
                              </div>
                              <div class="quick_icon"><img src="{{ asset('images/quick-icon.png') }}"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="client_taital_box">
                                 <div class="client_img"><img src="{{ asset('images/2.png') }}"></div>
                                 <h3 class="moark_text">Channery</h3>
                                 <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page</p>
                              </div>
                              <div class="quick_icon"><img src="{{ asset('images/quick-icon.png') }}"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="client_taital">What Says Customers</h1>
                        </div>
                     </div>
                     <div class="client_section_2">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="client_taital_box">
                                 <div class="client_img"><img src="{{ asset('images/3.png') }}"></div>
                                 <h3 class="moark_text">Hannery</h3>
                                 <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page</p>
                              </div>
                              <div class="quick_icon"><img src="{{ asset('images/quick-icon.png') }}"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="client_taital_box">
                                 <div class="client_img"><img src="{{ asset('images/5.png') }}"></div>
                                 <h3 class="moark_text">Channery</h3>
                                 <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page</p>
                              </div>
                              <div class="quick_icon"><img src="{{ asset('images/quick-icon.png') }}"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="client_taital">What Says Customers</h1>
                        </div>
                     </div>
                     <div class="client_section_2">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="client_taital_box">
                                 <div class="client_img"><img src="{{ asset('images/6.png') }}"></div>
                                 <h3 class="moark_text">Hannery</h3>
                                 <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page</p>
                              </div>
                              <div class="quick_icon"><img src="{{ asset('images/quick-icon.png') }}"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="client_taital_box">
                                 <div class="client_img"><img src="{{ asset('images/7.png') }}"></div>
                                 <h3 class="moark_text">Channery</h3>
                                 <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page</p>
                              </div>
                              <div class="quick_icon"><img src="{{ asset('images/quick-icon.png') }}"></div>
                           </div>
                        </div>
                     </div>
                  </div>   





                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="client_taital">What Says Customers</h1>
                        </div>
                     </div>
                     <div class="client_section_2">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="client_taital_box">
                                 <div class="client_img"><img src="{{ asset('images/8.png') }}"></div>
                                 <h3 class="moark_text">Hannery</h3>
                                 <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page</p>
                              </div>
                              <div class="quick_icon"><img src="{{ asset('images/quick-icon.png') }}"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="client_taital_box">
                                 <div class="client_img"><img src="{{ asset('images/9.png') }}"></div>
                                 <h3 class="moark_text">Channery</h3>
                                 <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page</p>
                              </div>
                              <div class="quick_icon"><img src="{{ asset('images/quick-icon.png') }}"></div>
                           </div>
                        </div>
                     </div>
                  </div>





                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="client_taital">What Says Customers</h1>
                        </div>
                     </div>
                     <div class="client_section_2">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="client_taital_box">
                                 <div class="client_img"><img src="{{ asset('images/10.png') }}"></div>
                                 <h3 class="moark_text">Hannery</h3>
                                 <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page</p>
                              </div>
                              <div class="quick_icon"><img src="{{ asset('images/quick-icon.png') }}"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="client_taital_box">
                                 <div class="client_img"><img src="{{ asset('images/11.png') }}"></div>
                                 <h3 class="moark_text">Channery</h3>
                                 <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page</p>
                              </div>
                              <div class="quick_icon"><img src="{{ asset('images/quick-icon.png') }}"></div>
                           </div>
                        </div>
                     </div>
                  </div>



                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="client_taital">What Says Customers</h1>
                        </div>
                     </div>
                     <div class="client_section_2">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="client_taital_box">
                                 <div class="client_img"><img src="{{ asset('images/12.png') }}"></div>
                                 <h3 class="moark_text">Hannery</h3>
                                 <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page</p>
                              </div>
                              <div class="quick_icon"><img src="{{ asset('images/quick-icon.png') }}"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="client_taital_box">
                                 <div class="client_img"><img src="{{ asset('images/13.png') }}"></div>
                                 <h3 class="moark_text">Channery</h3>
                                 <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page</p>
                              </div>
                              <div class="quick_icon"><img src="{{ asset('images/quick-icon.png') }}"></div>
                           </div>
                        </div>
                     </div>
                  </div>




               </div>
               <a class="carousel-control-prev" href="#custom_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#custom_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- client section end -->
     
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="footeer_logo"><img src="{{ asset('images/logo.png') }}"></div>
               </div>
            </div>
            <div class="footer_section_2">
               <div class="row">
                 
                  <div class="col">
                     <h4 class="footer_taital">Information</h4>
                     <p class="lorem_text"> Rent your favorite car easily and enjoy a comfortable, reliable, and hassle-free journey. Choose your car, select your dates, and book with confidence.</p>
                  </div>
                  <div class="col">
                     <h4 class="footer_taital">Helpful Links</h4>
                     <p class="lorem_text">Quickly explore our vehicles, manage your bookings, view your profile, and find everything you need for a smooth car rental experience.</p>
                  </div>
                  <div class="col">
                     <h4 class="footer_taital">Invesments</h4>
                     <p class="lorem_text"> We continuously invest in maintaining quality vehicles, improving our services, and providing our customers with a safe, comfortable, and reliable car rental experience. </p>
                  </div>
                  <div class="col">
                     <h4 class="footer_taital">Contact Us</h4>
                     <div class="location_text"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_15">Location</span></a></div>
                     <div class="location_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_15">(+92) 318-8985862</span></a></div>
                     <div class="location_text"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_15">mainemail11sep@gmail.com</span></a></div>
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="https://www.linkedin.com/in/shayan-rafique-525723430/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <p class="copyright_text">Ha Chango Khabar Aa</p>
               </div>
            </div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('js/plugin.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('js/custom.js') }}"></script>
   </body>
</html>