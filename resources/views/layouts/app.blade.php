<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Midterm</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Midterm</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('teachers.index') }}">Teachers</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('subjects.index') }}">Subjects</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('classrooms.index') }}">Classrooms</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
