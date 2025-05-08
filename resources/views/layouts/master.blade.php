<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Thiện Nguyện App')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS Files --> 
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <body class="@yield('body-class')">
    <!-- Additional CSS -->
    @yield('styles')
    





    
</head>
<body class="@yield('body-class')">
    <!-- Header Section -->
    @include('partials.header')

    <!-- Main Content -->
    {{-- <main>
        @yield('content')
    </main> --}}

    <!-- Footer Section -->


    <!-- JavaScript Files -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Additional JavaScript -->
    @yield('scripts')
</body>
</html>