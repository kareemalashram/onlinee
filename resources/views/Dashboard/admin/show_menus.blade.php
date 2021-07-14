@extends('Dashboard.test')
@section('page')

    <section class="content">
        <div class="container-fluid">
            <div class="row">




                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">جدول القوائم </h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" id="myInput" name="table_search" class="form-control float-right" placeholder="بحث">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>سم القائمة</th>
                                    <th>Route Name</th>
                                    <th>القائمة</th>
                                    <th>الصلاحيات </th>
                                    <th>ترتيب القائمة </th>
                                    <th>الحالة </th>
                                    <th>تاريخ الاضافة </th>
                                    <th> تعديل | حذف  </th>
                                </tr>
                                </thead>
                                <tbody id="myTable">
                                @foreach($manus as $manu)
                                    <tr id="{{$manu->id}}" style=" background-color: @if($manu->active == 1) #52BE80    @else #CD6155  @endif">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$manu->name}}</td>
                                        <td>{{$manu->route_name}}</td>
                                        <td>
                                            @if($manu->menu == 1)
                                                داخلية
                                               @else
                                              خارجية
                                                @endif
                                        </td>
                                        <td>

                                            <ol>
                                            @foreach(json_decode($manu->user_role) as $user_role )
                                            <li>
                                              <span class="alert-info"> {{$user_role}} </span>
                                            </li>
                                            @endforeach
                                            </ol>

                                        </td>
                                        <td>{{$manu->list}}</td>
                                        <td>
                                            @if($manu->active == 1)

                                                <button class="btn btn-success btn-sm" style="cursor: not-allowed;"> فعال </button>
                                                @else
                                                <button class="btn btn-danger btn-sm" style="cursor: not-allowed;">تعطيل </button>
                                                @endif
                                        </td>

                                        <td>{{$manu->created_at}}</td>
                                        <td>
                                            <a href="{{route('edit_menus',$manu->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                            <button type="button" onclick="delete_teacher({{$manu->id}});" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>







            </div>
        </div>
    </section>



@endsection