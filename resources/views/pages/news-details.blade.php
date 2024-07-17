@extends('layout.app')
@section('content')
    <section class="inner-banner">
        <div class="container">
            <ul class="list-unstyled thm-breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active"><a href="#">News Details</a></li>
            </ul><!-- /.list-unstyled -->
            <h2 class="inner-banner__title">News Details</h2><!-- /.inner-banner__title -->
        </div><!-- /.container -->
    </section><!-- /.inner-banner -->
    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-one__single">
                        <div class="blog-one__image">
                            <img src="{{ asset('uploads/' . $News->image) }}" alt="">

                        </div><!-- /.blog-one__image -->
                        <div class="blog-one__content text-center">
                            <div class="blog-one__meta">
                                <a data-toggle="tooltip" data-placement="top" title="Posted On Jan 19" href="#"><i
                                        class="fa fa-calendar-alt"></i></a>
                                <a data-toggle="tooltip" data-placement="top" title="No Comments" href="#"><i
                                        class="fa fa-comments"></i></a>
                                <a data-toggle="tooltip" data-placement="top" title="Posted By Admin" href="#"><i
                                        class="fa fa-user"></i></a>
                            </div><!-- /.blog-one__meta -->
                            <h2 class="blog-one__title">{{ $News->title }}</h2><!-- /.blog-one__title -->
                            <p class="blog-one__text">{{ $News->description }}.</p><!-- /.blog-one__text -->
                        </div><!-- /.blog-one__content -->
                    </div><!-- /.blog-one__single -->


                </div><!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">Latest Posts</h3><!-- /.sidebar__title -->
                            <div class="sidebar__post-wrap">
                                @foreach ($recentNewss as $recentNews)
                                    <div class="sidebar__post__single">
                                        <div class="sidebar__post-image">
                                            <div class="inner-block"><img src="{{ asset('uploads/' . $recentNews->image) }}"
                                                    alt="Awesome Image" /></div>
                                            <!-- /.inner-block -->
                                        </div><!-- /.sidebar__post-image -->
                                        <div class="sidebar__post-content">
                                            <h4 class="sidebar__post-title"><a href="{{ route('newsDetails', $recentNews->id) }}">{{ $recentNews->title }}</a></h4>
                                            <!-- /.sidebar__post-title -->
                                        </div><!-- /.sidebar__post-content -->
                                    </div><!-- /.sidebar__post__single -->
                                @endforeach


                            </div><!-- /.sidebar__post-wrap -->
                        </div><!-- /.sidebar__single -->

                    </div><!-- /.sidebar -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-details -->
@endsection
