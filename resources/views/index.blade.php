@extends('layouts.master')

@section('pageTitle','صفحه نخست')

@section('content')
    <section class="hero-area bgimage rtl">
        <div class="bg_image_holder">
            <img src="images/hero-image01.png" alt="background-image">
        </div>

        <div class="hero-content content_above">

            <div class="content-wrapper">

                <div class="container">

                    <div class="row">

                        <div class="col-md-12">
                            <div class="hero__content__title">
                                <h1 class="display-1">
                                    <span class="light">یک فروشنده شوید</span>
                                    <br>
                                    <span class="bold">محصولات دیجیتالی را بفروشید</span>
                                </h1>
                                <p class="tagline">دیجی پرو قویترین سیستم فروش و خرید محصولات دانلود را به شما ارائه میدهد</p>
                            </div>

                            <div class="search-area">
                                <div class="row">
                                    <div class="col-md-10 offset-md-1">

                                        <div class="search_box">
                                            <form action="index.htm#">
                                                <input type="text" class="text_field" placeholder="نام محصول را جستجو کن ...">
                                                <div class="search__select select-wrap">
                                                    <select name="category" class="select--field">
                                                        <option value="">همه دسته ها</option>
                                                        <option value="">PSD</option>
                                                        <option value="">HTML</option>
                                                        <option value="">وردپرس</option>
                                                        <option value="">پلاگین</option>
                                                    </select>
                                                    <span class="icon-arrow-down"></span>
                                                </div>
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


    <section class="featured-area section--padding bgcolor rtl">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="section-title">
                        <h1>محبوبترین محصولات</h1>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و
                            متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="product-slide-area owl-carousel">
                        <div class="product-single">
                            <div class="featured-badge">
                                <span>ویژه</span>
                            </div>
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/fp01.png" alt="" class="img-fluid">
                                    <figcaption>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="index.htm">
                                                    <span class="icon-basket"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index.htm">پیش نمایش </a>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="product-excerpt">
                                <h3>
                                    <a href="index.htm">محصولی برای نمایش رزومه </a>
                                </h3>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img.png" alt="author image">
                                        <p>
                                            <a href="index.htm#">تم ایرانی </a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="index.htm#">قالب </a>
                                    </li>
                                </ul>
                                <ul class="product-facts clearfix">
                                    <li class="price"><span>20 تومان</span></li>
                                    <li class="sells">
                                        <span class="icon-basket"></span>384
                                    </li>
                                    <li class="product-fav">
                                        <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                                    </li>
                                    <li class="product-rating">
                                        <ul class="list-unstyled">
                                            <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                <span>
<i class="fa fa-star"></i>
</span>
                                                <span>
<i class="fa fa-star"></i>
</span>
                                                <span>
<i class="fa fa-star"></i>
</span>
                                                <span>
<i class="fa fa-star"></i>
</span>
                                            </li>
                                            <li class="total-rating">
                                                <span>(4)</span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="product-single">
                            <div class="featured-badge">
                                <span>ویژه </span>
                            </div>
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/fp02.png" alt="" class="img-fluid">
                                    <figcaption>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="index.htm">
                                                    <span class="icon-basket"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index.htm">پیش نمایش </a>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="product-excerpt">
                                <h3>
                                    <a href="index.htm">قالب وردپرس ریدا </a>
                                </h3>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img.png" alt="author image">
                                        <p>
                                            <a href="index.htm#">تم ایرانی </a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="index.htm#"> وردپرس </a>
                                    </li>
                                </ul>
                                <ul class="product-facts clearfix">
                                    <li class="price">17 تومان</li>
                                    <li class="sells">
                                        <span class="icon-basket"></span>681
                                    </li>
                                    <li class="product-fav">
                                        <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                                    </li>
                                    <li class="product-rating">
                                        <ul class="list-unstyled">
                                            <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                <span>
<i class="fa fa-star"></i>
</span>
                                                <span>
