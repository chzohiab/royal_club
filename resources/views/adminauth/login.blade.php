@extends('adminauth.layouts.app')

@section('adminauthcontent')
    <div class="wrapper">
        <div class="auth-wrapper d-flex align-items-center justify-content-center" style="height:100vh;">
            <div class="card p-4" style="width:500px">
                <h4 class="text-center mb-4"> Admin Login</h4>

                <form method="POST" action="">

                    <!-- Email Address -->
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>

                        <input id="email" class="form-control" type="email" name="email" :value="old('email')"
                            required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mt-4 form-group">
                        <label for="password"></label>

                        <input id="password" class="form-control" type="password" name="password" required
                            autocomplete="current-password" />
                    </div>

                    <div class="d-flex align-items-center justify-content-between mt-4">
                        <a class="" href="">
                            {{ __('Forgot your password?') }}
                        </a>

                        <button class="btn btn-primary">
                            {{ __('Log in') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

