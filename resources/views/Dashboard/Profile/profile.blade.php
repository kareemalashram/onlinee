@extends('Dashboard.test')
@section('page')

    <section class="content">
        <div class="container-fluid">
            <div class="row">

                {{--<div class="col-md-5">--}}
                    {{--<div class="card card-primary">--}}
                        {{--<div class="card-header">--}}
                            {{--<h3 class="card-title">صفحة الشخصية </h3>--}}
                        {{--</div>--}}
                        {{--<!-- /.card-header -->--}}
                        {{--<!-- form start -->--}}
                        {{--<form role="form" method="post" action="{{route('profile_up')}}">--}}
                            {{--@csrf--}}
                            {{--<div class="card-body">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="exampleInputEmail1">اسم المستخدم  </label>--}}
                                    {{--<input type="text" id="name" name="name" value="{{$user['name']}}" class="form-control"  placeholder="ادخل اسم المعلم" required>--}}
                                {{--</div>--}}

                                {{--<div class="form-group">--}}
                                    {{--<label for="exampleInputEmail1">الاميل</label>--}}
                                    {{--<input type="email" id="email" name="email" value="{{$user['email']}}" class="form-control"  placeholder="ادخل الاميل">--}}
                                {{--</div>--}}


                            {{--</div>--}}




                            {{--<!-- /.card-body -->--}}

                            {{--<div class="card-footer">--}}
                                {{--<button type="submit" onclick="msg();" class="btn btn-success btn-block">حـفـظ</button>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}

                {{--</div>--}}

                {{--<!-- change password -->--}}
                {{--<div class="col-md-5">--}}
                    {{--<div class="card card-primary">--}}
                        {{--<div class="card-header">--}}
                            {{--<h3 class="card-title">كلمة المرور </h3>--}}
                        {{--</div>--}}

                        {{--@if(session('message'))--}}
                            {{--<div class="alert alert-success alert-dismissible">--}}
                                {{--<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>--}}
                                {{--<strong>نجاح</strong>   {{session('message')}}.--}}
                            {{--</div>--}}

                         {{--@endif--}}

                        {{--<!-- /.card-header -->--}}
                        {{--<!-- form start -->--}}
                        {{--<form role="form" method="post" action="{{route('change_password')}}">--}}
                            {{--@csrf--}}
                            {{--<div class="card-body">--}}

                                {{--<div class="form-group">--}}
                                    {{--<label for="exampleInputEmail1">كلمة المررو القديمة</label>--}}
                                    {{--<input type="password" id="password_old" name="password_old"  class="form-control"  placeholder="ادخل كلمة المرور القديمة">--}}
                                {{--</div>--}}

                                {{--<div class="form-group">--}}
                                    {{--<label for="exampleInputEmail1">كلمة المرور جديدة</label>--}}
                                    {{--<input type="password" id="password" name="password"  class="form-control"  placeholder="ادخل كلمة المرور جديدة">--}}
                                {{--</div>--}}

                                {{--@error('password')--}}
                                {{--<div class="alert alert-danger alert-dismissible">--}}
                                    {{--<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>--}}
                                    {{--<strong>{{ $message }}</strong>--}}

                                {{--</div>--}}
                                {{--@enderror--}}

                                {{--<div class="form-group">--}}
                                    {{--<label for="exampleInputEmail1">تأكيد  كلمةالمرور </label>--}}
                                    {{--<input type="password" id="password_confirmation" name="password_confirmation"  class="form-control"  placeholder="ادخل تأكيد  كلمةالمرور">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--@if(session('error'))--}}
                                {{--<div class="alert alert-danger" rel="alert">--}}

                                    {{--{{session('error')}}--}}

                                {{--</div>--}}
                             {{--@endif--}}

                            {{--<!-- /.card-body -->--}}

                            {{--<div class="card-footer">--}}
                                {{--<button type="submit" class="btn btn-success btn-block">حـفـظ</button>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}

                {{--</div>--}}

                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">صفحة الشخصية</a></li>
                                <li class="nav-item"><a class="nav-link " href="#timeline" data-toggle="tab">تغير كلمة المرور</a></li>
                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="activity">

                                    <div class="card card-primary">

                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <form class="form-horizontal" role="form" method="post" action="{{route('profile_up')}}">
                                            @csrf
                                            <div class="card-body col-md-8">

                                                <div class="form-group row">
                                                    <label for="inputName" class="col-sm-2 col-form-label">  الأسم </label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="name" name="name"  value="{{$user['name']}}"  placeholder="ادخل اسم المعلم" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="inputEmail" class="col-sm-2 col-form-label">  الأميل </label>
                                                    <div class="col-sm-10">
                                                        <input type="email" id="email" name="email" value="{{$user['email']}}" class="form-control"  placeholder="ادخل الاميل" required>
                                                    </div>
                                                </div>

                                            </div>

                                            <!-- /.card-body -->

                                            <div class="card-footer">
                                                <button type="submit" onclick="msg();" class="btn btn-success btn-block">حـفـظ</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane " id="timeline">
                                    <!-- The timeline -->
                                    <div class="timeline timeline-inverse">
                                        <div class="card card-primary">
                                            @if(session('message'))
                                                <div class="alert alert-success alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong>نجاح</strong>   {{session('message')}}.
                                                </div>

                                        @endif

                                        <!-- /.card-header -->
                                            <!-- form start -->
                                            <form role="form" method="post" action="{{route('change_password')}}">
                                                @csrf
                                                <div class="card-body">

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">كلمة المررو القديمة</label>
                                                        <input type="password" id="password_old" name="password_old"  class="form-control"  placeholder="ادخل كلمة المرور القديمة">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">كلمة المرور جديدة</label>
                                                        <input type="password" id="password" name="password"  class="form-control"  placeholder="ادخل كلمة المرور جديدة">
                                                    </div>

                                                    @error('password')
                                                    <div class="alert alert-danger alert-dismissible">
                                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                        <strong>{{ $message }}</strong>

                                                    </div>
                                                    @enderror

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">تأكيد  كلمةالمرور </label>
                                                        <input type="password" id="password_confirmation" name="password_confirmation"  class="form-control"  placeholder="ادخل تأكيد  كلمةالمرور">
                                                    </div>
                                                </div>
                                                @if(session('error'))
                                                    <div class="alert alert-danger" rel="alert">

                                                        {{session('error')}}

                                                    </div>
                                            @endif

                                            <!-- /.card-body -->

                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-success btn-block">حـفـظ</button>
                                                </div>
                                            </form>
                                        </div>



                                    </div>
                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="settings">
                                    {{--<form class="form-horizontal">--}}
                                        {{--<div class="form-group row">--}}
                                            {{--<label for="inputName" class="col-sm-2 col-form-label">Name</label>--}}
                                            {{--<div class="col-sm-10">--}}
                                                {{--<input type="email" class="form-control" id="inputName" placeholder="Name">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group row">--}}
                                            {{--<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>--}}
                                            {{--<div class="col-sm-10">--}}
                                                {{--<input type="email" class="form-control" id="inputEmail" placeholder="Email">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group row">--}}
                                            {{--<label for="inputName2" class="col-sm-2 col-form-label">Name</label>--}}
                                            {{--<div class="col-sm-10">--}}
                                                {{--<input type="text" class="form-control" id="inputName2" placeholder="Name">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group row">--}}
                                            {{--<label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>--}}
                                            {{--<div class="col-sm-10">--}}
                                                {{--<textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group row">--}}
                                            {{--<label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>--}}
                                            {{--<div class="col-sm-10">--}}
                                                {{--<input type="text" class="form-control" id="inputSkills" placeholder="Skills">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group row">--}}
                                            {{--<div class="offset-sm-2 col-sm-10">--}}
                                                {{--<div class="checkbox">--}}
                                                    {{--<label>--}}
                                                        {{--<input type="checkbox"> I agree to the <a href="#">terms and conditions</a>--}}
                                                    {{--</label>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group row">--}}
                                            {{--<div class="offset-sm-2 col-sm-10">--}}
                                                {{--<button type="submit" class="btn btn-danger">Submit</button>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</form>--}}
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.nav-tabs-custom -->
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