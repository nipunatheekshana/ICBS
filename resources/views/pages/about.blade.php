@extends('layout.app')
@section('content')
    <section class="inner-banner">
        <div class="container">
            <ul class="list-unstyled thm-breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active"><a href="#">About</a></li>
            </ul><!-- /.list-unstyled -->
            <h2 class="inner-banner__title">About</h2><!-- /.inner-banner__title -->
        </div><!-- /.container -->
    </section><!-- /.inner-banner -->
    <section class="about-one about-one__about-page">
        <img src="{{ asset('assets/images/circle-stripe.png') }}" class="about-one__circle" alt="">
        <div class="container text-center">
            <div class="block-title text-center">
                <h2 class="block-title__title">Let’s do study with <br>
                    expert teachers</h2><!-- /.block-title__title -->
            </div><!-- /.block-title -->
            <div class="about-one__img">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/images/about-2-11.jpg') }}" alt="">
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/images/about-2-22.jpg') }}" alt="">
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="about-one__review">
                    <p class="about-one__review-count counter">88750</p><!-- /.about-one__review-count -->
                    <div class="about-one__review-stars">
                        <i class="fas fa-star"></i><!-- /.fa fa-star -->
                        <i class="fas fa-star"></i><!-- /.fa fa-star -->
                        <i class="fas fa-star"></i><!-- /.fa fa-star -->
                        <i class="fas fa-star"></i><!-- /.fa fa-star -->
                        <i class="fas fa-star"></i><!-- /.fa fa-star -->
                    </div><!-- /.about-one__stars -->
                    <p class="about-one__review-text">students loved us</p><!-- /.about-one__review-text -->
                </div><!-- /.about-one__review -->
            </div><!-- /.about-one__img -->
            <p class="about-one__text">ICBS International is a leading vocational and skill-based educational institute
                dedicated to
                equipping individuals with the practical expertise and knowledge needed to
                excel in their chosen fields. With a commitment to hands-on learning and
                industry-relevant training, we empower our students to thrive in today's
                competitive job market.
                <br>
            </p><!-- /.about-one__text -->
            <a href="#" class="thm-btn about-one__btn">Start Learning Now</a><!-- /.thm-btn -->
        </div><!-- /.container -->
    </section><!-- /.about-one about-one__about-page -->
    <section class="team-one  ">
        <div class="container">
            <div class="block-title text-center">
                <h2 class="block-title__title">Meet our team <br>
                </h2><!-- /.block-title__title -->
            </div><!-- /.block-title -->



            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="team-one__single">
                        <div class="team-one__image">
                            <img src="{{ asset('assets/images/team-1-115.jpg') }}" alt="">
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
                            <img src="{{ asset('assets/images/team-1-222.jpg') }}" alt="">
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
                            <img src="{{ asset('assets/images/team-1-333.jpg') }}" alt="">
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
                            <img src="{{ asset('assets/images/team-1-444.jpg') }}" alt="">
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
    <section class="video-one">
        <div class="container">
            <img src="{{ asset('assets/images/scratch-1-1.png') }}" class="video-one__scratch" alt="">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-end">
                    <div class="video-one__content">
                        <h2 class="video-one__title">Take a tour of <br>
                            ICBS International <br>
                        </h2><!-- /.video-one__title -->
                        <a href="#" class="thm-btn video-one__btn">Learn More</a><!-- /.thm-btn -->
                    </div><!-- /.video-one__content -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="video-one__img">
                        <video src="assets/images/ICBS-AboutUsVideo.mp4" alt="" height="400" controls autoplay>
                            <a href="#" class="video-one__popup"><i
                                    class="fas fa-play"></i><!-- /.fas fa-play --></a>
                    </div><!-- /.video-one__img -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.video-one -->



    <section class="brand-one ">
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


    <section class="testimonials-one  ">
        <div class="container">
            <div class="block-title text-center">
                <h2 class="block-title__title">What our students <br>
                    have to say</h2><!-- /.block-title__title -->
            </div><!-- /.block-title -->
            <div class="testimonials-one__carousel owl-carousel owl-theme">
                <div class="item">
                    <div class="testimonials-one__single">
                        <div class="testimonials-one__qoute">
                            <img src="{{ asset('assets/images/qoute-1-1.png') }}" alt="">
                        </div><!-- /.testimonials-one__qoute -->
                        <p class="testimonials-one__text">"The internship component was a game-changer. It gave me the
                            chance to apply what I learned and build a portfolio. This opened doors to exciting job
                            opportunities. I can't thank the program enough for jumpstarting my career in UX-UI
                            development."</p>
                        <!-- /.testimonials-one__text -->
                        <img src="{{ asset('assets/images/team-1-1111.jpg') }}" alt=""
                            class="testimonials-one__img">
                        <h3 class="testimonials-one__name">Vasana Vinodani</h3><!-- /.testimonials-one__name -->
                        <p class="testimonials-one__designation">Student</p><!-- /.testimonials-one__designation -->
                    </div><!-- /.testimonials-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="testimonials-one__single">
                        <div class="testimonials-one__qoute">
                            <img src="{{ asset('assets/images/qoute-1-1.png') }}" alt="">
                        </div><!-- /.testimonials-one__qoute -->
                        <p class="testimonials-one__text">“The UX-UI development course exceeded my expectations. The
                            hands-on approach and expert guidance helped me grasp complex concepts effortlessly. I now feel
                            confident in designing user-centric interfaces. Highly recommend!”.</p>
                        <!-- /.testimonials-one__text -->
                        <img src="{{ asset('assets/images/team-1-22.jpg') }}" alt=""
                            class="testimonials-one__img">
                        <h3 class="testimonials-one__name">Thyagi Sanjula</h3><!-- /.testimonials-one__name -->
                        <p class="testimonials-one__designation">Student</p><!-- /.testimonials-one__designation -->
                    </div><!-- /.testimonials-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="testimonials-one__single">
                        <div class="testimonials-one__qoute">
                            <img src="{{ asset('assets/images/qoute-1-1.png') }}" alt="">
                        </div><!-- /.testimonials-one__qoute -->
                        <p class="testimonials-one__text">"I can't speak highly enough about the Vocational Back-End
                            Development course! The emphasis on practical, hands-on learning was exactly what I needed to
                            transition into a career as a Back-End Developer.” .</p>

                        <!-- /.testimonials-one__text -->
                        <img src="{{ asset('assets/images/team-1-33.jpg') }}" alt=""
                            class="testimonials-one__img">
                        <h3 class="testimonials-one__name">Chanika Perera</h3><!-- /.testimonials-one__name -->
                        <p class="testimonials-one__designation">Student</p><!-- /.testimonials-one__designation -->
                    </div><!-- /.testimonials-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="testimonials-one__single">
                        <div class="testimonials-one__qoute">
                            <img src="{{ asset('assets/images/qoute-1-1.png') }}" alt="">
                        </div><!-- /.testimonials-one__qoute -->
                        <p class="testimonials-one__text">“I highly recommend the Vocational Back-End Development course!
                            This program exceeded my expectations in every way. The hands-on approach and practical focus
                            allowed me to quickly acquire valuable skills that are directly applicable in the industry.”.
                        </p>
                        <!-- /.testimonials-one__text -->
                        <img src="{{ asset('assets/images/team-1-44.jpg') }}" alt=""
                            class="testimonials-one__img">
                        <h3 class="testimonials-one__name">Dulaj Shaminda</h3><!-- /.testimonials-one__name -->
                        <p class="testimonials-one__designation">Student</p><!-- /.testimonials-one__designation -->
                    </div><!-- /.testimonials-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="testimonials-one__single">
                        <div class="testimonials-one__qoute">
                            <img src="{{ asset('assets/images/qoute-1-1.png') }}" alt="">
                        </div><!-- /.testimonials-one__qoute -->
                        <p class="testimonials-one__text">“Instructors provided excellent guidance and support throughout.
                            I now feel confident in my ability to tackle real-world development tasks. This course has
                            opened up a world of opportunities for me in the tech industry. Highly recommended!"</p>
                        <!-- /.testimonials-one__text -->
                        <img src="{{ asset('assets/images/team-1-55.jpg') }}" alt=""
                            class="testimonials-one__img">
                        <h3 class="testimonials-one__name">Buddika Dissanayake</h3><!-- /.testimonials-one__name -->
                        <p class="testimonials-one__designation">Student</p><!-- /.testimonials-one__designation -->
                    </div><!-- /.testimonials-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="testimonials-one__single">
                        <div class="testimonials-one__qoute">
                            <img src="{{ asset('assets/images/qoute-1-1.png') }}" alt="">
                        </div><!-- /.testimonials-one__qoute -->
                        <p class="testimonials-one__text">“I highly recommend the Vocational Back-End Development course!
                            This program exceeded my expectations in every way. The hands-on approach and practical focus
                            allowed me to quickly acquire valuable skills that are directly applicable in the industry.”</p>
                        <!-- /.testimonials-one__text -->
                        <img src="{{ asset('assets/images/team-1-66.jpg') }}" alt=""
                            class="testimonials-one__img">
                        <h3 class="testimonials-one__name">Lakshitha Bandara</h3><!-- /.testimonials-one__name -->
                        <p class="testimonials-one__designation">Student</p><!-- /.testimonials-one__designation -->
                    </div><!-- /.testimonials-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="testimonials-one__single">
                        <div class="testimonials-one__qoute">
                            <img src="{{ asset('assets/images/qoute-1-1.png') }}" alt="">
                        </div><!-- /.testimonials-one__qoute -->
                        <p class="testimonials-one__text">"I cannot recommend the Vocational Skill Diploma for Full-Stack
                            Developer course highly enough! This program has been a transformative experience for me. The
                            comprehensive curriculum and hands-on approach provided a solid foundation in both front-end and
                            back-end development."</p><!-- /.testimonials-one__text -->
                        <img src="{{ asset('assets/images/team-1-77.jpg') }}" alt=""
                            class="testimonials-one__img">
                        <h3 class="testimonials-one__name">Sanduni Madushani</h3><!-- /.testimonials-one__name -->
                        <p class="testimonials-one__designation">Student</p><!-- /.testimonials-one__designation -->
                    </div><!-- /.testimonials-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="testimonials-one__single">
                        <div class="testimonials-one__qoute">
                            <img src="{{ asset('assets/images/qoute-1-1.png') }}" alt="">
                        </div><!-- /.testimonials-one__qoute -->
                        <p class="testimonials-one__text">"Enrolling in the Vocational Skill Certificate for Stand-Alone
                            App Developer was a game-changer for me. The hands-on approach to learning and the comprehensive
                            curriculum provided a solid foundation in app development.”</p>
                        <!-- /.testimonials-one__text -->
                        <img src="{{ asset('assets/images/team-1-99.jpg') }}" alt=""
                            class="testimonials-one__img">
                        <h3 class="testimonials-one__name">Wero Santos</h3><!-- /.testimonials-one__name -->
                        <p class="testimonials-one__designation">Student</p><!-- /.testimonials-one__designation -->
                    </div><!-- /.testimonials-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="testimonials-one__single">
                        <div class="testimonials-one__qoute">
                            <img src="{{ asset('assets/images/qoute-1-1.png') }}" alt="">
                        </div><!-- /.testimonials-one__qoute -->
                        <p class="testimonials-one__text">"The Skill Certificate for Computer Programming - Level 02 is an
                            excellent resource for kids interested in coding. The course provides a well-structured
                            progression of skills, starting from the basics and gradually advancing to more challenging
                            concepts. “</p>
                        <!-- /.testimonials-one__text -->
                        <img src="{{ asset('assets/images/team-1-1414.jpg') }}" alt=""
                            class="testimonials-one__img">
                        <h3 class="testimonials-one__name">Madhu Madushani</h3><!-- /.testimonials-one__name -->
                        <p class="testimonials-one__designation">Student</p><!-- /.testimonials-one__designation -->
                    </div><!-- /.testimonials-one__single -->
                </div><!-- /.item -->
            </div><!-- /.testimonials-one__carousel owl-carousel owl-theme -->
        </div><!-- /.container -->
    </section><!-- /.testimonials-one -->
    <section class="cta-one cta-one__home-one" style="background-image: url(assets/images/cta-bg-1-1.jpg);">
        <div class="container">
            <h2 class="cta-one__title">ICBS International's one & only <br>
                mission is to extend <br>
                your knowledge base</h2><!-- /.cta-one__title -->
            <div class="cta-one__btn-block">
                <a href="#" class="thm-btn cta-one__btn">Learn More</a><!-- /.thm-btn -->
            </div><!-- /.cta-one__btn-block -->
        </div><!-- /.container -->
    </section><!-- /.cta-one -->
@endsection
