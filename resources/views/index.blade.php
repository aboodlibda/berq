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
                          @foreach($lastFour as $key => $article)
                              @if($key == 0)
                                  <div class="col-md-6">
                                      <!-- Post Item Start -->
                                      <div class="post--item post--layout-1 post--title-larger">
                                          <div class="post--img">
                                              <a href="{{route('articles.show',$article->id)}}" style="height: 450px;background: url({{asset('articlesImages/'.$article->image)}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>
                                              <a  class="cat">{{$article->category->name}}</a>
                                              {{--                                      <a href="#" class="icon"><i class="fa fa-flash"></i></a>--}}
                                              <span class="icon"><i class="fa fa-flash"></i></span>
                                              <div class="post--map">
                                                  <p class="btn-link"></p>

                                                  <div class="map--wrapper">

                                                  </div>
                                              </div>

                                              <div class="post--info">
                                                  <ul class="nav meta">
                                                      <li><span>{{$article->created_at->diffForHumans()}}</span></li>
                                                  </ul>

                                                  <div class="title">
                                                      <h2 class="h4"><a href="{{route('articles.show',$article->id)}}" class="btn-link">{{Str::limit($article->title ,150)}}</a></h2>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- Post Item End -->
                                  </div>
                              @elseif($key == 1)
                                  <div class="col-md-6">
                                      <div class="row gutter--15">
                                          <div class="col-sm-12 hidden-sm hidden-xs" >
                                              <!-- Post Item Start -->
                                              <div class="post--item post--layout-1 post--title-larger" >
                                                  <div class="post--img">
                                                      <a href="{{route('articles.show',$article->id)}}" style="height: 250px; background: url({{asset('articlesImages/'.$article->image)}}) no-repeat;background-size: cover; background-position: 0% 50%;"></a>
                                                      <a  class="cat">{{$article->category->name}}</a>
                                                      <span class="icon"><i class="fa fa-flash"></i></span>
                                                      <div class="post--info">
                                                          <ul class="nav meta">
                                                              <li><span>{{$article->created_at->diffForHumans()}}</span></li>
                                                          </ul>

                                                          <div class="title">
                                                              <h2 class="h4"><a href="{{route('articles.show',$article->id)}}" class="btn-link">{{Str::limit($article->title ,100)}}</a></h2>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Post Item End -->
                                          </div>
                              @elseif($key == 2)
                                              <div class="col-xs-6 col-xss-12">
                                                  <!-- Post Item Start -->
                                                  <div class="post--item post--layout-1 post--title-large">
                                                      <div class="post--img">
                                                          <a href="{{route('articles.show',$article->id)}}" style="height: 185px;background: url({{asset('articlesImages/'.$article->image)}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>
                                                          <a  class="cat">{{$article->category->name}}</a>
                                                          <span class="icon"><i class="fa fa-flash"></i></span>
                                                          <div class="post--info">
                                                              <ul class="nav meta">
                                                                  <li><span>{{$article->created_at->diffForHumans()}}</span></li>
                                                              </ul>

                                                              <div class="title">
                                                                  <h2 class="h4"><a href="{{route('articles.show',$article->id)}}" class="btn-link">{{Str::limit($article->title ,60)}}</a></h2>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <!-- Post Item End -->
                                              </div>
                              @elseif($key == 3)
                                  <div class="col-xs-6 col-xss-12">
                                      <!-- Post Item Start -->
                                      <div class="post--item post--layout-1 post--title-large">
                                          <div class="post--img">
                                              <a href="{{route('articles.show',$article->id)}}" style="height: 185px;background: url({{asset('articlesImages/'.$article->image)}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>
                                              <a  class="cat">{{$article->category->name}}</a>
                                              <span class="icon"><i class="fa fa-flash"></i></span>
                                              <div class="post--info">
                                                  <ul class="nav meta">
                                                      <li><span>{{$article->created_at->diffForHumans()}}</span></li>
                                                  </ul>

                                                  <div class="title">
                                                      <h2 class="h4"><a href="{{route('articles.show',$article->id)}}" class="btn-link">{{Str::limit($article->title ,60)}}</a></h2>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- Post Item End -->
                                  </div>
                      </div><!-- row gutter--15 -->
                  </div><!-- Col-6 -->
                              @endif
                          @endforeach

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

                                      <h2 class="h4">{{$category_1->name}}</h2>

                                  </div>
                                  <!-- Post Items Title End -->

                                  <!-- Post Items Start -->
                                  <div class="post--items post--items-2" data-ajax-content="outer">
                                      <ul class="nav row gutter--15" data-ajax-content="inner">
                                          @foreach($article_1 as $key => $article)
                                              @if($key == 0)
                                                  <li class="col-xs-12">
                                                      <!-- Post Item Start -->
                                                      <div class="post--item post--layout-1">
                                                          <div class="post--img">
                                                              <a href="{{route('articles.show',$article->id)}}" style="height: 180px;background: url({{asset('articlesImages/'.$article->image)}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>
                                                              <a  class="cat">{{$article->category->name}}</a>

                                                              <div class="post--info">
                                                                  <ul class="nav meta">
                                                                      <li><span>{{$article->created_at->diffForHumans()}}</span></li>
                                                                  </ul>

                                                                  <div class="title">
                                                                      <h3 class="h4"><a href="{{route('articles.show',$article->id)}}" class="btn-link">{{Str::limit($article->title ,60)}}</a></h3>
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
                                              @elseif($key == 1)
                                                  <li class="col-xs-6">
                                                      <!-- Post Item Start -->
                                                      <div class="post--item post--layout-2">
                                                          <div class="post--img">
                                                              <a href="{{route('articles.show',$article->id)}}" style="height: 130px;background: url({{asset('articlesImages/'.$article->image)}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>

                                                              <div class="post--info">
                                                                  <ul class="nav meta">
                                                                      <li><span>{{$article->created_at->diffForHumans()}}</span></li>
                                                                  </ul>

                                                                  <div class="title">
                                                                      <h3 class="h4"><a href="{{route('articles.show',$article->id)}}" class="btn-link">{{Str::limit($article->title ,50)}}</a></h3>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <!-- Post Item End -->
                                                  </li>
                                              @elseif($key == 2)
                                                  <li class="col-xs-6">
                                                      <!-- Post Item Start -->
                                                      <div class="post--item post--layout-2">
                                                          <div class="post--img">
                                                              <a href="{{route('articles.show',$article->id)}}" style="height: 130px;background: url({{asset('articlesImages/'.$article->image)}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>

                                                              <div class="post--info">
                                                                  <ul class="nav meta">
                                                                      <li><span>{{$article->created_at->diffForHumans()}}</span></li>
                                                                  </ul>

                                                                  <div class="title">
                                                                      <h3 class="h4"><a href="{{route('articles.show',$article->id)}}" class="btn-link">{{Str::limit($article->title ,50)}}</a></h3>
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
                                              @elseif($key == 3)
                                                  <li class="col-xs-6">
                                                      <!-- Post Item Start -->
                                                      <div class="post--item post--layout-2">
                                                          <div class="post--img">
                                                              <a href="{{route('articles.show',$article->id)}}" style="height: 130px;background: url({{asset('articlesImages/'.$article->image)}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>

                                                              <div class="post--info">
                                                                  <ul class="nav meta">
                                                                      <li><span>{{$article->created_at->diffForHumans()}}</span></li>
                                                                  </ul>

                                                                  <div class="title">
                                                                      <h3 class="h4"><a href="{{route('articles.show',$article->id)}}" class="btn-link">{{Str::limit($article->title ,50)}}</a></h3>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <!-- Post Item End -->
                                                  </li>
                                              @elseif($key == 4)
                                                  <li class="col-xs-6">
                                                      <!-- Post Item Start -->
                                                      <div class="post--item post--layout-2">
                                                          <div class="post--img">
                                                              <a href="{{route('articles.show',$article->id)}}" style="height: 130px;background: url({{asset('articlesImages/'.$article->image)}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>

                                                              <div class="post--info">
                                                                  <ul class="nav meta">
                                                                      <li><span>{{$article->created_at->diffForHumans()}}</span></li>
                                                                  </ul>

                                                                  <div class="title">
                                                                      <h3 class="h4"><a href="{{route('articles.show',$article->id)}}" class="btn-link">{{Str::limit($article->title ,50)}}</a></h3>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <!-- Post Item End -->
                                                  </li>
                                                  @endif
                                          @endforeach
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
                                      <h2 class="h4">{{$category_2->name}}</h2>

                                  </div>
                                  <!-- Post Items Title End -->

                                  <!-- Post Items Start -->
                                  <div class="post--items post--items-3" data-ajax-content="outer">
                                      <ul class="nav" data-ajax-content="inner">
                                          @foreach($article_2 as $key => $article)
                                              @if($key == 0)
                                                  <li>
                                                      <!-- Post Item Start -->
                                                      <div class="post--item post--layout-1">
                                                          <div class="post--img">
                                                              <a href="{{route('articles.show',$article->id)}}"  style="height: 180px;background: url({{asset('articlesImages/'.$article->image)}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>
                                                              <a  class="cat">{{$article->category->name}}</a>

                                                              <div class="post--info">
                                                                  <ul class="nav meta">
                                                                      <li><span>{{$article->created_at->diffForHumans()}}</span></li>
                                                                  </ul>

                                                                  <div class="title">
                                                                      <h3 class="h4"><a href="{{route('articles.show',$article->id)}}" class="btn-link">{{Str::limit($article->title ,60)}}</a></h3>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <!-- Post Item End -->
                                                  </li>
                                              @elseif($key == 1)
                                                  <li>
                                                      <!-- Post Item Start -->
                                                      <div class="post--item post--layout-3">
                                                          <div class="post--img">
                                                              <a href="{{route('articles.show',$article->id)}}" class="thumb" style="height: 70px;width: 33%;background: url({{asset('articlesImages/'.$article->image)}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>

                                                              <div class="post--info">
                                                                  <ul class="nav meta">
                                                                      <li><span>{{$article->created_at->diffForHumans()}}</span></li>
                                                                  </ul>

                                                                  <div class="title">
                                                                      <h3 class="h4"><a href="{{route('articles.show',$article->id)}}" class="btn-link">{{Str::limit($article->title ,70)}}</a></h3>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <!-- Post Item End -->
                                                  </li>
                                              @elseif($key == 2)
                                                  <li>
                                                      <!-- Post Item Start -->
                                                      <div class="post--item post--layout-3">
                                                          <div class="post--img">
                                                              <a href="{{route('articles.show',$article->id)}}" class="thumb" style="height: 70px;width: 33%;background: url({{asset('articlesImages/'.$article->image)}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>

                                                              <div class="post--info">
                                                                  <ul class="nav meta">
                                                                      <li><span>{{$article->created_at->diffForHumans()}}</span></li>
                                                                  </ul>

                                                                  <div class="title">
                                                                      <h3 class="h4"><a href="{{route('articles.show',$article->id)}}" class="btn-link">{{Str::limit($article->title ,70)}}</a></h3>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <!-- Post Item End -->
                                                  </li>
                                              @elseif($key == 3)
                                                  <li>
                                                      <!-- Post Item Start -->
                                                      <div class="post--item post--layout-3">
                                                          <div class="post--img">
                                                              <a href="{{route('articles.show',$article->id)}}" class="thumb" style="height: 70px;width: 33%;background: url({{asset('articlesImages/'.$article->image)}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>

                                                              <div class="post--info">
                                                                  <ul class="nav meta">
                                                                      <li><span>{{$article->created_at->diffForHumans()}}</span></li>
                                                                  </ul>

                                                                  <div class="title">
                                                                      <h3 class="h4"><a href="{{route('articles.show',$article->id)}}" class="btn-link">{{Str::limit($article->title ,70)}}</a></h3>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <!-- Post Item End -->
                                                  </li>
                                              @elseif($key == 4)
                                                  <li>
                                                      <!-- Post Item Start -->
                                                      <div class="post--item post--layout-3">
                                                          <div class="post--img">
                                                              <a href="{{route('articles.show',$article->id)}}" class="thumb" style="height: 70px;width: 33%;background: url({{asset('articlesImages/'.$article->image)}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>

                                                              <div class="post--info">
                                                                  <ul class="nav meta">
                                                                      <li><span>{{$article->created_at->diffForHumans()}}</span></li>
                                                                  </ul>

                                                                  <div class="title">
                                                                      <h3 class="h4"><a href="{{route('articles.show',$article->id)}}" class="btn-link">{{Str::limit($article->title ,70)}}</a></h3>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <!-- Post Item End -->
                                                  </li>
                                              @endif
                                          @endforeach
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
                                  <div class="widget--title">
                                      <h2 class="h4">إعلان</h2>
                                      <i class="icon fa fa-bullhorn"></i>
                                  </div>
                                  <div class="ad--space" >
                                      <a class="center-block" style="height: 120px;background: url({{asset('advImages/'.$advertisement->adv_1)}}) no-repeat;background-size: cover;background-position: 0% 50%; ">

                                      </a>
                                  </div>
                                  <!-- Advertisement End -->
                              </div>
                              <!-- Ad End -->

                              <!-- Finance Start -->
                              <div class="col-md-12 ptop--30 pbottom--30">
                                  <!-- Post Items Title Start -->
                                  <div class="post--items-title" data-ajax="tab">
                                      <h2 class="h4">{{$category_3->name}}</h2>

                                  </div>
                                  <!-- Post Items Title End -->

                                  <!-- Post Items Start -->
                                  <div class="post--items post--items-2" data-ajax-content="outer">
                                      <ul class="nav row" data-ajax-content="inner">
                                          @foreach($article_3 as $key => $article)
                                              @if($key == 0)
                                                  <li class="col-md-6">
                                                      <!-- Post Item Start -->
                                                      <div class="post--item post--layout-2">
                                                          <div class="post--img">
                                                              <a href="{{route('articles.show',$article->id)}}" style="height: 250px;background: url({{asset('articlesImages/'.$article->image)}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>
                                                              <span class="icon"><i class="fa fa-star-o"></i></span>

                                                              <div class="post--info">
                                                                  <ul class="nav meta">
                                                                      <li><span>{{$article->created_at->diffForHumans()}}</span></li>
                                                                  </ul>

                                                                  <div class="title">
                                                                      <h3 class="h4"><a href="{{route('articles.show',$article->id)}}" class="btn-link">{{Str::limit($article->title ,100)}}</a></h3>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <!-- Post Item End -->
                                                  </li>
                                              @elseif($key == 1)
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
                                                                      <a href="{{route('articles.show',$article->id)}}" style="height: 100px;background: url({{asset('articlesImages/'.$article->image)}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>

                                                                      <div class="post--info">
                                                                          <ul class="nav meta">
                                                                              <li><span>{{$article->created_at->diffForHumans()}}</span></li>
                                                                          </ul>

                                                                          <div class="title">
                                                                              <h3 class="h4"><a href="{{route('articles.show',$article->id)}}" class="btn-link">{{Str::limit($article->title ,60)}}</a></h3>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <!-- Post Item End -->
                                                          </li>
                                              @elseif($key == 2)
                                                              <li class="col-xs-6">
                                                                  <!-- Post Item Start -->
                                                                  <div class="post--item post--layout-2">
                                                                      <div class="post--img">
                                                                          <a href="{{route('articles.show',$article->id)}}" style="height: 100px;background: url({{asset('articlesImages/'.$article->image)}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>

                                                                          <div class="post--info">
                                                                              <ul class="nav meta">
                                                                                  <li><span>{{$article->created_at->diffForHumans()}}</span></li>
                                                                              </ul>

                                                                              <div class="title">
                                                                                  <h3 class="h4"><a href="{{route('articles.show',$article->id)}}" class="btn-link">{{Str::limit($article->title ,60)}}</a></h3>
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
                                              @elseif($key == 3)
                                                              <li class="col-xs-6">
                                                                  <!-- Post Item Start -->
                                                                  <div class="post--item post--layout-2">
                                                                      <div class="post--img">
                                                                          <a href="{{route('articles.show',$article->id)}}" style="height: 100px;background: url({{asset('articlesImages/'.$article->image)}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>

                                                                          <div class="post--info">
                                                                              <ul class="nav meta">
                                                                                  <li><span>{{$article->created_at->diffForHumans()}}</span></li>
                                                                              </ul>

                                                                              <div class="title">
                                                                                  <h3 class="h4"><a href="{{route('articles.show',$article->id)}}" class="btn-link">{{Str::limit($article->title ,60)}}</a></h3>
                                                                              </div>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <!-- Post Item End -->
                                                              </li>
                                              @elseif($key == 4)
                                                              <li class="col-xs-6">
                                                                  <!-- Post Item Start -->
                                                                  <div class="post--item post--layout-2">
                                                                      <div class="post--img">
                                                                          <a href="{{route('articles.show',$article->id)}}" style="height: 100px;background: url({{asset('articlesImages/'.$article->image)}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>

                                                                          <div class="post--info">
                                                                              <ul class="nav meta">
                                                                                  <li><span>{{$article->created_at->diffForHumans()}}</span></li>
                                                                              </ul>

                                                                              <div class="title">
                                                                                  <h3 class="h4"><a href="{{route('articles.show',$article->id)}}" class="btn-link">{{Str::limit($article->title ,60)}}</a></h3>
                                                                              </div>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <!-- Post Item End -->
                                                              </li>
                                                      </ul>
                                                  </li>
                                              @endif
                                          @endforeach
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
<br>
<br>
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
                              <div class="widget--title">
                                  <h2 class="h4">إعلان</h2>
                                  <i class="icon fa fa-bullhorn"></i>
                              </div>
                              <div class="ad--widget">
                                  <div class="row" style="height: 250px;background: url({{asset('advImages/'.$advertisement->adv_2)}}) no-repeat;background-size: cover;background-position: 0% 50%; ">
                                      <div class="col-sm-6">
                                          <a  >

                                          </a>
                                      </div>

