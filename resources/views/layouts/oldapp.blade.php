<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Hospital Management System')</title> <!-- Default title -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Optional custom CSS -->
    
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('patients.index') }}">Hospital Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('patients.index') }}">Patients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('doctors.index') }}">Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('appointments.index') }}">Appointments</a>
                    </li>

                    <!-- Authentication Links -->
                    {{-- @if (Auth::check()) <!-- If the user is authenticated --> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" 
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </li>

                        <!-- Logout form (since logout is a POST request) -->
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else <!-- If the user is not authenticated -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li> --}}
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content Section -->
    <div class="container mt-4">
        @yield('content') <!-- Content will be injected here from child views -->
    </div>

    <!-- Footer -->
    <footer class="footer mt-5 bg-light py-3">
        <div class="container text-center">
            <span class="text-muted">&copy; {{ date('Y') }} Hospital Management System</span>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <!-- Optional custom JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
