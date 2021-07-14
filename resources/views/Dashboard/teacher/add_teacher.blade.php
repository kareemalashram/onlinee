@extends('Dashboard.test')
@section('page')



    <section class="content">
        <div class="container-fluid">
        <div class="row">

            <!-- Add -->

            <div class="col-md-3">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">اضافة معلم</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{route('add_teacher')}}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">اسم المعلم</label>
                                <input type="text" id="name" name="name" class="form-control"  placeholder="ادخل اسم المعلم" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">الاميل</label>
                                <input type="email" id="email" name="email" class="form-control"  placeholder="ادخل الاميل">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">رقم الجوال</label>
                                <input type="text" id="phone" name="phone" class="form-control"  placeholder="ادخل رقم الجوال">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">الوظيفة</label>
                                <select name="job" id="job" class="form-control" >
                                    @foreach($job_data as $jobs)

                                        <option value="{{$jobs->id}}"> {{$jobs->job}}</option>

                                     @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">العنوان</label>
                                <input type="text" id="address" name="address" class="form-control"  placeholder="ادخل العنوان">
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" onclick="test()" class="btn btn-primary btn-block">تـسـجيل</button>
                        </div>
                    </form>
                </div>

            </div>

            <!-- job-->

            <div class="col-md-3">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">اضافة اسم وظيفة جديدة</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form  id="form_id" role="form" method="post" action="{{route('add_job')}}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">اسم الوظيفة</label>
                                <input type="text" name="job" id="id_job" class="form-control"  placeholder="ادخل اسم الوظيفة">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">الوصف</label>
                                <input type="text" name="description" id="id_desc" class="form-control"  placeholder="ادخل وصــف الوظيفة">
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="button" onclick="add_job();" class="btn btn-primary btn-block">اضـــافــة</button>
                        </div>
                    </form>
                </div>


            </div>

            <!-- show -->
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">جدول الوظيفة</h3>


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
                        <table class="table table-hover" id="myTable"  >
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>اسم الوظيفة</th>
                                <th>الوصف </th>
                                <th>تعديل وحذف </th>



                            </tr>
                            </thead>
                            <tbody id="id_body" >
                            @foreach($job_data as $jobs)
                                <tr id="{{$jobs->id }}">
                                <td>{{ $loop->iteration }}</td>
                                    <td>{{$jobs->job}}</td>
                                    <td>{{$jobs->description}}</td>
                                    <td><button type="button" onclick="delete_job({{$jobs->id}})" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>


                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                        <button type="button" onclick="" class="btn btn-info btn-block">تـحـديـث..<i class="fa fa-spinner"></i></button>
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



                msg("تمت عملية بنجاح","success");


            }


        function add_job() {

            var job_name = $("#id_job").val();
            var desc     = $("#id_desc").val();

            if (job_name == "" && desc == "") {

                alert('الحقول فارغة');
            } else {

                $.ajax({

                    url   : "{{route('add_job')}}",
                    type : "POST",
                    data : {

                        'job' : job_name,
                        'description' : desc, 
                    },success : function (d) {

                     if (d.done == 1){



                         var job = d.job;
                         var description = d.description;

                         var delet ="<button type='button' onclick='delet_job({{$jobs->id}});' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></button>";

                         msg("تمت عملية الاضافة","success");


                         var tr = "<tr id='{{$jobs->id}}'> <td>--</td> <td>"+job+"</td> <td>"+description+"</td> <td>"+delet+"</td>  </tr>";
                         $("#myTable").append(tr);

                         $('#form_id').trigger("reset")

                     } else {

                         alert("حدث خطأ ..")

                     }
                        
                    }



                })



            }



        }

        function delete_job(job_id) {

             var conf = confirm("هل تريد الحذف ");


            if (conf == true){

                $.ajax({

                    url: "/dashboard/delete_job/" + job_id ,
                    type: "POST",
                    data: {},
                    success : function (e) {

                        $("#"+job_id).fadeOut();

                        msg("تمت عملية الحذف","error");


                    },
                    error: function () {

                        console.log("Error ");

                    }
                })

            }

        }

        function updata_job() {

            $con = confirm("هل تريد تحديث البيانات");

            if ($con == true){

                $.ajax({

                    url: "{{route('get_job')}}",
                    type: "GET",
                    data:{},
                    success:function (data) {
                        $("#id_body").html("");
                    for (var i = 0 ; i < data.length;i++ ){

                     var id = data[i].id;
                     var job = data[i].job;
                     var description = data[i].description;

                     var delet ="<button type='button' onclick='delet_job({{$jobs->id}});' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></button>";

                     var tr = "<tr id='{{$jobs->id}}' > <td>"+id+"</td>  <td>"+job+"</td> <td>"+description+"</td> <td>"+delet+"</td>  </tr>";

                     $("#id_body").append(tr);


                    }

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