{{--                                      <div class="col-sm-6">--}}
{{--                                          <a href="#">--}}
{{--                                              <img src="{{asset('img/ads-img/ad-150x150-2.jpg')}}" alt="">--}}
{{--                                          </a>--}}
{{--                                      </div>--}}
                                  </div>
                              </div>
                              <!-- Ad Widget End -->
                          </div>
                          <!-- Widget End -->

                          <!-- Widget Start -->
                          <div class="widget">
                              <div class="widget--title">
                                  <h2 class="h4">إبقى على إطلاع باَخر الأخبار</h2>
                                  <i class="icon fa fa-share-alt"></i>
                              </div>

                              <!-- Social Widget Start -->
                              <div class="social--widget style--2">
                                  <ul class="nav row gutter--20">
                                      <li class="col-md-6 col-sm-12 col-xs-6 col-xxs-12 facebook">
                                          <a href="{{$information->facebook}}" target="_blank">
                                                <span class="icon">
                                                    <i class="fa fa-facebook"></i>
{{--                                                    <span>Share</span>--}}
                                                </span>

                                              <span class="text">
                                                    <span>فايسبوك</span>
                                                    <span>فايسبوك</span>
                                                </span>
                                          </a>
                                      </li>

                                      <li class="col-md-6 col-sm-12 col-xs-6 col-xxs-12 twitter">
                                          < <a href="{{$information->twitter}}" target="_blank">
                                                <span class="icon">
                                                    <i class="fa fa-twitter"></i>
{{--                                                    <span>Tweet</span>--}}
                                                </span>

                                              <span class="text">
                                                    <span>تويتر</span>
                                                    <span>تويتر</span>
                                                </span>
                                          </a>
                                      </li>

                                      <li class="col-md-6 col-sm-12 col-xs-6 col-xxs-12 youtube">
                                          <a href="{{$information->youtube}}" target="_blank">
                                                <span class="icon">
                                                    <i class="fa fa-youtube"></i>
{{--                                                    <span>Share</span>--}}
                                                </span>

                                              <span class="text">
                                                    <span>يوتيوب</span>
                                                    <span>يوتيوب</span>
                                                </span>
                                          </a>
                                      </li>

                                      <li class="col-md-6 col-sm-12 col-xs-6 col-xxs-12 ">
                                          <a href="{{$information->instagram}}" target="_blank" style="background-color: #ff0073">
                                                <span class="icon">
                                                    <i class="fa fa-instagram"></i>
{{--                                                    <span>Share</span>--}}
                                                </span>

                                              <span class="text">
                                                    <span>انستاقرام</span>
                                                    <span>انستاقرام</span>
                                                </span>
                                          </a>
                                      </li>

                                      <li class="col-md-6 col-sm-12 col-xs-6 col-xxs-12 " >
                                          <a href="{{$information->snapchat}}" target="_blank" style="background-color: #fff900">
                                                <span class="icon">
                                                    <i class="fa fa-snapchat"></i>
{{--                                                    <span>Share</span>--}}
                                                </span>

                                              <span class="text">
                                                    <span>سناب شات</span>
                                                    <span>سناب شات</span>
                                                </span>
                                          </a>
                                      </li>

                                      <li class="col-md-6 col-sm-12 col-xs-6 col-xxs-12">
                                          <a href="{{$information->tiktok}}" target="_blank" style="background-color: #000000">
                                                <span class="icon">
                                                    <i class="fa fa-telegram"></i>
                                                </span>

                                              <span class="text">
                                                    <span>تيك توك</span>
                                                    <span>تيك توك</span>
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
                                  <h2 class="h4">اَخر الأخبار</h2>
                                  <i class="icon fa fa-newspaper-o"></i>
                              </div>

                              <!-- List Widgets Start -->
                              <div class="list--widget list--widget-1">
                                  <!-- Post Items Start -->
                                  <div class="post--items post--items-3" data-ajax-content="outer">
                                      <ul class="nav" data-ajax-content="inner">
                                          @foreach($lastFour as $key => $article)
                                              <li>
                                                  <!-- Post Item Start -->
                                                  <div class="post--item post--layout-3">
                                                      <div class="post--img">
                                                          <a href="{{route('articles.show',$article->id)}}" class="thumb" style="height: 70px;width: 33%;background: url({{asset('articlesImages/'.$article->image)}}) no-repeat;background-size: cover;background-position: 0% 50%;"></a>

                                                          <div class="post--info">
                                                              <ul class="nav meta">
                                                                  <li><span>{{$article->created_at->diffForHumans()}}</span></li>
                                                              </ul>

                                                              <div class="title">
                                                                  <h3 class="h4"><a href="{{route('articles.show',$article->id)}}" class="btn-link">{{Str::limit($article->title ,70)}}</a></h3>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <!-- Post Item End -->
                                              </li>
                                          @endforeach
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
                                  <h2 class="h4">إعلان</h2>
                                  <i class="icon fa fa-bullhorn"></i>
                              </div>

                              <!-- Ad Widget Start -->
                              <div class="ad--widget" style="height: 270px;background: url({{asset('advImages/'.$advertisement->adv_3)}}) no-repeat;background-size: cover;background-position: 0% 50%; ">

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
      </div>
      <!-- Main Content Section End -->

  @endsection
