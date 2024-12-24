<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthWiseAI</title>
    <link rel="icon" href="images/Healthwise_logo.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/dailyhealthreport.css">
</head>
<body>
    <header class="d-flex justify-content-between align-items-center p-4">
        <div class="logo">
            <img src="images/Healthwise_logo.png" alt="logo">
            HealthWiseAI
        </div>
    </header>

    <div class="container mt-5">
        <div class="text-center mb-4">
            <h3 class="fw-bold" style="color: #5D5A88; font-size: 36px;">Your Daily Health Snapshot</h3>
            <p class="desc">Stay on top of your health with real-time insights and personalized <br>recommendations</p>
        </div>
        <div class="row align-items-center">
            <!-- Goal Completion Card -->
            <div class="col-md-6">
                <div class="health-card flex-column">
                    <img src="images/target.png" alt="goal-icon" class="goal-icon">
                    <div>
                        <p class="mb-0" style="font-size: 36px; font-weight: bold;">Goal Completion</p>
                        <p class="goal-percentage mb-0">{{ $goalCompletion }}%</p>
                    </div>
                </div>
            </div>

            <!-- Metrics -->
            <div class="col-md-6">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="metric-card">
                            <p class="metric-title mb-1">Sleep Duration</p>
                            <p class="metric-value">{{ $sleepDuration }} Hours</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="metric-card">
                            <p class="metric-title mb-1">Calorie Burn Progress</p>
                            <p class="metric-value">{{ $calorieBurned }} kkal</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="metric-card">
                            <p class="metric-title mb-1">Hydration Progress</p>
                            <p class="metric-value">{{ $hydrationProgress }} ML</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="metric-card">
                            <p class="metric-title mb-1">Step Count</p>
                            <p class="metric-value">{{ $stepCount }} steps</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
