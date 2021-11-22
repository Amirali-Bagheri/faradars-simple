@extends('layouts.master')

@section('content')

    <section class="login_area section--padding rtl">
        <div class="container">
            @include('layouts.errors')
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="cardify login">
                            <div class="login--header">
                                <h3>ورود به سایت</h3>
                            </div>

                            <div class="login--form">
                                <div class="form-group">
                                    <label for="email">نام کاربری</label>
                                    <input id="email" name="email" type="text" class="text_field @error('email') is-invalid @enderror"
                                           placeholder="نام کاربری خود را وارد کنید">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="password">پسورد</label>
                                    <input id="password" name="password" type="password" class="text_field" placeholder="پسورد خود را وارد کنید">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="remember">
                                            <span class="shadow_checkbox"></span>
                                            <span class="label_text">مرا به خاطر بسپار</span>
                                        </label>
                                    </div>
                                </div>
                                <button class="btn btn--md btn-primary" type="submit">ورود</button>
                                <div class="login_assist">
                                        <a href="{{route('password.request')}}">فراموشی رمز عبور</a>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>

            </div>

        </div>

    </section>

@endsection
