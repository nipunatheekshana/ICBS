@extends('layout.app')
@section('content')
    <section class="inner-banner">
        <div class="container">
            <ul class="list-unstyled thm-breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active"><a href="#">Teacher Details</a></li>
            </ul><!-- /.list-unstyled -->
            <h2 class="inner-banner__title">{{ $Teacher->name }}</h2><!-- /.inner-banner__title -->
        </div><!-- /.container -->
    </section><!-- /.inner-banner -->
    <section class="team-details">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="team-details__content">
                        <h2 class="team-details__title">Read my story</h2><!-- /.team-details__title -->
                        <p class="team-details__text">{{ $Teacher->story }}</p><!-- /.team-details__text -->

                    </div><!-- /.team-details__content -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="team-one__single">
                        <div class="team-one__image">
                            <img src="{{ asset('uploads/' . $Teacher->image) }}" alt="">
                        </div><!-- /.team-one__image -->
                        <div class="team-one__content">
                            <h2 class="team-one__name"><a href="team-details.html">{{ $Teacher->name }}</a></h2>
                            <!-- /.team-one__name -->
                            <p class="team-one__designation">{{ $Teacher->designation }}</p><!-- /.team-one__designation -->

                        </div><!-- /.team-one__content -->
                        <div class="team-one__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div><!-- /.team-one__social -->
                    </div><!-- /.team-one__single -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.team-details -->
    {{-- <section class="course-one__top-title thm-gray-bg">
        <div class="container">
            <div class="block-title mb-0">
                <h2 class="block-title__title">Courses i am <br>
                    offering</h2><!-- /.block-title__title -->
            </div><!-- /.block-title -->
        </div><!-- /.container -->
    </section><!-- /.course-one__top-title --> --}}

    {{-- <section class="course-one course-one__teacher-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="course-one__single">
                        <div class="course-one__image">
                            <img src="assets/images/course-1-1.jpg" alt="">
                            <i class="far fa-heart"></i><!-- /.far fa-heart -->
                        </div><!-- /.course-one__image -->
                        <div class="course-one__content">
                            <a href="#" class="course-one__category">development</a><!-- /.course-one__category -->
                            <div class="course-one__admin">
                                <img src="assets/images/team-1-1.jpg" alt="">
                                by <a href="teacher-details.html">Lou Guerrero</a>
                            </div><!-- /.course-one__admin -->
                            <h2 class="course-one__title"><a href="course-details.html">New react bootcamp</a></h2>
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
                                <a href="course-details.html"><i class="far fa-clock"></i> 10 Hours</a>
                                <a href="course-details.html"><i class="far fa-folder-open"></i> 6 Lectures</a>
                                <a href="course-details.html">$18</a>
                            </div><!-- /.course-one__meta -->
                            <a href="#" class="course-one__link">See Preview</a><!-- /.course-one__link -->
                        </div><!-- /.course-one__content -->
                    </div><!-- /.course-one__single -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="course-one__single">
                        <div class="course-one__image">
                            <img src="assets/images/course-1-2.jpg" alt="">
                            <i class="far fa-heart"></i><!-- /.far fa-heart -->
                        </div><!-- /.course-one__image -->
                        <div class="course-one__content">
                            <a href="#" class="course-one__category">It &
                                Software</a><!-- /.course-one__category -->
                            <div class="course-one__admin">
                                <img src="assets/images/team-1-2.jpg" alt="">
                                by <a href="teacher-details.html">Cora Diaz</a>
                            </div><!-- /.course-one__admin -->
                            <h2 class="course-one__title"><a href="course-details.html">Improve editing skills</a></h2>
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
                                <a href="course-details.html"><i class="far fa-clock"></i> 10 Hours</a>
                                <a href="course-details.html"><i class="far fa-folder-open"></i> 6 Lectures</a>
                                <a href="course-details.html">$18</a>
                            </div><!-- /.course-one__meta -->
                            <a href="#" class="course-one__link">See Preview</a><!-- /.course-one__link -->
                        </div><!-- /.course-one__content -->
                    </div><!-- /.course-one__single -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="course-one__single">
                        <div class="course-one__image">
                            <img src="assets/images/course-1-3.jpg" alt="">
                            <i class="far fa-heart"></i><!-- /.far fa-heart -->
                        </div><!-- /.course-one__image -->
                        <div class="course-one__content">
                            <a href="#" class="course-one__category">marketing</a><!-- /.course-one__category -->
                            <div class="course-one__admin">
                                <img src="{{ asset('uploads/' . $Teacher->image) }}" alt="">
                                by <a href="teacher-details.html">Ruth Becker</a>
                            </div><!-- /.course-one__admin -->
                            <h2 class="course-one__title"><a href="course-details.html">Marketing strategies</a></h2>
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
                                <a href="course-details.html"><i class="far fa-clock"></i> 10 Hours</a>
                                <a href="course-details.html"><i class="far fa-folder-open"></i> 6 Lectures</a>
                                <a href="course-details.html">$18</a>
                            </div><!-- /.course-one__meta -->
                            <a href="#" class="course-one__link">See Preview</a><!-- /.course-one__link -->
                        </div><!-- /.course-one__content -->
                    </div><!-- /.course-one__single -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.course-one__carousel -->
        </div><!-- /.container -->
    </section><!-- /.course-one course-page --> --}}
@endsection
