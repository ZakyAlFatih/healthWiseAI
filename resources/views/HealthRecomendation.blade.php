<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalized Health Recommendations</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primaryColor: '#5d5a88',
                        cardBg: '#f2f1f9',
                    },
                    borderRadius: {
                        card: '1rem',
                    },
                    boxShadow: {
                        active: '0px 8px 15px rgba(93, 90, 136, 0.2)',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(-5px)' },
                            '50%': { transform: 'translateY(5px)' },
                        }
                    },
                    animation: {
                        float: 'float 1s ease-in-out infinite',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100">
    <!-- Navigation Bar -->
    <nav class="fixed top-0 left-0 w-full bg-white shadow-md z-10">
        <div class="flex items-center px-8 py-4">
            <img src="image/HealthWise.png" alt="HealthWise Logo" class="h-10">
            <p class="text-lg font-bold text-primaryColor ml-4">HealthWiseAI</p>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex flex-col items-center justify-center min-h-screen mt-20">
        <!-- Recommendations Section -->
        <p class="text-3xl font-bold text-primaryColor mb-8">Your Personalized Health Recommendations</p>
        <p class="text-gray-600 mb-12 text-center">Based on your health data, here are some tips to improve your overall health.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 px-6 md:px-0">
            <!-- Card 1 -->
            <div class="card bg-cardBg rounded-card shadow-md p-6 flex flex-col items-center text-center w-80 transition-transform">
                <img src="images/sleep.png" alt="Sleep Tips" class="h-32 w-32 mb-4 transition-transform duration-300 transform hover:scale-110">
                <h3 class="text-lg font-bold text-primaryColor mb-2">Better Sleep Tips</h3>
                <p class="text-gray-600 mb-4">Aim for 7-9 hours of sleep every night for better energy and focus.</p>
                <a href="https://www.mayoclinic.org/healthy-lifestyle/adult-health/in-depth/sleep/art-20048379" target="_blank" class="text-primaryColor font-medium">Read more →</a>
            </div>

            <!-- Card 2 -->
            <div class="card bg-cardBg rounded-card shadow-md p-6 flex flex-col items-center text-center w-80 transition-transform">
                <img src="images/stress.png" alt="Stress Management" class="h-32 w-32 mb-4 transition-transform duration-300 transform hover:scale-110">
                <h3 class="text-lg font-bold text-primaryColor mb-2">Stress Management</h3>
                <p class="text-gray-600 mb-4">Consider practicing meditation or deep breathing exercises to reduce stress.</p>
                <a href="https://www.mentalhealth.org.uk/explore-mental-health/publications/how-manage-and-reduce-stress" target="_blank" class="text-primaryColor font-medium">Read more →</a>
            </div>

            <!-- Card 3 -->
            <div class="card bg-cardBg rounded-card shadow-md p-6 flex flex-col items-center text-center w-80 transition-transform">
                <img src="images/hydration.png" alt="Hydration" class="h-32 w-32 mb-4 transition-transform duration-300 transform hover:scale-110">
                <h3 class="text-lg font-bold text-primaryColor mb-2">Hydration and Nutrition</h3>
                <p class="text-gray-600 mb-4">Drink at least 8 cups of water daily for optimal hydration and health.</p>
                <a href="https://ivboost.uk/nutrition-hydration-tips/" target="_blank" class="text-primaryColor font-medium">Read more →</a>
            </div>

            <!-- Card 4 -->
            <div class="card bg-cardBg rounded-card shadow-md p-6 flex flex-col items-center text-center w-80 transition-transform">
                <img src="images/mindfulness.png" alt="Mindfulness" class="h-32 w-32 mb-4 transition-transform duration-300 transform hover:scale-110">
                <h3 class="text-lg font-bold text-primaryColor mb-2">Mindfulness</h3>
                <p class="text-gray-600 mb-4">Try mindfulness techniques to improve your mental well-being.</p>
                <a href="https://www.mind.org.uk/information-support/drugs-and-treatments/mindfulness/mindfulness-exercises-tips/" target="_blank" class="text-primaryColor font-medium">Read more →</a>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.card').forEach((card) => {
            card.addEventListener('click', () => {
                card.classList.add('animate-float');
                setTimeout(() => {
                    card.classList.remove('animate-float');
                }, 1000); 
            });
        });
    </script>
</body>
</html>
