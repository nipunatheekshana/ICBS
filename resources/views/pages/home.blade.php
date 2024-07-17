@extends('layout.app')

@section('title', 'Home')

@section('content')
    <div class="banner-wrapper">
        <section class="banner-one banner-carousel__one no-dots owl-theme owl-carousel">
            @foreach ($frontBanners as $frontBanner)
                <div class="banner-one__slide banner-one__slide-one">
                    <div class="container">
                        <div class="banner-one__bubble-1"></div><!-- /.banner-one__bubble- -->
                        <div class="banner-one__bubble-2"></div><!-- /.banner-one__bubble- -->
                        <div class="banner-one__bubble-3"></div><!-- /.banner-one__bubble- -->
                        <img src="{{ asset('uploads/' . $frontBanner->bg_image) }}" alt=""
                            class="banner-one__scratch">
                        <img src="{{ asset('uploads/' . $frontBanner->image) }}" class="banner-one__person"
                            alt="">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <h3 class="banner-one__title banner-one__light-color">{{ $frontBanner->title }}</h3><!-- /.banner-one__title -->
                                <p class="banner-one__tag-line">{{ $frontBanner->slogan }}</p><!-- /.banner-one__tag-line -->
                                <a href="#" class="thm-btn banner-one__btn">Learn More</a>
                            </div><!-- /.col-xl-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.banner-one__slide -->
            @endforeach
        </section><!-- /.banner-one -->
        <div class="banner-carousel-btn">
            <a href="#" class="banner-carousel-btn__left-btn"><i class="kipso-icon-left-arrow"></i></a>
            <a href="#" class="banner-carousel-btn__right-btn"><i class="kipso-icon-right-arrow"></i></a>
        </div><!-- /.banner-carousel-btn -->
        <div class="banner-one__cta">
            <div class="banner-one__cta-icon">
                <i class="kipso-icon-black-graduation-cap-tool-of-university-student-for-head"></i>
                <!-- /.kipso-icon-knowledge -->
            </div><!-- /.banner-one__cta-icon -->
            <div class="banner-one__cta-title">
                <h3 class="banner-one__cta-text"><a href="#">Read how we encourage our
                        students to learn</a></h3><!-- /.banner-one__cta-text -->
            </div><!-- /.banner-one__cta-title -->
            <div class="banner-one__cta-link">
                <a href="#"><i class="kipso-icon-right-arrow"></i><!-- /.kipso-icon-right-arrow --></a>
            </div><!-- /.banner-one__cta-link -->
        </div><!-- /.banner-one__cta -->
    </div><!-- /.banner-wrapper -->
    <section class="about-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-two__content">
                        <div class="block-title text-left">
                            <h2 class="block-title__title">Welcome to ICBS <br>
                                International</h2><!-- /.block-title__title -->
                        </div><!-- /.block-title -->
                        <p class="about-two__text">The world is changing, and technology is driving much of
                            that change. To be prepared, our students need to have a
                            working understanding of current technologies and a high
                            level of confidence in their ability to master newer and
                            more complex tools. Let us bring your skills to the success future.</p>
                        <!-- /.about-two__text -->
                        <div class="about-two__single-wrap">
                            <div class="about-two__single">
                                <div class="about-two__single-icon">
                                    <i class="kipso-icon-professor"></i><!-- /.kipso-icon-professor -->
                                </div><!-- /.about-two__single-icon -->
                                <div class="about-two__single-content">
                                    <p class="about-two__single-text">Start learning from
                                        our experts</p><!-- /.about-two__single-text -->
                                </div><!-- /.about-two__single-content -->
                            </div><!-- /.about-two__single -->
                            <div class="about-two__single">
                                <div class="about-two__single-icon">
                                    <i class="kipso-icon-knowledge"></i><!-- /.kipso-icon-professor -->
                                </div><!-- /.about-two__single-icon -->
                                <div class="about-two__single-content">
                                    <p class="about-two__single-text">Enhance your skills
                                        with us now</p><!-- /.about-two__single-text -->
                                </div><!-- /.about-two__single-content -->
                            </div><!-- /.about-two__single -->
                        </div><!-- /.about-two__single-wrap -->
                        <a href="#" class="thm-btn">Learn More</a><!-- /.thm-btn -->
                    </div><!-- /.about-two__content -->
                </div><!-- /.col-lg-6 -->
                <div class="col-xl-6 d-flex justify-content-xl-end justify-content-sm-center">
                    <div class="about-two__image">
                        <span class="about-two__image-dots"></span><!-- /.about-two__image-dots -->
                        <img src="{{ asset('assets/images/about-1-1.png') }}" alt="">
                        <div class="about-two__count">
                            <div class="about-two__count-text">Trusted by
                                <span class="counter">4890</span>
                            </div><!-- /.about-two__count-text -->
                        </div><!-- /.about-two__count -->
                    </div><!-- /.about-two__image -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-two -->
    <section class="course-one__top-title home-one">
        <div class="container">
            <div class="block-title mb-0">
                <h2 class="block-title__title">Explore our <br>
                    popular courses</h2><!-- /.block-title__title -->
            </div><!-- /.block-title -->
        </div><!-- /.container -->
        <div class="course-one__top-title__curve"></div><!-- /.course-one__top-title__curve -->
    </section><!-- /.course-one__top-title -->

    <section class="course-one course-one__teacher-details home-one">
        <div class="container">
            <div class="course-one__carousel owl-carousel owl-theme">
                @foreach ($Courses as $course)
                    <div class="item">
                        <div class="course-one__single color-1">
                            <div class="course-one__image">
                                <img src="{{ asset('uploads/' . $course->image) }}" alt="">
                                <i class="far fa-heart"></i><!-- /.far fa-heart -->
                            </div><!-- /.course-one__image -->
                            <div class="course-one__content">
                                <a href="#"
                                    class="course-one__category">{{ $course->department->name }}</a><!-- /.course-one__category -->
                                <h2 class="course-one__title"><a href="course-details-01.html">{{ $course->name }}</a></h2>
                                <!-- /.course-one__title -->
                                <div class="course-one__stars">
                                    <span class="course-one__stars-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span><!-- /.course-one__stars-wrap -->
                                    <span class="course-one__count">4.8</span><!-- /.course-one__count -->
                                    <span class="course-one__stars-count">250</span><!-- /.course-one__stars-count -->
                                </div><!-- /.course-one__stars -->
                                <div class="course-one__meta">
                                    <a href="course-details-01.html"><i class="far fa-clock"></i>
                                        {{ $course->duration }}</a>
                                    <a href="course-details-01.html"><i class="far fa-folder-open"></i>
                                        {{ $course->course_curriculums_count }} Modules</a>
                                    <a href="course-details-01.html">LKR {{ $course->price }}</a>
                                </div><!-- /.course-one__meta -->

                                <a href="{{ route('coursesDetails', $course->id) }}" class="course-one__link">See
                                    Preview</a><!-- /.course-one__link -->
                            </div><!-- /.course-one__content -->
                        </div><!-- /.course-one__single -->

                    </div><!-- /.item -->
                @endforeach
            </div><!-- /.course-one__carousel -->
        </div><!-- /.container -->
    </section><!-- /.course-one course-page -->
    <section class="video-two">
        <div class="container">
            <img src="{{ asset('assets/images/scratch-1-1.jpg') }}" class="video-two__scratch" alt="">
            <div class="row">
                <div class="col-lg-7">
                    <div class="video-two__content">
                        <h2 class="video-two__title">Our one & only <br>
                            mission is to extend <br>
                            your skills in to the future world!</h2><!-- /.video-two__title -->
                        <a href="#" class="thm-btn">Learn More</a><!-- /.thm-btn -->
                    </div><!-- /.video-two__content -->
                </div><!-- /.col-lg-7 -->
                <div class="col-lg-5 d-flex justify-content-lg-end justify-content-sm-start">
                    <div class="my-auto">
                        <a href="#" class="video-two__popup"><i class="fa fa-play"></i><!-- /.fa fa-play --></a>
                        <!-- /.video-two__popup -->
                    </div><!-- /.my-auto -->
                </div><!-- /.col-lg-5 d-flex justify-content-end -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.video-two -->
    <section class="countdown-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="countdown-one__content">
                        <h2 class="countdown-one__title">Register now </h2><!-- /.countdown-one__title -->
                        <p class="countdown-one__tag-line">let us match your skills in to the job market!</p>
                        <!-- /.countdown-one__tag-line -->
                        <p class="countdown-one__text">In today's dynamic job market, finding the right opportunity
                            can be like searching for a needle in a haystack. That's where we come in. Our dedicated
                            team is committed to one goal: matching your unique skills and talents with the perfect
                            job fit..</p><!-- /.countdown-one__text -->
                        <ul class="countdown-one__list list-unstyled">
                            <!-- content loading via js -->
                        </ul><!-- /.coundown-one__list -->
                    </div><!-- /.countdown-one__content -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="become-teacher__form">
                        <div class="become-teacher__form-top">
                            <h2 class="become-teacher__form-title">
                                Place a Inquiry
                            </h2><!-- /.become-teacher__form-title -->
                        </div><!-- /.become-teacher__top -->
                        <form id="inquiryForm"
                            class="become-teacher__form-content contact-form-validated">
                            {{ csrf_field() }}
                            <input type="text" placeholder="Your Name" name="name" id="name">
                            <input type="text" placeholder="Email Address" name="email" id="email">
                            <input type="text" placeholder="Phone Number" name="phone" id="phone">
                            <input type="text" placeholder="Course" name="course" id="course">
                            <button type="button" id="btnSaveInquiry" class="thm-btn become-teacher__form-btn">Apply For It</button>
                        </form><!-- /.become-teacher__form-content -->
                        <div class="result text-center"></div><!-- /.result -->
                    </div><!-- /.become-teacher__form -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.countdown-one -->
    <section class="thm-gray-bg course-category-one">
        <div class="container-fluid text-center">
            <div class="block-title text-center">
                <h2 class="block-title__title">Browse our<br>
                    course categories</h2><!-- /.block-title__title -->
            </div><!-- /.block-title -->
            <div class="course-category-one__carousel owl-carousel owl-theme">
                <div class="item">
                    <div class="course-category-one__single color-1">
                        <div class="course-category-one__icon">
                            <i class="kipso-icon-desktop"></i><!-- /.kipso-icon-camera -->
                        </div><!-- /.course-category-one__icon -->
                        <h3 class="course-category-one__title"><a href="#">Information Technology</a></h3>
                        <!-- /.course-category-one__title -->
                    </div><!-- /.course-category-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="course-category-one__single color-2">
                        <div class="course-category-one__icon">
                            <i class="kipso-icon-web-programming"></i><!-- /.kipso-icon-camera -->
                        </div><!-- /.course-category-one__icon -->
                        <h3 class="course-category-one__title"><a href="#">Graphic Design</a></h3>
                        <!-- /.course-category-one__title -->
                    </div><!-- /.course-category-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="course-category-one__single color-3">
                        <div class="course-category-one__icon">
                            <i class="kipso-icon-human-resources"></i><!-- /.kipso-icon-camera -->
                        </div><!-- /.course-category-one__icon -->
                        <h3 class="course-category-one__title"><a href="#">Business Management</a></h3>
                        <!-- /.course-category-one__title -->
                    </div><!-- /.course-category-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="course-category-one__single color-4">
                        <div class="course-category-one__icon">
                            <i class="kipso-icon-knowledge"></i><!-- /.kipso-icon-camera -->
                        </div><!-- /.course-category-one__icon -->
                        <h3 class="course-category-one__title"><a href="#">Banking & Finance</a></h3>
                        <!-- /.course-category-one__title -->
                    </div><!-- /.course-category-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="course-category-one__single color-5">
                        <div class="course-category-one__icon">
                            <i class="kipso-icon-targeting"></i><!-- /.kipso-icon-camera -->
                        </div><!-- /.course-category-one__icon -->
                        <h3 class="course-category-one__title"><a href="#">Marketing</a></h3>
                        <!-- /.course-category-one__title -->
                    </div><!-- /.course-category-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="course-category-one__single color-6">
                        <div class="course-category-one__icon">
                            <i class="kipso-icon-strategy"></i><!-- /.kipso-icon-camera -->
                        </div><!-- /.course-category-one__icon -->
                        <h3 class="course-category-one__title"><a href="#">Accounting</a></h3>
                        <!-- /.course-category-one__title -->
                    </div><!-- /.course-category-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="course-category-one__single color-1">
                        <div class="course-category-one__icon">
                            <i class="kipso-icon-desktop"></i><!-- /.kipso-icon-camera -->
                        </div><!-- /.course-category-one__icon -->
                        <h3 class="course-category-one__title"><a href="#">UX-UI Development</a></h3>
                        <!-- /.course-category-one__title -->
                    </div><!-- /.course-category-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="course-category-one__single color-2">
                        <div class="course-category-one__icon">
                            <i class="kipso-icon-web-programming"></i><!-- /.kipso-icon-camera -->
                        </div><!-- /.course-category-one__icon -->
                        <h3 class="course-category-one__title"><a href="#">Back-End Development</a></h3>
                        <!-- /.course-category-one__title -->
                    </div><!-- /.course-category-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="course-category-one__single color-3">
                        <div class="course-category-one__icon">
                            <i class="kipso-icon-strategy"></i><!-- /.kipso-icon-camera -->
                        </div><!-- /.course-category-one__icon -->
                        <h3 class="course-category-one__title"><a href="#">Office Tools</a></h3>
                        <!-- /.course-category-one__title -->
                    </div><!-- /.course-category-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="course-category-one__single color-4">
                        <div class="course-category-one__icon">
                            <i class="kipso-icon-knowledge"></i><!-- /.kipso-icon-camera -->
                        </div><!-- /.course-category-one__icon -->
                        <h3 class="course-category-one__title"><a href="#">English Language</a></h3>
                        <!-- /.course-category-one__title -->
                    </div><!-- /.course-category-one__single -->
                </div><!-- /.item -->
            </div><!-- /.course-category-one__carousel owl-carousel owl-theme -->

            <!--<a href="#" class="thm-btn">View All Categories</a>--><!-- /.thm-btn -->
        </div><!-- /.container-fluid -->
    </section><!-- /.thm-gray-bg course-category-one -->
    <section class="cta-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 clearfix">
                    <img src="{{ asset('assets/images/cta-1.jpg') }}" class="cta-three__image" alt="">
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="cta-three__content">
                        <div class="block-title text-left">
                            <h2 class="block-title__title">Benefits of learning
                                with ICBS</h2><!-- /.block-title__title -->
                        </div><!-- /.block-title -->
                        <p class="cta-three__text">Whether you're a seasoned professional or just starting
                            your career journey, our personalized approach ensures that your abilities are
                            not only recognized but also valued in the competitive job landscape..</p>
                        <!-- /.cta-three__text -->
                        <div class="cta-three__single-wrap">
                            <div class="cta-three__single">
                                <i class="kipso-icon-strategy"></i><!-- /.kipso-icon-strategy -->
                                <p class="cta-three__single-text">Professional
                                    Courses</p><!-- /.cta-three__single-text -->
                            </div><!-- /.cta-three__single -->
                            <div class="cta-three__single">
                                <i class="kipso-icon-training"></i><!-- /.kipso-icon-training -->
                                <p class="cta-three__single-text">Live
                                    Learning</p><!-- /.cta-three__single-text -->
                            </div><!-- /.cta-three__single -->
                            <div class="cta-three__single">
                                <i class="kipso-icon-human-resources"></i><!-- /.kipso-icon-human-resources -->
                                <p class="cta-three__single-text">Expert
                                    Teachers</p><!-- /.cta-three__single-text -->
                            </div><!-- /.cta-three__single -->
                        </div><!-- /.cta-three__single-wrap -->
                        <a href="#" class="thm-btn">Learn More</a><!-- /.thm-btn -->
                    </div><!-- /.cta-three__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.cta-three -->



    <section class="brand-two ">
        <div class="container">
            <div class="block-title">
                <h2 class="block-title__title">Our company & partners</h2><!-- /.block-title__title -->
            </div><!-- /.block-title -->
            <div class="brand-one__carousel owl-carousel owl-theme">
                <div class="item">
                    <img src="{{ asset('assets/images/vertical_edited.png') }}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('assets/images/login_eye_q.png') }}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('assets/images/login_logo_path_finder.png') }}" alt="">
                </div><!-- /.item -->


            </div><!-- /.brand-one__carousel owl-carousel owl-theme -->
        </div><!-- /.container -->
    </section><!-- /.brand-one -->

    <section class="blog-two">
        <div class="container">
            <div class="block-title text-center">
                <h2 class="block-title__title">Our latest news <br>
                    & updates</h2><!-- /.block-title__title -->
            </div><!-- /.block-title -->
            <div class="blog-two__carousel owl-carousel owl-theme">
                @foreach ($newss as $news)
                    <div class="item">
                        <div class="blog-two__single"
                            style="background-image: url({{ asset('uploads/' . $news->image) }});">
                            <div class="blog-two__inner">
                                <a href="{{ route('newsDetails', $news->id) }}" class="blog-two__date">
                                    <span>{{ $news->created_at->format('d') }}</span>
                                    {{ $news->created_at->format('M') }}
                                </a><!-- /.blog-two__date -->
                                <h3 class="blog-two__title">
                                    <a href="{{ route('newsDetails', $news->id) }}">{{ $news->title }}</a>
                                </h3><!-- /.blog-two__title -->
                            </div><!-- /.blog-two__inner -->
                        </div><!-- /.blog-two__single -->
                    </div><!-- /.item -->
                @endforeach
            </div><!-- /.blog-two__carousel owl-carousel owl-theme -->
        </div><!-- /.container -->
    </section><!-- /.blog-one blog-page -->

    <section class="mailchimp-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mailchimp-one__content">
                        <div class="mailchimp-one__icon">
                            <i class="kipso-icon-email"></i><!-- /.kipso-icon-email -->
                        </div><!-- /.mailchimp-one__icon -->
                        <h2 class="mailchimp-one__title">Get latest courses <br>
                            updates by signing up</h2><!-- /.mailchimp-one__title -->
                    </div><!-- /.mailchimp-one__content -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6 d-flex">
                    <div class="my-auto">
                        <form action="#" class="mailchimp-one__form mc-form" data-url="MAILCHIMP_FORM_URL">
                            <input type="text" id="mc-email" placeholder="Enter your email ">
                            <button type="submit" class="thm-btn">Subscribe</button>
                        </form><!-- /.mailchimp-one__form -->
                        <div class="mc-form__response"></div><!-- /.mc-form__response -->
                    </div><!-- /.my-auto -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.mailchimp-one -->
@endsection

@section('script')
    <script src="{{ url('assets/js/custom/home.js') }}"></script>
@endsection
