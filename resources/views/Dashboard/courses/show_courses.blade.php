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
                    <table class="table table-hover" >
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>اسم الدورة</th>
                            <th>وصف الدورة</th>
                            <th>معلم الدورة</th>
                            <th>سعر الدورة </th>
                            <th> بواسطة </th>
                            <th>تاريخ الاضافة </th>
                            <th> اداوت  </th>
                            <th> حالة النشر   </th>
                            <th> صورة </th>

                        </tr>
                        </thead>
                        <tbody id="myTable">
                        @foreach($courses as $co)
                        <tr id="{{$co->id}}" >
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$co->name}}</td>
                            <td>{!! Str::limit($co->description,80) !!}</td>
                            <td> {{\App\Teacher::where('id',$co->teacher)->get()->first()->name}} </td>
                            <td><span class="tag tag-success">{{$co->price}}</span></td>
                            <td>{{App\User::where('id','=',$co->auther)->get()->first()->name}}</td>
                            <td>{{$co->created_at}}</td>
                            <td>
                                <a href="{{route('edit_courses',$co->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="?active={{$co->status}}&id_course={{$co->id}}" onclick="test()" >
                                    @if($co->status == 0)
                                        <i class="fa fa-eye-slash btn btn-dark btn-sm" aria-hidden="true"></i>
                                    @else
                                        <i class="fa fa-eye btn-success btn-sm" aria-hidden="true"></i>
                                    @endif
                                </a>
                                <button type="button" onclick="delete_courses({{$co->id}});" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </td>
                            <td>
                                @if($co->status == 0)
                                    <button class="btn btn-danger btn-sm" style="cursor: not-allowed;">مخفية </button>
                                @else

                                    <button class="btn btn-success btn-sm" style="cursor: not-allowed;">منشور</button>
                                @endif

                            </td>
                            <td>
                                        <img alt="Avatar" class="table-avatar " style="border-radius:50%; display:inline; width:4rem;"  src="/{{App\Atachments::where('id',$co->image)->get()->first()->path}}">

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

    function test() {



        msg("تم","success");


    }


    function delete_courses(courses_id) {

        var conf = confirm("هل تريد الحذف ");


        if (conf == true){

            $.ajax({

                url: "/dashboard/delete_courses/" + courses_id ,
                type: "POST",
                data: {},
                success : function (e) {

                    $("#"+courses_id).fadeOut();

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