@extends('Dashboard.test')
@section('page')



    <section class="content">
        <div class="container-fluid">
        <div class="row">

            <!-- Add -->

            <div class="col-md-5">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">تعديل معلم</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{route('edit_teacher',$teacher['id'])}}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">اسم المعلم</label>
                                <input type="text" id="name" name="name" value="{{$teacher['name']}}" class="form-control"  placeholder="ادخل اسم المعلم" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">الاميل</label>
                                <input type="email" id="email" name="email" value="{{$teacher['email']}}" class="form-control"  placeholder="ادخل الاميل">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">رقم الجوال</label>
                                <input type="text" id="phone" name="phone" value="{{$teacher['phone']}}" class="form-control"  placeholder="ادخل رقم الجوال">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">الوظيفة</label>
                                <select name="job" id="job" class="form-control" >
                                    @foreach($job_data as $jobs)

                                        <option @if ($teacher['job'] == $jobs->id ) selected @endif value="{{$jobs->id}}"> {{$jobs->job}}</option>

                                     @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">العنوان</label>
                                <input type="text" id="address" name="address" value="{{$teacher['address']}}" class="form-control"  placeholder="ادخل العنوان">
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" onclick="msg();" class="btn btn-success btn-block">حـفـظ</button>
                        </div>
                    </form>
                </div>

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