<x-guest-layout>
    <main class="main">

        <section class="pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-lg-5">
                                <div
                                    class="login_wrap widget-taber-content p-30 background-white border-radius-10 mb-md-5 mb-lg-0 mb-sm-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                           <div class="logo logo-width-1">
                        <a href="{{ url('/') }}"><img src="assets/imgs/logo/logo.png" alt="logo"></a>
                    </div>
                                        </div>
                                        @if (\Session::has('message'))
                                            <div class="alert alert-info">
                                                {{ \Session::get('message') }}
                                            </div>
                                        @endif
                                        <form method="post" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="email" name="email"
                                                    placeholder="Enter Your Email" :value="old('email')" autofocus />
                                                @if ($errors->has('email'))
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password"
                                                    placeholder="Password" autocomplete="current-password" />
                                                @if ($errors->has('password'))
                                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                            <div class="login_footer form-group">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input class="form-check-input" type="checkbox" name="remember"
                                                            id="exampleCheckbox1" value="" />
                                                        <label class="form-check-label"
                                                            for="exampleCheckbox1"><span>Remember me</span></label>
                                                    </div>
                                                </div>
                                                <a class="text-muted" href="{{ url('password.request') }}">Forgot
                                                    password?</a>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-fill-out btn-block hover-up"
                                                    name="login">
                                                    Log in
                                                </button>
                                            </div>
                                        </form>
                                        <div class="text-muted text-center">
                                            Dont have an account? <a href="{{ route('register') }}">Create one now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-6">
                                <img src="assets/imgs/login.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


</x-guest-layout>
