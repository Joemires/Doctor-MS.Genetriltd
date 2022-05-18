<x-auth-layout>
    <x-slot name="head_section">
        <h5 class="text-primary">Forgot Password</h5>
        <p>Reset your password with Doctorly.</p>
    </x-slot>

    <form class="form-horizontal" method="POST" action="https://doctorly.themesbrand.website/forgot-password">
        <input type="hidden" name="_token" value="hNsWOJo0V36YBOLhHHpCT9uAFlUQzWESOyxQLIS1">
        <div class="form-group">
            <label for="username">Email</label>
            <input name="email" type="email" class="form-control " id="username" placeholder="Enter email" autocomplete="email" autofocus="">
        </div>
        <div class="form-group row mb-0">
            <div class="col-12 text-right">
                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Reset</button>
            </div>
        </div>
    </form>

    <x-slot name="foot_section">
        Remember It ?
        <a href="{{ route('login') }}" class="font-weight-medium text-primary"> Sign In here</a>
    </x-slot>

</x-auth-layout>


{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
