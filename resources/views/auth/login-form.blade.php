<x-auth-card>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email Address -->
        <div>
            <x-label for="email" :value="__('Электронная почта:')" />

            <x-input id="email" class="" type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-label for="password" :value="__('Пароль:')" />

            <x-input id="password" class=""
                     type="password"
                     name="password"
                     required autocomplete="current-password" />
        </div>

        <!-- Remember Me -->
        <div class="mt-3 form-check">
            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
            <label for="remember_me" >
                {{ __('Запомнить меня') }}
            </label>
        </div>

        <div class="d-flex justify-content-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-muted" href="{{ route('password.request') }}" style="margin-right: 15px; margin-top: 15px;">
                    {{ __('Забыли пароль?') }}
                </a>
            @endif

            <x-button class="ml-3">
                {{ __('Войти') }}
            </x-button>
        </div>
    </form>
</x-auth-card>
