@extends('cms.layout')

@section('title')
    {{'إضافة قسم جديد'}}
@endsection

@section('links')

    <link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>


@endsection

@section('content')


    @if (session()->has('category_added'))

        <script>
            window.onload = function () {
                notif({
                    msg: "تم اضافة قسم بنجاح",
                    type: "success"
                });
            }
        </script>

    @endif

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">إضافة قسم جديد</h1>
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">الرئيسية</a></li>
                        <li class="breadcrumb-item"><a href="{{route('categories.index')}}">الأقسام</a></li>
                        <li class="breadcrumb-item active">إضافة قسم جديد</li>
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
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('categories.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">عنوان القسم</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="أدخل العنوان">
                                </div>


                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">إضافة</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>

            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection

@section('scripts')

    <!--Internal  Notify js -->
    <script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/notify/js/notifit-custom.js')}}"></script>

@endsection
