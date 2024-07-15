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
                @foreach ($Courses as $course)
                    <div class="col-lg-4">
                        <div class="course-one__single">
                            <div class="course-one__image">
                                <img src="{{ asset('uploads/' . $course->image) }}" alt="">
                                <i class="far fa-heart"></i><!-- /.far fa-heart -->
                            </div><!-- /.course-one__image -->
                            <div class="course-one__content">
                                <a href="#" class="course-one__category">Software
                                    Industry</a><!-- /.course-one__category -->
                                <div class="course-one__admin">

                                    By <a href="">{{ $course->department->name }}</a>
                                </div><!-- /.course-one__admin -->
                                <h2 class="course-one__title"><a href="{{ route('coursesDetails', $course->id) }}">{{ $course->name }}</a></h2>
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
                                    <a href="course-details.html"><i class="far fa-clock"></i>{{ $course->duration }}</a>
                                    <a href="course-details.html"><i class="far fa-folder-open"></i> 8 </a>
                                    <a href="course-details.html"><i class="far fa-flag"></i> {{ $course->skill_level }}</a>
                                </div><!-- /.course-one__meta -->
                                <a href="{{ route('coursesDetails', $course->id) }}" class="course-one__link">See
                                    Preview</a><!-- /.course-one__link -->
                            </div><!-- /.course-one__content -->
                        </div><!-- /.course-one__single -->
                    </div><!-- /.col-lg-4 -->
                @endforeach


            </div><!-- /.row -->
            {{-- <div class="post-pagination">
                <a href="#"><i class="fa fa-angle-double-left"></i><!-- /.fa fa-angle-double-left --></a>
                <a class="active" href="courseslist-IT.html">1</a>
                <a href="courseslist-IT2.html">2</a>

                <a href="#"><i class="fa fa-angle-double-right"></i><!-- /.fa fa-angle-double-left --></a>
            </div><!-- /.post-pagination --> --}}

        </div><!-- /.container -->
    </section><!-- /.course-one course-page -->
@endsection
