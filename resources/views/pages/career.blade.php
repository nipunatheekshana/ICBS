@extends('layout.app')
@section('content')
    <section class="inner-banner">
        <div class="container">
            <ul class="list-unstyled thm-breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active"><a href="#">Career</a></li>
            </ul><!-- /.list-unstyled -->
            <h2 class="inner-banner__title">Join with Us</h2><!-- /.inner-banner__title -->
        </div><!-- /.container -->
    </section><!-- /.inner-banner -->
    <section class="become-teacher">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="become-teacher__content">
                        <h2 class="become-teacher__title">Be a part of our company</h2><!-- /.become-teacher__title -->
                        <p class="become-teacher__text">Welcome to ICBS International, where we empower individuals to
                            transform their
                            passions into meaningful careers. As a leading vocational and professional educational
                            institute, we are dedicated
                            to providing a dynamic and innovative learning environment that equips our students with the
                            skills and knowledge
                            needed to excel in their chosen fields.</p>
                        <!-- /.become-teacher__text -->
                        <h2 class="become-teacher__subtitle">Academic and Non-Academic Career Opportunities</h2>
                        <!-- /.become-teacher__subtitle -->
                        <p class="become-teacher__text">You all welcome on a diverse range of professional paths at our
                            institute, where
                            opportunities extend beyond traditional academic routes. </p>
                        <!-- /.become-teacher__text -->
                        <h2 class="become-teacher__subtitle">Apply Now</h2><!-- /.become-teacher__subtitle -->
                        <p class="become-teacher__text">Seize the opportunity to shape your future—take the first step
                            toward your aspirations by applying now.</p><!-- /.become-teacher__text -->

                    </div><!-- /.become-teacher__content -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="become-teacher__form">
                        <div class="become-teacher__form-top">
                            <h2 class="become-teacher__form-title">
                                Apply for your dreaming career
                            </h2><!-- /.become-teacher__form-title -->
                        </div><!-- /.become-teacher__top -->
                        <form action="assets/inc/sendemail.php" class="become-teacher__form-content contact-form-validated">
                            <input type="text" placeholder="Your Name" name="name">
                            <input type="text" placeholder="Email Address" name="email">
                            <input type="text" placeholder="Phone Number" name="phone">
                            <input type="text" placeholder="Comment" name="message">
                            <button type="submit" class="thm-btn become-teacher__form-btn">Apply For It</button>
                        </form><!-- /.become-teacher__form-content -->
                        <div class="result text-center"></div><!-- /.result -->
                    </div><!-- /.become-teacher__form -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.become-teacher -->
    <section class="team-one team-one__become-teacher">
        <div class="container">
            <div class="block-title text-center">
                <h2 class="block-title__title">Meet our best <br>
                    team members</h2><!-- /.block-title__title -->
            </div><!-- /.block-title -->



            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="team-one__single">
                        <div class="team-one__image">
                            <img src="{{asset("assets/FrontEnd/images/team-1-115.jpg")}}" alt="">
                        </div><!-- /.team-one__image -->
                        <div class="team-one__content">
                            <h2 class="team-one__name"><a href="team-details.html">Thanuja Dissanayake</a></h2>
                            <!-- /.team-one__name -->
                            <p class="team-one__designation">Head - school of IT & Curriculum development </p>
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
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="team-one__single">
                        <div class="team-one__image">
                            <img src="{{asset("assets/FrontEnd/images/team-1-222.jpg")}}" alt="">
                        </div><!-- /.team-one__image -->
                        <div class="team-one__content">
                            <h2 class="team-one__name"><a href="team-details.html">Nimesha Rajapakshe</a></h2>
                            <!-- /.team-one__name -->
                            <p class="team-one__designation">Head - School of Business and finance </p>
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
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="team-one__single">
                        <div class="team-one__image">
                            <img src="{{asset("assets/FrontEnd/images/team-1-333.jpg")}}" alt="">
                        </div><!-- /.team-one__image -->
                        <div class="team-one__content">
                            <h2 class="team-one__name"><a href="team-details.html">Dilan Semasinghe</a></h2>
                            <!-- /.team-one__name -->
                            <p class="team-one__designation">Head – Kids Department</p><!-- /.team-one__designation -->
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
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="team-one__single">
                        <div class="team-one__image">
                            <img src="{{asset("assets/FrontEnd/images/team-1-444.jpg")}}" alt="">
                        </div><!-- /.team-one__image -->
                        <div class="team-one__content">
                            <h2 class="team-one__name"><a href="team-details.html">Namasivayam Dushanthini</a></h2>
                            <!-- /.team-one__name -->
                            <p class="team-one__designation">Head - Language Department</p><!-- /.team-one__designation -->
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
            </div><!-- /.row -->




        </div><!-- /.container -->
    </section><!-- /.team-one team-page -->
    <section class="cta-one">
        <div class="container">
            <h2 class="cta-one__title">Fill form for free to regitser <br>
                yourself now</h2><!-- /.cta-one__title -->
            <div class="cta-one__btn-block">
                <a href="#" class="thm-btn cta-one__btn">Start Learning Now</a><!-- /.thm-btn -->
            </div><!-- /.cta-one__btn-block -->
        </div><!-- /.container -->
    </section><!-- /.cta-one -->
@endsection
