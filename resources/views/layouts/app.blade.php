
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <title>{{config('app.name')}}</title>
</head>
<body class="bg-gray-100">
    
    <main>
        {{ $slot }}
    </main>

    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>