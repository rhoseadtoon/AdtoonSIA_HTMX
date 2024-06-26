<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTMX</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@1.9.12"></script>
    <style>
        body {
            font-size: 16px;
            font-family: 'Arial', sans-serif; 
        }
        .text-xl {
            font-size: 1.25rem;
        }
        .text-lg {
            font-size: 1.125rem; 
        }
        .text-center {
            text-align: center; 
        }
    </style>
</head>
<body class="flex h-screen">
    <div class="w-64 h-full overflow-auto bg-blue-700 text-white flex flex-col">
        <div id="brand" class="text-3xl p-4 text-center font-bold mt-8"> 
            STORE
        </div>
        <br>
        <nav id="main-nav" class="flex flex-col">
            <a href="/" class="p-3 hover:bg-blue-400 text-center text-lg">Home</a> 
            <a href="/about" class="p-3 hover:bg-blue-400 text-center text-lg">About</a>
            <a href="/products" class="p-3 hover:bg-blue-400 text-center text-lg">Products</a>
            <a href="/contact" class="p-3 hover:bg-blue-400 text-center text-lg">Contact</a>
        </nav>
    </div>
    <div class="flex-1 flex flex-col overflow-auto">
        <section class="flex-1 p-4">
            <article id="content">
                @yield('content')
            </article>
        </section>
        <footer class="text-center text-gray-500 py-3">
            Copyright &copy; 2024. All rights reserved.
        </footer>
    </div>
</body>
</html>
