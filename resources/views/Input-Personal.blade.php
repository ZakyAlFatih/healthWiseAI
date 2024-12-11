<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>HealthWiseAI</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <link rel="stylesheet" href="css/inputpersonal.css">
</head>
<body>
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
                <p class="desc">Track your daily habits to get personalized recommendations.<br>(This helps us improve your health insights.)</p>
                
                <div class="page1_stepper">
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
                </div>
                
                <div class="page2_stepper">
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
                </div>
                <div class="page3_stepper">
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
                </div>

                <form action="{{ route('health.store') }}" method="POST">
                @csrf
                    <!-- Page 1 -->
                    <div class="page1">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label" for="weight">Weight (Kg)</label>
                                <input class="form-control" id="weight" placeholder="Enter your weight (in kg)" type="text" name="weight" required/>
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
                                    <option value="mental-health">Mental health conditions (e.g., depression, anxiety)</option>
                                    <option value="other">Other</option>
                                </select>
                                <div class="custom-input" id="health-history-input" style="display:none;">
                                    <input type="text" class="form-control" id="other-health-history" name="health_history[]" placeholder="Please specify other" />
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label" for="height">Height (cm)</label>
                                <input class="form-control" id="height" placeholder="Enter your height (in cm)" type="text" name="height" required/>
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
                                <div class="custom-input" id="symptoms-input" style="display:none;">
                                    <input type="text" class="form-control" id="other-symptoms" name="symptoms[]" placeholder="Please specify other" />
                                </div>
                            </div>                        
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label" for="gender">Gender</label>
                                <select class="form-select" id="gender" name="gender" required>
                                    <option selected value="">Select your gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="activity-level">Activity Level</label>
                                <select class="form-select" id="activity-level" name="activity_level" required>
                                    <option selected value="">Select your activity level</option>
                                    <option value="sedentary">Sedentary : Little or no exercise.</option>
                                    <option value="light">Lightly active : Light exercise or sports 1-3 days a week.</option>
                                    <option value="moderate">Moderately active : Moderate exercise or sports 3-5 days a week.</option>
                                    <option value="high">Very active : Hard exercise or sports 6-7 days a week.</option>
                                </select>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary next" style="margin-top:10px">Next</button>
                        </div>
                    </div>
                    <!-- Page 1 -->

                    <!-- Page 2 -->
                    <div class="page2">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label" for="steps">Step Count</label>
                                <input class="form-control" id="steps" placeholder="Enter number of steps" name="step_count" type="text" required/>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="calories">Calories Burned</label>
                                <input class="form-control" id="calories" placeholder="Enter the calories burned during exercise" name="sleep_duration" type="text" required/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label" for="sleep">Sleep Duration</label>
                                <input class="form-control" id="sleep" placeholder="Enter number of hours" name="sleep_duration" type="text" required/>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="sedentary">Sedentary Time</label>
                                <input class="form-control" id="height" placeholder="How many hours did you sit today?" name="sedentary_time" type="text" required/>
                            </div>                        
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label" for="physical-activity">Physical Activity (Other)</label>
                                <select class="form-multiple" id="physical-activity" name="physical_activity[]" multiple>
                                    <option value="hiking">Hiking</option>
                                    <option value="walking">Walking</option>
                                    <option value="pilates">Pilates</option>
                                    <option value="running-jogging">Running/Jogging</option>
                                    <option value="swimming">Swimming</option>
                                    <option value="yoga">Yoga</option>
                                    <option value="strength">Strength Training (Weightlifting, resistance training)</option>
                                    <option value="aerobics-cardio">Aerobics/Cardio</option>
                                    <option value="team-sports">Team Sports (Basketball, soccer, volleyball, etc.)</option>
                                    <option value="other">Other</option>
                                </select>
                                <div class="custom-input" id="physical-activity-input" style="display:none;">
                                    <input type="text" class="form-control" id="other-physical" name="physical_activity[]" placeholder="Please specify other" />
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary2 back">Back: Personal Information</button>
                            <button type="button" class="btn btn-primary2 next">Next: Diet & Nutrition</button>
                        </div>
                    </div>
                    <!-- Page 2 -->

                    <!-- Page 3 -->
                    <div class="page3">
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <label class="form-label" for="water">Water Intake</label>
                                <input class="form-control" id="water" placeholder="How many cups of water did you drink today?" type="text" name="water_intake" required/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <label class="form-label" for="meal">Meal Log</label>
                                <input class="form-control" id="meal" placeholder="Enter your meals or any dietary restrictions" type="text" name="meal_log" required/>
                            </div>                        
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <label class="form-label" for="stress">Mood or Stress Level</label>
                                <input class="form-control" id="stress" placeholder="Rate your stress or mood level today (1-10)" type="text" name="mood_level"  required/>
                            </div>
                        </div>
                        <div class="text-center">
                        <button type="button" class="btn btn-primary2 back">Back: Daily Activity</button>
                        <button class="btn btn-primary2" type="submit">Submit Health Data</button>
                        </div>
                    </div>
                    <!-- Page 3 -->
                </form>
            </div>
            <div class="image-section">
                <img alt="3D illustration of a doctor holding a thermometer" src="images/Input_Doc.png" />
            </div>
        </div>
    </div>
    <script src="{{ asset('js/inputpersonal.js') }}"></script>      
</body>
</html>