<i class="fa fa-star"></i>
</span>
                                                <span>
<i class="fa fa-star"></i>
</span>
                                                <span>
<i class="fa fa-star"></i>
</span>
                                            </li>
                                            <li class="total-rating">
                                                <span>(7)</span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="product-single">
                            <div class="featured-badge">
                                <span>ویژه </span>
                            </div>
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/fp01.png" alt="" class="img-fluid">
                                    <figcaption>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="index.htm">
                                                    <span class="icon-basket"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index.htm">پیش نمایش </a>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="product-excerpt">
                                <h3>
                                    <a href="index.htm">محصولی برای نمایش رزومه </a>
                                </h3>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img.png" alt="author image">
                                        <p>
                                            <a href="index.htm#">تم ایرانی </a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="index.htm#">قالب </a>
                                    </li>
                                </ul>
                                <ul class="product-facts clearfix">
                                    <li class="price">20 تومان</li>
                                    <li class="sells">
                                        <span class="icon-basket"></span>384
                                    </li>
                                    <li class="product-fav">
                                        <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                                    </li>
                                    <li class="product-rating">
                                        <ul class="list-unstyled">
                                            <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                <span>
<i class="fa fa-star"></i>
</span>
                                                <span>
<i class="fa fa-star"></i>
</span>
                                                <span>
<i class="fa fa-star"></i>
</span>
                                                <span>
