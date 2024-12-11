<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>HealthWiseAI</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <style>
        body {
            margin: 0;
            font-family: 'rotunda', sans-serif;
            overflow-x: hidden;
        }

        .logo {
            font-weight: bolder;
            font-size: 18px;
            display: flex;
            align-items: center;
            color: #5D5A88;
        }

        .logo img {
            height: 70px;
            margin-right: 10px;
            margin-left: 50px;
        }

        .purple-bg {
            background-color: #F2F1FA;
            position: fixed;
            top: 0;
            left: 0;
            width: 60%;
            height: 100%;
            z-index: -1;
        }

        .container {
            max-width: 1200px;
            margin: -2vh 5vh;
            padding: 20px;
        }

        .row {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .form-section {
            background-color: #ffffff00;
            border-radius: 10px;
            padding: 20px;
            width: 60%;
        }

        .heading {
            font-weight: bold;
            font-size: 36px;
            line-height: 46px;
            color: #5D5A88;
            white-space: nowrap;
        }

        .desc {
            color: #9795B5;
            font-size: 18px;
            line-height: 30px;
        }

        .form-label {
            color: #5D5A88;
            font-size: 18px;
            font-weight: bold;
            line-height: 18px;
        }

        .stepper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding: 0;
            list-style: none;
            position: relative;
            width: 100%;
        }

        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            flex: 1;
            position: relative;
        }

        .step-number {
            background-color: #4a4a8a;
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
            font-size: 14px;
            font-weight: bold;
            z-index: 2;
            position: relative;
        }

        .step.active .step-number {
            background-color: #6a6ac2;
        }

        .step-label {
            font-size: 14px;
            color: #5D5A88;
            position: relative;
            z-index: 2;
        }

        .step::before {
            content: "";
            position: absolute;
            top: 15px;
            left: -50%;
            width: 100%;
            height: 2px;
            background-color: #ddd;
            z-index: 1;
        }

        .step.active::before,
        .step.completed::before {
            background-color: #5D5A88;
        }

        .step:first-child::before {
            display: none;
        }

        .form-control {
            border-radius: 50px;
            background-color: #fff;
            border: 1px solid #ddd;
            height: 70px;
        }

        .btn-primary {
            background-color: #5D5A88;
            border: none;
            border-radius: 40px;
            padding: 10px 20px;
            margin-top: 50px;
            width: 512px;
            height: 70px;
            font-weight: bold;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #3a3a7a;
        }

        .image-section {
            width: 38%;
            position: absolute;
            top: 17vh;
            right: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: -1;
        }

        .image-section img {
            max-width: 106%;
            height: auto;
        }

        select {
            position: relative;
            overflow: visible;
            direction: ltr;
        }

        .choices__item--selectable {
            background-color: #5D5A88 !important;
            color: #ffffff !important;
            border: none !important;
        }

        .custom-input {
            display: none;
            margin-top: 10px;
        }

        ::placeholder {
            color: #ADABC3;
        }

        .form-control::placeholder {
            color: #ADABC3;
        }

        .form-select option:first-child {
            color: #ADABC3;
        }

        .form-select:invalid {
            color: #ADABC3;
        }

        .form-select {
            border-radius: 50px;
            background-color: #fff;
            border: 1px solid #ddd;
            height: 70px;
            color: #5D5A88;
        }

        .page {
            display: none;
            /* Semua halaman tersembunyi secara default */
        }

        .page.active {
            display: block;
            /* Hanya halaman aktif yang tampil */
        }

        #controls {
            margin-top: 20px;
        }

        button {
            margin: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        < !-- page 2 -->body {
            margin: 0;
            font-family: 'rotunda', sans-serif;
            overflow-x: hidden;
        }

        .logo {
            font-weight: bolder;
            font-size: 18px;
            display: flex;
            align-items: center;
            color: #5D5A88;
        }

        .logo img {
            height: 70px;
            margin-right: 10px;
            margin-left: 50px;
        }

        .purple-bg {
            background-color: #F2F1FA;
            position: fixed;
            top: 0;
            left: 0;
            width: 60%;
            height: 100%;
            z-index: -1;
        }

        .container {
            max-width: 1200px;
            margin: -6vh 5vh;
            padding: 20px;
        }

        .row {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .form-section {
            background-color: #ffffff00;
            border-radius: 10px;
            padding: 20px;
            width: 60%;
        }

        .heading {
            font-weight: bold;
            font-size: 36px;
            line-height: 46px;
            color: #5D5A88;
            white-space: nowrap;
        }

        .desc {
            color: #9795B5;
            font-size: 18px;
            line-height: 30px;
        }

        .form-label {
            color: #5D5A88;
            font-size: 18px;
            font-weight: bold;
            line-height: 18px;
        }

        .stepper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding: 0;
            list-style: none;
            position: relative;
            width: 100%;
        }

        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            flex: 1;
            position: relative;
        }

        .step-number {
            background-color: #4a4a8a;
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
            font-size: 14px;
            font-weight: bold;
            z-index: 2;
            position: relative;
        }

        .step.active .step-number {
            background-color: #6a6ac2;
        }

        .step.done .step-number {
            background-color: #697386;
        }

        .step-label {
            font-size: 14px;
            color: #5D5A88;
            position: relative;
            z-index: 2;
        }

        .step::before {
            content: "";
            position: absolute;
            top: 15px;
            left: -50%;
            width: 100%;
            height: 2px;
            background-color: #ddd;
            z-index: 1;
        }

        .step.active::before,
        .step.completed::before {
            background-color: #5D5A88;
        }

        .step:first-child::before {
            display: none;
        }

        .form-control {
            border-radius: 50px;
            background-color: #fff;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            height: 70px;
        }

        .btn-primary {
            background-color: #5D5A88;
            border: none;
            border-radius: 40px;
            padding: 10px 20px;
            width: 512px;
            height: 70px;
            font-weight: bold;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #3a3a7a;
        }

        .image-section {
            width: 38%;
            position: absolute;
            top: 17vh;
            right: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: -1;
        }

        .image-section img {
            max-width: 106%;
            height: auto;
        }

        select {
            position: relative;
            overflow: visible;
            direction: ltr;
        }

        .choices__item--selectable {
            background-color: #5D5A88 !important;
            color: #ffffff !important;
            border: none !important;
        }

        .custom-input {
            display: none;
            margin-top: 10px;
        }

        ::placeholder {
            color: #ADABC3;
        }

        .form-control::placeholder {
            color: #ADABC3;
        }

        < !-- page 3 -->body {
            margin: 0;
            font-family: 'rotunda', sans-serif;
            overflow-x: hidden;
        }

        .logo {
            font-weight: bolder;
            font-size: 18px;
            display: flex;
            align-items: center;
            color: #5D5A88;
        }

        .logo img {
            height: 70px;
            margin-right: 10px;
            margin-left: 50px;
        }

        .purple-bg {
            background-color: #F2F1FA;
            position: fixed;
            top: 0;
            left: 0;
            width: 60%;
            height: 100%;
            z-index: -1;
        }

        .container {
            max-width: 1200px;
            margin: -6vh 5vh;
            padding: 20px;
        }

        .row {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .form-section {
            background-color: #ffffff00;
            border-radius: 10px;
            padding: 20px;
            width: 60%;
        }

        .heading {
            font-weight: bold;
            font-size: 36px;
            line-height: 46px;
            color: #5D5A88;
            white-space: nowrap;
        }

        .desc {
            color: #9795B5;
            font-size: 18px;
            line-height: 30px;
        }

        .form-label {
            color: #5D5A88;
            font-size: 18px;
            font-weight: bold;
            line-height: 18px;
        }

        .stepper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding: 0;
            list-style: none;
            position: relative;
            width: 100%;
        }

        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            flex: 1;
            position: relative;
        }

        .step-number {
            background-color: #4a4a8a;
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
            font-size: 14px;
            font-weight: bold;
            z-index: 2;
            position: relative;
        }

        .step.active .step-number {
            background-color: #6a6ac2;
        }

        .step.done .step-number {
            background-color: #697386;
        }

        .step-label {
            font-size: 14px;
            color: #5D5A88;
            position: relative;
            z-index: 2;
        }

        .step::before {
            content: "";
            position: absolute;
            top: 15px;
            left: -50%;
            width: 100%;
            height: 2px;
            background-color: #ddd;
            z-index: 1;
        }

        .step.active::before,
        .step.completed::before {
            background-color: #5D5A88;
        }

        .step:first-child::before {
            display: none;
        }

        .form-control {
            border-radius: 50px;
            background-color: #fff;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            height: 70px;
            width: 439px;
        }

        .btn-primary {
            background-color: #5D5A88;
            border: none;
            border-radius: 40px;
            padding: 10px 20px;
            width: 512px;
            height: 70px;
            font-weight: bold;
            font-size: 16px;
        }



        .btn-primary:hover {
            background-color: #3a3a7a;
        }

        .image-section {
            width: 38%;
            position: absolute;
            top: 17vh;
            right: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: -1;
        }

        .image-section img {
            max-width: 106%;
            height: auto;
        }

        .form-control::placeholder {
            color: #ADABC3;
        }
    </style>
