@extends('layouts.app')
@section('title', 'Login')
@section('content')

<main class="w-full h-screen flex">
    <div class="2xl:w-3/5 w-4/5 h-full flex items-center justify-center">
       <div class="w-full max-w-md 2xl:max-w-xl flex flex-col gap-5 p-4">
        <h1 class="text-black/70 text-3xl font-bold uppercase">Welcome to Register</h1>
        <form action="" method="POST" class="flex flex-col gap-5">
            @csrf
            <div class="flex flex-col gap-3">
                <div class="flex flex-col gap-1">
                    <label for="name">Name</label>
                    <input type="text" placeholder="Your name" id="name" name="name" class="w-full py-2 px-3 outline-none border rounded-md duration-200 hover:border-blue-300">
                    @error('name')        
                        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2">* {{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col gap-1">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Your email" id="email" name="email" class="w-full py-2 px-3 outline-none border rounded-md duration-200 hover:border-blue-300">
                    @error('email')        
                        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2">* {{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-1">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Your password" id="password" name="password" class="w-full py-2 px-3 outline-none border rounded-md duration-200 hover:border-blue-300">
                
                    @error('password')        
                    <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2">* {{ $message }}</p>
                @enderror
            </div>
                <div class="flex flex-col gap-1">
                    <label for="password_confirmation">Password</label>
                    <input type="password" placeholder="Confirm your password" id="password_confirmation" name="password_confirmation" class="w-full py-2 px-3 outline-none border rounded-md duration-200 hover:border-blue-300">
                </div>
            </div>

            <div class="flex justify-between">
                <div class="flex items-center gap-2">
                    <input type="checkbox" id="check">
                    <label for="check">Save password</label>
                </div>
                <a class="font-bold" href="{{ route('login.index')}}">Login</a>
            </div>
            {{-- @error('name')
                <p class="bg-red-300 py-2 px-3 border rounded-md text-center">{{ $name }}</p>
            @enderror --}}
            <button type="submit" class="bg-black text-white w-full py-2 px-3 outline-none border rounded-md">Register</button>
        </form>
       </div>
    </div>
    <div class="w-full h-full bg-red-500">
        <img class="w-full h-full object-cover" src="https://www.xtrafondos.com/wallpapers/taza-de-cafe-y-libro-6681.jpg" alt="Cafe">
    </div>
</main>

@endsection