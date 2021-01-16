@extends('front.loginbar')

@section('logincontent')


    <div class="registerbar">

    <img src="{{asset('storage/login/bg01.jpg')}}" alt="" class="p-0 m-0 class-fluid w-100">


        <div class="registeritem wow fadeInUp"  >
            {{-- <x-guest-layout>
                <x-jet-authentication-card> --}}
                    {{-- <x-slot name="logo">
                         <x-jet-authentication-card-logo />
                    </x-slot> --}}

                    <x-jet-validation-errors class="mb-4 text-danger" />

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="spanlinebar">
                            <x-jet-label for="name" class="text-gold col-12 text-center" value="{{ __('Name') }}" />
                            <x-jet-input id="name" class="block mt-1 w-full col-8 offset-2 formstyle text-gold " type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <span class="gradient-gold spanline  col-8 offset-2 formstyle text-gold" ></span>
                        </div>

                        <div class="mt-4 spanlinebar">
                            <x-jet-label for="email"  class="text-gold col-12 text-center" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full col-8 offset-2 formstyle text-gold" type="email" name="email" :value="old('email')" required />
                            <span class="gradient-gold spanline col-8 offset-2 formstyle text-gold" ></span>

                        </div>

                        <div class="mt-4 spanlinebar">
                            <x-jet-label for="password"  class="text-gold col-12 text-center"  value="{{ __('Password') }}" />
                            <x-jet-input id="password" class="block mt-1 w-full col-8 offset-2 formstyle text-gold" type="password" name="password" required autocomplete="new-password" />
                            <span class="gradient-gold spanline col-8 offset-2" ></span>
                        </div>

                        <div class="mt-4 spanlinebar">
                            <x-jet-label for="password_confirmation"  class="text-gold col-12 text-center" value="{{ __('Confirm Password') }}" />
                            <x-jet-input id="password_confirmation" class="block mt-1 w-full col-8 offset-2 formstyle text-gold" type="password" name="password_confirmation" required autocomplete="new-password" />
                            <span class="gradient-gold spanline col-8 offset-2" ></span>
                        </div>

                        <div class="flex items-center justify-end mt-4 pb-2 pl-5 ml-2">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 text-gold" href="{{ route('login') }}">
                                {{ __('是否確定註冊?') }}
                            </a>

                            <x-jet-button class="ml-2 btn btn-gold ">
                                {{ __('註冊') }}
                            </x-jet-button>

                        </div>
                    </form>
                {{-- </x-jet-authentication-card>
            </x-guest-layout> --}}
        </div>
    </div>




@stop
