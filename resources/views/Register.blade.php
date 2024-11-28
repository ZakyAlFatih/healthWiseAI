<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthWiseAI</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primaryColor: '#5d5a88',
                        secondaryColor: "#f2f1fa"
                    },
                    height: {
                        '128': '32rem',

                    },
                    width: {
                        '100': '38rem',
                    }
                }
            }
        }
    </script>
</head>

<body>
    <nav>
        <ul class="flex items-center justify-between w-full pl-20 pr-20">
            <div class="flex items-center">
                <li class="flex items-center justify-center"><img src="images/HealthWise.png" alt=""></li>
                <li class="flex items-center justify-center text-lg font-bold text-primaryColor">
                    <p>HealthWiseAI</p>
                </li>
            </div>
            <div class="flex items-center">
                <li class="flex items-center justify-center"><button
                        class="mt-10 text-primaryColor border font-normal py-4 px-7 rounded-full text-sm mr-4">Login</button>
                </li>
                <li class="flex items-center justify-center"><button
                        class="bg-primaryColor mt-10 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-full text-sm">Get
                        Started</button></li>
            </div>
        </ul>

    </nav>
    <div class="flex items-center justify-center mt-52">
        <div class="textClass mr-28">
            <p class="text-6xl mb-4 font-bold w-100">Join us and take control of your health journey.</p>
            <p class="text-xl w-100 font-normal">Track your health, get personalized recommendations, and achieve your
                wellness goals—all in one place.</p>

            <div class="mt-10">
                <ul class="text-lg font-bold">
                    <li class="gap-4 flex items-center mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <p>Easily monitor your daily health data.</p>
                    </li>
                    <li class="gap-4 flex items-center mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <p>Access AI-driven health advice anytime.</p>
                    </li>
                    <li class="gap-4 flex items-center mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <p>Get customized fitness and meal suggestions.</p>
                    </li>
                </ul>
            </div>
        </div>

        <div
            class="h-128 w-4/12 rounded-3xl bg-secondaryColor border flex justify-center items-center text-primaryColor">
            <form action="">
                <div class="grid grid-cols-2 gap-4 font-bold w-10/12">
                    <div class="flex flex-col">
                        <p class="ml-16">First Name</p>
                        <input class="rounded-full h-16 w-64 ml-14 pl-4" type="text" name="" id=""
                            placeholder="First Name">
                    </div>
                    <div class="flex flex-col">
                        <p class="ml-16">Last Name</p>
                        <input class="rounded-full h-16 w-64 ml-14 pl-4" type="text" name="" id=""
                            placeholder="Last Name">
                    </div>
                    <div class="flex flex-col">
                        <p class="ml-16">Email</p>
                        <input class="rounded-full h-16 w-64 ml-14 pl-4" type="text" name="" id=""
                            placeholder="Email">
                    </div>
                    <div class="flex flex-col">
                        <p class="ml-16">Phone</p>
                        <input class="rounded-full h-16 w-64 ml-14 pl-4" type="text" name="" id=""
                            placeholder="Phone">
                    </div>
                    <div class="flex flex-col">
                        <p class="ml-16">Create a Password</p>
                        <input class="rounded-full h-16 w-64 ml-14 pl-4" type="text" name="" id=""
                            placeholder="Password">
                    </div>
                    <div class="flex flex-col">
                        <p class="ml-16">Confirm A Password</p>
                        <input class="rounded-full h-16 w-64 ml-14 pl-4" type="text" name="" id=""
                            placeholder="Confirm Password">
                    </div>
                </div>
                <button
                    class="ml-16 bg-primaryColor hover:bg-blue-700 text-white font-bold py-4 px-60 rounded-full text-sm mt-6">Sign
                    Up</button>

            </form>
        </div>


    </div>
    </div>
    </div>
</body>

</html>