</head>

<body>
    <div id="page1" class="page active">
        <div class="purple-bg"></div>

        <header class="d-flex justify-content-between align-items-center p-4">
            <div class="logo">
                <img src="images/Healthwise_logo.png" alt="Logo">
                HealthWiseAI
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="form-section">
                    <h1 class="heading">Let's Get Started with Your Health Profile</h1>
                    <p class="desc">Fill in your details to get personalized health insights.</p>


                    <ul class="stepper">
                        <li class="step active">
                            <span class="step-number">1</span>
                            <span class="step-label">Personal Information</span>
                        </li>
                        <li class="step">
                            <span class="step-number">2</span>
                            <span class="step-label">Daily Activity</span>
                        </li>
                        <li class="step">
                            <span class="step-number">3</span>
                            <span class="step-label">Diet & Nutrition</span>
                        </li>
                    </ul>

                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label" for="weight">Weight (Kg)</label>
                                <input class="form-control" id="weight" placeholder="Enter your weight (in kg)"
                                    type="text" required />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="health-history">Health History</label>
                                <select class="form-multiple" id="health-history" name="health_history[]" multiple>
                                    <option value="diabetes">Diabetes</option>
                                    <option value="hypertension">Hypertension</option>
                                    <option value="heart-disease">Heart Disease</option>
                                    <option value="stroke">Stroke</option>
                                    <option value="allergies">Allergies</option>
                                    <option value="cancer">Cancer</option>
                                    <option value="epilepsy">Epilepsy</option>
                                    <option value="mental-health">Mental health conditions (e.g., depression, anxiety)
                                    </option>
                                    <option value="other">Other</option>
                                </select>
                                <div class="custom-input" id="health-history-input">
                                    <input type="text" class="form-control" id="other-health-history"
                                        placeholder="Please specify other" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label" for="height">Height (cm)</label>
                                <input class="form-control" id="height" placeholder="Enter your height (in cm)"
                                    type="text" required />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="symptoms">Symptoms (Optional)</label>
                                <select class="form-multiple" id="symptoms" name="symptoms[]" multiple>
                                    <option value="headache">Headache</option>
                                    <option value="fever">Fever</option>
                                    <option value="cough">Cough</option>
                                    <option value="short-breath">Shortness of breath</option>
                                    <option value="fatigue">Fatigue</option>
                                    <option value="dizzy">Dizziness</option>
                                    <option value="chest-pain">Chest pain</option>
                                    <option value="abdominal-pain">Abdominal pain</option>
                                    <option value="sore-throat">Sore throat</option>
                                    <option value="muscle-aches">Muscle aches</option>
                                    <option value="joint-pain">Joint pain</option>
                                    <option value="skin-rash">Skin rash</option>
                                    <option value="other">Other</option>
                                </select>
                                <div class="custom-input" id="symptoms-input">
                                    <input type="text" class="form-control" id="other-symptoms"
                                        placeholder="Please specify other" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label" for="gender">Gender</label>
                                <select class="form-select" id="gender" required>
                                    <option selected value="">Select your gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="activity-level">Activity Level</label>
                                <select class="form-select" id="activity-level" required>
                                    <option selected value="">Select your activity level</option>
                                    <option value="sedentary">Sedentary : Little or no exercise.</option>
                                    <option value="light">Lightly active : Light exercise or sports 1-3 days a week.
                                    </option>
                                    <option value="moderate">Moderately active : Moderate exercise or sports 3-5 days a
                                        week.</option>
                                    <option value="high">Very active : Hard exercise or sports 6-7 days a week.
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary" type="button" onclick="showPage(2)">Next: Daily
                                Activity</button>
                        </div>
                    </form>
                </div>
                <div class="image-section">
                    <img alt="3D illustration of a doctor holding a thermometer" src="images/Input_Doc.png" />
                </div>
            </div>
        </div>
    </div>

    <!-- Page 2-->
    <div id="page2" class="page">
        <div class="purple-bg"></div>

        <header class="d-flex justify-content-between align-items-center p-4">
            <div class="logo">
                <img src="images/Healthwise_logo.png" alt="Logo">
                HealthWiseAI
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="form-section">
                    <h1 class="heading">Your Daily Health Log</h1>
                    <p class="desc">Track your daily habits to get personalized recommendations.<br>(This helps us
                        improve
                        your health insights.)</p>

                    <ul class="stepper">
                        <li class="step done">
                            <span class="step-number">1</span>
                            <span class="step-label">Personal Information</span>
                        </li>
                        <li class="step active">
                            <span class="step-number">2</span>
                            <span class="step-label">Daily Activity</span>
                        </li>
                        <li class="step">
                            <span class="step-number">3</span>
                            <span class="step-label">Diet & Nutrition</span>
                        </li>
                    </ul>

                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label" for="steps">Step Count</label>
                                <input class="form-control" id="steps" placeholder="Enter number of steps"
                                    type="text" required />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="calories">Calories Burned</label>
                                <input class="form-control" id="calories"
                                    placeholder="Enter the calories burned during exercise" type="text" required />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label" for="sleep">Sleep Duration</label>
                                <input class="form-control" id="sleep" placeholder="Enter number of hours"
                                    type="text" required />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="sedentary">Sedentary Time</label>
                                <input class="form-control" id="height"
                                    placeholder="How many hours did you sit today?" type="text" required />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label" for="physical-activity">Physical Activity (Other)</label>
                                <select class="form-multiple" id="physical-activity" multiple>
                                    <option value="hiking">Hiking</option>
                                    <option value="walking">Walking</option>
                                    <option value="pilates">Pilates</option>
                                    <option value="running-jogging">Running/Jogging</option>
                                    <option value="swimming">Swimming</option>
                                    <option value="yoga">Yoga</option>
                                    <option value="strength">Strength Training (Weightlifting, resistance training)
                                    </option>
                                    <option value="aerobics-cardio">Aerobics/Cardio</option>
                                    <option value="team-sports">Team Sports (Basketball, soccer, volleyball, etc.)
                                    </option>
                                    <option value="other">Other</option>
                                </select>
                                <div class="custom-input" id="physical-activity-input">
                                    <input type="text" class="form-control" id="other-physical"
                                        placeholder="Please specify other" />
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary" type="button" onclick="showPage(3)">Next: Diet &
                                Nutrition</button>
                        </div>
                    </form>
                </div>
                <div class="image-section">
                    <img alt="3D illustration of a doctor holding a thermometer" src="images/Input_Doc.png" />
                </div>
            </div>
        </div>

    </div>
    <!-- page3 -->
    <div id="page3" class="page">
        <div class="purple-bg"></div>

        <header class="d-flex justify-content-between align-items-center p-4">
            <div class="logo">
                <img src="images/Healthwise_logo.png" alt="Logo">
                HealthWiseAI
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="form-section">
                    <h1 class="heading">Your Daily Health Log</h1>
                    <p class="desc">Track your daily habits to get personalized recommendations.<br>(This helps us
                        improve
                        your health insights.)</p>

                    <ul class="stepper">
                        <li class="step done">
                            <span class="step-number">1</span>
                            <span class="step-label">Personal Information</span>
                        </li>
                        <li class="step done">
                            <span class="step-number">2</span>
                            <span class="step-label">Daily Activity</span>
                        </li>
                        <li class="step active">
                            <span class="step-number">3</span>
                            <span class="step-label">Diet & Nutrition</span>
                        </li>
                    </ul>

                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label" for="water">Water Intake</label>
                                <input class="form-control" id="water"
                                    placeholder="How many cups of water did you drink today?" type="text"
                                    required />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label" for="meal">Meal Log</label>
                                <input class="form-control" id="meal"
                                    placeholder="Enter your meals or any dietary restrictions" type="text"
                                    required />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label" for="stress">Mood or Stress Level</label>
                                <input class="form-control" id="stress"
                                    placeholder="Rate your stress or mood level today (1-10)" type="text"
                                    required />
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary" type="submit">Submit Health Data</button>
                        </div>
                    </form>
                </div>
                <div class="image-section">
                    <img alt="3D illustration of a doctor holding a thermometer" src="images/Input_Doc.png" />
                </div>
            </div>
        </div>
    </div>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const healthHistorySelect = document.getElementById('health-history');
            const symptomsSelect = document.getElementById('symptoms');
            const healthHistoryInput = document.getElementById('health-history-input');
            const symptomsInput = document.getElementById('symptoms-input');


            new Choices(healthHistorySelect, {
                removeItemButton: true,
                placeholderValue: 'Describe your health history (leave empty if none)',
                position: 'bottom',
                shouldSort: false,
            });

            new Choices(symptomsSelect, {
                removeItemButton: true,
                placeholderValue: 'Enter any symptoms (leave empty if none)',
                position: 'bottom',
                shouldSort: false,
            });


            function checkForOther(selectElement, inputElement) {
                const selectedValues = Array.from(selectElement.selectedOptions).map(option => option.value);
                if (selectedValues.includes('other')) {
                    inputElement.style.display = 'block';
                } else {
                    inputElement.style.display = 'none';
                }
            }


            healthHistorySelect.addEventListener('change', function() {
                checkForOther(healthHistorySelect, healthHistoryInput);
            });


            symptomsSelect.addEventListener('change', function() {
                checkForOther(symptomsSelect, symptomsInput);
            });


            checkForOther(healthHistorySelect, healthHistoryInput);
            checkForOther(symptomsSelect, symptomsInput);
        });
        document.addEventListener('DOMContentLoaded', function() {
            const physicalSelect = document.getElementById('physical-activity');
            const physicalInput = document.getElementById('physical-activity-input');


            new Choices(physicalSelect, {
                removeItemButton: true,
                placeholderValue: 'Enter details (leave empty if none)',
                position: 'bottom',
                shouldSort: false,
            });


            function checkForOther(selectElement, inputElement) {
                const selectedValues = Array.from(selectElement.selectedOptions).map(option => option.value);
                if (selectedValues.includes('other')) {
                    inputElement.style.display = 'block';
                } else {
                    inputElement.style.display = 'none';
                }
            }


            physicalSelect.addEventListener('change', function() {
                checkForOther(physicalSelect, physicalInput);
            });


            checkForOther(physicalSelect, physicalInput);
        });

        function showPage(pageNumber) {
            console.log(`Showing page ${pageNumber}`); // Tambahkan log untuk debug
            // Sembunyikan semua halaman
            const pages = document.querySelectorAll('.page');
            pages.forEach(page => page.classList.remove('active'));

            // Tampilkan halaman yang dipilih
            const selectedPage = document.getElementById(`page${pageNumber}`);
            if (selectedPage) {
                selectedPage.classList.add('active');
            } else {
                console.log("Page not found!");
            }
        }
    </script>
</body>

</html>
