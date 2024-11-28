@extends('layouts.app') <!-- Extending your app layout -->

@section('title', 'Login') <!-- Page title -->

@section('content') <!-- The main content of the page -->
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="mb-4 text-center">Login to Your Account</h2>

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf <!-- CSRF protection for the form -->

                <!-- Email Field -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus>
                    
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required>
                    
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Remember Me Checkbox -->
                <div class="mb-3 form-check">
                    <input type="checkbox" name="remember" id="remember" class="form-check-input">
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>

                <!-- Login Button -->
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>

            <!-- Forgot Password Link -->
            <div class="mt-3 text-center">
                <a href="{{ route('password.request') }}">Forgot Your Password?</a>
            </div>
        </div>
    </div>
@endsection
