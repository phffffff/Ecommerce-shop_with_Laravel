@extends('Template.Admin.main')
@section('head')
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/template/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/template/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/template/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/template/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/template/plugins/summernote/summernote-bs4.min.css">

    <script src="/assets/ckeditor5/ckeditor.js"></script>
@endsection

@section('page')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-gray">
                        <div class="card-header">
                            <h3 class="card-title">{{$task}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/admin/menus/add/store" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputName">Tên danh mục</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="Nhập tên danh mục">
                                    @include('Component.notify_input',['var'=>'name'])
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Danh mục</label>
                                    <select class="form-control @error('parent_id') is-invalid @enderror" name="parent_id">
                                        <option value="0">Danh mục cha</option>
                                        @foreach($menus as $menu)
                                        <option value={{$menu->id}}>{{$menu->name}}</option>
                                        @endforeach
                                    </select>
                                    @include('Component.notify_input',['var'=>'parent_id'])
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputDescription">Mô tả</label>
                                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="editor" placeholder="Nhập mô tả"></textarea>
                                    @include('Component.notify_input',['var'=>'description'])
                                </div>
                                <div class="form-group">
                                    <label>Kích hoạt</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="1" name="active">
                                        <label class="form-check-label">Có</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="0" name="active" checked>
                                        <label class="form-check-label">Không</label>
                                    </div>
                                </div>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-outline-secondary">Tạo danh mục</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('toast')
    @if(\Illuminate\Support\Facades\Session::has('err'))
        @include('Component.toast',[
            'class'=>'bg-danger',
            'title'=>'error',
            'msg'=>\Illuminate\Support\Facades\Session::get('err')['msg'],
            ]
        )
    @elseif(\Illuminate\Support\Facades\Session::has('success'))
        @include('Component.toast',[
            'class'=>'bg-success',
            'title'=>'success',
            'msg'=>\Illuminate\Support\Facades\Session::get('success'),
        ])
    @endif
@endsection

@section('script')
    <!-- jQuery -->
    <script src="/template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="/template/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/template/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/template/dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>
    <!-- /.content -->

    <!-- ckeditor -->
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error =>{
                console.error(error);
            });
    </script>

    <script>
        setTimeout(function() {
            var element = document.getElementById('toastsContainerTopRight');
            element.parentNode.removeChild(element);
        }, 3000);
    </script>
@endsection

