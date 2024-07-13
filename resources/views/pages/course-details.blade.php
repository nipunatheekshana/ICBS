@extends('layout.app')

@section('title', $Course->name)
@section('content')
    <section class="inner-banner">
        <div class="container">
            <ul class="list-unstyled thm-breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active"><a href="#">Course Details</a></li>
            </ul><!-- /.list-unstyled -->
            <h2 class="inner-banner__title">Course Details</h2><!-- /.inner-banner__title -->
        </div><!-- /.container -->
    </section><!-- /.inner-banner -->
    <section class="course-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="course-details__content">


                        <div class="course-details__top">
                            <div class="course-details__top-left">
                                <h2 class="course-details__title">{{ $Course->name }}</h2>
                                <!-- /.course-details__title -->
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
                            </div><!-- /.course-details__top-left -->
                            <div class="course-details__top-right">
                                <a href="#" class="course-one__category">IT</a><!-- /.course-one__category -->
                            </div><!-- /.course-details__top-right -->
                        </div><!-- /.course-details__top -->
                        <div class="course-one__image">
                            <img src="{{ asset('uploads/' . $Course->image) }}" alt="">
                            <i class="far fa-heart"></i><!-- /.far fa-heart -->
                        </div><!-- /.course-one__image -->

                        <ul class="course-details__tab-navs list-unstyled nav nav-tabs" role="tablist">
                            <li>
                                <a class="active" role="tab" data-toggle="tab" href="#overview">Overview</a>
                            </li>
                            <li>
                                <a class="" role="tab" data-toggle="tab" href="#curriculum">Curriculum</a>
                            </li>
                            <li>
                                <a class="" role="tab" data-toggle="tab" href="#careers">Careers</a>
                            </li>
                            <li>
                                <a class="" role="tab" data-toggle="tab" href="#review">Reviews</a>
                            </li>
                        </ul><!-- /.course-details__tab-navs list-unstyled -->
                        <div class="tab-content course-details__tab-content ">
                            <div class="tab-pane show active  animated fadeInUp" role="tabpanel" id="overview">
                                <h3 class="course-details__tab-title">{{ $Course->description_title }} </h3>
                                <br>
                                <p class="course-details__tab-text">{{ $Course->description }} </p>
                                <!-- /.course-details__tab-text -->


                                <!-- /.course-details__tab-text -->
                                <br>
                                <ul class="list-unstyled course-details__overview-list">
                                    @foreach ($Course->courseDiscriptionBuletlines as $Buletline)
                                        <li>• {{ $Buletline->buletline }}.</li>
                                    @endforeach
                                </ul><!-- /.list-unstyled course-details__overview-list -->
                            </div><!-- /.course-details__tab-content -->



                            <div class="tab-pane  animated fadeInUp" role="tabpanel" id="curriculum">
                                <h3 class="course-details__tab-title">{{ $Course->curriculum_title }}</h3>
                                <!-- /.course-details__title -->
                                <br>
                                <p class="course-details__tab-text">{{ $Course->curriculum }}</p>
                                <!-- /.course-details__tab-text -->
                                <br>
                                <ul class="course-details__curriculum-list list-unstyled">
                                    @foreach ($Course->courseCurriculums as $module)
                                        <li>
                                            <div class="course-details__curriculum-list-left">
                                                <div class="course-details__meta-icon file-icon">
                                                    <i class="fas fa-flag"></i><!-- /.fas fa-play -->
                                                </div><!-- /.course-details__icon -->
                                                <a href="#">{{ $module->module }} </a> <span></span>
                                            </div><!-- /.course-details__curriculum-list-left -->
                                            <div class="course-details__curriculum-list-right"></div>
                                            <!-- /.course-details__curriculum-list-right -->
                                        </li>
                                    @endforeach
                                </ul><!-- /.course-details__curriculum-list -->
                            </div><!-- /.course-details__tab-content -->


                            <!--Job opputunities starts-->
                            <!--Job opputunities starts-->
                            <!--Job opputunities starts-->

                            <div class="tab-pane  animated fadeInUp" role="tabpanel" id="careers">
                                <h3 class="course-details__tab-title">{{ $Course->career_path_title }}</h3>
                                <!-- /.course-details__title -->
                                <br>
                                <p class="course-details__tab-text">{{ $Course->career_path }}</p>
                                <!-- /.course-details__tab-text -->
                                <br>
                                <ul class="course-details__curriculum-list list-unstyled">
                                    @foreach ($Course->CourseCareerPaths as $CourseCareerPath)
                                        <li>
                                            <div class="course-details__curriculum-list-left">
                                                <div class="course-details__meta-icon file-icon">
                                                    <i class="fas fa-flag"></i>
                                                </div>
                                                <a href="#">{{ $CourseCareerPath->career_path }}</a> <span></span>
                                            </div>
                                            <div class="course-details__curriculum-list-right"></div>
                                        </li>
                                    @endforeach
                                </ul><!-- /.course-details__curriculum-list -->
                            </div><!-- /.course-details__tab-content -->
                            <!--Job opputunities ends-->



                            <div class="tab-pane  animated fadeInUp" role="tabpanel" id="review">
                                <div class="row">
                                    <div class="col-xl-7 d-flex">
                                        <div class="course-details__progress my-auto">
                                            <div class="course-details__progress-item">
                                                <p class="course-details__progress-text">Excellent</p>
                                                <!-- /.course-details__progress-text -->
                                                <div class="course-details__progress-bar">
                                                    <span style="width: 95%"></span>
                                                </div><!-- /.course-details__progress-bar -->
                                                <p class="course-details__progress-count">15</p>
                                                <!-- /.course-details__progress-count -->
                                            </div><!-- /.course-details__progress-item -->
                                            <div class="course-details__progress-item">
                                                <p class="course-details__progress-text">Very Good</p>
                                                <!-- /.course-details__progress-text -->
                                                <div class="course-details__progress-bar">
                                                    <span style="width: 65%"></span>
                                                </div><!-- /.course-details__progress-bar -->
                                                <p class="course-details__progress-count">10</p>
                                                <!-- /.course-details__progress-count -->
                                            </div><!-- /.course-details__progress-item -->
                                            <div class="course-details__progress-item">
                                                <p class="course-details__progress-text">Average</p>
                                                <!-- /.course-details__progress-text -->
                                                <div class="course-details__progress-bar">
                                                    <span style="width: 33%"></span>
                                                </div><!-- /.course-details__progress-bar -->
                                                <p class="course-details__progress-count">5</p>
                                                <!-- /.course-details__progress-count -->
                                            </div><!-- /.course-details__progress-item -->
                                            <div class="course-details__progress-item">
                                                <p class="course-details__progress-text">Poor</p>
                                                <!-- /.course-details__progress-text -->
                                                <div class="course-details__progress-bar">
                                                    <span style="width: 0%" class="no-bubble"></span>
                                                </div><!-- /.course-details__progress-bar -->
                                                <p class="course-details__progress-count">0</p>
                                                <!-- /.course-details__progress-count -->
                                            </div><!-- /.course-details__progress-item -->
                                            <div class="course-details__progress-item">
                                                <p class="course-details__progress-text">Terrible</p>
                                                <!-- /.course-details__progress-text -->
                                                <div class="course-details__progress-bar">
                                                    <span style="width: 0%" class="no-bubble"></span>
                                                </div><!-- /.course-details__progress-bar -->
                                                <p class="course-details__progress-count">0</p>
                                                <!-- /.course-details__progress-count -->
                                            </div><!-- /.course-details__progress-item -->
                                        </div><!-- /.course-details__progress -->
                                    </div><!-- /.col-lg-8 -->
                                    <div class="col-xl-5 justify-content-xl-end justify-content-sm-center d-flex">
                                        <div class="course-details__review-box">
                                            <p class="course-details__review-count">4.6</p>
                                            <!-- /.course-details__review-count -->
                                            <div class="course-details__review-stars">
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star-half"></i><!-- /.fas fa-star -->
                                            </div><!-- /.course-details__review-stars -->
                                            <p class="course-details__review-text">30 reviews</p>
                                            <!-- /.course-details__review-text -->
                                        </div><!-- /.course-details__review-box -->
                                    </div><!-- /.col-lg-4 -->
                                </div><!-- /.row -->
                                <div class="course-details__comment">
                                    <div class="course-details__comment-single">
                                        <div class="course-details__comment-top">
                                            <div class="course-details__comment-img">
                                                <img src="assets/images/team-1-1818.jpg" alt="">
                                            </div><!-- /.course-details__comment-img -->
                                            <div class="course-details__comment-right">
                                                <h2 class="course-details__comment-name">Rahal Rathnayake</h2>
                                                <!-- /.course-details__comment-name -->
                                                <div class="course-details__comment-meta">
                                                    <p class="course-details__comment-date">01 Feb, 2023</p>
                                                    <!-- /.course-details__comment-date -->
                                                    <div class="course-details__comment-stars">
                                                        <i class="fa fa-star"></i><!-- /.fa fa-star -->
                                                        <i class="fa fa-star"></i><!-- /.fa fa-star -->
                                                        <i class="fa fa-star"></i><!-- /.fa fa-star -->
                                                        <i class="fa fa-star"></i><!-- /.fa fa-star -->
                                                        <i class="fa fa-star star-disabled"></i><!-- /.fa fa-star -->
                                                    </div><!-- /.course-details__comment-stars -->
                                                </div><!-- /.course-details__comment-meta -->
                                            </div><!-- /.course-details__comment-right -->
                                        </div><!-- /.course-details__comment-top -->
                                        <p class="course-details__comment-text">"Enrolling in the Vocational Skill
                                            Certificate for Stand-Alone App Developer was a
                                            game-changer for me. The hands-on approach to learning and the comprehensive
                                            curriculum provided a solid foundation in app
                                            development. The instructors were not only knowledgeable but also supportive,
                                            fostering an environment where I could thrive.
                                            This program has equipped me with the skills and confidence to pursue a career
                                            in app development, and I highly recommend it
                                            to anyone looking to enter this dynamic and growing field."</p>
                                        <!-- /.course-details__comment-text -->
                                    </div><!-- /.course-details__comment-single -->
                                    <div class="course-details__comment-single">
                                        <div class="course-details__comment-top">
                                            <div class="course-details__comment-img">
                                                <img src="assets/images/team-1-1717.jpg" alt="">
                                            </div><!-- /.course-details__comment-img -->
                                            <div class="course-details__comment-right">
                                                <h2 class="course-details__comment-name">Bhagya Dissanayake</h2>
                                                <!-- /.course-details__comment-name -->
                                                <div class="course-details__comment-meta">
                                                    <p class="course-details__comment-date">06 Feb, 2023</p>
                                                    <!-- /.course-details__comment-date -->
                                                    <div class="course-details__comment-stars">
                                                        <i class="fa fa-star"></i><!-- /.fa fa-star -->
                                                        <i class="fa fa-star"></i><!-- /.fa fa-star -->
                                                        <i class="fa fa-star"></i><!-- /.fa fa-star -->
                                                        <i class="fa fa-star star-disabled"></i><!-- /.fa fa-star -->
                                                        <i class="fa fa-star star-disabled"></i><!-- /.fa fa-star -->
                                                    </div><!-- /.course-details__comment-stars -->
                                                </div><!-- /.course-details__comment-meta -->
                                            </div><!-- /.course-details__comment-right -->
                                        </div><!-- /.course-details__comment-top -->
                                        <p class="course-details__comment-text">"I am incredibly impressed with the
                                            Vocational Skill Certificate for Stand-Alone App Developer
                                            program. The curriculum is well-structured, covering everything from coding to
                                            UI/UX design. The real-world projects allowed me
                                            to apply theoretical knowledge to practical scenarios, enhancing my
                                            problem-solving skills. The program not only focuses on
                                            technical aspects but also emphasizes the importance of creativity and user
                                            experience. The industry-relevant skills I gained
                                            have opened up exciting opportunities, and I'm grateful for the valuable
                                            education and support provided by this certificate
                                            program."</p>
                                        <!-- /.course-details__comment-text -->
                                    </div><!-- /.course-details__comment-single -->
                                </div><!-- /.course-details__comment -->
                                <form action="#" class="course-details__comment-form">
                                    <h2 class="course-details__title">Add a review</h2><!-- /.course-details__title -->
                                    <p class="course-details__comment-form-text">Rate this Course? <a href="#"
                                            class="fas fa-star"></a><a href="#" class="fas fa-star"></a><a
                                            href="#" class="fas fa-star"></a><a href="#"
                                            class="fas fa-star"></a><a href="#" class="fas fa-star"></a></p>
                                    <!-- /.course-details__coment-form-text -->
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Your Name">
                                            <input type="text" placeholder="Email Address">
                                        </div><!-- /.col-lg-6 -->
                                        <div class="col-lg-12">
                                            <textarea placeholder="Write Message"></textarea>
                                            <button type="submit" class="thm-btn course-details__comment-form-btn">Leave
                                                a
                                                Review</button>
                                        </div><!-- /.col-lg-12 -->
                                    </div><!-- /.row -->
                                </form><!-- /.course-details__comment-form -->
                            </div><!-- /.course-details__tab-content -->
                        </div><!-- /.tab-content -->
                    </div><!-- /.course-details__content -->
                </div><!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="course-details__price">
                        <p class="course-details__price-text">Course price </p><!-- /.course-details__price-text -->
                        <p class="course-details__price-amount">LKR {{ $Course->price }}</p>
                        <!-- /.course-details__price-amount -->
                        <a href="#" class="thm-btn course-details__price-btn">Buy This Course</a><!-- /.thm-btn -->
                    </div><!-- /.course-details__price -->

                    <div class="course-details__meta">
                        <a href="#" class="course-details__meta-link">
                            <span class="course-details__meta-icon">
                                <i class="far fa-clock"></i><!-- /.far fa-clock -->
                            </span><!-- /.course-details__icon -->
                            Durations: <span>{{ $Course->duration }}</span>
                        </a><!-- /.course-details__meta-link -->
                        <a href="#" class="course-details__meta-link">
                            <span class="course-details__meta-icon">
                                <i class="far fa-folder-open"></i><!-- /.far fa-folder-open -->
                            </span><!-- /.course-details__icon -->
                            Modules : <span>{{ $moduleCount }}</span>
                        </a><!-- /.course-details__meta-link -->
                        <a href="#" class="course-details__meta-link">
                            <span class="course-details__meta-icon">
                                <i class="far fa-user-circle"></i><!-- /.far fa-user-circle -->
                            </span><!-- /.course-details__icon -->
                            Students: <span>Min {{ $Course->min_students }}</span>
                        </a><!-- /.course-details__meta-link -->

                        <a href="#" class="course-details__meta-link">
                            <span class="course-details__meta-icon">
                                <i class="far fa-flag"></i><!-- /.far fa-flag -->
                            </span><!-- /.course-details__icon -->
                            SkillLevel:<span>{{ $Course->skill_level }}</span>
                        </a><!-- /.course-details__meta-link -->
                        <a href="#" class="course-details__meta-link">
                            <span class="course-details__meta-icon">
                                <i class="far fa-bell"></i><!-- /.far fa-bell -->
                            </span><!-- /.course-details__icon -->
                            Language: <span>{{ $Course->language }}</span>
                        </a><!-- /.course-details__meta-link -->
                    </div><!-- /.course-details__meta -->
                    <div class="course-details__list">
                        <h2 class="course-details__list-title">New Courses</h2><!-- /.course-details__list-title -->
                        <div class="course-details__list-item">
                            <div class="course-details__list-img">
                                <img src="assets/images/lc-1-11.jpg" alt="">
                            </div><!-- /.course-details__list-img -->
                            <div class="course-details__list-content">
                                <a class="course-details__list-author" href="#">by <span>IT Department</span></a>
                                <h3><a href="#">Full-Stack Developer</a></h3>
                                <div class="course-details__list-stars">
                                    <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                    <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                    <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                    <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                    <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                    <span>4.6</span>
                                </div><!-- /.course-details__list-stars -->
                            </div><!-- /.course-details__list-content -->
                        </div><!-- /.course-details__list-item -->
                        <div class="course-details__list-item">
                            <div class="course-details__list-img">
                                <img src="assets/images/lc-1-22.jpg" alt="">
                            </div><!-- /.course-details__list-img -->
                            <div class="course-details__list-content">
                                <a class="course-details__list-author" href="#">by <span>Business
                                        Department</span></a>
                                <h3><a href="#">Research Writing </a></h3>
                                <div class="course-details__list-stars">
                                    <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                    <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                    <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                    <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                    <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                    <span>4.2</span>
                                </div><!-- /.course-details__list-stars -->
                            </div><!-- /.course-details__list-content -->
                        </div><!-- /.course-details__list-item -->
                        <div class="course-details__list-item">
                            <div class="course-details__list-img">
                                <img src="assets/images/lc-1-33.jpg" alt="">
                            </div><!-- /.course-details__list-img -->
                            <div class="course-details__list-content">
                                <a class="course-details__list-author" href="#">by <span>Kids Department</span></a>
                                <h3><a href="#">IT Programming</a></h3>
                                <div class="course-details__list-stars">
                                    <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                    <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                    <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                    <i class="fas fa-star"></i><!-- /.fas fa-star -->

                                    <span>3.8</span>
                                </div><!-- /.course-details__list-stars -->
                            </div><!-- /.course-details__list-content -->
                        </div><!-- /.course-details__list-item -->
                    </div><!-- /.course-details__list -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.course-details -->
@endsection
