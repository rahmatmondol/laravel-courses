<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="7lzPugzVg5TlZaSCWYAa7KrOZET1KqOtpfFEdXxs">

    <title>Laravel Courses</title>

    <meta name="title" content="Laravel Courses">
    <meta name="description" content="Find the best courses and books on the Laravel ecosystem.">
    <meta name="robots" content="all">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Laravel Courses">
    <meta property="og:description" content="Find the best courses and books on the Laravel ecosystem.">
    <meta property="og:url" content="https://laravel-courses.com">
    <meta property="og:image" content="https://laravel-courses.com/img/card.jpg">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://laravel-courses.com">
    <meta property="twitter:title" content="Laravel Courses">
    <meta property="twitter:description" content="Find the best courses and books on the Laravel ecosystem.">
    <meta property="twitter:site" content="@LaravelCourses">
    <meta property="twitter:image" content="https://laravel-courses.com/img/card.jpg">

    <link rel="shortcut icon" href="https://laravel-courses.com/img/favicon.png">

    <!-- Fonts -->
    <link rel="stylesheet" href="Laravel-Courses_files/inter.css">

    <!-- Scripts -->
    <link rel="stylesheet" as="style" href="{{ asset('assets/css/app.css') }}">
    <link rel="modulepreload" href="Laravel%20Courses_files/app.1501acb0.js">

    <!-- Styles -->
    <style>
        [wire\:loading],
        [wire\:loading\.delay],
        [wire\:loading\.inline-block],
        [wire\:loading\.inline],
        [wire\:loading\.block],
        [wire\:loading\.flex],
        [wire\:loading\.table],
        [wire\:loading\.grid],
        [wire\:loading\.inline-flex] {
            display: none;
        }

        [wire\:loading\.delay\.shortest],
        [wire\:loading\.delay\.shorter],
        [wire\:loading\.delay\.short],
        [wire\:loading\.delay\.long],
        [wire\:loading\.delay\.longer],
        [wire\:loading\.delay\.longest] {
            display: none;
        }

        [wire\:offline] {
            display: none;
        }

        [wire\:dirty]:not(textarea):not(input):not(select) {
            display: none;
        }

        input:-webkit-autofill,
        select:-webkit-autofill,
        textarea:-webkit-autofill {
            animation-duration: 50000s;
            animation-name: livewireautofill;
        }

        @keyframes livewireautofill {
            from {}
        }
    </style>
</head>

<body class="font-sans antialiased">

    <div class="overflow-hidden">
        <div class="w-full  bg-header  h-auto bg-no-repeat bg-cover">
            <header class="w-full h-full relative ">
                <!-- ::::::::::::navbar:::::::::::: -->
                @include('include.navbar')
                <!-- ::::::::::::header content:::::::::::: -->
                @if (isset($header))
                    {{$header}}
                @endif

            </header>
            
            <main>
                <!-- ::::::::::::|Featured Courses|:::::::::::: -->
                {{$slot}}
            </main>
        </div>

        @if (isset($subscribe))
            {{ $subscribe }}
        @endif

       
        <!-- Livewire Component wire-end:td2YsP0OCCLkVhTYUqTP -->
        <!-- ::::::::::::footer:::::::::::: -->
        @include('include.footer')

    </div>



</body>

</html>