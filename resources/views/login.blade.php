@extends('layouts.app')

@section('content')
    <!--BREADCRUMB
                                    =========================================================================================================-->
    <section id="breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>
        </div>
    </section>

    <!--PAGE TITLE
                                    =========================================================================================================-->
    <section id="page-title">
        <div class="container">
            <div class="ts-title">
                <h1>Login</h1>
            </div>
        </div>
    </section>

    <!--LOGIN / REGISTER SECTION
                                    =========================================================================================================-->
    <section id="login-register">
        <div class="container">
            <div class="row">

                <div class="offset-md-2 col-md-8 offset-lg-3 col-lg-6">

                    <!--LOGIN / REGISTER TABS
                                                    =========================================================================================-->
                    <ul class="nav nav-tabs" id="login-register-tabs" role="tablist">

                        <!--Login tab-->
                        <li class="nav-item">
                            <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab"
                                aria-controls="login" aria-selected="true">
                                <h3>Login</h3>
                            </a>
                        </li>

                    </ul>

                    <!--TAB CONTENT
                                                    =========================================================================================-->
                    <div class="tab-content">

                        <!--LOGIN TAB
                                                        =====================================================================================-->
                        <div class="tab-pane active" id="login" role="tabpanel" aria-labelledby="login-tab">

                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!--Login form-->
                            <form class="ts-form" id="form-login" method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Email -->
                                <div class="form-group">
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror" id="login-email"
                                        placeholder="Email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Password -->
                                <div class="input-group ts-has-password-toggle mb-2">
                                    <input type="password" name="password"
                                        class="form-control border-right-0 @error('password') is-invalid @enderror"
                                        placeholder="Password" required>
                                    <div class="input-group-append">
                                        <a href="#"
                                            class="input-group-text border-left-0 ts-password-toggle bg-white">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                    @error('password')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Remember Me -->
                                <div class="ts-center__vertical justify-content-between">
                                    <div class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" id="login-check"
                                            name="remember">
                                        <label class="custom-control-label" for="login-check">Remember Me</label>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>

                                <hr>

                                <!-- Forgot password -->
                                {{-- <a href="{{ route('password.request') }}" class="ts-text-small">
                                    <i class="fa fa-sync-alt ts-text-color-primary mr-2"></i>
                                    <span class="ts-text-color-light">I have forgot my password</span>
                                </a> --}}
                            </form>


                        </div>

                        <!--end #login.tab-pane-->
                    </div>
                    <!--end tab-content-->

                </div>
                <!--end offset-4.col-md-4-->

            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
@endsection
