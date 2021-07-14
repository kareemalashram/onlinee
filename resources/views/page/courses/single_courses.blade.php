@extends('test')
@section('page')
    <section id="home">
        <div class="row">

            <div class="mai-content">
                <section id="home">
                    <div class="row">



                        <div class="owl-carousel owl-theme home-slider owl-loaded owl-drag" >

                                    <div class="owl-item cloned" style="width: 2123px;"><div class="item item-third">
                                            <div class="caption">
                                                <div class="container">
                                                    <div class="col-md-6 col-sm-12">
                                                        <h1>{{$courses->name}}</h1>
                                                        <h3>{!! $courses->description  !!}</h3>


                                                        <button type="button" class="section-btn btn btn-default smoothScroll" data-toggle="modal" data-target="#exampleModal">

                                                            تـسـجـيـل
                                                        </button>
                                                        <div id="add_r">


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <section id="courses">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2> Website Development <small>--</small></h2>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="courses-thumb">
                                    <div class="courses-top">
                                        <div class="courses-image">
                                            <img src="/{{ App\Atachments::where('id',$courses->image)->get()->first()->path}}" class="img-responsive" alt="">
                                        </div>
                                        <div class="courses-date">
                                            <span><i class="fa fa-calendar"></i> 12 / 7 / 2018</span>
                                            <span><i class="fa fa-clock-o"></i>{{\Carbon\Carbon::createFromTimeStamp(strtotime($courses->created_at))->locale('ar_AR')->diffForHumans()}}</span>
                                        </div>
                                    </div>

                                    <div class="courses-detail">
                                        <h3><a href="#">{{$courses->name}}</a></h3>
                                        <p>{!! $courses->description  !!}</p>
                                    </div>

                                    <div class="courses-info">
                                        <div class="courses-author">
                                            <img src="images/author-image1.jpg" class="img-responsive" alt="">
                                            <span>{{\App\Teacher::where('id',$courses->teacher)->get()->first()->name}}</span>
                                        </div>
                                        <div class="courses-price">
                                            <a href="#"><span>{{$courses->price}}</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                    <h1>{{$courses->name}}</h1>
                    <p>{!! $courses->description  !!}</p>



                </div>





            </div>
        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="text-align: right;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تسجيل الاشتراك في دورة </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float: left;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                       <form id="add_new">
                           @csrf

                           <div class="row">


                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label>الاسم</label>
                                       <input type="text" name="name" class="form-control" placeholder="ادخل الاسم">
                                   </div>
                               </div>


                       <div class="col-md-6">
                           <div class="form-group">
                               <label>الاميل</label>
                               <input type="email" id="email" name="email" class="form-control"  placeholder="ادخل الاميل">
                           </div>
                       </div>


                       <div class="col-md-6">
                           <div class="form-group">
                               <label>رقم الهاتف </label>
                               <input type="text" name="phone" class="form-control" placeholder="ادخل رقم الهاتف ">
                           </div>
                       </div>

                       <div class="col-md-6">
                           <div class="form-group">
                               <label>عنوان</label>
                               <input type="text" name="address" class="form-control" placeholder="ادخل عنوان">
                           </div>
                       </div>


                       <div class="col-md-12">
                           <div class="form-group">
                               <label>تاريخ الميلاد </label>
                               <input type="date" name="birthday" class="form-control">
                           </div>
                       </div>

                    </div>
                       </form>
                  </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    <button type="button" onclick="add();" class="btn btn-primary">تـسـجـيـل</button>
                </div>
            </div>
        </div>
    </div>

    <script>


        function add(){

            $.ajax({
                url  : "{{ route('register_student',request()->route('id'))}}",
                type : "POST",
                data : $("#add_new").serialize(),
                success: function (e) {
                    
                    if (e.status == true) {

                        msg_alert('تم التسجيل في دورة بنجاح','success');
                        $('#add_new').trigger("reset");
                        $("#exampleModal").modal('toggle');



                    }else{
                        alert('Error');

                    }
                    
                }
            });

        }


        function msg() {

            $("#exampleModal").modal('toggle');
            var html = "<div class='alert alert-success'><p>تم تسجيل في دورة بنجاح </P></div>";
            $("#add_r").append(html);
            $("#add_r").fadeOut(10000);

        }

        function msg_alert(txt,icn) {

            Swal.fire({
                position: 'top',
                icon: icn,
                title: txt,
                showConfirmButton: false,
                timer: 1500
            })


        }



    </script>

@endsection