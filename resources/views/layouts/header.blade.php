<div class="menu-area rtl">
    <div class="top-menu-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-fullwidth">
                        <div class="logo-wrapper">
                            <div class="logo logo-top">
                                <a href="{{route('site.index')}}"><img src="/images/logo.png" alt="logo image" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="menu-container">
                            <div class="d_menu">
                                <nav class="navbar navbar-expand-lg mainmenu__menu">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                            data-target="#bs-example-navbar-collapse-1"
                                            aria-controls="bs-example-navbar-collapse-1" aria-expanded="false"
                                            aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon icon-menu"></span>
                                    </button>

                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="navbar-nav">
                                            <li>
                                                <a href="{{route('site.index')}}">خانه</a>
                                            </li>
                                            <li>
                                                <a href="#">دسته بندی ها</a>
                                            </li>
                                            <li>
                                                <a href="#">دوره ها</a>
                                            </li>
                                            <li>
                                                <a href="{{route('courses.authors')}}">
                                                    مدرسین
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">تماس با ما</a>
                                            </li>
                                        </ul>
                                    </div>

                                </nav>
                            </div>
                        </div>

                        @auth

                            <div class="author-menu">

                                <div class="author-area">
                                    <div class="author__notification_area">
                                        <ul>
                                            <li class="has_dropdown">
                                                <div class="icon_wrap">
                                                    <span class="fa fa-shopping-basket"></span>
                                                    <span
                                                        class="notification_count purch">{{ Cart::getContent()->count() }}</span>
                                                </div>
                                                <div class="dropdown dropdown--cart">
                                                    <div class="cart_area">
                                                        <div class="cart_list">
                                                            @if (empty(Cart::getContent()))

                                                                <div class="cart_action justify-content-center text-center">
                                                                    <p class="justify-content-center text-center m-3">
                                                                        سبد خرید خالی است
                                                                    </p>
                                                                </div>
                                                            @else

                                                                @php
                                                                    $cart_courses = \App\Models\Course::whereIn('id',collect(Cart::getContent())->keys()->all())->get()
                                                                @endphp

                                                                @foreach ($cart_courses as $cart)
                                                                    <div class="cart_product">
                                                                        <div class="product__info">
                                                                            <div class="thumbn">
                                                                                <img alt="cart product thumbnail"
                                                                                     src="{{$cart->thumbnail}}">
                                                                            </div>
                                                                            <div class="info">
                                                                                <a class="title" href="#">
                                                                                    {{$cart->title}}
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product__action">
                                                                            <form method="post" action="{{route('cart.remove',$cart->id)}}" id="cart-remove-{{$cart->id}}">
                                                                                @csrf
                                                                                <span onclick="document.getElementById('cart-remove-{{$cart->id}}').submit();" class="fa fa-trash" type="submit">
                                                                                </span>
                                                                            </form>
                                                                            <p>{{number_format($cart->price)}} تومان</p>
                                                                        </div>
                                                                    </div>

                                                                @endforeach

                                                                <div class="total">
                                                                    <p>
                                                                        <span>مجموع :</span>{{number_format($cart_courses->pluck('price')->sum())}} تومان</p>
                                                                </div>

                                                                <div class="cart_action">
                                                                    <a class="btn btn-primary" href="{{route('carts.all')}}">نمایش
                                                                        سبد</a>
                                                                    <a class="btn btn-secondary" href="{{route('enroll')}}">پرداخت</a>
                                                                </div>

                                                            @endif
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="author-author__info has_dropdown">
                                        <div class="author__avatar online">
                                            <img src="{{auth()->user()->avatar}}" width="50" alt="user avatar"
                                                 class="rounded-circle">
                                        </div>
                                        <div class="dropdown dropdown--author">
                                            <div class="author-credits d-flex">
                                                <div class="author__avatar">
                                                    <img src="{{auth()->user()->avatar}}" alt="user avatar"
                                                         class="rounded-circle">
                                                </div>
                                                <div class="autor__info">
                                                    <p class="name">
                                                        {{Auth::user()->name}}
                                                    </p>
                                                </div>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="{{route('profile')}}">
                                                        <span class="fa fa-user"></span>پروفایل</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('logout')}}">
                                                        <span class="fa fa-sign-out"></span>خروج</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        @endauth

                        @guest
                            <a class="btn btn--round btn-outline-primary btn-md" href="{{route('login')}}">
                                ورود یا ثبت نام
                                <i class="fa fa-user"></i>
                            </a>
                        @endguest
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