<i class="fa fa-star"></i>
</span>
                                            </li>
                                            <li class="total-rating">
                                                <span>(4)</span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                    <div class="more-item-btn">
                        <a href="index.htm" class="btn btn--lg btn-secondary">دیگر محصولات ویژه </a>
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
                        <h1>جدیدترین ها</h1>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و
                            متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                        </p>
                    </div>
                </div>

                <div class="col-md-12 product-list">
                    <ul class="nav" id="lp-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="tab-one" data-toggle="tab" href="index.htm#tab1" role="tab"
                               aria-controls="tab1" aria-selected="true">همه موارد</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-two" data-toggle="tab" href="index.htm#tab2" role="tab"
                               aria-controls="tab2" aria-selected="false"> وردپرس </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-three" data-toggle="tab" href="index.htm#tab3" role="tab"
                               aria-controls="tab3" aria-selected="false">قالب سایت</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-four" data-toggle="tab" href="index.htm#tab4" role="tab"
                               aria-controls="tab4" aria-selected="false">PSD طرح</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-five" data-toggle="tab" href="index.htm#tab5" role="tab"
                               aria-controls="tab5" aria-selected="false">جوملا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-six" data-toggle="tab" href="index.htm#tab6" role="tab"
                               aria-controls="tab6" aria-selected="false">رابط کاربی</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-seven" data-toggle="tab" href="index.htm#tab7" role="tab"
                               aria-controls="tab7" aria-selected="false">برگه فرود</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-eight" data-toggle="tab" href="index.htm#tab8" role="tab"
                               aria-controls="tab8" aria-selected="false">نرم افزار</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="lp-tab-content">

                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab-one">
                            <div class="row">

                                @forelse($courses as $course)
                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="https://lorempixel.com/350/225/technics/" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> {{$course->title}} </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> {{$course->author->name}} </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> وردپرس </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix rtl">
                                                <li class="price">20 تومان</li>
                                                <li class="sells">
                                                    81 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>
                                @empty

                                @endforelse
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab-two">
                            <div class="row">

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product6.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> قالب فروشگاهی جدید </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> وردپرس </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">20 تومان</li>
                                                <li class="sells">
                                                    81 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product5.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> قالب وردپرس بیز </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img3.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#">تم ایرانی </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> وردپرس </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">49 تومان</li>
                                                <li class="sells">
                                                    71 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product4.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> محصول فروشگاهی دیجی پرو </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> اکو تم </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#">HTML</a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">18 تومان</li>
                                                <li class="sells">
                                                    381 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product3.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> محصول طراحی شده PSD </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img3.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#">PSD</a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">20 تومان</li>
                                                <li class="sells">
                                                    24 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
 </span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product2.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> قالب ریدا </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> وردپرس </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">39 تومان</li>
                                                <li class="sells">
                                                    881 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
 </span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product1.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> پلاگین وردپرسی </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> پلاگین </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">20 تومان</li>
                                                <li class="sells">
                                                    281 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab-three">
                            <div class="row">

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product2.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> قالب فروشگاهی جدید </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> وردپرس </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">20 تومان</li>
                                                <li class="sells">
                                                    81 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product4.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> قالب وردپرس بیز </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img3.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#">تم ایرانی </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> وردپرس </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">49 تومان</li>
                                                <li class="sells">
                                                    71 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product6.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> محصول فروشگاهی دیجی پرو </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> اکو تم </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#">HTML</a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">18 تومان</li>
                                                <li class="sells">
                                                    381 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product1.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> محصول طراحی شده PSD </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img3.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#">PSD</a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">20 تومان</li>
                                                <li class="sells">
                                                    24 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
 </span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product3.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> قالب ریدا </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> وردپرس </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">39 تومان</li>
                                                <li class="sells">
                                                    881 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product5.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> پلاگین وردپرسی </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> پلاگین </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">20 تومان</li>
                                                <li class="sells">
                                                    281 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab-four">
                            <div class="row">

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product1.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> قالب فروشگاهی جدید </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> وردپرس </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">20 تومان</li>
                                                <li class="sells">
                                                    81 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product3.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> قالب وردپرس بیز </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img3.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#">تم ایرانی </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> وردپرس </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">49 تومان</li>
                                                <li class="sells">
                                                    71 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product5.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> محصول فروشگاهی دیجی پرو </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> اکو تم </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#">HTML</a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">18 تومان</li>
                                                <li class="sells">
                                                    381 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product2.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> محصول طراحی شده PSD </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img3.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#">PSD</a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">20 تومان</li>
                                                <li class="sells">
                                                    24 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
 </span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product4.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> قالب ریدا </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> وردپرس </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">39 تومان</li>
                                                <li class="sells">
                                                    881 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product6.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> پلاگین وردپرسی </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> پلاگین </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">20 تومان</li>
                                                <li class="sells">
                                                    281 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab-five">
                            <div class="row">

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product1.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> قالب فروشگاهی جدید </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> وردپرس </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">20 تومان</li>
                                                <li class="sells">
                                                    81 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product2.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> قالب وردپرس بیز </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img3.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#">تم ایرانی </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> وردپرس </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">49 تومان</li>
                                                <li class="sells">
                                                    71 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product3.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> محصول فروشگاهی دیجی پرو </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> اکو تم </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#">HTML</a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">18 تومان</li>
                                                <li class="sells">
                                                    381 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product4.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> محصول طراحی شده PSD </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img3.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#">PSD</a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">20 تومان</li>
                                                <li class="sells">
                                                    24 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product5.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> قالب ریدا </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> وردپرس </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">39 تومان</li>
                                                <li class="sells">
                                                    881 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product6.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> پلاگین وردپرسی </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> پلاگین </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">20 تومان</li>
                                                <li class="sells">
                                                    281 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab-six">
                            <div class="row">

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product6.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> قالب فروشگاهی جدید </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> وردپرس </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">20 تومان</li>
                                                <li class="sells">
                                                    81 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product5.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> قالب وردپرس بیز </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img3.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#">تم ایرانی </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> وردپرس </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">49 تومان</li>
                                                <li class="sells">
                                                    71 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product4.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> محصول فروشگاهی دیجی پرو </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> اکو تم </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#">HTML</a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">18 تومان</li>
                                                <li class="sells">
                                                    381 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
 <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product3.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> محصول طراحی شده PSD </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img3.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#">PSD</a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">20 تومان</li>
                                                <li class="sells">
                                                    24 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product2.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> قالب ریدا </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> وردپرس </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">39 تومان</li>
                                                <li class="sells">
                                                    881 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product1.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> پلاگین وردپرسی </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> پلاگین </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">20 تومان</li>
                                                <li class="sells">
                                                    281 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab7" role="tabpanel" aria-labelledby="tab-seven">
                            <div class="row">

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product1.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> قالب فروشگاهی جدید </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> وردپرس </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">20 تومان</li>
                                                <li class="sells">
                                                    81 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
 <i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product2.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> قالب وردپرس بیز </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img3.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#">تم ایرانی </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> وردپرس </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">49 تومان</li>
                                                <li class="sells">
                                                    71 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product3.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> محصول فروشگاهی دیجی پرو </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> اکو تم </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#">HTML</a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">18 تومان</li>
                                                <li class="sells">
                                                    381 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product4.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> محصول طراحی شده PSD </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img3.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#">PSD</a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">20 تومان</li>
                                                <li class="sells">
                                                    24 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product5.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> قالب ریدا </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> وردپرس </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">39 تومان</li>
                                                <li class="sells">
                                                    881 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product6.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> پلاگین وردپرسی </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> پلاگین </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">20 تومان</li>
                                                <li class="sells">
                                                    281 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab8" role="tabpanel" aria-labelledby="tab-eight">
                            <div class="row">

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product2.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> قالب فروشگاهی جدید </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> وردپرس </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">20 تومان</li>
                                                <li class="sells">
                                                    81 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
 <i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product4.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> قالب وردپرس بیز </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img3.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#">تم ایرانی </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> وردپرس </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">49 تومان</li>
                                                <li class="sells">
                                                    71 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product6.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> محصول فروشگاهی دیجی پرو </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> اکو تم </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#">HTML</a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">18 تومان</li>
                                                <li class="sells">
                                                    381 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product3.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> محصول طراحی شده PSD </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img3.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#">PSD</a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">20 تومان</li>
                                                <li class="sells">
                                                    24 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product1.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> قالب ریدا </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> وردپرس </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">39 تومان</li>
                                                <li class="sells">
                                                    881 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="images/product5.png" alt="" class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.htm">
                                                                <span class="icon-basket"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.htm">پیش نمایش </a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="product-excerpt">
                                            <h5>
                                                <a href="index.htm"> پلاگین وردپرسی </a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                                    <p>
                                                        <a href="index.htm#"> تم والری </a>
                                                    </p>
                                                </li>
                                                <li class="product_cat">
                                                    در
                                                    <a href="index.htm#"> پلاگین </a>
                                                </li>
                                            </ul>
                                            <ul class="product-facts clearfix">
                                                <li class="price">20 تومان</li>
                                                <li class="sells">
                                                    281 <span class="icon-basket"></span>
                                                </li>
                                                <li class="product-fav">
                                                    <span class="icon-heart" title="Add to collection"
                                                          data-toggle="tooltip"></span>
                                                </li>
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li class="stars">
<span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
</span>
                                                            <span>
