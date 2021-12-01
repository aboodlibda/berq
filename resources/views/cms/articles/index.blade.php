@extends('cms.layout')

@section('title')
    {{'المقالات'}}
@endsection

@section('links')

    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
    <link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>

@endsection

@section('content')


    @if (session()->has('article_edited'))

        <script>
            window.onload = function () {
                notif({
                    msg: "تم تعديل المقال بنجاح",
                    type: "info"
                });
            }
        </script>

    @endif

    @if (session()->has('article_deleted'))

        <script>
            window.onload = function () {
                notif({
                    msg: "تم حذف المقال بنجاح",
                    type: "error"
                });
            }
        </script>

    @endif

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">كل المقالات</h1>
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">الرئيسية</a></li>
                        <li class="breadcrumb-item active">المقالات</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            <table id="example" class="table table-bordered table-striped">
                                <thead>
                                <tr align="center">
                                    <th>#</th>
                                    <th>عنوان المقال</th>
                                    <th>القسم</th>
                                    <th>الوسوم</th>
                                    <th>الصورة</th>
                                    <th>إضافة بواسطة</th>
                                    <th>الحالة</th>
                                    <th>تاريخ الإضافة</th>
                                    <th>العمليات</th>
                                </tr>
                                </thead>
                                <tbody>

                                    @forelse($articles as $key=>$article)
                                        <tr align="center">
                                            <td>{{$key+1}}</td>
                                            <td>{{Str::limit($article->title , 36)}}</td>
                                            <td>{{$article->category->name}}</td>
                                            <td>
                                                @foreach($article->tags as $tag)
                                                    <a href="{{route('tags.index')}}" class="badge badge-info">{{$tag->name}}</a><br>
                                                @endforeach
                                            </td>
                                            <td><img src="{{asset('articlesImages/'.$article->image)}}" style="height: 66px;width: 100px"></td>
                                            <td><span class="badge badge-warning">{{$article->user->name}}</span></td>
                                            <td>
                                                @if($article->status == 'published' )
                                                    <span class="badge badge-success">منشور</span>
                                                @else
                                                    <span class="badge badge-danger">غير منشور</span>
                                                @endif
                                            </td>
                                            <td>{{$article->created_at->diffForHumans()}}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary btn-sm" data-toggle="dropdown" id="dropdownMenuButton" type="button">العمليات &nbsp;<i class="fas fa-caret-down ml-1"></i></button>
                                                    <div class="dropdown-menu tx-13" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">

                                                            <a class="dropdown-item" href="{{route('articles.show',$article->id)}}"><i class="fa fa-eye"></i>&nbsp;&nbsp;
                                                            عرض المقال</a>

                                                        <a class="dropdown-item" href="{{route('articles.edit',$article->id)}}"><i class="text-primary fas fa-edit"></i>&nbsp;&nbsp;
                                                            تعديل المقال
                                                        </a>
                                                        <a class="dropdown-item" href="#" data-article_id="{{ $article->id }}"
                                                           data-toggle="modal" data-target="#delete_article"><i class="text-danger fas fa-trash-alt"></i>&nbsp;&nbsp;
                                                            حذف المقال</a>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="9" align="center"><span>لا يوجد بيانات</span></td>
                                        </tr>
                                    @endforelse




                                </tbody>
                            </table>
                        </div>
                   <div class="pagination justify-content-center">
                           {{$articles->links()}}
                   </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- حذف الفاتورة -->
    <div class="modal fade" id="delete_article" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">حذف المثال</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <form action="{{route('articles.destroy','ERROR')}}" method="post">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}
                </div>
                <div class="modal-body">
                    هل انت متاكد من عملية الحذف ؟
                    <input type="hidden" name="article_id" id="article_id" value="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                    <button type="submit" class="btn btn-danger">تاكيد</button>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <!-- DataTables -->
    <script src="{{asset('assets/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <!--Internal  Notify js -->
    <script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/notify/js/notifit-custom.js')}}"></script>

    <script>
        $('#delete_article').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var article_id = button.data('article_id')
            var modal = $(this)
            modal.find('.modal-body #article_id').val(article_id);
        })
    </script>


@endsection
