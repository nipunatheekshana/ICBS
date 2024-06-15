@extends('layout.app')
@section('content')
    <section class="inner-banner">
        <div class="container">
            <ul class="list-unstyled thm-breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active"><a href="#">Registration</a></li>
            </ul><!-- /.list-unstyled -->
            <h2 class="inner-banner__title">Inquire Now</h2><!-- /.inner-banner__title -->
        </div><!-- /.container -->
    </section><!-- /.inner-banner -->
    <br>
    <br>
    <br>
    </section><!-- /.video-two -->
    <section class="countdown-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="countdown-one__content">
                        <h2 class="countdown-one__title">Start your registration here.. </h2><!-- /.countdown-one__title -->
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
                        <form action="assets/inc/sendemail.php" class="become-teacher__form-content contact-form-validated">
                            <input type="text" placeholder="Your Name" name="name">
                            <input type="text" placeholder="Email Address" name="email">
                            <input type="text" placeholder="Phone Number" name="phone">
                            <input type="text" placeholder="Course" name="message">
                            <input type="text" placeholder="NIC/Passport" name="NIC">
                            <input type="date" placeholder="Date of Birth" name="dob">
                            <button type="submit" class="thm-btn become-teacher__form-btn">Inquiry Now</button>
                        </form><!-- /.become-teacher__form-content -->
                        <div class="result text-center"></div><!-- /.result -->
                    </div><!-- /.become-teacher__form -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.countdown-one -->
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
