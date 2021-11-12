@extends('cms.layout')

@section('title')
    {{'الأقسام'}}
@endsection

@section('links')

    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
    <link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>

@endsection

@section('content')


    @if (session()->has('category_edited'))

        <script>
            window.onload = function () {
                notif({
                    msg: "تم تعديل القسم بنجاح",
                    type: "info"
                });
            }
        </script>

    @endif

    @if (session()->has('category_deleted'))

        <script>
            window.onload = function () {
                notif({
                    msg: "تم حذف القسم بنجاح",
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
                    <h1 class="m-0 text-dark">كل الأقسام</h1>
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">الرئيسية</a></li>
                        <li class="breadcrumb-item active">الأقسام</li>
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
{{--                        <div class="card-header">--}}
{{--                            <h3 class="card-title">DataTable with default features</h3>--}}
{{--                        </div>--}}
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example" class="table table-bordered table-striped">
                                <thead>
                                <tr align="center">
                                    <th>#</th>
                                    <th>الإسم</th>
                                    <th>عدد المقالات</th>
                                    <th>العمليات</th>
                                </tr>
                                </thead>
                                <tbody>

                                    @forelse($categories as $key=>$category)
                                        <tr align="center">
                                            <td>{{$key+1}}</td>
                                            <td>{{$category->name}}</td>
                                            <td><span class="badge badge-danger">{{$category->articles->count()}}</span></td>
                                            <td>
                                                <a href="{{route('categories.edit',$category->id)}}" class="btn btn-info">تعديل</a>

                                                <a href="#" data-category_id="{{ $category->id }}"
                                                   data-toggle="modal" data-target="#delete_category" class="btn btn-danger">حذف</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                        <td colspan="4" align="center"><span>لا يوجد بيانات</span></td>
                                        </tr>
                                    @endforelse




                                </tbody>
                            </table>
                        </div>
                   <div class="pagination justify-content-center">
                           {{$categories->links()}}
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
    <div class="modal fade" id="delete_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">حذف القسم</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <form action="{{route('categories.destroy','ERROR')}}" method="post">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}
                </div>
                <div class="modal-body">
                    هل انت متاكد من عملية الحذف ؟
                    <input type="hidden" name="category_id" id="category_id" value="">
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
        $('#delete_category').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var category_id = button.data('category_id')
            var modal = $(this)
            modal.find('.modal-body #category_id').val(category_id);
        })
    </script>


@endsection
