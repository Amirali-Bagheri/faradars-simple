@extends('layouts.master')

@section('pageTitle','پروفایل')

@section('content')
    <section class="dashboard-area rtl">
        <div class="dashboard_contents section--padding">
            <div class="container">
                <form method="post" action="{{route('profile.update')}}" class="setting_form">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="information_module">
                                <div class="information__set profile_images">
                                    <div class="information_wrapper">
                                        <div class="profile_image_area">
                                            <div>
                                                <img src="images/authplc.png" alt="Author profile area">
                                                <div class="img_info">
                                                    <p class="bold">تصویر کاربری</p>
                                                    <p class="subtitle">JPG, GIF or PNG 100x100 px</p>
                                                </div>
                                            </div>
                                            <label for="cover_photo" class="upload_btn">
                                                <input type="file" id="cover_photo">
                                                <span class="btn btn-sm btn-primary" aria-hidden="true">آپلود تصویر</span>
                                                <a href="dashboard-setting.htm" class="btn btn-sm btn-danger">حذف تصویر</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="information_module">
                                <div class="toggle_title">
                                    <h4>اطلاعات شخصی</h4>
                                </div>
                                <div class="information__set">
                                    <div class="information_wrapper form--fields row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="acname">نام اکانت
                                                    <sup>*</sup>
                                                </label>
                                                <input type="text" id="acname" class="text_field" placeholder="نام حساب"
                                                       value="تم ایرانی">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="usrname">نام کاربری
                                                    <sup>*</sup>
                                                </label>
                                                <input type="text" id="usrname" class="text_field" placeholder="نام کاربری"
                                                       value="تم ایرانی">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emailad">ایمیل
                                                    <sup>*</sup>
                                                </label>
                                                <input type="text" id="emailad" class="text_field" placeholder="ایمیل"
                                                       value="info@info.com">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="website">وب سایت</label>
                                                <input type="password" id="website" class="text_field" placeholder="وب سایت">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password">پسورد
                                                    <sup>*</sup>
                                                </label>
                                                <input type="password" id="password" class="text_field" placeholder="پسورد">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="conpassword">دوباره نویسی پسورد
                                                    <sup>*</sup>
                                                </label>
                                                <input type="password" id="conpassword" class="text_field"
                                                       placeholder="پسورد خود را دوباره بنویس">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="country">کشور
                                                    <sup>*</sup>
                                                </label>
                                                <div class="select-wrap select-wrap2">
                                                    <select name="country" id="country" class="text_field">
                                                        <option value="">انتخاب کن</option>
                                                        <option value="bangladesh">ایران</option>
                                                        <option value="india">هند</option>
                                                        <option value="uruguye">اکراین</option>
                                                        <option value="australia">اتریش</option>
                                                        <option value="neverland">نیوزلند</option>
                                                        <option value="atlantis">پرتغال</option>
                                                    </select>
                                                    <span class="lnr icon-arrow-down"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="prohead">متن سربرگ</label>
                                                <input type="text" id="prohead" class="text_field"
                                                       placeholder="مثلا : من یک طراح هستم">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="authbio">زندگی نامه نویسنده</label>
                                                <textarea name="author_bio" id="authbio" class="text_field"
                                                          placeholder="متنی کوتا در باره شخصیت خود ... "></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="information_module">
                                <div class="toggle_title">
                                    <h4>اطلاعات شخصی</h4>
                                </div>
                                <div class="information__set">
                                    <div class="information_wrapper form--fields">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="first_name">نام
                                                        <sup>*</sup>
                                                    </label>
                                                    <input type="text" id="first_name" class="text_field" placeholder="نام"
                                                           value="علی">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">نام شرکت
                                                        <sup>*</sup>
                                                    </label>
                                                    <input type="text" id="email" class="text_field" placeholder="تم ایرانی"
                                                           value="تم ایرانی">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email1">آدرس ایمیل
                                                        <sup>*</sup>
                                                    </label>
                                                    <input type="text" id="email1" class="text_field" placeholder="ایمیل"
                                                           value="contact@info.com">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="country1">;a,v
                                                        <sup>*</sup>
                                                    </label>
                                                    <div class="select-wrap select-wrap2">
                                                        <select name="country" id="country1" class="text_field">
                                                            <option value="">انتخاب کن</option>
                                                            <option value="bangladesh">ایران</option>
                                                            <option value="india">هند</option>
                                                            <option value="uruguye">اکراین</option>
                                                            <option value="australia">اتریش</option>
                                                            <option value="neverland">نیوزلند</option>
                                                            <option value="atlantis">پرتغال</option>
                                                        </select>
                                                        <span class="lnr icon-arrow-down"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="address1">آدرس 1</label>
                                                    <input type="text" id="address1" class="text_field" placeholder="آدرس اول">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="address2">آدرس 2</label>
                                                    <input type="text" id="address2" class="text_field" placeholder="آدرس دوم">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="city">شهر
                                                        <sup>*</sup>
                                                    </label>
                                                    <div class="select-wrap select-wrap2">
                                                        <select name="city" id="city" class="text_field">
                                                            <option value="">انتخاب کن</option>
                                                            <option value="bangladesh">ایران</option>
                                                            <option value="india">هند</option>
                                                            <option value="uruguye">اکراین</option>
                                                            <option value="australia">اتریش</option>
                                                            <option value="neverland">نیوزلند</option>
                                                            <option value="atlantis">پرتغال</option>
                                                        </select>
                                                        <span class="lnr icon-arrow-down"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="zipcode">کد پستی
                                                        <sup>*</sup>
                                                    </label>
                                                    <input type="text" id="zipcode" class="text_field" placeholder="کد پستی">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="information_module">
                                <div class="toggle_title">
                                    <h4>اطلاعیه</h4>
                                </div>
                                <div class="information__set mail_setting">
                                    <div class="information_wrapper">
                                        <div class="custom_checkbox">
                                            <label class="toggle-switch">
                                                <input type="checkbox" checked="">
                                                <span class="slider round"></span>
                                                <span class="radio_title">امتیاز به من</span>
                                                <span class="desc">در این حالت با ایمیل به من اطلاع داده شود</span>
                                            </label>
                                        </div>

                                        <div class="custom_checkbox">
                                            <label class="toggle-switch">
                                                <input type="checkbox" checked="">
                                                <span class="slider round"></span>
                                                <span class="radio_title">آپلود محصول</span>
                                                <span class="desc">در این حالت با ایمیل به من اطلاع داده شود</span>
                                            </label>
                                        </div>

                                        <div class="custom_checkbox">
                                            <label class="toggle-switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                <span class="radio_title">کانتی برای محصول</span>
                                                <span class="desc">در این حالت با ایمیل به من اطلاع داده شود</span>
                                            </label>
                                        </div>

                                        <div class="custom_checkbox">
                                            <label class="toggle-switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                <span class="radio_title">پاک شدن محصول</span>
                                                <span class="desc">در این حالت با ایمیل به من اطلاع داده شود</span>
                                            </label>
                                        </div>

                                        <div class="custom_checkbox">
                                            <label class="toggle-switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                <span class="radio_title">خرید محصول ویژه</span>
                                                <span class="desc">در این حالت با ایمیل به من اطلاع داده شود</span>
                                            </label>
                                        </div>

                                        <div class="custom_checkbox">
                                            <label class="toggle-switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                <span class="radio_title">درخواست پشتی بانی</span>
                                                <span class="desc">در این حالت با ایمیل به من اطلاع داده شود</span>
                                            </label>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="information_module">
                                <div class="toggle_title">
                                    <h4>اطلاعات شبکه های اجتماعی</h4>
                                </div>
                                <div class="information__set social_profile">
                                    <div class="information_wrapper">
                                        <div class="social__single">
                                            <div class="social_icon">
                                                <span class="fa fa-facebook"></span>
                                            </div>
                                            <div class="link_field">
                                                <input type="text" class="text_field" placeholder="ex: www.facebook.com">
                                            </div>
                                        </div>

                                        <div class="social__single">
                                            <div class="social_icon">
                                                <span class="fa fa-twitter"></span>
                                            </div>
                                            <div class="link_field">
                                                <input type="text" class="text_field" placeholder="ex: www.twitter.com">
                                            </div>
                                        </div>

                                        <div class="social__single">
                                            <div class="social_icon">
                                                <span class="fa fa-google-plus"></span>
                                            </div>
                                            <div class="link_field">
                                                <input type="text" class="text_field" placeholder="ex: www.google.com">
                                            </div>
                                        </div>

                                        <div class="social__single">
                                            <div class="social_icon">
                                                <span class="fa fa-behance"></span>
                                            </div>
                                            <div class="link_field">
                                                <input type="text" class="text_field" placeholder="ex: www.behance.com">
                                            </div>
                                        </div>

                                        <div class="social__single">
                                            <div class="social_icon">
                                                <span class="fa fa-dribbble"></span>
                                            </div>
                                            <div class="link_field">
                                                <input type="text" class="text_field" placeholder="ex: www.dribbble.com">
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="dashboard_setting_btn">
                                <button type="submit" class="btn btn--md btn-primary">ذخیره تغییرات</button>
                                <button type="reset" class="btn btn-md btn-danger">لغو</button>
                            </div>
                        </div>

                    </div>

                </form>

            </div>

        </div>

    </section>

@endsection
