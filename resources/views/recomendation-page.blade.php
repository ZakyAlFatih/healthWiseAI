<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommendations</title>
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
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-white text-primaryColor">
    <nav class="fixed top-0 left-0 w-full bg-white shadow-md z-10">
        <div class="flex items-center px-8 py-4">
            <img src="images/HealthWise.png" alt="HealthWise Logo" class="h-10">
            <p class="text-lg font-bold text-primaryColor ml-4">HealthWiseAI</p>
        </div>
    </nav>

    <div class="flex flex-col items-center mt-28 px-4">
        <h1 class="text-4xl font-bold">Get Tailored Suggestions</h1>
        <div class="flex space-x-6 mt-8">
            <button onclick="showTab('health')" id="healthTab"
                class="tab-button font-bold text-gray-500">Health</button>
            <button onclick="showTab('food')" id="foodTab" class="tab-button font-bold text-gray-500">Food</button>
            <button onclick="showTab('exercise')" id="exerciseTab"
                class="tab-button font-bold text-gray-500">Exercise</button>
        </div>

        <div id="health" class="tab-content mt-12">
            <div class="card flex items-center bg-cardBg rounded-card p-8 shadow-lg transition-transform transform hover:translate-y-[-5px] hover:shadow-active"
                style="width: 40rem;">
                <div class="flex-shrink-0 mr-6">
                    <img src="images/health_icon.png" alt="Health"
                        class="h-48 w-48 transition-transform transform hover:scale-110">
                </div>
                <div class="text-left">
                    <h2 class="text-2xl font-bold text-primaryColor">Health Recommendation</h2>
                    <p class="text-sm text-gray-600 mt-2">Expert guidance to help you achieve your optimal health.</p>
                    <a href="/health-rec"
                        class="mt-6 inline-flex items-center border border-primaryColor text-primaryColor px-4 py-2 rounded-lg text-sm font-medium transition-colors hover:bg-primaryColor hover:text-white">
                        Learn More
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 14.707a1 1 0 010-1.414L13.586 10 10.293 6.707a1 1 0 111.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h10a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div id="food" class="tab-content hidden mt-12">
            <div class="card flex items-center bg-cardBg rounded-card p-8 shadow-lg" style="width: 40rem;">
                <div class="flex-shrink-0 mr-6">
                    <img src="images/food_icon.png" alt="Food"
                        class="h-48 w-48 transition-transform transform hover:scale-110">
                </div>
                <div class="text-left">
                    <h2 class="text-2xl font-bold text-primaryColor">Food Recommendation</h2>
                    <p class="text-sm text-gray-600 mt-2">Discover the best foods to support your health goals.</p>
                    <a href="/food-rec"
                        class="mt-6 inline-flex items-center border border-primaryColor text-primaryColor px-4 py-2 rounded-lg text-sm font-medium transition-colors hover:bg-primaryColor hover:text-white">
                        Learn More
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 14.707a1 1 0 010-1.414L13.586 10 10.293 6.707a1 1 0 111.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h10a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div id="exercise" class="tab-content hidden mt-12">
            <div class="card flex items-center bg-cardBg rounded-card p-8 shadow-lg" style="width: 40rem;">
                <div class="flex-shrink-0 mr-6">
                    <img src="images/exercise_icon.png" alt="Exercise"
                        class="h-48 w-48 transition-transform transform hover:scale-110">
                </div>
                <div class="text-left">
                    <h2 class="text-2xl font-bold text-primaryColor">Exercise Recommendation</h2>
                    <p class="text-sm text-gray-600 mt-2">Customized exercise plans to keep you fit and active.</p>
                    <a href="exer-rec"
                        class="mt-6 inline-flex items-center border border-primaryColor text-primaryColor px-4 py-2 rounded-lg text-sm font-medium transition-colors hover:bg-primaryColor hover:text-white">
                        Learn More
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 14.707a1 1 0 010-1.414L13.586 10 10.293 6.707a1 1 0 111.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h10a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showTab(tabId) {
            const tabs = ['health', 'food', 'exercise'];
            tabs.forEach(id => {
                document.getElementById(id).classList.add('hidden');
                document.getElementById(`${id}Tab`).classList.remove('border-primaryColor', 'text-primaryColor',
                    'underline');
                document.getElementById(`${id}Tab`).classList.add('text-gray-500');
            });
            document.getElementById(tabId).classList.remove('hidden');
            document.getElementById(`${tabId}Tab`).classList.add('border-primaryColor', 'text-primaryColor', 'underline');
            document.getElementById(`${tabId}Tab`).classList.remove('text-gray-500');
        }
    </script>
</body>

</html>
