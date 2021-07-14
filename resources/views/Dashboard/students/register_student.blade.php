@extends('Dashboard.test')
@section('page')

    <section class="content">
        <div class="container-fluid">
            <div class="row">




                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">طلبات التسجيل في دورة </h3>

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
                            <table class="table table-hover" >
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>اسم الطالب </th>
                                    <th>الاميل </th>
                                    <th>رقم الهاتف</th>
                                    <th>العنوان </th>
                                    <th>اسم الدورة </th>
                                    <th> تاريخ بداية دورة </th>
                                    <th> اداوت  </th>

                                </tr>
                                </thead>
                                <tbody id="myTable">
                                @foreach($students as $student)
                                    <tr id="{{$student->id}}" >
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->phone}}</td>
                                        <td>{{$student->address}}</td>
                                        <td> {{\App\Course::where('id',$student->course_id)->get()->first()->name}} </td>
                                        <td>{{$student->birthday}}</td>
                                        <td>
                                            <a href="#" class="btn btn-success btn-sm"><i class="fa fa-check-circle"></i></a>
                                            <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                        </td>
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





<script>
    function msg() {

        Swal.fire({
            position: 'top',
            icon: 'success',
            title: 'تم تعديل بنجاح',
            showConfirmButton: false,
            timer: 1500
        })

    }
</script>
@endsection