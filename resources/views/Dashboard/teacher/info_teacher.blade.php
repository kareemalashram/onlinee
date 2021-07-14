@extends('Dashboard.test')
@section('page')


    <section class="content">
        <div class="container-fluid">
         <div class="row">
             <div class="col-md-3">


                 <!-- Profile Image -->
                 <div class="card card-primary card-outline">
                     <div class="card-body box-profile">
                         <div class="text-center">
                             <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                         </div>

                         <h3 class="profile-username text-center">{{$teachers->name }}</h3>

                         <p class="text-muted text-center">{{$teachers->teacherJob ? $teachers->teacherJob->job : "محذوف"}}</p>

                         <ul class="list-group list-group-unbordered mb-3">
                             <li class="list-group-item">
                                 <b>الكورسات</b> <a class="float-left">1,322</a>
                             </li>
                             <li class="list-group-item">
                                 <b>الطلاب</b> <a class="float-left">543</a>
                             </li>
                             <li class="list-group-item">
                                 <b>التقيم</b> <a class="float-left">
                                     100%
                                 </a>


                             </li>
                         </ul>

                         <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                     </div>
                     <!-- /.card-body -->
                 </div>
                 <!-- /.card -->

             </div>

             <div class="col-md-5">

                 <!-- About Me Box -->
                 <div class="card card-primary">
                     <div class="card-header">
                         <h3 class="card-title">معلومات </h3>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                         <strong><i class="fa fa-envelope"></i> البريد </strong>

                         <p class="text-muted">
                             {{$teachers->email }}                         </p>

                         <hr>
                         <strong><i class="fa fa-phone-square"></i> الهاتف </strong>

                         <p class="text-muted">
                             {{$teachers->phone }}
                         </p>

                         <hr>


                         <strong><i class="fas fa-pencil-alt mr-1"></i> مهارات</strong>

                         <p class="text-muted">
                             <span class="tag tag-danger">{{$teachers->teacherJob ? $teachers->teacherJob->job : "محذوف"}}</span>

                         </p>

                         <hr>

                         <strong><i class="far fa-file-alt mr-1"></i> ملاحظات</strong>

                         <p class="text-muted">{{\Carbon\Carbon::createFromTimeStamp(strtotime($teachers->created_at))->locale('ar_AR')->diffForHumans()}}</p>

                         <hr>

                         <strong><i class="fas fa-map-marker-alt mr-1"></i> العنوان </strong>

                         <p class="text-muted">{{$teachers->address }}</p>


                     </div>
                     <!-- /.card-body -->
                 </div>
                 <!-- /.card -->
             </div>


         </div>
        </div>
    </section>





@endsection