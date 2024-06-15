@extends('layout.app')
@section('content')
    <section class="inner-banner">
        <div class="container">
            <ul class="list-unstyled thm-breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active"><a href="#">Department</a></li>
                <li class="active"><a href="#">Courses</a></li>
            </ul><!-- /.list-unstyled -->
            <h2 class="inner-banner__title">Vocational Skill Programs</h2><!-- /.inner-banner__title -->
        </div><!-- /.container -->
    </section><!-- /.inner-banner -->
    <section class="course-one course-page">
        <div class="container">
            <div class="row">


                <div class="col-lg-4">
                    <div class="course-one__single">
                        <div class="course-one__image">
                            <img src="{{ asset('assets/images/course-1-99.jpg') }}" alt="">
                            <i class="far fa-heart"></i><!-- /.far fa-heart -->
                        </div><!-- /.course-one__image -->
                        <div class="course-one__content">
                            <a href="#" class="course-one__category">Business &
                                Accounting</a><!-- /.course-one__category -->
                            <div class="course-one__admin">

                                By <a href="courseslist-bm.html">Business Management</a>
                            </div><!-- /.course-one__admin -->
                            <h2 class="course-one__title"><a href="course-details-09.html">Vocational Skill Certificate for
                                    Computerized Accounting</a></h2>
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
                                <a href="course-details.html"><i class="far fa-clock"></i>12 Months</a>
                                <a href="course-details.html"><i class="far fa-folder-open"></i> 16 Lectures</a>
                                <a href="course-details.html"><i class="far fa-flag"></i> Level 02</a>
                            </div><!-- /.course-one__meta -->
                            <a href="course-details-09.html" class="course-one__link">See
                                Preview</a><!-- /.course-one__link -->
                        </div><!-- /.course-one__content -->
                    </div><!-- /.course-one__single -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="course-one__single">
                        <div class="course-one__image">
                            <img src="{{ asset('assets/images/course-1-1010.jpg') }}" alt="">
                            <i class="far fa-heart"></i><!-- /.far fa-heart -->
                        </div><!-- /.course-one__image -->
                        <div class="course-one__content">
                            <a href="#" class="course-one__category">Business &
                                Marketing</a><!-- /.course-one__category -->
                            <div class="course-one__admin">

                                By <a href="">Business Department</a>
                            </div><!-- /.course-one__admin -->
                            <h2 class="course-one__title"><a href="course-details-16.html">Vocational Skill Certificate for
                                    Digital Marketing</a></h2>
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
                                <a href="course-details.html"><i class="far fa-clock"></i>6 Months</a>
                                <a href="course-details.html"><i class="far fa-folder-open"></i> 6 Lectures</a>
                                <a href="course-details.html"><i class="far fa-flag"></i> Level 01</a>
                            </div><!-- /.course-one__meta -->
                            <a href="course-details-16.html" class="course-one__link">See
                                Preview</a><!-- /.course-one__link -->
                        </div><!-- /.course-one__content -->
                    </div><!-- /.course-one__single -->
                </div><!-- /.col-lg-4 -->



            </div><!-- /.row -->
            <div class="post-pagination">
                <a href="#"><i class="fa fa-angle-double-left"></i><!-- /.fa fa-angle-double-left --></a>
                <a class="active" href="#">1</a>

                <a href="#"><i class="fa fa-angle-double-right"></i><!-- /.fa fa-angle-double-left --></a>
            </div><!-- /.post-pagination -->

        </div><!-- /.container -->
    </section><!-- /.course-one course-page -->
@endsection
