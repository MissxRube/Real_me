@extends('front.loginbar')

@section('login')
{{-- <x-guest-layout>
    <x-jet-authentication-card> --}}
        {{-- <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot> --}}
        <div class="registerbar">
            <img src="{{asset('storage/login/bg01.jpg')}}" alt="" class="p-0 m-0 class-fluid w-100">
            <div class="registeritem  wow fadeInUp"  >

        <x-jet-validation-errors class="mb-4 text-danger" />

        {{-- @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif --}}

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="spanlinebar">
                <x-jet-label for="email" class="text-gold col-12 text-center" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full col-8 offset-2 formstyle text-gold" type="email" name="email" :value="old('email')" required autofocus />
                <span class="gradient-gold spanline  col-8 offset-2 formstyle text-gold" ></span>
            </div>

            <div class="mt-4 spanlinebar">
                <x-jet-label for="password" class="text-gold col-12 text-center" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full col-8 offset-2 formstyle text-gold" type="password" name="password" required autocomplete="current-password" />
                <span class="gradient-gold spanline  col-8 offset-2 formstyle text-gold" ></span>

            </div>

            {{-- 記住我 --}}
            {{-- <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> --}}

            <div class="flex items-center justify-center  text-center pt-2 pb-2 ">
                <p class="text-gold">尚未註冊請<a href="{{url('/register')}}" class="text-gold h5">按此</a></p>





                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 text-gold" href="{{ route('password.request') }}">
                        {{-- {{ __('Forgot your password?') }} --}}
                    </a>
                @endif

                <x-jet-button class=" btn btn-gold  ">
                    {{ __('登入') }}
                </x-jet-button>
            </div>
        </form>
    {{-- </x-jet-authentication-card>
</x-guest-layout> --}}
</div>
</div>
@endsection
