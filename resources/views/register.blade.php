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

                        <!--Register tab-->
                        <li class="nav-item">
                            <a class="nav-link active" id="register-tab" data-toggle="tab" href="#register" role="tab"
                                aria-controls="register" aria-selected="false">
                                <h3>Register</h3>
                            </a>
                        </li>

                    </ul>

                    <!--TAB CONTENT
                                                                        =========================================================================================-->
                    <div class="tab-content">

                        <!--REGISTER TAB
                                                                            =====================================================================================-->
                        <form class="ts-form" id="form-register" method="POST" action="{{ route('register') }}"
                            enctype="multipart/form-data">
                            @csrf

                            <!-- Username -->
                            <div class="form-group">
                                <input type="text" name="username"
                                    class="form-control @error('username') is-invalid @enderror" placeholder="Username"
                                    value="{{ old('username') }}" required>
                                @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                                    value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Bio -->
                            <div class="form-group">
                                <textarea name="bio" class="form-control @error('bio') is-invalid @enderror" rows="3"
                                    placeholder="Short Bio (optional)">{{ old('bio') }}</textarea>
                                @error('bio')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Profile Photo -->
                            <div class="form-group">
                                <input type="file" name="profile_photo"
                                    class="form-control-file @error('profile_photo') is-invalid @enderror">
                                @error('profile_photo')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <div class="input-group ts-has-password-toggle">
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
                            </div>

                            <!-- Password Confirmation -->
                            <div class="input-group ts-has-password-toggle mb-3">
                                <input type="password" name="password_confirmation" class="form-control border-right-0"
                                    placeholder="Repeat Password" required>
                                <div class="input-group-append">
                                    <a href="#" class="input-group-text border-left-0 ts-password-toggle bg-white">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Terms Checkbox -->
                            <div class="custom-control custom-checkbox mb-4">
                                <input type="checkbox" class="custom-control-input" id="register-check" name="terms"
                                    required>
                                <label class="custom-control-label" for="register-check">I Agree With <a href="#"
                                        class="btn-link">Terms and Conditions</a></label>
                            </div>

                            <!-- Submit -->
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>

                        <!--end #register.tab-pane-->
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