<i class="fa fa-star"></i>
 </span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="text-center m-top-20">
                        <a href="index.htm" class="btn btn--lg btn-primary">نمایش همه</a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="services rtl">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="service-single">
                        <span class="icon-lock"></span>
                        <h4>امنیت بالا</h4>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-single">
                        <span class="icon-like"></span>
                        <h4>کیفیت مثال زدنی</h4>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-single">
                        <span class="icon-wallet"></span>
                        <h4>14 روز برگشت وجه</h4>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-single">
                        <span class="icon-people"></span>
                        <h4>24/7 پشتیبانی</h4>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="counter-up-area bgimage rtl">
        <div class="bg_image_holder">
            <img src="images/countbg.png" alt="">
        </div>

        <div class="container content_above">
            <div class="row">

                <div class="col-md-12">
                    <div class="counter-up">
                        <div class="counter warning">
                            <span class="icon-briefcase"></span>
                            <span class="count_up">60,436</span>
                            <p>محصول فروخته شده</p>
                        </div>
                        <div class="counter info">
                            <span class="icon-cloud-download"></span>
                            <span class="count_up">39,471</span>
                            <p>دانلود</p>
                        </div>
                        <div class="counter secondary">
                            <span class="icon-emotsmile"></span>
                            <span class="count_up">22,951</span>
                            <p>مشتری رضایت مند</p>
                        </div>
                        <div class="counter danger">
                            <span class="icon-people"></span>
                            <span class="count_up">38,436</span>
                            <p>کاربر</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>


    <section class="working-process section--padding rtl">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="section-title">
                        <h1>چگونه انجام میدهیم</h1>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و
                            متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                            کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                        </p>
                    </div>
                </div>

                <div class="col-md-12 step-single">
                    <div class="step-count">
                        <span>قدم 1</span>
                        <span>
