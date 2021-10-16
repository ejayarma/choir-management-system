<x-guest-layout>
    <x-web.section-one class="section page-title bg-image context-dark"
        style="background-image: url(images/background/bg-5-1920x496.jpg);">
        <div class="row">
            <div class="col-md-10 col-xl-8 p-3">
                <h2 class="page-title-text">&nbsp; Register</h2>
            </div>
        </div>
        </div>
    </x-web.section-one>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-10 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Singing part -->
            <div class="mt-4">
                <x-label for="singing-part" :value="__('Singing Part')" />

                <div class="select-wrap position-relative">
                    <select
                        class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'"
                        id="singing-part" name="singing_part" data-select2-options='{"placeholder":"Country*"}'
                        data-constraints="@Required">
                        <option label="How do you sound like?"></option>
                        <option class="p-2 w-full" value="saprano">saprano</option>
                        <option class="p-2 w-full" value="tenor">tenor</option>
                        <option class="p-2 w-full" value="alto">alto</option>
                        <option class="p-2 w-full" value="bass">bass</option>
                        <option class="p-2 w-full" value="treble">treble</option>
                    </select>
                </div>
            </div>

            <!-- Executive? -->
            <div class="mt-4">
                <x-label for="is-executive" :value="__('Are you an executive? Tick if yes')" />

                <input id="is-executive" class="mt-1" type="checkbox" name="is_executive"
                    :value="old('is_executive')" />
            </div>


            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
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
</x-guest-layout>
