<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food and Exercise Recommendations</title>
    <!-- Add your CSS or Bootstrap link here -->
</head>

<body>

    <div class="container">
        <h1>Recommendations</h1>

        <div class="food-recommendation">
            <h2>Food Recommendation:</h2>
            <p>{{ $foodrecom }}</p>
        </div>

        <!-- Display Exercise Recommendation -->
        <div class="exercise-recommendation">
            <h2>Exercise Recommendation:</h2>
            <p>{{ $exerrecom }}</p>
        </div>
    </div>

    <a href="/input-personal">
        <button>Input Health Data For Next Day</button>
    </a>
</body>

</html>
