<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthWise AI Features</title>
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

    <div class="flex items-center justify-center mt-28">
        <div class="flex flex-col justify-center items-center">
            <p class="text-4xl font-bold text-primaryColor">Explore HealthWiseAI Features</p>
            <p class="text-normal font-light text-primaryColor mt-8 mb-10">Select a feature to start your health journey
            </p>
            <div class="flex items-center justify-center mt-10 space-x-8">
                <a href="/input-personal" id="health-data-input" onclick="completeHealthData()" class="card group">
                    <img class="h-36 w-36 object-contain transition-transform group-hover:scale-110"
                        src="images/HealthDataInput.png" alt="Health Data Input">
                    <p class="text-xl font-bold text-primaryColor mt-4 group-hover:text-purple-800 whitespace-nowrap">
                        Health Data Input</p>
                </a>
                <a href="/get-recommendation">
                    <div class="card group grayscale" id="recommendations" onclick="showPopup()">
                        <img class="h-36 w-36 object-contain" src="images/Recomendation.png" alt="Recommendations">
                        <p class="text-xl font-bold text-primaryColor mt-4 whitespace-nowrap">Recommendations</p>
                    </div>
                </a>


                <div class="card group grayscale" id="chatbot" onclick="showPopup()">
                    <img class="h-36 w-36 object-contain" src="images/ChatBot.png" alt="Chatbot">
                    <p class="text-xl font-bold text-primaryColor mt-4 whitespace-nowrap">Chatbot</p>
                </div>

                <div class="card group grayscale" id="health-report" onclick="showPopup()">
                    <img class="h-36 w-36 object-contain" src="images/HealthReport.png" alt="Health Report">
                    <p class="text-xl font-bold text-primaryColor mt-4 whitespace-nowrap">Health Report</p>
                </div>
            </div>
        </div>
    </div>

    <div id="popup-message" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <p class="text-lg font-semibold text-primaryColor mb-4">Let’s make your health journey smarter.</p>
            <p class="text-sm text-gray-600 mb-4">Complete your health data input to access all the powerful features of
                HealthWiseAI!</p>
            <button class="bg-primaryColor text-white px-4 py-2 rounded-lg" onclick="closePopup()">OK</button>
        </div>
    </div>

    <script>
        let isHealthDataComplete = false;

        function completeHealthData() {
            isHealthDataComplete = true;
            document.getElementById('recommendations').classList.remove('grayscale');
            document.getElementById('recommendations').onclick = null;
            document.getElementById('chatbot').classList.remove('grayscale');
            document.getElementById('chatbot').onclick = null;
            document.getElementById('health-report').classList.remove('grayscale');
            document.getElementById('health-report').onclick = null;
        }

        function showPopup() {
            if (!isHealthDataComplete) {
                document.getElementById('popup-message').classList.remove('hidden');
            }
        }

        function closePopup() {
            document.getElementById('popup-message').classList.add('hidden');
        }
    </script>

    <style>
        .card {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #F9F9FE;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0px 4px 10px rgba(93, 90, 136, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
            width: 16rem;
            height: 20rem;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 8px 15px rgba(93, 90, 136, 0.2);
        }

        .card:active {
            transform: translateY(2px);
            box-shadow: 0px 4px 8px rgba(93, 90, 136, 0.3);
        }
    </style>
</body>

</html>
