<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Business Counter</title>

    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>




<body>
    <nav class="mt-6">
        <div class="container mx-auto flex items-center justify-between px-4 py-6">
            <ul class="flex items-center">
                <li>
                    <a class="font-bold text-2xl text-blue-700" href="#">The Business Counter</a>
                    
                </li>
   
            </ul>
            <ul class="flex">
                <li>
                    <a class="font-semibold  text-blue-700" href="#">Calculations</a>
                </li>
                <li class="ml-16">
                    <a class="font-semibold text-blue-700" href="{{ route('login') }}">Login</a>
                </li>
                 <li class="ml-16">
                    <a class="font-semibold text-blue-700" href="">NL</a>
                </li>
            </ul>
        </div>
    
    </nav>
    
    @yield('content')
</body>
</html>

