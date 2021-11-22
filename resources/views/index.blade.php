@extends('layouts.master')

@section('pageTitle','صفحه نخست')

@section('content')
    <section class="hero-area bgimage rtl">
        <div class="bg_image_holder">
            <img src="/images/hero-image01.png" alt="background-image">
        </div>

        <div class="hero-content content_above">

            <div class="content-wrapper">

                <div class="container">

                    <div class="row">

                        <div class="col-md-12">
                            <div class="hero__content__title">
                                <p class="tagline">آموزش و دوره ای که میخواهید را جستجو کنید</p>
                            </div>

                            <div class="search-area">
                                <div class="row">
                                    <div class="col-md-10 offset-md-1">

                                        <div class="search_box">
                                            <form method="post" action="{{route('site.search')}}">
                                                @csrf
                                                <input type="text" name="q" class="text_field w-100"
                                                       placeholder="نام محصول را جستجو کن ...">
                                                <button type="submit" class="search-btn btn--lg btn-primary">بیاب
                                                </button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <section class="latest-product section--padding rtl">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="section-title">
                        <h1>دوره ها</h1>
                        <p>
                            انواع دوره و پکیج آموزشی برای یادگیری بیشتر و بیشتر!
                        </p>
                    </div>
                </div>

                <div class="col-md-12 product-list">
                    <ul class="nav" id="lp-tab" role="tablist">

                        @forelse($categories as $category)
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('site.index',['cat'=>$category->slug])}}">
                                    {{$category->title}}
                                </a>
                            </li>
                        @empty

                        @endforelse
                    </ul>
                    <div class="row">

                        @forelse($courses as $course)
                            <div class="col-lg-4 col-md-6">
                                <div class="product-single latest-single">
                                    <div class="product-thumb">
                                        <figure>
                                            <img src="{{$course->thumbnail}}" alt="" class="img-fluid">
                                            <figcaption>
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a href="{{route('courses.show',$course->slug)}}">پیش نمایش </a>
                                                    </li>
                                                </ul>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <div class="product-excerpt">
                                        <h5>
                                            <a href="{{route('courses.show',$course->slug)}}"> {{$course->title}} </a>
                                        </h5>
                                        <ul class="titlebtm">
                                            <li>
                                                <img class="auth-img" src="{{$course->author->avatar}}" alt="author image">
                                                <p>
                                                    <a href="{{route('courses.authors')}}"> {{$course->author->name}} </a>
                                                </p>
                                            </li>
                                            <li class="product_cat">
                                                در
                                                <a href="{{route('site.index',['cat'=>$course->category->slug])}}"> {{$course->category->title}} </a>
                                            </li>
                                        </ul>
                                        <ul class="product-facts clearfix rtl">
                                            <li class="price">{{number_format($course->price)}} تومان</li>
                                        </ul>
                                    </div>

                                </div>

                            </div>
                        @empty

                        @endforelse
                    </div>
                    <div class="text-center m-top-20">
                        <a href="{{route('site.index')}}" class="btn btn--lg btn-primary">نمایش همه</a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="cta rtl">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="section-title">
                        <h1>
                            همین الان به اوج موفقیت برسید!
                        </h1>
                    </div>
                </div>

                <div class="col-md-5 cta-single">
                    <h3>مدرس شوید</h3>
                    <p>
                        در چیزی تخصص دارید؟ به ما بپیوندید و به علاقه مندان تدریس کنید!
                    </p>
                    <a href="index.htm" class="btn btn--lg btn-primary">
                        ثبت نام
                    </a>
                </div>
                <div class="col-md-2 cta-divider">
                    <span>یا</span>
                </div>
                <div class="col-md-5 cta-single">
                    <h3>دانشجو شوید</h3>

                    <p>
                        از دوره ها و پکیج های آموزشی استفاده کنید
                    </p>
                    <a href="{{route('register')}}" class="btn btn--lg btn-secondary">
                        ثبت نام
                    </a>
                </div>
            </div>
        </div>
    </section>


@endsection
