@extends('cms.layout')

@section('title')
    {{'إضافة مقال جديد'}}
@endsection

@section('links')

    <link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-bs4.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

    <style>
        .btn-file {
            position: relative;
            overflow: hidden;
        }
        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }

        #img-upload{
            width: 50%;
            height: 50%;
        }
    </style>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

@endsection

@section('content')


    @if (session()->has('article_added'))

        <script>
            window.onload = function () {
                notif({
                    msg: "تم اضافة مقال جديد بنجاح",
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
                    <h1 class="m-0 text-dark">إضافة مقال جديد</h1>
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">الرئيسية</a></li>
                        <li class="breadcrumb-item"><a href="{{route('articles.index')}}">المقالات</a></li>
                        <li class="breadcrumb-item active">إضافة مقال جديد</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('articles.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">عنوان المقال</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="أدخل العنوان">
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="description">وصف المقال</label>
                                        <div class="mb-3">
                                          <textarea name="description" id="description" class="textarea" placeholder="كتابة وصف المقال"
                                             style="width: 100%; height: 200px; font-size: 14px; line-height: 82px; border: 1px solid #dddddd; padding: 10px;">

                                          </textarea>
                                        </div>
                                </div><hr>

                                <div class="form-group" >
                                    <label>القسم</label>
                                    <select class="form-control" style="width: 100%;" required="required" id="category_id" name="category_id">
                                        <option selected hidden disabled >--  إختار القسم  --</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <hr>
                                <div class="form-group" data-select2-id="12">
                                    <label>الوسم</label>
                                    <select class="select2 select2-hidden-accessible"  style="width: 100%;" required="required" id="tag_id" name="tag_id[]"  multiple data-placeholder="--  إختار الوسم  --">
                                        @foreach($tags as $tag)
                                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                                        @endforeach
                                    @error('tags')
                                    <span class="text-danger">
                                    {{$message}}
                                </span>
                                    @enderror
                                    </select>
                                </div>

                                <hr>
                                <div class="form-group">
                                    <label for="published" class="col-md-2 control-label">الحالة</label>
                                    <div class="col-md-8">
                                        <label class="col-sm-2 checkbox-inline" for="">
                                            <input type="checkbox" name="status" id="status"> &nbsp;&nbsp;ظاهر</label>
                                        @error('Published')
                                        <span class="text-danger">
                                    {{$message}}
                                </span>
                                        @enderror

                                    </div>
                                </div><hr>


                                <div class="form-group">
                                    <label for="published" class="col-md-2 control-label">صورة المقال</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default btn-file">
                                           تحميل صورة
                                            <input  id="imgInp" name="image" type="file"  class="form-control border-0" required>
                                        </span>
                                    </span>
                                            <input type="text" class="form-control" readonly>
                                        </div>
                                        <img id='img-upload' />
                                    </div>
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

    <script src="{{asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>

    <script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>

    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2({
                theme: 'bootstrap4'
            })
        })
    </script>

    <script>
        $(function () {
            // Summernote
            $('.textarea').summernote()
        })
    </script>

    <script>
        $(document).ready( function() {
            $(document).on('change', '.btn-file :file', function() {
                var input = $(this),
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [label]);
            });

            $('.btn-file :file').on('fileselect', function(event, label) {

                var input = $(this).parents('.input-group').find(':text'),
                    log = label;

                if( input.length ) {
                    input.val(log);
                } else {
                    if( log ) alert(log);
                }

            });
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#img-upload').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#imgInp").change(function(){
                readURL(this);
            });
        });
    </script>

@endsection
