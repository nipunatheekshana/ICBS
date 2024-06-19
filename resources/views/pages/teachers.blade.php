@extends('layout.app')
@section('content')
    <section class="inner-banner">
        <div class="container">
            <ul class="list-unstyled thm-breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active"><a href="#">Teachers</a></li>
            </ul><!-- /.list-unstyled -->
            <h2 class="inner-banner__title">Teachers</h2><!-- /.inner-banner__title -->
        </div><!-- /.container -->
    </section><!-- /.inner-banner -->
    <section class="team-one team-page">
        <div class="container">
            <div class="row">

                @foreach ($Teachers as $teacher)
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="team-one__single">
                        <div class="team-one__image">
                            <img src="{{ asset('uploads/' . $teacher->image) }}"  alt="">
                        </div><!-- /.team-one__image -->
                        <div class="team-one__content">
                            <h2 class="team-one__name"><a href="{{ route('teacher.loadTeacher', $teacher->id) }}">{{ $teacher->name }}</a></h2>
                            <!-- /.team-one__name -->
                            <p class="team-one__designation">{{ $teacher->designation }} </p>
                            <!-- /.team-one__designation -->
                            <p class="team-one__text"></p>
                            <!-- /.team-one__text -->
                        </div><!-- /.team-one__content -->
                        <div class="team-one__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div><!-- /.team-one__social -->
                    </div><!-- /.team-one__single -->
                </div><!-- /.col-lg-3 -->
            @endforeach

            </div><!-- /.container -->
    </section><!-- /.team-one team-page -->
    <div class="cta-two">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-6 thm-base-bg">
                    <div class="cta-two__single">
                        <div class="cta-two__icon">
                            <span><i class="kipso-icon-professor"></i><!-- /.kipso-icon-professor --></span>
                        </div><!-- /.cta-two__icon -->
                        <div class="cta-two__content">
                            <h2 class="cta-two__title">Become an teacher</h2><!-- /.cta-two__title -->
                            <p class="cta-two__text">"Embark on the rewarding journey of becoming a teacher, where you can
                                inspire and shape the minds of future generations."</p><!-- /.cta-two__text -->
                            <a href="#" class="thm-btn cta-two__btn">Start
                                Teaching</a><!-- /.thm-btn cta-two__btn -->
                        </div><!-- /.cta-two__content -->
                    </div><!-- /.cta-two__single -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6 thm-base-bg-2">
                    <div class="cta-two__single">
                        <div class="cta-two__icon">
                            <span><i class="kipso-icon-knowledge"></i><!-- /.kipso-icon-knowledge --></span>
                        </div><!-- /.cta-two__icon -->
                        <div class="cta-two__content">
                            <h2 class="cta-two__title">Join our community</h2><!-- /.cta-two__title -->
                            <p class="cta-two__text">"Come be a part of our vibrant community and share in the collective
                                experience of connection, support, and shared goals."</p><!-- /.cta-two__text -->
                            <a href="#" class="thm-btn cta-two__btn">Start
                                Learning</a><!-- /.thm-btn cta-two__btn -->
                        </div><!-- /.cta-two__content -->
                    </div><!-- /.cta-two__single -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row no-gutters -->
        </div><!-- /.container-fluid -->
    </div><!-- /.cta-two -->
@endsection
