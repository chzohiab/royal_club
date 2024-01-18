@extends('auth.layouts.app')

@section('authcontent')
    <div class="wrapper">
        <div class="auth-wrapper d-flex align-items-center justify-content-center" style="height:100vh;">
            <div class="card p-4" style="width:500px">
                <h4 class="text-center mb-4">Register</h4>

                <form method="POST" action="">

                    <!-- Name -->
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>

                        <input id="name" class="form-control" type="name" name="name" :value="old('name')"
                            required autofocus />
                    </div>

                    <!-- Email Address -->
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>

                        <input id="email" class="form-control" type="email" name="email" :value="old('email')"
                            required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>

                        <input id="password" class="form-control" type="password" name="password" required
                            autocomplete="new-password" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>

                        <input id="password_confirmation" class="form-control" type="password"
                            name="password_confirmation" required />
                    </div>

                    <div class="d-flex align-items-center justify-content-between mt-4">
                        <a class="" href="{{ route('auth.login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <button class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
