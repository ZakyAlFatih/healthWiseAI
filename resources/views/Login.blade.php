<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthWiseAI - Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    @if (session('success'))
        <div id="success-alert" class="bg-green-500 text-white p-4 rounded-lg mb-4 fixed top-0 left-0 right-0">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div id="error-alert" class="bg-red-500 text-white p-4 rounded-lg mb-4 fixed top-0 left-0 right-0">
            {{ session('error') }}
        </div>
    @endif

    <header class="d-flex justify-content-between align-items-center p-4">
        <div class="logo">
            <img src="images/Healthwise_logo.png" alt="Logo">
            HealthWiseAI
        </div>
        <div>
            <a href="{{ route('login') }}" class="btn btn me-2 btn-login">Login</a>
            <a href="{{ route('register') }}" class="btn btn-custom text-white">Get Started</a>
        </div>
    </header>

    <div class="container">
        <!-- Image and Welcome Section -->
        <div class="image-wrapper">
            <img src="images/Login doc.png" alt="Doctor Illustration" class="doctor-image">
            <div class="welcome-section">
                <h1 class="welcome-text">
                    Welcome Back <br>
                    to HealthWiseAI
                </h1>
                <p class="welcome-desc">Continue your health journey with ease.</p>
            </div>
        </div>

        <!-- Login Form Section -->
        <div class="form-container">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email"
                        placeholder="Enter your email address" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password"
                        placeholder="Enter your password" required>
                </div>

                <!-- Centering button wrapper -->
                <div class="btn-wrapper">
                    <button type="submit" class="btn btn-primary">Log in</button>
                </div>

                <p class="mt-3 text-center">
                    <small>Don't have an account? <a href="{{ route('register') }}" class="link-muted">Sign up
                            here</a></small>

                </p>
            </form>
        </div>
    </div>
</body>

</html>
