@extends('test')
@section('page')

<!-- PRE LOADER -->
<section class="preloader">
    <div class="spinner">

        <span class="spinner-rotate"></span>

    </div>
</section>



<!-- HOME -->
<section id="home">
    <div class="row">

        <div class="owl-carousel owl-theme home-slider">

            <div class="item item-first">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <h1>مركز التعليم عن بعد</h1>
                            <h3>تم تصميم دوراتنا عبر الإنترنت لتلائم مجال عملك الذي يدعم جميع الجوانب بأحدث التقنيات.</h3>
                            <a href="#feature" class="section-btn btn btn-default smoothScroll">Discover more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item item-second">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <h1>ابدأ رحلتك من خلال دوراتنا العملية</h1>
                            <h3>تم بناء دوراتنا عبر الإنترنت بالشراكة مع رواد التكنولوجيا ومصممة لتلبية متطلبات الصناعة.</h3>
                            <a href="#courses" class="section-btn btn btn-default smoothScroll">Take a course</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item item-third">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <h1>طرق التعلم الفعال</h1>
                            <h3>تم بناء دوراتنا عبر الإنترنت بالشراكة مع رواد التكنولوجيا ومصممة لتلبية متطلبات الصناعة. <a rel="nofollow" href="https://www.facebook.com/templatemo">templatemo</a> page.</h3>
                            <a href="#contact" class="section-btn btn btn-default smoothScroll">Let's chat</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>


<!-- FEATURE -->
<section id="feature">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-4">
                <div class="feature-thumb">
                    <span>01</span>
                    <h3>الدورات الشائعة</h3>
                    <p>يُعرف نموذج HTML Bootstrap التعليمي المجاني. يمكنك التعديل بأي شكل من الأشكال واستخدام هذا لموقع الويب الخاص بك.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="feature-thumb">
                    <span>02</span>
                    <h3>كتب ومكتبة</h3>
                    <p>مسموح لك باستخدام قالب HTML المعروف لمواقعك التجارية أو غير التجارية.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="feature-thumb">
                    <span>03</span>
                    <h3>المعلمين المعتمدين</h3>
                    <p>يرجى نشر كلمة عنا. لا يُسمح بإعادة توزيع القالب على أي موقع تنزيل.</p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ABOUT -->
<section id="about">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12">
                <div class="about-info">
                    <h2>ابدأ رحلتك إلى حياة أفضل مع الدورات العملية عبر الإنترنت</h2>

                    <figure>
                        <span><i class="fa fa-users"></i></span>
                        <figcaption>
                            <h3>المدربون المحترفون</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                        </figcaption>
                    </figure>

                    <figure>
                        <span><i class="fa fa-certificate"></i></span>
                        <figcaption>
                            <h3>الشهادات الدولية</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                        </figcaption>
                    </figure>

                    <figure>
                        <span><i class="fa fa-bar-chart-o"></i></span>
                        <figcaption>
                            <h3>مجانًا لمدة 3 شهور</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div class="col-md-offset-1 col-md-4 col-sm-12">
                <div class="entry-form">
                    <form action="" method="post">

                        @csrf
                        <h2>سجل اليوم</h2>
                        <input type="text" name="name" class="form-control" placeholder="الاسم الكامل" required="">

                        <input type="email" name="email" class="form-control" placeholder="عنوان بريدك الإلكتروني" required="">

                        <input type="password" name="password" class="form-control" placeholder="كلمة المرور" required="">

                        <button class="submit-btn form-control" id="form-submit">البدء</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- TEAM -->
@include('page.include_page.teachers')

<!-- Courses -->
@include('page.include_page.courses')


<!-- TESTIMONIAL -->
<section id="testimonial">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <h2>Student Reviews <small>from around the world</small></h2>
                </div>

                <div class="owl-carousel owl-theme owl-client">
                    <div class="col-md-4 col-sm-4">
                        <div class="item">
                            <div class="tst-image">
                                <img src="images/tst-image1.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="tst-author">
                                <h4>Jackson</h4>
                                <span>Shopify Developer</span>
                            </div>
                            <p>You really do help young creative minds to get quality education and professional job search assistance. I’d recommend it to everyone!</p>
                            <div class="tst-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="item">
                            <div class="tst-image">
                                <img src="images/tst-image2.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="tst-author">
                                <h4>Camila</h4>
                                <span>Marketing Manager</span>
                            </div>
                            <p>Trying something new is exciting! Thanks for the amazing law course and the great teacher who was able to make it interesting.</p>
                            <div class="tst-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="item">
                            <div class="tst-image">
                                <img src="images/tst-image3.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="tst-author">
                                <h4>Barbie</h4>
                                <span>Art Director</span>
                            </div>
                            <p>Donec erat libero, blandit vitae arcu eu, lacinia placerat justo. Sed sollicitudin quis felis vitae hendrerit.</p>
                            <div class="tst-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="item">
                            <div class="tst-image">
                                <img src="images/tst-image4.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="tst-author">
                                <h4>Andrio</h4>
                                <span>Web Developer</span>
                            </div>
                            <p>Nam eget mi eu ante faucibus viverra nec sed magna. Vivamus viverra sapien ex, elementum varius ex sagittis vel.</p>
                            <div class="tst-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>


<!-- CONTACT -->
<section id="contact">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12">
                <form id="contact-form" role="form" action="" method="post">
                    <div class="section-title">
                        <h2>Contact us <small>we love conversations. let us talk!</small></h2>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <input type="text" class="form-control" placeholder="Enter full name" name="name" required="">

                        <input type="email" class="form-control" placeholder="Enter email address" name="email" required="">

                        <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required=""></textarea>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <input type="submit" class="form-control" name="send message" value="Send Message">
                    </div>

                </form>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="contact-image">
                    <img src="images/contact-image.jpg" class="img-responsive" alt="Smiling Two Girls">
                </div>
            </div>

        </div>
    </div>
</section>


@endsection