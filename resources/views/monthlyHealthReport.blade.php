<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthWiseAI</title>
    <link rel="icon" href="images/Healthwise_logo.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/monthlyhealthreport.css">
</head>

<body>
<div id="metrics-data" 
    data-days-reported="{{ $daysReported }}" 
    data-total-days-in-month="{{ $totaldaysinmonth }}"
    data-total-hydration-progress="{{ ($totalHydrationProgress * 300) / 1000 }}"
    data-total-sleep="{{ $totalSleepDuration }}"
    data-total-step-count="{{ $totalStepCount }}"
    data-total-calorie-burned="{{ $totalCalorieBurned }}"
    data-max-step="{{ $max_step }}"
    data-achievement-percentage="{{ $achievementPercentage }}"
    data-sedentary="{{ $sedentary }}"
    data-mood-level="{{ $mood_level }}">
</div>




    <header class="d-flex justify-content-between align-items-center p-4">
        <div class="logo">
            <img src="images/Healthwise_logo.png" alt="logo">
            HealthWiseAI
        </div>
    </header>

    <div class="container mt-5 position-relative">
        <div class="text-center mb-4">
            <h3 class="fw-bold" style="color: #5D5A88; font-size: 36px;">Your Monthly Health Overview</h3>
            <p class="desc">Discover trends, track your progress, and set smarter health goals for the <br> future.</p>
        </div>

        <div class="row mt-5 gx-4 gy-4">
            <!-- Achievements Completion Card -->
            <div class="col-md-6">
                <div class="health-card flex-column">
                    <img src="images/Trophy.png" alt="achievement-icon" class="achievement-icon">
                    <div>
                        <p class="mb-0" style="font-size: 36px; font-weight: bold;">Achievements</p>
                        <p class="achievement-percentage mb-0">{{ $achievementPercentage }}%</p>
                    </div>
                </div>
            </div>

            <!-- Metrics -->
            <div class="col-md-6">
                <div class="row">
                    <div class="col-6">
                        <div class="metric-card" id="metric-1" style="width: auto;">
                            <p class="metric-title mb-1" id="metric-1-title">Hydration Trends</p>
                            <p class="metric-desc" id="metric-1-content"><span class="metric-point">{{$daysReported}}</span> out of <span class="metric-point">{{$totaldaysinmonth}} days,</span> with an average daily take of<br><span class="metric-point">{{($totalHydrationProgress*300)/1000}} liters</span></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="metric-card" id="metric-2" style="width: auto;">
                            <p class="metric-title mb-1" id="metric-2-title">Total Steps</p>
                            <p class="metric-value" id="metric-2-content">{{ $totalStepCount }} <span class="metric-unit">steps</span></p>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="metric-card" id="metric-3" style="width: 100%;">
                            <p class="metric-title mb-1" id="metric-3-title">Calories Burned</p>
                            <p class="metric-desc" id="metric-3-content">Burned a total of <span class="metric-point">{{ $totalCalorieBurned }}</span> calories, averaging <span class="metric-point">{{ $totalCalorieBurned / $daysReported }}</span> calories <span class="metric-point">per day.</span> Your most active day burned <span class="metric-point">{{$max_step}}</span> calories.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Arrow (Image) -->
        <img src="images/arrow-1.png" id="arrow-btn" class="arrow-btn" alt="Next">
    </div>
    <script src="{{ asset('js/monthlyhealthreport.js') }}"></script>

</body>
</html>
