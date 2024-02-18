@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <form action="{{route('register')}}" method="post" class="w-4/12 bg-gray-300 p-6 rounded-lg">
            @csrf
            <div class="mb-4">
                <label class="sr-only" for="name">Name :</label>
                <input class="bg-gray-500 border-2 w-full rounded-lg p-4 @error('name') border-red-600 @enderror"
                       type="text" value="{{old('name')}}" name="name" id="name" placeholder="Enter Your Name">

                @error('name')
                <div class="text-red-500 text-sm mt-2">
                    {{$message}}
                </div>
                @enderror

            </div>
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
                <label class="sr-only" for="password_confirmation">Conform Password :</label>
                <input class="bg-gray-500 border-2 w-full rounded-lg p-4"
                       type="password" name="password_confirmation" id="password_confirmation"
                       placeholder="Enter Conform Password">
            </div>
            <div>
                <button class="bg-blue-500 text-center  text-white px-4 py-3 rounded font-medium w-full" type="submit">Registration</button>
            </div>

        </form>
    </div>
@endsection
