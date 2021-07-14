@extends('Dashboard.test')
@section('page')



    <section class="content">
        <div class="container-fluid">
        <div class="row">

            <!-- Add -->

            <div class="col-md-5">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"> تعديل دورة</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{route('edit_courses',$courses['id'])}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">اسم الدورة</label>
                                <input type="text" id="name" name="name"  value="{{$courses['name']}}" class="form-control"  placeholder="ادخل اسم الدورة" required>
                            </div>
                            <div class="form-group">
                                <label>وصف الدورة</label>
                                <textarea class="form-control" id="summernote" name="description" rows="3" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 81px;">{{$courses['description']}}</textarea>
                            </div>
                            <script>
                                $(document).ready(function() {
                                    $('#summernote').summernote();
                                });
                            </script>
                            <div class="form-group">
                                <label for="exampleInputEmail1">معلم الدورة</label>
                                <select name="teacher" id="teacher" class="form-control" >
                                    @foreach($teacher as $teachers)

                                        <option @if ($courses['teacher'] ==  $teachers->id ) selected  @endif value="{{$teachers->id}}"> {{$teachers->name}}</option>

                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">سعر الدورة</label>
                                <input type="text" id="price" name="price"  value="{{$courses['price']}}" class="form-control"  placeholder="ادخل سعر الدورة">
                            </div>

                            <div class="form-group">

                                <div class="custom-file">
                                    <label>صورة الدورة</label>
                                    <input type="file" class="form-control" name="image" id="id_img">
                                </div>
                            </div>

                            <div class="card-body">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">

                                        <div class="carousel-item active">
                                            @if($courses->image != null)
                                            <img class="d-block w-100 " src="{{asset(App\Atachments::where('id',$courses->image)->get()->first()->path)}}" alt="Second slide">
                                                @endif
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" onclick="msg()" class="btn btn-primary btn-block">حـــفـــظ</button>
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