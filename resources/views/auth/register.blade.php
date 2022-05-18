<x-auth-layout page-title="Patient Registration">
    @push('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css">
        <style>
            /* .intl-tel-input {
                display: table-cell;
            }
            .intl-tel-input .selected-flag {
                z-index: 4;
            }
            .intl-tel-input .country-list {
                z-index: 5;
            }
            .input-group .intl-tel-input .form-control {
                border-top-left-radius: 4px;
                border-top-right-radius: 0;
                border-bottom-left-radius: 4px;
                border-bottom-right-radius: 0;
            } */

            /* .intl-tel-input {
                width: 100%
            } */
            .iti, .intl-tel-input { width: 100%; }
        </style>
    @endpush

    <x-slot name="head_section">
        <h5 class="text-primary">Patient Register</h5>
        <p>Get your free Doctorly Patient account now.</p>
    </x-slot>

    <form method="POST" class="form-horizontal mt-4" action="{{ route('register') }}">
        <input type="hidden" name="_token" value="hNsWOJo0V36YBOLhHHpCT9uAFlUQzWESOyxQLIS1">
        <div class="form-group">
            <label for="first_name">First Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control is-invalid" value="" name="first_name" id="userfirstname" placeholder="Enter First Name">
            {{-- <span class="invalid-feedback" role="alert">
                <strong>The first name field is required.</strong>
            </span> --}}
        </div>
        <div class="form-group">
            <label for="last_name">Last Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control " value="" name="last_name" id="userlastname" placeholder="Enter Last Name">
        </div>
        <div class="form-group">
            <label for="usermobile">Contact No <span class="text-danger">*</span></label>
            <div class="w-100 position-relative">
                <input type="tel" class="form-control tel-input w-100" value="" name="mobile" id="usermobile" placeholder="Enter Contact Number">
            </div>
        </div>
        <div class="form-group">
            <label for="useremail">Email <span class="text-danger">*</span></label>
            <input type="email" class="form-control " value="" id="useremail" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="userpassword">Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control " value="" name="password" id="userpassword" placeholder="Enter password">
        </div>
        <div class="form-group">
            <label for="userpassword">Confirm Password <span class="text-danger">*</span></label>
            <input id="password-confirm" type="password" name="password_confirmation" class="form-control " placeholder="Enter confirm password ">
        </div>
        <div class="mt-4">
            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register</button>
        </div>
        <div class="mt-4 text-center">
            <p class="mb-0">By registering you agree to the Doctorly <a href="#" class="text-primary">Terms of Use</a></p>
        </div>
    </form>

    <x-slot name="foot_section">
        Already have an account ?
        <a href="{{ route('login') }}" class="font-weight-medium text-primary"> Login</a>
    </x-slot>

    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.7/js/intlTelInput.js"></script>
    <script>
        // $(document).ready( function() {
            $("input.tel-input").intlTelInput({
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
            });
        // });
    </script>
    @endpush

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

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
