@extends('layouts.app')

@section('content')
<section id="login-form" class="padd-section">
    <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Login</h2>
          <p class="separator">Masukkan Username dan Password Anda untuk Login</p>
        </div>
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">        

          <div class="col-lg-5 col-md-8">
            <div class="form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="form-group input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="bi bi-person"></i>
                                </span>
                                <input id="username" type="username" placeholder="Username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autofocus >
                                    <!-- @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror -->
                            </div>

                        <div class="form-group input-group mt-3">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="bi bi-key"></i>
                                </span>
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="row mb-0 text-center">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-logout">
                                    {{ __('Login') }}
                                </button>

                                <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </section>

@endsection
