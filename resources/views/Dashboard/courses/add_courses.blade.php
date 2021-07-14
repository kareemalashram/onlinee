@extends('Dashboard.test')
@section('page')



    <section class="content">
        <div class="container-fluid">
        <div class="row">

            <!-- Add -->

            <div class="col-md-5">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">اضافة دورة</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{route('add_courses')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">اسم الدورة</label>
                                <input type="text" id="name" name="name" class="form-control"  placeholder="ادخل اسم الدورة" >
                            </div>
                            <div class="form-group">
                                <label>وصف الدورة</label>
                                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 81px;"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">معلم الدورة</label>
                                <select name="teacher" id="teacher" class="form-control" >
                                    @foreach($teacher as $teachers)

                                        <option value="{{$teachers->id}}"> {{$teachers->name}}</option>

                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">سعر الدورة</label>
                                <input type="text" id="price" name="price" class="form-control"  placeholder="ادخل سعر الدورة">
                            </div>

                            <div class="form-group">

                                <div class="custom-file">
                                    <label>صورة الدورة</label>
                                    <input type="file" class="form-control" name="image" id="id_img">
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" onclick="test()" class="btn btn-primary btn-block">تـسـجيل</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
        </div>
    </section>


    <script>


        function test() {



                msg("تمت عملية بنجاح","success");


            }


        {{--function add_job() {--}}

            {{--var job_name = $("#id_job").val();--}}
            {{--var desc     = $("#id_desc").val();--}}

            {{--if (job_name == "" && desc == "") {--}}

                {{--alert('الحقول فارغة');--}}
            {{--} else {--}}

                {{--$.ajax({--}}

                    {{--url   : "{{route('add_job')}}",--}}
                    {{--type : "POST",--}}
                    {{--data : {--}}

                        {{--'job' : job_name,--}}
                        {{--'description' : desc, --}}
                    {{--},success : function (d) {--}}

                     {{--if (d.done == 1){--}}



                         {{--var job = d.job;--}}
                         {{--var description = d.description;--}}

                         {{--var delet ="<button type='button' onclick='delet_job({{$jobs->id}});' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></button>";--}}

                         {{--msg("تمت عملية الاضافة","success");--}}


                         {{--var tr = "<tr id='{{$jobs->id}}'> <td>--</td> <td>"+job+"</td> <td>"+description+"</td> <td>"+delet+"</td>  </tr>";--}}
                         {{--$("#myTable").append(tr);--}}

                         {{--$('#form_id').trigger("reset")--}}

                     {{--} else {--}}

                         {{--alert("حدث خطأ ..")--}}

                     {{--}--}}
                        {{----}}
                    {{--}--}}



                {{--})--}}



            {{--}--}}



        {{--}--}}





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