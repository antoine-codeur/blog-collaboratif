<x-guest-layout>
    <h1>Login</h1>
    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" autocomplete="off">
        @csrf

        <!-- Email Address -->
        <div class="inputBox">
            <x-text-input id="email" 
                            type="email" 
                            name="email" 
                            placeholder="E-Mail Address"
                            :value="old('email')" 
                            required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <svg class="login-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M224,256c70.69,0,128-57.31,128-128S294.69,0,224,0,96,57.31,96,128s57.31,128,128,128ZM178.3,304C79.8,304,0,383.8,0,482.3c0,16.4,13.3,29.7,29.7,29.7h388.6c16.4,0,29.7-13.3,29.7-29.7,0-98.5-79.8-178.3-178.3-178.3h-91.4Z"/>
                </svg>
        </div>

        <!-- Password -->
        <div class="inputBox">
            <x-text-input id="password"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')"/>
                <svg class="login-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M144,144v48h160v-48c0-44.2-35.8-80-80-80s-80,35.8-80,80ZM80,192v-48C80,64.5,144.5,0,224,0s144,64.5,144,144v48h16c35.3,0,64,28.7,64,64v192c0,35.3-28.7,64-64,64H64c-35.3,0-64-28.7-64-64v-192c0-35.3,28.7-64,64-64h16Z"/>
                </svg>
        </div>

        <!-- Remember Me -->
        <div class="RememberForgot">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" name="remember">
                <span >{{ __('Remember me') }}</span>
            </label>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot password?') }}
                </a>
            @endif
        </div>
        <x-primary-button class="btn">
            {{ __('Login') }}
        </x-primary-button>
        <div class="register">
            <p>Don't have an account ? 
                <a class="registerLink" href="{{ route('register') }}">
                    {{ __('Register') }}
                </a>
            </p>
        </div>
    </form>
</x-guest-layout>
