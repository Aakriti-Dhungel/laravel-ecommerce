<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('./frontend/style.css')}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <header>
        <x-frontend-navbar />
    </header>
    <main>
        {{ $slot  }}
    </main>
    <footer></footer>
    
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</body>

</html>