<i class="fa fa-long-arrow-down"></i>
</span>
                    </div>
                    <div class="row">
                        <div class="col-md-6 step-text r-padding">
                            <div>
                                <h2>انتخاب محصول</h2>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                                    تکنولوژی </p>
                            </div>
                        </div>
                        <div class="col-md-6 step-image l-padding">
                            <div>
                                <img src="images/step01.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 step-single">
                    <div class="step-count step-count2">
                        <span>قدم دوم 2</span>
                        <span>
<i class="fa fa-long-arrow-down"></i>
</span>
                    </div>
                    <div class="row">
                        <div class="col-md-6 step-image r-padding">
                            <div>
                                <img src="images/step01.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6 step-text l-padding">
                            <div>
                                <h2>افزودن به سبد</h2>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                                    مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 step-single">
                    <div class="step-count step-last">
                        <span>قدم 3</span>
                        <span class="icon-emotsmile"></span>
                    </div>
                    <div class="row">
                        <div class="col-md-6 step-text r-padding">
                            <div>
                                <h2>دریافت محصول</h2>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                                    مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                            </div>
                        </div>
                        <div class="col-md-6 step-image l-padding">
                            <div>
                                <img src="images/step01.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="testimonial2 bgimage ">
        <div class="bg_image_holder">
            <img src="images/testimonial-bg.png" alt="">
        </div>
        <div class="container content_above">
            <div class="row">

                <div class="col-md-12">
                    <div class="section-title section-title-light">
                        <h1>ما بیشتر از 2 میلیون مشتری رازی داریم</h1>
                    </div>
                </div>

                <div class="col-md-12 testimonial-carousel ">
                    <div class="row">

                        <div class="col-lg-10 offset-lg-1 col-md-12 slider-for">
                            <div class="tsingle ">
<span class="quotei">
<i class="fa fa-quote-right"></i>
</span>
                                <p>کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                    نرم افزارها شناخت</p>
                                <h3>@Patrick Pool</h3>
                                <span class="auth-title">طراح محصول</span>
                            </div>

                            <div class="tsingle">
<span class="quotei">
<i class="fa fa-quote-right"></i>
</span>
                                <p>کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                    نرم افزارها شناخت
                                </p>
                                <h3>@Jhonathan Scott</h3>
                                <span class="auth-title">طراح کاربری</span>
                            </div>

                            <div class="tsingle">
<span class="quotei">
<i class="fa fa-quote-right"></i>
</span>
                                <p>کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                    نرم افزارها شناخت
                                </p>
                                <h3>@Liam Planket</h3>
                                <span class="auth-title">برنامه نویس وب</span>
                            </div>

                            <div class="tsingle">
<span class="quotei">
<i class="fa fa-quote-right"></i>
</span>
                                <p>کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                    نرم افزارها شناخت
                                </p>
                                <h3>@Fizz Rahman</h3>
                                <span class="auth-title">مشتری</span>
                            </div>

                            <div class="tsingle">
