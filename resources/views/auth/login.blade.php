@extends('layouts.app')

@section('content')
    <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
        <!-- Card -->
        <div class="card smooth-shadow-md">
            <!-- Card body -->
            <div class="card-body p-6">
                <div class="mb-4 text-center">
                    <a href="/"><img src="/img/logo.png" class="img-fluid mb-2" style="width:40%" alt=""></a>


                </div>
                <!-- Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Username -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        {{-- <input type="email" id="email" class="form-control" name="email" placeholder="Email address here" required=""> --}}
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- <input type="password" id="password" class="form-control" name="password" placeholder="**************" required=""> --}}
                    </div>
                    <!-- Checkbox -->
                    <div class="d-lg-flex justify-content-between align-items-center
              mb-4">
                        <div class="form-check custom-checkbox">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            {{-- <input type="checkbox" class="form-check-input" id="rememberme"> --}}
                            <label class="form-check-label" for="rememberme">Remember
                                me</label>
                        </div>

                    </div>
                    <div>
                        <!-- Button -->
                        <div class="d-grid">
                            {{-- <button type="submit" class="btn btn-primary">Sign
                in</button> --}}
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                        </div>

                        <div class="d-md-flex justify-content-between mt-4">
                            <div class="mb-2 mb-md-0">
                                <a href="sign-up.html" class="fs-5">Call Support! </a>
                            </div>
                            <div>
                                <a href="{{ route('password.request') }}"
                                    class="text-inherit
                    fs-5">Forgot your password? a</a>
                            </div>

                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
@endsection
