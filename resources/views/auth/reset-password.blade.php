<x-auth-layout page-title="Login">

    <x-slot name="head_section">
        <h5 class="text-primary">Welcome Back !</h5>
        <p>Reset password to continue to Doctorly.</p>
    </x-slot>

    <form class="form-horizontal" method="POST" action="{{ route('password.update') }}">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <span> {{ $errors->first() }} </span>
            </div>
        @endif
        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ old('email', $request->email) }}" required autofocus>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" id="password" placeholder="Enter password" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm password" required>
        </div>

        <div class="mt-3">
            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Reset Password</button>
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

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
