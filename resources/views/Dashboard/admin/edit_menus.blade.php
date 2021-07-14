@extends('Dashboard.test')
@section('page')

    <section class="content">
        <div class="container-fluid">
            <div class="row">


                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">تعديل قائمة </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" id="form_menu">
                            @csrf
                            <div class="card-body">


                                <div class="form-group">
                                    <label>اسم القائمة</label>
                                    <input type="text" id="name" name="name" class="form-control"  placeholder="ادخل اسم القائمة" required>
                                </div>


                                <div class="form-group">
                                    <label>Route Name </label>
                                        <input type="text" id="route_name" name="route_name" class="form-control"  placeholder="Route Name" required>
                                </div>

                                <div class="form-group">
                                    <label >القائمة</label>
                                    <select name="menu" class="form-control"  >
                                            <option value="1">القائمة الداخلية</option>
                                            <option value="2">القائمة الخارجية </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label >الصلاحيات </label>
                                    <select class="form-control" multiple name="role[]" >
                                        <option value="user">للمستخدمين</option>
                                        <option value="super">للممشرفين</option>
                                        <option value="admin">للمدراء</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label >ترتيب </label>
                                    <input type="text" id="list" name="list" class="form-control"  placeholder="ترتيب القائمة ">
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="button" id="submit" onclick="msg();" class="btn btn-primary btn-block">اضافة القائمة </button>
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
            title: 'تم التعديل بنجاح',
            showConfirmButton: false,
            timer: 1500
        })

    }
</script>
@endsection