<span class="quotei">
<i class="fa fa-quote-right"></i>
</span>
                                <p>کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                    نرم افزارها شناخت
                                </p>
                                <h3>@Mash Mortaza</h3>
                                <span class="auth-title">خریداد ثابت</span>
                            </div>

                            <div class="tsingle">
<span class="quotei">
<i class="fa fa-quote-right"></i>
</span>
                                <p>کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                    نرم افزارها شناخت
                                </p>
                                <h3>@Jhonathan Scott</h3>
                                <span class="auth-title">مدیر سایت</span>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="slider-bottom-nav content_above">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 offset-md-3 slider-nav">
                        <div>
<span>
<img src="images/c1.jpeg" alt="" class="img-fluid rounded-circle">
</span>
                        </div>
                        <div>
<span>
<img src="images/c2.jpeg" alt="" class="img-fluid rounded-circle">
</span>
                        </div>
                        <div>
<span>
<img src="images/c3.jpeg" alt="" class="img-fluid rounded-circle">
</span>
                        </div>
                        <div>
<span>
<img src="images/c4.jpeg" alt="" class="img-fluid rounded-circle">
</span>
                        </div>
                        <div>
<span>
<img src="images/c5.jpeg" alt="" class="img-fluid rounded-circle">
</span>
                        </div>
                        <div>
<span>
<img src="images/c2.jpeg" alt="" class="img-fluid rounded-circle">
</span>
                        </div>
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
                        <h1>ورود به کمپین دیجی پرو</h1>
                    </div>
                </div>

                <div class="col-md-5 cta-single">
                    <h3>فروشنده شوید</h3>
                    <p>متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ
                        پیشرو در زبان فارسی ایجاد کرد</p>
                    <a href="index.htm" class="btn btn--lg btn-primary">Become an Author</a>
                </div>
                <div class="col-md-2 cta-divider">
                    <span>یا</span>
                </div>
                <div class="col-md-5 cta-single">
                    <h3>محصول خود را خرید کنید</h3>
                    <p>متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ
                        پیشرو در زبان فارسی ایجاد کرد</p>
                    <a href="index.htm" class="btn btn--lg btn-secondary">ساخت حساب کاربری</a>
                </div>
            </div>
        </div>
    </section>


    <section class="clients-logo rtl">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="partners">
                        <div class="partner">
                            <img src="images/cl01.png" alt="partner image">
                        </div>
                        <div class="partner">
                            <img src="images/cl02.png" alt="partner image">
                        </div>
                        <div class="partner">
                            <img src="images/cl03.png" alt="partner image">
                        </div>
                        <div class="partner">
                            <img src="images/cl04.png" alt="partner image">
                        </div>
                        <div class="partner">
                            <img src="images/cl02.png" alt="partner image">
                        </div>
                        <div class="partner">
                            <img src="images/cl01.png" alt="partner image">
                        </div>
                        <div class="partner">
                            <img src="images/cl02.png" alt="partner image">
                        </div>
                        <div class="partner">
                            <img src="images/cl03.png" alt="partner image">
                        </div>
                        <div class="partner">
                            <img src="images/cl04.png" alt="partner image">
                        </div>
                        <div class="partner">
                            <img src="images/cl01.png" alt="partner image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="subscribe bgimage rtl">
        <div class="bg_image_holder">
            <img src="images/subscribe-bg.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 subscribe-inner">
                    <div class="envelope-svg">
                        <img src="images/svg/newsletter.svg" alt="" class="svg">
                    </div>
                    <p>ماهم از اسپم بدمون میاد .پس مطمئن باش فقط خبرهای مهم به دستت میرسه</p>
                    <form action="index.htm#">
                        <div class="form-group">
                            <input type="text" placeholder="آدرس ایمیلتو وارد کن" required="">
                            <button type="submit" class="btn btn--sm btn-primary">ارسال</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
