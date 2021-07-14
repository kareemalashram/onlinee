<section id="courses">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <h2>الدورات الشعبية<small>قم بترقية مهاراتك بأحدث الدورات التدريبية</small></h2>
                </div>

                    <div class="owl-carousel owl-theme owl-courses">

                        @foreach($course as $cour)

                            <div class="col-md-4 col-sm-4">
                                <div class="item">
                                    <div class="courses-thumb">
                                        <div class="courses-top">
                                            <div class="courses-image">
                                                <img src="{{App\Atachments::where('id',$cour->image)->get()->first()->path}}" class="img-responsive" alt="">
                                            </div>
                                            <div class="courses-date">
                                                <span><i class="fa fa-calendar"></i> 12 / 7 / 2018</span>
                                                <span><i class="fa fa-clock-o"></i>{{\Carbon\Carbon::createFromTimeStamp(strtotime($cour->created_at))->locale('ar_AR')->diffForHumans()}}</span>
                                            </div>
                                        </div>

                                        <div class="courses-detail">
                                            <h3><a href="{{route('single_courses',$cour->id)}}">{{$cour->name}}</a></h3>
                                            {{--<p>{!! Str::limit($cour->description,50) !!}</p>--}}
                                        </div>

                                        <div class="courses-info">
                                            <div class="courses-author">
                                                <img src="images/author-image1.jpg" class="img-responsive" alt="">
                                                <span>{{\App\Teacher::where('id',$cour->teacher)->get()->first()->name}}</span>
                                            </div>
                                            <div class="courses-price">
                                                <a href="#"><span>{{$cour->price}}</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>



                </div>

            </div>
        </div>
    </div>
</section>