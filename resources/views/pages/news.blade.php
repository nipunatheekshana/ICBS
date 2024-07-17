@extends('layout.app')
@section('content')
    <section class="inner-banner">
        <div class="container">
            <ul class="list-unstyled thm-breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active"><a href="#">Our news</a></li>
            </ul><!-- /.list-unstyled -->
            <h2 class="inner-banner__title">Our news</h2><!-- /.inner-banner__title -->
        </div><!-- /.container -->
    </section><!-- /.inner-banner -->
    <section class="blog-one blog-page">
        <div class="container">
            <div class="row">
                @foreach ($Newss as $News)
                    <div class="col-lg-4">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="{{ asset('uploads/' . $News->image) }}" alt="">

                                <!-- /.kipso-icon-plus-symbol --></a>
                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content text-center">
                                <div class="blog-one__meta">
                                    <a data-toggle="tooltip" data-placement="top" title="{{ $News->created_at->diffForHumans()}}" href="#"><i
                                            class="fa fa-calendar-alt"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="No Comments" href="#"><i
                                            class="fa fa-comments"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="Posted By Admin" href="#"><i
                                            class="fa fa-user"></i></a>
                                </div><!-- /.blog-one__meta -->
                                <h2 class="blog-one__title"><a href="#">{{ $News->title }}</a>
                                </h2><!-- /.blog-one__title -->
                                <p class="blog-one__text">"{{ $News->description }}"</p><!-- /.blog-one__text -->
                                <a href="{{ route('newsDetails', $News->id) }}" class="blog-one__link">Read More</a><!-- /.blog-one__link -->
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                    </div><!-- /.col-lg-4 -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-one blog-page -->
@endsection
