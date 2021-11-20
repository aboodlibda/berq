<!DOCTYPE html>
<html dir="rtl" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>مجلة بيرق الإلكترونية</title>

    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicons ==== -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700">

{{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">--}}

    <!-- ==== Font Awesome ==== -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <!-- ==== Bootstrap Framework ==== -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- ==== Bar Rating Plugin ==== -->
    <link rel="stylesheet" href="{{asset('css/fontawesome-stars-o.min.css')}}">

    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('style.css')}}">

    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('css/responsive-style.css')}}">

    <!-- ==== Theme Color Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('css/colors/theme-color-4.css')}}" id="changeColorScheme">

    <!-- ==== RTL Stylesheets ==== -->
    <link rel="stylesheet" href="{{asset('css/font-awesome-rtl.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/rtl-style.css')}}">

    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Preloader Start -->
<div id="preloader">
    <div class="preloader bg--color-1--b" data-preloader="1">
        <div class="preloader--inner"></div>
    </div>
</div>
<!-- Preloader End -->

<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Header Section Start -->
    <header class="header--section header--style-2">
        <!-- Header Topbar Start -->
        <div class="header--topbar bg--color-2">
            <div class="container">
                <div class="float--left float--xs-none text-xs-center">
                    <!-- Header Topbar Info Start -->
                    <ul class="header--topbar-info nav">
{{--                        <li><i class="fa fm fa-map-marker"></i>New York</li>--}}
{{--                        <li><i class="fa fm fa-mixcloud"></i>21<sup>0</sup> C</li>--}}
{{--                        <p id="demo"></p>--}}
                        <li><i class="fa fm fa-calendar" ></i>اليوم ( <span id="date"></span>  )</li>
                        <script>

                            const days = ["الأحد","الإثنين","الثلاثاء","الأربعاء","الخميس","الجمعة","السبت"];
                            const d = new Date();
                            var dateObj = new Date();
                            var month = dateObj.getUTCMonth() + 1; //months from 1-12
                            // var day = dateObj.getUTCDate();
                            var year = dateObj.getUTCFullYear();
                            let day = days[d.getDay()];
                            newdate = day + " - " + month + " - " + year ;



                            document.getElementById("date").innerHTML = newdate;
                        </script>


                    </ul>
                    <!-- Header Topbar Info End -->
                </div>

                <div class="float--right float--xs-none text-xs-center">
                    <!-- Header Topbar Action Start -->
                    <ul class="header--topbar-action nav">
                        <li><a href="login-rtl.html"><i class="fa fm fa-user-o"></i>تسجيل دخول/الإدارة</a></li>
                    </ul>
                    <!-- Header Topbar Action End -->

                    <!-- Header Topbar Language Start -->
{{--                    <ul class="header--topbar-lang nav">--}}
{{--                        <li class="dropdown">--}}
{{--                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fm fa-language"></i>English<i class="fa flm fa-angle-down"></i></a>--}}

{{--                            <ul class="dropdown-menu">--}}
{{--                                <li><a href="#">English</a></li>--}}
{{--                                <li><a href="#">Spanish</a></li>--}}
{{--                                <li><a href="#">French</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
                    <!-- Header Topbar Language End -->

                    <!-- Header Topbar Social Start -->
                    <ul class="header--topbar-social nav hidden-sm hidden-xxs">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>
                    <!-- Header Topbar Social End -->
                </div>
            </div>
        </div>
        <!-- Header Topbar End -->

        <!-- Header Mainbar Start -->
        <div class="header--mainbar">
            <div class="container">
                <!-- Header Logo Start -->
                <div class="header--logo text-center">
                    <h1 class="h1">
                        <a href="{{route('main')}}" class="btn-link">
                            <img src="{{asset('berq.jpg')}}" alt="USNews Logo" style="width: 350px;height: 150px">
                            <span class="hidden">شعار مجلة بيرق</span>
                        </a>
                    </h1>
                </div>
                <!-- Header Logo End -->
            </div>
        </div>
        <!-- Header Mainbar End -->

        <!-- Header Navbar Start -->
        <div class="header--navbar navbar bd--color-1 bg--color-1" data-trigger="sticky">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav" aria-expanded="false" aria-controls="headerNav">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div id="headerNav" class="navbar-collapse collapse float--left">
                    <!-- Header Menu Links Start -->
                    <ul class="header--menu-links nav navbar-nav" data-trigger="hoverIntent">
                        @php
                        $categories = \App\Models\Category::limit(9)->get();
                        @endphp
                        @foreach($categories as $category)
                        <li><a href="{{route('categories.show',$category->id)}}">{{$category->name}}</a></li>
                        @endforeach


                    </ul>
                    <!-- Header Menu Links End -->
                </div>

                <!-- Header Search Form Start -->
{{--                <form action="#" class="header--search-form float--right" data-form="validate">--}}
{{--                    <input type="search" name="search" placeholder="Search..." class="header--search-control form-control" required>--}}

{{--                    <button type="submit" class="header--search-btn btn"><i class="header--search-icon fa fa-search"></i></button>--}}
{{--                </form>--}}
                <!-- Header Search Form End -->
            </div>
        </div>
        <!-- Header Navbar End -->
    </header>
    <!-- Header Section End -->

    <!-- News Ticker Start -->
    <div class="news--ticker">
        <div class="container">
            @php
                $titles = DB::table('articles')->select('title')->latest()->get();
            @endphp
            <div class="title">
                <h2>اَخر الأخبار &nbsp; :  </h2>
            </div>

            <div class="news-updates--list" data-marquee="true">
                <ul class="nav">
                    @foreach($titles as $item)
                    <li>
                        <h3 class="h3"><a>{{$item->title}}</a></h3>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!-- News Ticker End -->
    @yield('content')
    <!-- Footer Section Start -->
    <footer class="footer--section">
        <!-- Footer Widgets Start -->
        <div class="footer--widgets pd--30-0 bg--color-2">
            <div class="container">
                <div class="row AdjustRow">
                    <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
                        <!-- Widget Start -->
                        <div class="widget">
                            <div class="widget--title">
                                <h2 class="h4">من نحن </h2>

                                <i class="icon fa fa-exclamation"></i>
                            </div>

                            <!-- About Widget Start -->
                            <div class="about--widget">
                                <div class="content">
                                    <p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى)
                                        ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي
                                        منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص،</p>
                                </div>

                                <div class="action">
                                    <a href="#" class="btn-link">المزيد ...<i class="fa flm fa-angle-double-left"></i></a>
                                </div>

                                <ul class="nav">
                                    <li>
                                        <i class="fa fa-map"></i>
                                        <span>العنوان بالتفصيل</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i>
                                        <a href="mailto:example@example.com">example@example.com</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <a href="tel:+123456789">+123 456 (789)</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- About Widget End -->
                        </div>
                        <!-- Widget End -->
                    </div>

                    <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
                        <!-- Widget Start -->
                        <div class="widget">
                            <div class="widget--title">
                                <h2 class="h4">الأقسام</h2>

                                <i class="icon fa fa-expand"></i>
                            </div>

                            <!-- Links Widget Start -->
                            <div class="links--widget">
                                <ul class="nav">
                                    @foreach($categories as $category)
                                    <li><a href="{{route('categories.show',$category->id)}}">{{$category->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- Links Widget End -->
                        </div>
                        <!-- Widget End -->
                    </div>

                    <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
                        <!-- Widget Start -->
                        <div class="widget">
                            <div class="widget--title">
                                <h2 class="h4">الإعلانات</h2>

                                <i class="icon fa fa-bullhorn"></i>
                            </div>

                            <!-- Links Widget Start -->
                            <div class="links--widget">
                                <ul class="nav">
                                    <li><a href="#"> العرب والعالم</a></li>
                                    <li><a href="#">الخليج العربي</a></li>
                                    <li><a href="#">رياضة</a></li>
                                    <li><a href="#">سوريا</a></li>
                                    <li><a href="#">مصر</a></li>
                                    <li><a href="#">أميركا</a></li>
                                    <li><a href="#">إيران</a></li>
                                </ul>
                            </div>
                            <!-- Links Widget End -->
                        </div>
                        <!-- Widget End -->
                    </div>

                    <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
                        <!-- Widget Start -->
                        <div class="widget">
                            <div class="widget--title">
                                <h2 class="h4">الوظائف</h2>

                                <i class="icon fa fa-user-o"></i>
                            </div>

                            <!-- Links Widget Start -->
                            <div class="links--widget">
                                <ul class="nav">
                                    <li><a href="#"> العرب والعالم</a></li>
                                    <li><a href="#">الخليج العربي</a></li>
                                    <li><a href="#">رياضة</a></li>
                                    <li><a href="#">سوريا</a></li>
                                    <li><a href="#">مصر</a></li>
                                    <li><a href="#">أميركا</a></li>
                                    <li><a href="#">إيران</a></li>
                                </ul>
                            </div>
                            <!-- Links Widget End -->
                        </div>
                        <!-- Widget End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Widgets End -->

        <!-- Footer Copyright Start -->
        <div class="footer--copyright bg--color-3">
            <div class="social--bg bg--color-1"></div>

            <div class="container">
                <p class="text float--left">. جميع حقوق الطبع محفوظة.  <a href="{{route('main')}}">مجلة بيرق الإلكترونية</a>  2021 &copy;</p>

                <ul class="nav social float--right">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                </ul>

{{--                <ul class="nav links float--right">--}}
{{--                    <li><a href="#">Home</a></li>--}}
{{--                    <li><a href="#">FAQ</a></li>--}}
{{--                    <li><a href="#">Support</a></li>--}}
{{--                </ul>--}}
            </div>
        </div>
        <!-- Footer Copyright End -->
    </footer>
    <!-- Footer Section End -->
</div>
<!-- Wrapper End -->

<!-- Sticky Social Start -->
<div id="stickySocial" class="sticky--left">
    <ul class="nav">
        <li>
            <a href="#">
                <i class="fa fa-facebook"></i>
                <span>تابعنا على فايسبوك</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-twitter"></i>
                <span>تابعنا على تويتر</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-youtube-play"></i>
                <span>تابعنا على اليوتيوب</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-linkedin"></i>
                <span>تابعنا على لينكيد إن</span>
            </a>
        </li>
    </ul>
</div>
<!-- Sticky Social End -->

<!-- Back To Top Button Start -->
<div id="backToTop">
    <a href="#"><i class="fa fa-angle-double-up"></i></a>
</div>
<!-- Back To Top Button End -->

<!-- ==== jQuery Library ==== -->
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>

<!-- ==== Bootstrap Framework ==== -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- ==== StickyJS Plugin ==== -->
<script src="{{asset('js/jquery.sticky.min.js')}}"></script>

<!-- ==== HoverIntent Plugin ==== -->
<script src="{{asset('js/jquery.hoverIntent.min.js')}}"></script>

<!-- ==== Marquee Plugin ==== -->
<script src="{{asset('js/jquery.marquee.min.js')}}"></script>

{{--<!-- ==== Validation Plugin ==== -->--}}
{{--<script src="js/jquery.validate.min.js"></script>--}}

<!-- ==== Isotope Plugin ==== -->
<script src="{{asset('js/isotope.min.js')}}"></script>

<!-- ==== Resize Sensor Plugin ==== -->
<script src="{{asset('js/resizesensor.min.js')}}"></script>

<!-- ==== Sticky Sidebar Plugin ==== -->
<script src="{{asset('js/theia-sticky-sidebar.min.js')}}"></script>

<!-- ==== Zoom Plugin ==== -->
<script src="{{asset('js/jquery.zoom.min.js')}}"></script>

<!-- ==== Bar Rating Plugin ==== -->
<script src="{{asset('js/jquery.barrating.min.js')}}"></script>

<!-- ==== RetinaJS Plugin ==== -->
<script src="{{asset('js/retina.min.js')}}"></script>

{{--<!-- ==== Google Map API ==== -->--}}
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK9f7sXWmqQ1E-ufRXV3VpXOn_ifKsDuc"></script>--}}

<!-- ==== Main JavaScript ==== -->
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
