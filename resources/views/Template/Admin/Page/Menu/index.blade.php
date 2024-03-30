@extends('Template.Admin.main')

@section('page')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Bảng {{$name}}</h3>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead class="">
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Tên</th>
                                    <th>Menu cha</th>
                                    <th>Mô tả</th>
                                    <th>Trạng thái</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{$index = 0}}
                                @foreach($menus as $menu)
                                <tr>
                                    <td id = {{$menu->id}}>{{++$index}}</td>
                                    <td>{{$menu->name}}</td>
                                    <td>{{$convIdToName($menu->parent_id)?$convIdToName($menu->parent_id):"Không có"}}</td>
                                    <td>{{$menu->description}}</td>
                                    <td>{{$menu->active?'Hoạt động':'Không hoạt động'}}</td>
                                    <td></td>
                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>


                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
