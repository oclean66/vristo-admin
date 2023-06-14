<x-blank-layout>
    <div
        class="flex justify-center items-center min-h-screen bg-[url('/assets/images/map.svg')] dark:bg-[url('/assets/images/map-dark.svg')] bg-cover bg-center">
        <div class="panel sm:w-[480px] m-6 max-w-lg w-full">
            <h2 class="font-bold text-2xl mb-3">{{ __('Sign In') }}</h2>
            <p class="mb-7">Enter your email and password to login</p>
            {{ $errors }}
            <form class="space-y-5" action="{{ route('password.update') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div>
                    <label for="email">{{ __('Email') }}</label>
                    <input id="email" type="email" name="email" class="form-input" placeholder="Enter Email" />
                </div>
                <div>
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" name="password" class="form-input"
                        placeholder="Enter Password" />
                </div>
                <div>
                    <label for="password">{{ __('Confirm Password') }}</label>
                    <input id="password" type="password" name="password_confirmation" class="form-input"
                        placeholder="Enter Password" />
                </div>
                <button type="submit" class="btn btn-primary w-full uppercase">{{ __('Save') }}</button>
            </form>
        </div>
    </div>
</x-blank-layout>
