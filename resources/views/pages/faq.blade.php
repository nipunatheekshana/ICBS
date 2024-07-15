@extends('layout.app')

@section('content')
    <section class="inner-banner">
        <div class="container">
            <ul class="list-unstyled thm-breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active"><a href="#">FAQ</a></li>
            </ul><!-- /.list-unstyled -->
            <h2 class="inner-banner__title">FAQ</h2><!-- /.inner-banner__title -->
        </div><!-- /.container -->
    </section><!-- /.inner-banner -->

    <section class="faq-one">
        <div class="container">
            <div class="row no-gutters">
                @foreach ($FAQs as $FAQ)
                    <div class="col-lg-6">
                        <div class="faq-one__single">
                            <div class="faq-one__icon">
                                <span>?</span>
                            </div><!-- /.faq-one__icon -->
                            <div class="faq-one__content">
                                <h2 class="faq-one__title">{{$FAQ->question}}?</h2>
                                <!-- /.faq-one__title -->
                                <p class="faq-one__text">{{$FAQ->answer}}</p><!-- /.faq-one__text -->
                            </div><!-- /.faq-one__content -->
                        </div><!-- /.faq-one__single -->
                    </div><!-- /.col-lg-6 -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.faq-one -->
@endsection
