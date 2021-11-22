@extends('layouts.master')

@section('pageTitle','مدرسان')

@section('content')

    <section class="bgcolor p-top-100 p-bottom-40 rtl">
        <div class="shortcode_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="shortcode_module_title">
                            <div class="dashboard__title">
                                <h3>
                                    مشخصات مدرسین
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center justify-content-center">
                    @forelse($authors as $author)
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single">
                            <figure>
                                <img src="{{$author->avatar}}" alt="" class="img-fluid rounded-circle">
                                <figcaption>
                                    <h5>
                                        {{$author->name}}
                                    </h5>
                                    <span class="member-title">
                                        مدرس
                                    </span>
                                    <ul class="list-unstyled team-social">
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-envelope"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-facebook"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-instagram"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                        @empty

                    @endforelse
                </div>
            </div>

        </div>
    </section>

@endsection
