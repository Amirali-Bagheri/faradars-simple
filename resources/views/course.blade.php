@extends('layouts.master')

@section('pageTitle','دوره ' . $course->title)

@section('content')

    <section class="single-product-desc rtl">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="item-preview">
                        <img alt="" class="img-fluid w-100" src="{{$course->thumbnail}}">
                        <div class="item__preview-thumb">
                            <div class="item-action border-none">
                                <div class="action-btns">
                                    <a class="btn btn--lg btn-primary" href="#">پیش نمایش</a>
                                    <a class="btn btn--lg btn--icon btn btn-outline-danger" href="#">
                                        <span class="fa fa-heart"></span>افزودن به علاقه مندی ها</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item-info">
                        <div class="item-navigation">
                            <ul class="nav nav-tabs" role="tablist">
                                <li>
                                    <a aria-controls="product-details" aria-selected="true" class="active"
                                       data-toggle="tab" href="#product-details" id="tab1" role="tab">
                                        <span class="fa fa-file"></span> جزئیات دوره</a>
                                </li>
                                <li>
                                    <a aria-controls="product-comment" data-toggle="tab"
                                       href="#product-comment"
                                       id="tab2" role="tab">
                                        <span class="fa fa-comments"></span> دیدگاه ها </a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content">
                            <div aria-labelledby="tab1" class="fade show tab-pane product-tab active" id="product-details"
                                 role="tabpanel">
                                <div class="tab-content-wrapper">
                                    <h3>جزئیات محصول</h3>
                                    <p>
                                        {!! html_entity_decode($course->description) !!}
                                    </p>
                                </div>
                            </div>

                            <div aria-labelledby="tab2" class="fade tab-pane product-tab" id="product-comment" role="tabpanel">
                                <div class="thread">

                                    <ul class="media-list thread-list">
                                        <li class="single-thread">
                                            <div class="media">

                                                <div class="media-body">
                                                    <div>
                                                        <div class="media-heading">
                                                            <a href="author.htm">
                                                                <h4>تم فا</h4>
                                                            </a>
                                                            <span>9 ساعت قبل</span>
                                                        </div>
                                                        <span class="comment-tag buyer"> خریدار </span>
                                                        <a class="reply-link" href="#">جواب دادن</a>
                                                    </div>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                        طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                                                        که لازم است. </p>
                                                </div>
                                            </div>

                                            <ul class="children">
                                                <li class="single-thread depth-2">
                                                    <div class="media">

                                                        <div class="media-body">
                                                            <div class="media-heading">
                                                                <h4>تم فارسی</h4>
                                                                <span>6 ساعت قبل</span>
                                                            </div>
                                                            <span class="comment-tag author">نویسنده</span>
                                                            <p>برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                                                                ابزارهای کاربردی می باشد </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="single-thread depth-2">
                                                    <div class="media">

                                                        <div class="media-body">
                                                            <div class="media-heading">
                                                                <h4>تم فا</h4>
                                                                <span>9 ساعت قبل</span>
                                                            </div>
                                                            <span class="comment-tag buyer"> خریدار </span>
                                                            <p>برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                                                                ابزارهای کاربردی می باشد </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>

                                            <div class="media depth-2 reply-comment">

                                                <div class="media-body">
                                                    <form action="#" class="comment-reply-form">
														<textarea class="bla" name="reply-comment"
                                                                  placeholder="ارسال دیدگاه"></textarea>
                                                        <button class="btn btn--md btn-primary">ارسال</button>
                                                    </form>
                                                </div>
                                            </div>

                                        </li>
                                    </ul>

                                    <div class="comment-form-area">
                                        <h4>ارسال نظر</h4>

                                        <div class="media comment-form">
                                            <div class="media-body">
                                                <form action="#" class="comment-reply-form">
                                                    <textarea name="reply-comment" placeholder="متن دیدگاه شما"></textarea>
                                                    <button class="btn btn--sm btn-primary">ارسال</button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-12">
                    <aside class="sidebar sidebar--single-product">
                        <div class="sidebar-card card-pricing">
                            <div class="price border-none">
                                <h1>
                                    <span>{{number_format($course->price)}}</span>
                                    <sup> تومان </sup>
                                </h1>
                            </div>
                            <div class="purchase-button">
                                <a class="btn btn--lg btn-primary" href="#">خرید و دانلود</a>
                            </div>

                        </div>

                        <div class="sidebar-card card--product-infos">
                            <div class="card-title">
                                <h4>اطلاعات دوره</h4>
                            </div>
                            <ul class="infos">
                                <li>
                                    <p class="data-label">تاریخ انتشار</p>
                                    <p class="info">18 آبان 1397</p>
                                </li>
                                <li>
                                    <p class="data-label">به روز شده در</p>
                                    <p class="info">19 آبان 1397 </p>
                                </li>
                                <li>
                                    <p class="data-label">نسخه</p>
                                    <p class="info">1.2</p>
                                </li>
                                <li>
                                    <p class="data-label">دسته بندی</p>
                                    <p class="info">شرکتی ، خلاقانه</p>
                                </li>
                                <li>
                                    <p class="data-label">طراحی</p>
                                    <p class="info">واکنشگرا</p>
                                </li>
                                <li>
                                    <p class="data-label">پشتیبانی رتینا</p>
                                    <p class="info">بله</p>
                                </li>
                                <li>
                                    <p class="data-label">فایل های همراه</p>
                                    <p class="info">Html, CSS, JavaScript</p>
                                </li>
                                <li>
                                    <p class="data-label">مرورگرهای پشتیبانی شده</p>
                                    <p class="info">IE10, IE11, Firefox, Safari, Opera, Chrome5</p>
                                </li>
                                <li>
                                    <p class="data-label">بوت استرپ</p>
                                    <p class="info">Bootstrap 4</p>
                                </li>
                                <li>
                                    <p class="data-label">برچسب ها</p>
                                    <p class="info">
                                        <a href="#">شرکتس</a>,
                                        <a href="#">قالب</a>,
                                        <a href="#">جدید</a>,
                                        <a href="#">خلاقانه</a>,
                                        <a href="#">واکنشگرا</a>,
                                        <a href="#">تمیز</a>,
                                        <a href="#">بوت استرپ</a>,
                                        <a href="#">html5</a>
                                    </p>
                                </li>
                            </ul>
                        </div>

                        <div class="social-share-card sidebar-card">
                            <p>اشتراک در :</p>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </aside>

                </div>

            </div>

        </div>

    </section>

    <section class="more_product_area p-top-100 p-bottom-70 rtl">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="section-title">
                        <h2>دوره های مشابه
                        </h2>
                    </div>
                </div>
                <div class="col-md-12 row">
                    @forelse ($course->category->courses()->get()->take(3) as $category_course)
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <figure>
                                    <img src="{{$category_course->thumbnail}}" alt="" width="350" class="img-fluid">
                                    <figcaption>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="{{route('courses.show',$category_course->slug)}}">پیش نمایش </a>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="product-excerpt">
                                <h5>
                                    <a href="{{route('courses.show',$category_course->slug)}}"> {{$category_course->title}} </a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="{{$category_course->author->avatar}}" alt="author image">
                                        <p>
                                            <a href="{{route('courses.authors')}}"> {{$category_course->author->name}} </a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        در
                                        <a href="{{route('site.index',['cat'=>$category_course->category->slug])}}"> {{$category_course->category->title}} </a>
                                    </li>
                                </ul>
                                <ul class="product-facts clearfix rtl">
                                    <li class="price">{{number_format($category_course->price)}} تومان</li>
                                </ul>
                            </div>

                        </div>

                    @empty
                    @endforelse
                </div>


            </div>


        </div>

    </section>

@endsection
