@extends('layout.app')
@section('content')
    <section class="inner-banner">
        <div class="container">
            <ul class="list-unstyled thm-breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active"><a href="#">Contact</a></li>
            </ul><!-- /.list-unstyled -->
            <h2 class="inner-banner__title">Contact us today!</h2><!-- /.inner-banner__title -->
        </div><!-- /.container -->
    </section><!-- /.inner-banner -->
    <section class="contact-info-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info-one__single wow fadeInDown" data-wow-duration="1500ms">
                        <div class="contact-info-one__icon"><i class="kipso-icon-email"></i><!-- /.kipso-icon-manager -->
                        </div><!-- /.contact-info-one__icon -->
                        <h2 class="contact-info-one__title">Visit our Online Campus </h2><!-- /.contact-info-one__title -->
                        <p class="contact-info-one__text">http://www.icbsinternational.com </p>
                        <!-- /.contact-info-one__text -->
                    </div><!-- /.contact-info-one__single -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="contact-info-one__single wow fadeInUp" data-wow-duration="1500ms">
                        <div class="contact-info-one__icon"><i class="kipso-icon-email"></i>
                            <!-- /.kipso-icon-manager -->
                        </div><!-- /.contact-info-one__icon -->
                        <h2 class="contact-info-one__title">Send an Email</h2><!-- /.contact-info-one__title -->
                        <p class="contact-info-one__text">info@icbsinternational.com<br>
                        </p><!-- /.contact-info-one__text -->
                    </div><!-- /.contact-info-one__single -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="contact-info-one__single wow fadeInDown" data-wow-duration="1500ms">
                        <div class="contact-info-one__icon"><i class="kipso-icon-contact"></i><!-- /.kipso-icon-manager -->
                        </div><!-- /.contact-info-one__icon -->
                        <h2 class="contact-info-one__title">Call us today</h2><!-- /.contact-info-one__title -->
                        <p class="contact-info-one__text">+94 75 5 414 751 <br>
                            <br> &nbsp;
                        </p><!-- /.contact-info-one__text -->
                    </div><!-- /.contact-info-one__single -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact-info-one -->
    <section class="contact-one">
        <div class="container">
            <h2 class="contact-one__title text-center">Get in touch <br>
                with us</h2><!-- /.contact-one__title -->
            <form action="assets/inc/sendemail.php" class="contact-one__form contact-form-validated">
                <div class="row low-gutters">
                    <div class="col-lg-6">
                        <input type="text" name="name" placeholder="Your Name">
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <input type="text" placeholder="Email Address" name="email">
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-12">
                        <textarea placeholder="Write Message" name="message"></textarea>
                        <div class="text-center">
                            <button type="submit" class="contact-one__btn thm-btn">Submit Comment</button>
                        </div><!-- /.text-center -->
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
            </form><!-- /.contact-one__form -->
            <div class="result text-center"></div><!-- /.result -->
        </div><!-- /.container -->
    </section><!-- /.contact-one -->

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.2862878919636!2d79.99603551027539!3d7.092776416257283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2fb8d4f0399e5%3A0x6dab901d4c744608!2sWard%20City%20Shopping%20Complex!5e0!3m2!1sen!2slk!4v1707633516685!5m2!1sen!2slk"
        class="google-map__contact" allowfullscreen></iframe>
@endsection
