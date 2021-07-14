
    <section id="team">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2>معلمون <small>تعرف على المدربين المحترفين</small></h2>
                    </div>
                </div>

             @foreach($teachers as $teacher)

                    <div class="col-md-3 col-sm-6">
                        <div class="team-thumb">
                            <div class="team-image">
                                <img src="images/author-image1.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="team-info">
                                <h3>{{$teacher->name}}</h3>
                                <span>{{\Carbon\Carbon::createFromTimeStamp(strtotime($teacher->created_at))->locale('ar_AR')->diffForHumans()}}</span>
                                <h4>{{Str::limit($teacher->address,10)}}</h4>
                            </div>
                            <ul class="social-icon">
                                <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-instagram"></a></li>
                            </ul>
                        </div>
                    </div>

                 @endforeach

            </div>
        </div>
    </section>

