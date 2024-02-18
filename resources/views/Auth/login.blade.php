@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-gray-300 p-6 rounded-lg">
            @if(session('status'))
                <div class="bg-red-600 text-indigo-50 p-4 rounded-lg mb-6 text-center">
                    {{session('status')}}
                </div>
            @endif

            <form action="{{route('login')}}" method="post">
                @csrf

                <div class="mb-4">
                    <label class="sr-only" for="email">Email :</label>
                    <input class="bg-gray-500 border-2 w-full rounded-lg p-4 @error('email') border-red-600 @enderror"
                           type="email" value="{{old('email')}}" name="email" id="email" placeholder="Enter Your Email">

                    @error('email')
                    <div class="text-red-500 text-sm mt-2">
                        {{$message}}
                    </div>
                    @enderror

                </div>
                <div class="mb-4">
                    <label class="sr-only" for="password">Password :</label>
                    <input class="bg-gray-500 border-2 w-full rounded-lg p-4 @error('password') border-red-600 @enderror"
                           type="password" name="password" id="password" placeholder="Enter Your Password">

                    @error('password')
                    <div class="text-red-500 text-sm mt-2">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <div class="">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember">Remember Me</label>
                    </div>
                </div>

                <div>
                    <button class="bg-blue-500 text-center  text-white px-4 py-3 rounded font-medium w-full" type="submit">Login</button>
                </div>

            </form>
        </div>
    </div>
@endsection
