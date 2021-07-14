@extends('Dashboard.test')
@section('page')


    <section class="content">
        <div class="container-fluid">

    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">جدول المعلمين</h3>

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
                            <th>المعلم</th>
                            <th>الاميل</th>
                            <th>جوال</th>
                            <th>الوظيفة </th>
                            <th>العنوان </th>
                            <th> بواسطة </th>
                            <th>تاريخ الاضافة </th>
                            <th> تعديل | حذف  </th>
                        </tr>
                        </thead>
                        <tbody id="myTable">
                        @foreach($teacher as $cher)
                        <tr id="{{$cher->id}}" >
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$cher->name}}</td>
                            <td>{{$cher->email}}</td>
                            <td><span class="tag tag-success">{{$cher->phone}}</span></td>
                            <td> {{$cher->teacherJob ? $cher->teacherJob->job : "محذوف"}}</td>
                            <td>{{$cher->address}}</td>
                            <td>{{App\User::where('id','=',$cher->auther)->first()->name}}</td>
                            <td>{{$cher->created_at}}</td>
                            <td>
                                <a href="{{route('edit_teacher',$cher->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="{{route('info_teacher',$cher->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-folder" aria-hidden="true"></i></a>
                                <button type="button" onclick="delete_teacher({{$cher->id}});" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $teacher->links() }}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </div>
        </div>
    </section>



<script>



    function delete_teacher(teacher_id) {

        var conf = confirm("هل تريد الحذف ");


        if (conf == true){

            $.ajax({

                url: "/dashboard/delete_teacher/" + teacher_id ,
                type: "POST",
                data: {},
                success : function (e) {

                    $("#"+teacher_id).fadeOut();

                    msg("تمت عملية الحذف","error");


                },
                error: function () {

                    console.log("Error ");

                }
            })

        }

    }

    function msg(txt,icn) {

        Swal.fire({
            position: 'top',
            icon: icn,
            title: txt,
            showConfirmButton: false,
            timer: 1500
        })


    }


</script>

    <!-- sherch-->
    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>


@endsection