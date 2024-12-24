<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise Recommendation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primaryColor: '#5d5a88',
                        cardBg: '#F9F9FE',
                    },
                    borderRadius: {
                        card: '1rem',
                    },
                    boxShadow: {
                        active: '0px 8px 15px rgba(93, 90, 136, 0.2)',
                    }
                }
            }
        }
    </script>
</head>

<body>
    <nav class="fixed top-0 left-0 w-full bg-white shadow-md">
        <div class="flex items-center px-8 py-4">
            <img src="images/HealthWise.png" alt="HealthWise Logo" class="h-10">
            <p class="text-lg font-bold text-primaryColor ml-4">HealthWiseAI</p>
        </div>
    </nav>

    <div class="container mx-auto mt-28 p-6">
        <h1 class="text-3xl font-bold text-primaryColor text-center mb-6">Recommendations</h1>

        <div class="bg-cardBg p-6 rounded-card shadow-active">
            <h2 class="text-2xl font-semibold text-primaryColor mb-4">Exercise Recommendation:</h2>
            <p class="text-lg text-gray-700">{{ $exerrecom }}</p>
        </div>

        <div class="text-center mt-8">
            <a href="/input-personal">
                <button class="bg-primaryColor text-white px-6 py-3 rounded-lg hover:bg-purple-800 transition">Input
                    Health Data For Next Day</button>
            </a>
        </div>
    </div>
</body>

</html>
