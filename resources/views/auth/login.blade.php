<x-guest-layout>
    <x-auth-card>
        
    <x-slot name="logo">
            <a href="/">
            <img src="../public/images/logo.png" style="width:40px; height:40px;" >
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
                <x-label for="email" :value="__('اسم المستخدم:')" />

                <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__(':كلمة المرور')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

          
            

                <x-button class="ml-3">
                    {{ __('تسجيل الدخول') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
