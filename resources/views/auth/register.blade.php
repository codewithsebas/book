@extends('layouts.app')
@section('title', 'Login')
@section('content')

<main class="w-full h-screen flex">
    <div class="2xl:w-3/5 w-4/5 h-full flex items-center justify-center">
       <div class="w-full max-w-md 2xl:max-w-xl flex flex-col gap-5 p-4">
        <h1 class="text-black/70 text-3xl font-bold uppercase">Welcome to Register</h1>
        <form action="#" class="flex flex-col gap-5">
            <div class="flex flex-col gap-3">
                <div class="flex flex-col gap-1">
                    <label for="name">Name</label>
                    <input type="text" placeholder="Your name" id="name" name="name" class="w-full py-2 px-3 outline-none border rounded-md duration-200 hover:border-blue-300">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Your email" id="email" name="email" class="w-full py-2 px-3 outline-none border rounded-md duration-200 hover:border-blue-300">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Your password" id="password" name="password" class="w-full py-2 px-3 outline-none border rounded-md duration-200 hover:border-blue-300">
                </div>
            </div>

            <div class="flex justify-between">
                <div class="flex items-center gap-2">
                    <input type="checkbox" id="check">
                    <label for="check">Save password</label>
                </div>
                <a class="font-bold" href="{{ route('login.index')}}">Login</a>
            </div>
            <button type="submit" class="bg-black text-white w-full py-2 px-3 outline-none border rounded-md">Register</button>
        </form>
       </div>
    </div>
    <div class="w-full h-full bg-red-500">
        <img class="w-full h-full object-cover" src="https://www.xtrafondos.com/wallpapers/taza-de-cafe-y-libro-6681.jpg" alt="Cafe">
    </div>
</main>

@endsection