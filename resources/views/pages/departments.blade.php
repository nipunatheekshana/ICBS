@extends('layout.app')
@section('content')
    <section class="inner-banner">
        <div class="container">
            <ul class="list-unstyled thm-breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active"><a href="#">Department</a></li>
            </ul><!-- /.list-unstyled -->
            <h2 class="inner-banner__title">Departments</h2><!-- /.inner-banner__title -->
        </div><!-- /.container -->
    </section><!-- /.inner-banner -->
    <section class="pricing-one pricing-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="pricing-one__single">
                        <div class="pricing-one__inner">
                            <h4 class="pricing-one__price">Information Technology</h4><!-- /.pricing-one__price -->
                            <p class="pricing-one__name">Learn More</p><!-- /.pricing-one__name -->
                            <!--
                            <ul class="pricing-one__list list-unstyled">
                                <li>3 Full Courses</li>
                                <li>Lifetime free support</li>
                                <li>Upgrate options</li>
                                <li>9 Days Time</li>
                            </ul>
                             -->
                            <a href="courseslist-IT.html" class="thm-btn pricing-one__btn">View
                                Courses</a><!-- /.thm-btn -->
                            <p class="pricing-one__tag-line">Empowering Innovation through Technology!</p>
                            <!-- /.pricing-one__tag-line -->
                        </div><!-- /.pricing-one__inner -->
                    </div><!-- /.pricing-one__single -->
                </div><!-- /.col-lg-4 -->

                <div class="col-lg-6">
                    <div class="pricing-one__single">
                        <div class="pricing-one__inner">
                            <h2 class="pricing-one__price">Business Management</h2><!-- /.pricing-one__price -->
                            <p class="pricing-one__name">Learn More</p><!-- /.pricing-one__name -->

                            <a href="courseslist-bm.html" class="thm-btn pricing-one__btn">View
                                Courses</a><!-- /.thm-btn -->
                            <p class="pricing-one__tag-line">Elevate Your Enterprise!</p><!-- /.pricing-one__tag-line -->
                        </div><!-- /.pricing-one__inner -->
                    </div><!-- /.pricing-one__single -->
                </div><!-- /.col-lg-4 -->


                <div class="col-lg-6">
                    <div class="pricing-one__single">
                        <div class="pricing-one__inner">
                            <h2 class="pricing-one__price">Kids Department </h2><!-- /.pricing-one__price -->
                            <p class="pricing-one__name">Learn More</p><!-- /.pricing-one__name -->

                            <a href="courseslist-kids.html" class="thm-btn pricing-one__btn">View
                                Courses</a><!-- /.thm-btn -->
                            <p class="pricing-one__tag-line">Where Imagination Takes Flight!</p>
                            <!-- /.pricing-one__tag-line -->
                        </div><!-- /.pricing-one__inner -->
                    </div><!-- /.pricing-one__single -->
                </div><!-- /.col-lg-4 -->

                <div class="col-lg-6">
                    <div class="pricing-one__single">
                        <div class="pricing-one__inner">
                            <h2 class="pricing-one__price">Language Department </h2><!-- /.pricing-one__price -->
                            <p class="pricing-one__name">Learn More</p><!-- /.pricing-one__name -->

                            <a href="#" class="thm-btn pricing-one__btn">View Courses</a><!-- /.thm-btn -->
                            <p class="pricing-one__tag-line">Unlocking Worlds Through Words!</p>
                            <!-- /.pricing-one__tag-line -->
                        </div><!-- /.pricing-one__inner -->
                    </div><!-- /.pricing-one__single -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.pricing-one pricing-page -->
    <section class="cta-one">
        <div class="container">
            <h2 class="cta-one__title">Fill form for quick registration<br>
                yourself now</h2><!-- /.cta-one__title -->
            <div class="cta-one__btn-block">
                <a href="join.html" class="thm-btn cta-one__btn">Start Learning Now</a><!-- /.thm-btn -->
            </div><!-- /.cta-one__btn-block -->
        </div><!-- /.container -->
    </section><!-- /.cta-one -->
@endsection
