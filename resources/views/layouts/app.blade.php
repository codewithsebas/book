<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <title>@yield('title') - Book</title>
</head>
<body>
    @if (auth()->check())
    <header class="flex justify-between p-5 w-full">
        <h1 class="text-4xl font-bold">Books</h1>
        <ul class="flex gap-5">
            <li><a  class="bg-black text-white py-2 px-4 rounded-md" href="{{ route('login.destroy') }}">Logout</a></li>
            <li><a  class="bg-black text-white py-2 px-4 rounded-md" href="{{ route('register.index') }}">Reservation</a></li>
        </ul>
    </header>
    @else 
    @endif
    @yield('content')
</body>
</html>