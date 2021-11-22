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
                                    <div class="author-author__info has_dropdown">
                                        <div class="author__avatar online">
                                            <img src="{{auth()->user()->avatar}}" width="50" alt="user avatar" class="rounded-circle">
                                        </div>
                                        <div class="dropdown dropdown--author">
                                            <div class="author-credits d-flex">
                                                <div class="author__avatar">
                                                    <img src="{{auth()->user()->avatar}}" alt="user avatar" class="rounded-circle">
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

                                <div class="mobile_content rtl">
                                    <span class="icon-user menu_icon"></span>

                                    <div class="offcanvas-menu closed">
                                        <span class="icon-close close_menu"></span>
                                        <div class="author-author__info">
                                            <div class="author__avatar v_middle">
                                                <img src="/images/user-avater.png" alt="user avatar">
                                            </div>
                                        </div>

                                        <div class="author__notification_area">
                                            <ul>
                                                <li>
                                                    <a href="notification.htm">
                                                        <div class="icon_wrap">
                                                            <span class="icon-bell"></span>
                                                            <span class="notification_count noti">25</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="message.htm">
                                                        <div class="icon_wrap">
                                                            <span class="icon-envelope"></span>
                                                            <span class="notification_count msg">6</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.htm">
                                                        <div class="icon_wrap">
                                                            <span class="icon-basket"></span>
                                                            <span class="notification_count purch">2</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="dropdown dropdown--author">
                                            <ul>
                                                <li>
                                                    <a href="author.htm">
                                                        <span class="icon-user"></span>پروفایل</a>
                                                </li>
                                                <li>
                                                    <a href="dashboard.htm">
                                                        <span class="icon-home"></span> داشبورد</a>
                                                </li>
                                                <li>
                                                    <a href="dashboard-setting.htm">
                                                        <span class="icon-settings"></span> تنظیمات</a>
                                                </li>
                                                <li>
                                                    <a href="cart.htm">
                                                        <span class="icon-basket"></span>خرید</a>
                                                </li>
                                                <li>
                                                    <a href="favourites.htm">
                                                        <span class="icon-heart"></span> مورد علاقه ها</a>
                                                </li>
                                                <li>
                                                    <a href="dashboard-add-credit.htm">
                                                        <span class="icon-credit-card"></span>افزودن کارت اعتباری</a>
                                                </li>
                                                <li>
                                                    <a href="dashboard-statement.htm">
                                                        <span class="icon-chart"></span>نرخ فروش</a>
                                                </li>
                                                <li>
                                                    <a href="dashboard-upload.htm">
                                                        <span class="icon-cloud-upload"></span>آپلود محصول</a>
                                                </li>
                                                <li>
                                                    <a href="dashboard-manage-item.htm">
                                                        <span class="icon-notebook"></span>مدیریت محصول</a>
                                                </li>
                                                <li>
                                                    <a href="dashboard-withdrawal.htm">
                                                        <span class="icon-briefcase"></span>درخواست وجه</a>
                                                </li>
                                                <li>
                                                    <a href="index.htm#">
                                                        <span class="icon-logout"></span>خروج</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text-center">
                                            <a href="signup.htm" class="author-area__seller-btn inline">فروشنده شوید</a>
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

