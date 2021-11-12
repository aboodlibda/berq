@extends('layouts.master')

  @section('content')
      <!-- Main Content Section Start -->
      <div class="main-content--section pbottom--30">
          <div class="container">
              <!-- Main Content Start -->
              <div class="main--content">
                  <!-- Post Items Start -->
                  <div class="post--items post--items-1 pd--30-0">
                      <div class="row gutter--15">
                          <div class="col-md-6">
                              <!-- Post Item Start -->
                              <div class="post--item post--layout-1 post--title-larger">
                                  <div class="post--img">
                                      <a href="news-single-v1-rtl.html" style="height: 450px;background: url({{asset('articlesImages/'.$lastOne->image)}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>
                                      <a href="#" class="cat">{{$lastOne->category->name}}</a>
{{--                                      <a href="#" class="icon"><i class="fa fa-flash"></i></a>--}}

                                      <div class="post--map">
                                          <p class="btn-link"></p>

                                          <div class="map--wrapper">

                                          </div>
                                      </div>

                                      <div class="post--info">
                                          <ul class="nav meta">
                                              <li><a href="#">{{$lastOne->created_at->diffForHumans()}}</a></li>
                                          </ul>

                                          <div class="title">
                                              <h2 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">{{Str::limit($lastOne->title ,150)}}</a></h2>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- Post Item End -->
                          </div>

                          <div class="col-md-6">
                              <div class="row gutter--15">

                                    @php
                                    $item = 1;
                                    @endphp
                                  @foreach($lastFour as $last)

                                      @if($item==2)
                                          <div class="col-sm-12 hidden-sm hidden-xs" >
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-1 post--title-larger" >
                                                  <div class="post--img">
                                                      <a href="news-single-v1-rtl.html" style="height: 250px; background: url({{asset('articlesImages/'.$last->image)}}) no-repeat;background-size: cover; background-position: 0% 50%;"></a>
                                                      <a href="#" class="cat">{{$last->category->name}}</a>

                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><a href="#">{{$lastOne->created_at->diffForHumans()}}</a></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h2 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">{{Str::limit($lastOne->title ,100)}}</a></h2>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </div>

                                      @endif

                                      @if($item!=1 &$item!=2)
                                      <div class="col-xs-6 col-xss-12">
                                          <!-- Post Item Start -->
                                          <div class="post--item post--layout-1 post--title-large">
                                              <div class="post--img">
                                                  <a href="news-single-v1-rtl.html" style="height: 185px;background: url({{asset('articlesImages/'.$last->image)}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>
                                                  <a href="#" class="cat">{{$last->category->name}}</a>

                                                  <div class="post--info">
                                                      <ul class="nav meta">
                                                          <li><a href="#">{{$last->created_at->diffForHumans()}}</a></li>
                                                      </ul>

                                                      <div class="title">
                                                          <h2 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">{{Str::limit($last->title ,60)}}</a></h2>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <!-- Post Item End -->
                                      </div>
                                        @endif
                                      @php
                                      $item++
                                      @endphp
                                  @endforeach
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Post Items End -->
              </div>
              <!-- Main Content End -->

              <div class="row">
                  <!-- Main Content Start -->
                  <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                      <div class="sticky-content-inner">
                          <div class="row">
                              <!-- World News Start -->
                              <div class="col-md-6 ptop--30 pbottom--30">
                                  <!-- Post Items Title Start -->
                                  <div class="post--items-title" data-ajax="tab">
                                      <h2 class="h4">Worlds News</h2>

                                      <div class="nav">
                                          <a href="#" class="prev btn-link" data-ajax-action="load_prev_world_news_posts">
                                              <i class="fa fa-long-arrow-left"></i>
                                          </a>

                                          <span class="divider">/</span>

                                          <a href="#" class="next btn-link" data-ajax-action="load_next_world_news_posts">
                                              <i class="fa fa-long-arrow-right"></i>
                                          </a>
                                      </div>
                                  </div>
                                  <!-- Post Items Title End -->

                                  <!-- Post Items Start -->
                                  <div class="post--items post--items-2" data-ajax-content="outer">
                                      <ul class="nav row gutter--15" data-ajax-content="inner">
                                          <li class="col-xs-12">
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-1">
                                                  <div class="post--img">
                                                      <a href="news-single-v1-rtl.html" style="height: 180px;background: url({{asset('articlesImages/التقاط.JPG')}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>
                                                      <a href="#" class="cat">War</a>

                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><a href="#">Astaroth</a></li>
                                                              <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">Siriya attaced by a long established fact that a reader will be distracted by</a></h3>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </li>
                                          <li class="col-xs-12">
                                              <!-- Divider Start -->
                                              <hr class="divider">
                                              <!-- Divider End -->
                                          </li>
                                          <li class="col-xs-6">
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-2">
                                                  <div class="post--img">
                                                      <a href="news-single-v1-rtl.html" class="thumb"><img src="{{asset('img/home-img/world-news-02.jpg')}}" alt=""></a>

                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><a href="#">Hantu Raya</a></li>
                                                              <li><a href="#">17 April 2017</a></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">It is a long established fact that a reader will done</a></h3>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </li>
                                          <li class="col-xs-6">
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-2">
                                                  <div class="post--img">
                                                      <a href="news-single-v1-rtl.html" class="thumb"><img src="{{asset('img/home-img/world-news-03.jpg')}}" alt=""></a>

                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><a href="#">Astaroth</a></li>
                                                              <li><a href="#">17 April 2017</a></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">It is a long established fact that a reader will done</a></h3>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </li>
                                          <li class="col-xs-12">
                                              <!-- Divider Start -->
                                              <hr class="divider">
                                              <!-- Divider End -->
                                          </li>
                                          <li class="col-xs-6">
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-2">
                                                  <div class="post--img">
                                                      <a href="news-single-v1-rtl.html" class="thumb"><img src="{{asset('img/home-img/world-news-04.jpg')}}" alt=""></a>

                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><a href="#">Astaroth</a></li>
                                                              <li><a href="#">17 April 2017</a></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">It is a long established fact that a reader will done</a></h3>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </li>
                                          <li class="col-xs-6">
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-2">
                                                  <div class="post--img">
                                                      <a href="news-single-v1-rtl.html" class="thumb"><img src="{{asset('img/home-img/world-news-05.jpg')}}" alt=""></a>

                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><a href="#">Hantu Raya</a></li>
                                                              <li><a href="#">17 April 2017</a></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">It is a long established fact that a reader will done</a></h3>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </li>
                                      </ul>

                                      <!-- Preloader Start -->
                                      <div class="preloader bg--color-0--b" data-preloader="1">
                                          <div class="preloader--inner"></div>
                                      </div>
                                      <!-- Preloader End -->
                                  </div>
                                  <!-- Post Items End -->
                              </div>
                              <!-- World News End -->

                              <!-- Technology Start -->
                              <div class="col-md-6 ptop--30 pbottom--30">
                                  <!-- Post Items Title Start -->
                                  <div class="post--items-title" data-ajax="tab">
                                      <h2 class="h4">Technology</h2>

                                      <div class="nav">
                                          <a href="#" class="prev btn-link" data-ajax-action="load_prev_technology_posts">
                                              <i class="fa fa-long-arrow-left"></i>
                                          </a>

                                          <span class="divider">/</span>

                                          <a href="#" class="next btn-link" data-ajax-action="load_next_technology_posts">
                                              <i class="fa fa-long-arrow-right"></i>
                                          </a>
                                      </div>
                                  </div>
                                  <!-- Post Items Title End -->

                                  <!-- Post Items Start -->
                                  <div class="post--items post--items-3" data-ajax-content="outer">
                                      <ul class="nav" data-ajax-content="inner">
                                          <li>
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-1">
                                                  <div class="post--img">
                                                      <a href="news-single-v1-rtl.html" style="height: 180px;background: url({{asset('articlesImages/550129.jpg')}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>
                                                      <a href="#" class="cat">Computer</a>

                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><a href="#">Bathin</a></li>
                                                              <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h3>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </li>
                                          <li>
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-3">
                                                  <div class="post--img">
                                                      <a href="news-single-v1-rtl.html" class="thumb"><img src="{{asset('img/home-img/technology-02.jpg')}}" alt=""></a>

                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><a href="#">Bune</a></li>
                                                              <li><a href="#">16 April 2017</a></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </li>
                                          <li>
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-3">
                                                  <div class="post--img">
                                                      <a href="news-single-v1-rtl.html" class="thumb"><img src="{{asset('img/home-img/technology-03.jpg')}}" alt=""></a>

                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><a href="#">Bune</a></li>
                                                              <li><a href="#">16 April 2017</a></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </li>
                                          <li>
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-3">
                                                  <div class="post--img">
                                                      <a href="news-single-v1-rtl.html" class="thumb"><img src="{{asset('img/home-img/technology-04.jpg')}}" alt=""></a>

                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><a href="#">Bune</a></li>
                                                              <li><a href="#">16 April 2017</a></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </li>
                                          <li>
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-3">
                                                  <div class="post--img">
                                                      <a href="news-single-v1-rtl.html" class="thumb"><img src="{{asset('img/home-img/technology-05.jpg')}}" alt=""></a>

                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><a href="#">Bune</a></li>
                                                              <li><a href="#">16 April 2017</a></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </li>
                                      </ul>

                                      <!-- Preloader Start -->
                                      <div class="preloader bg--color-0--b" data-preloader="1">
                                          <div class="preloader--inner"></div>
                                      </div>
                                      <!-- Preloader End -->
                                  </div>
                                  <!-- Post Items End -->
                              </div>
                              <!-- Technology End -->

                              <!-- Ad Start -->
                              <div class="col-md-12 ptop--30 pbottom--30">
                                  <!-- Advertisement Start -->
                                  <div class="ad--space">
                                      <a href="#">
                                          <img src="{{asset('img/ads-img/ad-728x90-01.jpg')}}" alt="" class="center-block">
                                      </a>
                                  </div>
                                  <!-- Advertisement End -->
                              </div>
                              <!-- Ad End -->

                              <!-- Finance Start -->
                              <div class="col-md-12 ptop--30 pbottom--30">
                                  <!-- Post Items Title Start -->
                                  <div class="post--items-title" data-ajax="tab">
                                      <h2 class="h4">Finance</h2>

                                      <div class="nav">
                                          <a href="#" class="prev btn-link" data-ajax-action="load_prev_finance_posts">
                                              <i class="fa fa-long-arrow-left"></i>
                                          </a>

                                          <span class="divider">/</span>

                                          <a href="#" class="next btn-link" data-ajax-action="load_next_finance_posts">
                                              <i class="fa fa-long-arrow-right"></i>
                                          </a>
                                      </div>
                                  </div>
                                  <!-- Post Items Title End -->

                                  <!-- Post Items Start -->
                                  <div class="post--items post--items-2" data-ajax-content="outer">
                                      <ul class="nav row" data-ajax-content="inner">
                                          <li class="col-md-6">
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-2">
                                                  <div class="post--img">
                                                      <a href="news-single-v1-rtl.html" class="thumb"><img src="{{asset('img/home-img/finance-01.jpg')}}" alt=""></a>
                                                      <a href="#" class="cat">Business</a>
                                                      <a href="#" class="icon"><i class="fa fa-star-o"></i></a>

                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><a href="#">Vassago</a></li>
                                                              <li><a href="#">Today 03:30 am</a></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas.</a></h3>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </li>

                                          <li class="col-md-6">
                                              <ul class="nav row">
                                                  <li class="col-xs-12 hidden-md hidden-lg">
                                                      <!-- Divider Start -->
                                                      <hr class="divider">
                                                      <!-- Divider End -->
                                                  </li>

                                                  <li class="col-xs-6">
                                                      <!-- Post Item Start -->
                                                      <div class="post--item post--layout-2">
                                                          <div class="post--img">
                                                              <a href="news-single-v1-rtl.html" class="thumb"><img src="{{asset('img/home-img/finance-02.jpg')}}" alt=""></a>

                                                              <div class="post--info">
                                                                  <ul class="nav meta">
                                                                      <li><a href="#">Zepar</a></li>
                                                                      <li><a href="#">Today 03:52 pm</a></li>
                                                                  </ul>

                                                                  <div class="title">
                                                                      <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">It is a long established fact that a reader will be</a></h3>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <!-- Post Item End -->
                                                  </li>

                                                  <li class="col-xs-6">
                                                      <!-- Post Item Start -->
                                                      <div class="post--item post--layout-2">
                                                          <div class="post--img">
                                                              <a href="news-single-v1-rtl.html" class="thumb"><img src="img/home-img/finance-03.jpg" alt=""></a>

                                                              <div class="post--info">
                                                                  <ul class="nav meta">
                                                                      <li><a href="#">Demiurge</a></li>
                                                                      <li><a href="#">Today 03:02 pm</a></li>
                                                                  </ul>

                                                                  <div class="title">
                                                                      <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">It is a long established fact that a reader will be</a></h3>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <!-- Post Item End -->
                                                  </li>

                                                  <li class="col-xs-12">
                                                      <!-- Divider Start -->
                                                      <hr class="divider">
                                                      <!-- Divider End -->
                                                  </li>

                                                  <li class="col-xs-6">
                                                      <!-- Post Item Start -->
                                                      <div class="post--item post--layout-2">
                                                          <div class="post--img">
                                                              <a href="news-single-v1-rtl.html" class="thumb"><img src="img/home-img/finance-04.jpg" alt=""></a>

                                                              <div class="post--info">
                                                                  <ul class="nav meta">
                                                                      <li><a href="#">Demiurge</a></li>
                                                                      <li><a href="#">Today 02:05 am</a></li>
                                                                  </ul>

                                                                  <div class="title">
                                                                      <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">It is a long established fact that a reader will be</a></h3>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <!-- Post Item End -->
                                                  </li>

                                                  <li class="col-xs-6">
                                                      <!-- Post Item Start -->
                                                      <div class="post--item post--layout-2">
                                                          <div class="post--img">
                                                              <a href="news-single-v1-rtl.html" class="thumb"><img src="img/home-img/finance-05.jpg" alt=""></a>

                                                              <div class="post--info">
                                                                  <ul class="nav meta">
                                                                      <li><a href="#">Zepar</a></li>
                                                                      <li><a href="#">Today 12:35 am</a></li>
                                                                  </ul>

                                                                  <div class="title">
                                                                      <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">It is a long established fact that a reader will be</a></h3>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <!-- Post Item End -->
                                                  </li>
                                              </ul>
                                          </li>
                                      </ul>

                                      <!-- Preloader Start -->
                                      <div class="preloader bg--color-0--b" data-preloader="1">
                                          <div class="preloader--inner"></div>
                                      </div>
                                      <!-- Preloader End -->
                                  </div>
                                  <!-- Post Items End -->
                              </div>
                              <!-- Finance End -->

                              <!-- Politics Start -->
                              <div class="col-md-6 ptop--30 pbottom--30">
                                  <!-- Post Items Title Start -->
                                  <div class="post--items-title" data-ajax="tab">
                                      <h2 class="h4">Politics</h2>

                                      <div class="nav">
                                          <a href="#" class="prev btn-link" data-ajax-action="load_prev_politics_posts">
                                              <i class="fa fa-long-arrow-left"></i>
                                          </a>

                                          <span class="divider">/</span>

                                          <a href="#" class="next btn-link" data-ajax-action="load_next_politics_posts">
                                              <i class="fa fa-long-arrow-right"></i>
                                          </a>
                                      </div>
                                  </div>
                                  <!-- Post Items Title End -->

                                  <!-- Post Items Start -->
                                  <div class="post--items post--items-2" data-ajax-content="outer">
                                      <ul class="nav row gutter--15" data-ajax-content="inner">
                                          <li class="col-xs-12">
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-1">
                                                  <div class="post--img">
                                                      <a href="news-single-v1-rtl.html" class="thumb"><img src="img/home-img/politics-01.jpg" alt=""></a>
                                                      <a href="#" class="cat">Election</a>
                                                      <a href="#" class="icon"><i class="fa fa-fire"></i></a>

                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><a href="#">Astaroth</a></li>
                                                              <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h3>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </li>
                                          <li class="col-xs-12">
                                              <!-- Divider Start -->
                                              <hr class="divider">
                                              <!-- Divider End -->
                                          </li>
                                          <li class="col-xs-6">
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-2">
                                                  <div class="post--img">
                                                      <a href="news-single-v1-rtl.html" class="thumb"><img src="img/home-img/politics-02.jpg" alt=""></a>

                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><a href="#">Hantu Raya</a></li>
                                                              <li><a href="#">17 April 2017</a></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">It is a long established fact that a reader will done</a></h3>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </li>
                                          <li class="col-xs-6">
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-2">
                                                  <div class="post--img">
                                                      <a href="news-single-v1-rtl.html" class="thumb"><img src="img/home-img/politics-03.jpg" alt=""></a>

                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><a href="#">Astaroth</a></li>
                                                              <li><a href="#">17 April 2017</a></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">It is a long established fact that a reader will done</a></h3>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </li>
                                          <li class="col-xs-12">
                                              <!-- Divider Start -->
                                              <hr class="divider">
                                              <!-- Divider End -->
                                          </li>
                                          <li class="col-xs-6">
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-2">
                                                  <div class="post--img">
                                                      <a href="news-single-v1-rtl.html" class="thumb"><img src="img/home-img/politics-04.jpg" alt=""></a>

                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><a href="#">Astaroth</a></li>
                                                              <li><a href="#">17 April 2017</a></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">It is a long established fact that a reader will done</a></h3>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </li>
                                          <li class="col-xs-6">
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-2">
                                                  <div class="post--img">
                                                      <a href="news-single-v1-rtl.html" class="thumb"><img src="img/home-img/politics-05.jpg" alt=""></a>

                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><a href="#">Hantu Raya</a></li>
                                                              <li><a href="#">17 April 2017</a></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">It is a long established fact that a reader will done</a></h3>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </li>
                                      </ul>

                                      <!-- Preloader Start -->
                                      <div class="preloader bg--color-0--b" data-preloader="1">
                                          <div class="preloader--inner"></div>
                                      </div>
                                      <!-- Preloader End -->
                                  </div>
                                  <!-- Post Items End -->
                              </div>
                              <!-- Politics End -->

                              <!-- Sports Start -->
                              <div class="col-md-6 ptop--30 pbottom--30">
                                  <!-- Post Items Title Start -->
                                  <div class="post--items-title" data-ajax="tab">
                                      <h2 class="h4">Sports</h2>

                                      <div class="nav">
                                          <a href="#" class="prev btn-link" data-ajax-action="load_prev_sports_posts">
                                              <i class="fa fa-long-arrow-left"></i>
                                          </a>

                                          <span class="divider">/</span>

                                          <a href="#" class="next btn-link" data-ajax-action="load_next_sports_posts">
                                              <i class="fa fa-long-arrow-right"></i>
                                          </a>
                                      </div>
                                  </div>
                                  <!-- Post Items Title End -->

                                  <!-- Post Items Start -->
                                  <div class="post--items post--items-3" data-ajax-content="outer">
                                      <ul class="nav" data-ajax-content="inner">
                                          <li>
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-1">
                                                  <div class="post--img">
                                                      <a href="news-single-v1-rtl.html" class="thumb"><img src="img/home-img/sports-01.jpg" alt=""></a>
                                                      <a href="#" class="cat">Basketball</a>
                                                      <a href="#" class="icon"><i class="fa fa-eye"></i></a>

                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><a href="#">Bathin</a></li>
                                                              <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h3>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </li>
                                          <li>
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-3">
                                                  <div class="post--img">
                                                      <a href="news-single-v1-rtl.html" class="thumb"><img src="img/home-img/sports-02.jpg" alt=""></a>

                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><a href="#">Bune</a></li>
                                                              <li><a href="#">16 April 2017</a></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </li>
                                          <li>
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-3">
                                                  <div class="post--img">
                                                      <a href="news-single-v1-rtl.html" class="thumb"><img src="img/home-img/sports-03.jpg" alt=""></a>

                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><a href="#">Bune</a></li>
                                                              <li><a href="#">16 April 2017</a></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </li>
                                          <li>
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-3">
                                                  <div class="post--img">
                                                      <a href="news-single-v1-rtl.html" class="thumb"><img src="img/home-img/sports-04.jpg" alt=""></a>

                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><a href="#">Bune</a></li>
                                                              <li><a href="#">16 April 2017</a></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </li>
                                          <li>
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-3">
                                                  <div class="post--img">
                                                      <a href="news-single-v1-rtl.html" class="thumb"><img src="img/home-img/sports-05.jpg" alt=""></a>

                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><a href="#">Bune</a></li>
                                                              <li><a href="#">16 April 2017</a></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </li>
                                      </ul>

                                      <!-- Preloader Start -->
                                      <div class="preloader bg--color-0--b" data-preloader="1">
                                          <div class="preloader--inner"></div>
                                      </div>
                                      <!-- Preloader End -->
                                  </div>
                                  <!-- Post Items End -->
                              </div>
                              <!-- Sports End -->
                          </div>
                      </div>
                  </div>
                  <!-- Main Content End -->

                  <!-- Main Sidebar Start -->
                  <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                      <div class="sticky-content-inner">
                          <!-- Widget Start -->
                          <div class="widget">
                              <!-- Ad Widget Start -->
                              <div class="ad--widget">
                                  <div class="row">
                                      <div class="col-sm-6">
                                          <a href="#">
                                              <img src="img/ads-img/ad-150x150-1.jpg" alt="">
                                          </a>
                                      </div>

                                      <div class="col-sm-6">
                                          <a href="#">
                                              <img src="img/ads-img/ad-150x150-2.jpg" alt="">
                                          </a>
                                      </div>
                                  </div>
                              </div>
                              <!-- Ad Widget End -->
                          </div>
                          <!-- Widget End -->

                          <!-- Widget Start -->
                          <div class="widget">
                              <div class="widget--title">
                                  <h2 class="h4">Stay Connected</h2>
                                  <i class="icon fa fa-share-alt"></i>
                              </div>

                              <!-- Social Widget Start -->
                              <div class="social--widget style--2">
                                  <ul class="nav row gutter--20">
                                      <li class="col-md-6 col-sm-12 col-xs-6 col-xxs-12 facebook">
                                          <a href="#">
                                                <span class="icon">
                                                    <i class="fa fa-facebook"></i>
                                                    <span>Share</span>
                                                </span>

                                              <span class="text">
                                                    <span>Facebook</span>
                                                    <span>3.12 k</span>
                                                </span>
                                          </a>
                                      </li>

                                      <li class="col-md-6 col-sm-12 col-xs-6 col-xxs-12 twitter">
                                          <a href="#">
                                                <span class="icon">
                                                    <i class="fa fa-twitter"></i>
                                                    <span>Tweet</span>
                                                </span>

                                              <span class="text">
                                                    <span>Twitter</span>
                                                    <span>869</span>
                                                </span>
                                          </a>
                                      </li>

                                      <li class="col-md-6 col-sm-12 col-xs-6 col-xxs-12 google-plus">
                                          <a href="#">
                                                <span class="icon">
                                                    <i class="fa fa-google-plus"></i>
                                                    <span>Share</span>
                                                </span>

                                              <span class="text">
                                                    <span>Google+</span>
                                                    <span>639</span>
                                                </span>
                                          </a>
                                      </li>

                                      <li class="col-md-6 col-sm-12 col-xs-6 col-xxs-12 dribbble">
                                          <a href="#">
                                                <span class="icon">
                                                    <i class="fa fa-dribbble"></i>
                                                    <span>Share</span>
                                                </span>

                                              <span class="text">
                                                    <span>Dribbble</span>
                                                    <span>483</span>
                                                </span>
                                          </a>
                                      </li>

                                      <li class="col-md-6 col-sm-12 col-xs-6 col-xxs-12 linkedin">
                                          <a href="#">
                                                <span class="icon">
                                                    <i class="fa fa-linkedin"></i>
                                                    <span>Share</span>
                                                </span>

                                              <span class="text">
                                                    <span>LinkedIn</span>
                                                    <span>2.2 K</span>
                                                </span>
                                          </a>
                                      </li>

                                      <li class="col-md-6 col-sm-12 col-xs-6 col-xxs-12 pinterest">
                                          <a href="#">
                                                <span class="icon">
                                                    <i class="fa fa-pinterest-p"></i>
                                                    <span>Pin it</span>
                                                </span>

                                              <span class="text">
                                                    <span>Pinterest</span>
                                                    <span>493</span>
                                                </span>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                              <!-- Social Widget End -->
                          </div>
                          <!-- Widget End -->

                          <!-- Widget Start -->
                          <div class="widget">
                              <div class="widget--title">
                                  <h2 class="h4">Featured News</h2>
                                  <i class="icon fa fa-newspaper-o"></i>
                              </div>

                              <!-- List Widgets Start -->
                              <div class="list--widget list--widget-1">
                                  <div class="list--widget-nav" data-ajax="tab">
                                      <ul class="nav nav-justified">
                                          <li>
                                              <a href="#" data-ajax-action="load_widget_hot_news">Hot News</a>
                                          </li>
                                          <li class="active">
                                              <a href="#" data-ajax-action="load_widget_trendy_news">Trendy News</a>
                                          </li>
                                          <li>
                                              <a href="#" data-ajax-action="load_widget_most_watched">Most Watched</a>
                                          </li>
                                      </ul>
                                  </div>

                                  <!-- Post Items Start -->
                                  <div class="post--items post--items-3" data-ajax-content="outer">
                                      <ul class="nav" data-ajax-content="inner">
                                          <li>
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-3">
                                                  <div class="post--img">
                                                      <a href="news-single-v1-rtl.html" class="thumb"><img src="img/widgets-img/news-widget-01.jpg" alt=""></a>

                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><a href="#">Ninurta</a></li>
                                                              <li><a href="#">16 April 2017</a></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">Long established fact that a reader will be distracted</a></h3>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </li>
                                          <li>
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-3">
                                                  <div class="post--img">
                                                      <a href="news-single-v1-rtl.html" class="thumb"><img src="img/widgets-img/news-widget-02.jpg" alt=""></a>

                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><a href="#">Orcus</a></li>
                                                              <li><a href="#">16 April 2017</a></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">Long established fact that a reader will be distracted</a></h3>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </li>
                                          <li>
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-3">
                                                  <div class="post--img">
                                                      <a href="news-single-v1-rtl.html" class="thumb"><img src="img/widgets-img/news-widget-03.jpg" alt=""></a>

                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><a href="#">Rahab</a></li>
                                                              <li><a href="#">16 April 2017</a></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">Long established fact that a reader will be distracted</a></h3>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </li>
                                          <li>
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-3">
                                                  <div class="post--img">
                                                      <a href="news-single-v1-rtl.html" class="thumb"><img src="img/widgets-img/news-widget-04.jpg" alt=""></a>

                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><a href="#">Tannin</a></li>
                                                              <li><a href="#">16 April 2017</a></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h3 class="h4"><a href="news-single-v1-rtl.html" class="btn-link">Long established fact that a reader will be distracted</a></h3>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </li>
                                      </ul>

                                      <!-- Preloader Start -->
                                      <div class="preloader bg--color-0--b" data-preloader="1">
                                          <div class="preloader--inner"></div>
                                      </div>
                                      <!-- Preloader End -->
                                  </div>
                                  <!-- Post Items End -->
                              </div>
                              <!-- List Widgets End -->
                          </div>
                          <!-- Widget End -->

                          <!-- Widget Start -->
                          <div class="widget">
                              <div class="widget--title">
                                  <h2 class="h4">Advertisement</h2>
                                  <i class="icon fa fa-bullhorn"></i>
                              </div>

                              <!-- Ad Widget Start -->
                              <div class="ad--widget">
                                  <a href="#">
                                      <img src="img/ads-img/ad-300x250-2.jpg" alt="">
                                  </a>
                              </div>
                              <!-- Ad Widget End -->
                          </div>
                          <!-- Widget End -->
                      </div>
                  </div>
                  <!-- Main Sidebar End -->
              </div>


              <!-- Advertisement Start -->
              <div class="ad--space pd--30-0">
{{--                  <a href="#">--}}
{{--                      <img src="img/ads-img/ad-970x90.jpg" alt="" class="center-block">--}}
{{--                  </a>--}}
              </div>
              <!-- Advertisement End -->


          </div>
      </div>
      <!-- Main Content Section End -->

  @endsection
