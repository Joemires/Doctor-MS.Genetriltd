<x-auth-layout page-title="Login">
    <x-slot name="head_section">
        <h5 class="text-primary">Welcome Back !</h5>
        <p>Sign in to continue to Doctorly.</p>
    </x-slot>

    <form class="form-horizontal" method="POST" action="login">
        @csrf
        @if ($errors->any())
        <div class="alert alert-danger">
            <span> {{ $errors->first() }} </span>
        </div>
        @endif
        <div class="form-group">
            <label for="username">Username</label>
            <input name="email" type="email" id="email" class="form-control " value="admin@example.dev" id="username" placeholder="Enter username" autocomplete="email" autofocus>
        </div>
        <div class="form-group">
            <label for="userpassword">Password</label>
            <input type="password" name="password" id="pass" class="form-control" id="userpassword" value="admin@123456" placeholder="Enter password">
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="remember" id="customControlInline">
            <label class="custom-control-label" for="customControlInline">Remember me</label>
        </div>
        <div class="mt-3">
            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
        </div>
        <div class="mt-4 text-center">
            <a href="forgot-password" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
        </div>
        <div class="mt-4">
            <div class="d-flex align-items-center">
                <div class="flex-grow-1">
                    <p class="mb-0"><b>Admin:</b></p>
                    <p class="mb-0 email">email - admin@example.dev</p>
                    <p class="mb-1 pass">Pass - admin@123456</p>
                </div>
                <div class="flex-shrink-0">
                    <a href="javascript:void(0);" class="btn btn-primary" onclick="login(this)">Login</a>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div class="flex-grow-1">
                    <p class="mb-0"><b>Doctor:</b></p>
                    <p class="mb-0 email">email - doctor@example.dev</p>
                    <p class="mb-1 pass">Pass - doctor@123456</p>
                </div>
                <div class="flex-shrink-0">
                    <a href="javascript:void(0);" class="btn btn-primary" onclick="login(this)">Login</a>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div class="flex-grow-1">
                    <p class="mb-0"><b>Patient:</b></p>
                    <p class="mb-0 email">email - charles88@example.com</p>
                    <p class="mb-1 pass">Pass - patient@123456</p>
                </div>
                <div class="flex-shrink-0">
                    <a href="javascript:void(0);" class="btn btn-primary" onclick="login(this)">Login</a>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div class="flex-grow-1">
                    <p class="mb-0"><b>Receptionist:</b></p>
                    <p class="mb-0 email">email - orie.heller@example.org</p>
                    <p class="mb-1 pass">Pass - receptionist@123456</p>
                </div>
                <div class="flex-shrink-0">
                    <a href="javascript:void(0);" class="btn btn-primary" onclick="login(this)">Login</a>
                </div>
            </div>
        </div>
    </form>

    <x-slot name="foot_section">
        Don't have an account ?
        <a href="register" class="font-weight-medium text-primary"> Sign Up here</a>
    </x-slot>
</x-auth-layout>

{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
