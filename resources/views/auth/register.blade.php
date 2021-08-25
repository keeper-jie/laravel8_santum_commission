<x-guest-layout>
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
                <x-label for="name" :value="__('姓名')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus placeholder="姓名" />
            </div>

            <!-- phone -->
            <div class="mt-4">
                <x-label for="phone" :value="__('电话/手机号')" />
                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required placeholder="电话或者手机号"/>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('邮箱')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  placeholder="可为空"/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('密码')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="长度大于8位" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('确认密码')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required placeholder="确认密码"/>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('已经注册?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('注册') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>