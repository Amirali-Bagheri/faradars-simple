@extends('layouts.master')

@section('pageTitle','پروفایل')

@section('content')

    <section class="dashboard-area rtl">
        <div class="dashboard_contents section--padding">
            <div class="container">
                @include('layouts.errors')
                <form method="post" action="{{route('profile.update')}}" class="setting_form">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="information_module">
                                <div class="toggle_title">
                                    <h4>اطلاعات حساب کاربری</h4>
                                </div>
                                <div class="information__set">
                                    <div class="information_wrapper row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">نام و نام خانوادگی
                                                    <sup>*</sup>
                                                </label>
                                                <input type="text" name="name" id="name" class="text_field" placeholder="نام و نام خانوادگی"
                                                       value="{{old('name',$user->name)}}">
                                            </div>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">ایمیل
                                                    <sup>*</sup>
                                                </label>
                                                <input type="text" name="email" id="email" class="text_field" placeholder="ایمیل"
                                                       value="{{old('email',$user->email)}}">
                                            </div>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
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
