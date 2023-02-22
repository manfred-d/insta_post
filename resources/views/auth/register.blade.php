@extends('layouts.app')

@section('content')
        <div class="flex justify-center">
            <div class="w-4/12 bg-white p-6 rounded-lg">
                <p class="p-2 bold text-center">Register </p>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="sr-only">Name</label>
                            <input type="text" name="name" id="name" placeholder="Your Name"
                            class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">

                            @error('name')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="username" class="sr-only">Username</label>
                            <input type="text" name="username" id="username" placeholder="Username"
                            class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('username') }}">
                        
                            @error('username')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        <div class="mb-4">
                            <label for="email" class="sr-only">Email</label>
                            <input type="text" name="email" id="email" placeholder="Your Email"
                            class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('email') }}">
                        
                            @error('email')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <div class="mb-4">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="password" placeholder="Your Password"
                            class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                        
                            @error('password')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <div class="mb-4">
                            <label for="password_confirmation" class="sr-only">Passowrd again</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your Password"
                            class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                       
                            @error('password')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                    
                        <div>
                            <button type="submit" class="bg-green-600 text-white px-4 py-3 rounded font-medium w-full">
                                Register
                            </button>
                        </div>
                        <div class="mb-4 p-2">
                            <p class="text-blue"> Already have an account? <a href=" {{ route('login') }} " >Login here</a></p>
                        
                        </div>

                    </form>
                    

        </div>

        </div>
<div class="p-5"></div>
@endsection